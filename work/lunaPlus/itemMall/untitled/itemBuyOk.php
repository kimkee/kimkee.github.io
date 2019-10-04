<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<%
Response.CharSet = "utf-8"
Response.AddHeader "Pragma","no-cache"
Response.AddHeader "Expires","0"
%>
<?php include("../_lib/includeFiles.php"); ?>
<%

	if Login_Id = "" then
		response.write "2"	'--로그인 안됨
		response.End
	end if
	
	otype = request("otype")
	sidx = request("sidx")
	itemcount = request("itemcount")
	itemcupon = request("itemcupon")
	ServerNo = request("ServerNo")
	CharacterName = request("CharacterName")
	if CharacterName = "" then
		response.write "3"	'--캐릭터 없음
		response.End
	end if
	in_ServerNo = request("in_ServerNo")
	in_CharacterIdx = request("in_CharacterIdx")
	msg = request("msg")

	if len(msg) > 50 then
		msg = left(msg,50)
	end if
	
	if otype = "1" then
		buy_type = 101	'--구입
		in_ServerNo = ServerNo
		in_CharacterIdx = CharacterName
	elseif otype = "2" then
		buy_type = 102	'--선물
	end if


	memDBConnect()
	Set objCmd = Server.CreateObject("ADODB.Command")
	Set Rs = Server.CreateObject("ADODB.Recordset")
	With objCmd
	   .ActiveConnection = memDB
	   .CommandType = adCmdStoredProc
	   .CommandText = "dbo.EM_Shop_Item_View_Proc"
	   .Parameters.Append .CreateParameter("@sidx",adInteger,adParamInput,0,sidx)	 'idx 번호
		Rs.CursorLocation = adUseClient
		set Rs = .execute()
	Set objCmd.ActiveConnection = Nothing
	End With   
	
	if not Rs.eof then
	
		P_Cate = Rs("P_Cate")
		P_Price = Rs("P_Price")
		P_Name = Rs("P_Name")
		P_SaleRate = Rs("P_SaleRate")
		P_CuponYN = Rs("P_CuponYN")
		P_User_Limited = Rs("P_User_Limited")
		P_Limited = Rs("P_Limited")
		P_Sell = Rs("P_Sell")
		
		sql = " select cateName from dbo.EM_Category with(nolock) where idx = "& P_Cate
		set Rcate = memDB.execute(sql)
		if not Rcate.eof then
			cateName = Rcate("cateName")
		else
			cateName = P_Cate
		end if
		set Rcate = nothing
		
	else
		set Rs = nothing
		memDBClose()
		response.write "4"	'--상품없음
		response.end
	
	end if 
	set Rs = nothing

'============================================ 엔팡 캐쉬 조회 ======================================================
url = "http://218.234.20.212:8000/api/API_BC_USERINFO_SEARCH.php?userno=" & Enpang_Idx &"&userid=" & Login_ID &"&companycd=EYAH"

Set oDOM = Server.CreateObject("Microsoft.XMLDOM")
with oDOM
	.async = False
	.setProperty "ServerHTTPRequest", True
	.Load(url)

end with
Set myRec = oDOM.documentElement

Set Nodes = myRec.selectNodes("//Data")
			

If myRec.selectSingleNode("//root/Return_Code").Text = "0000" Then

	Total_account = 0
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_shop").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_contents").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_bonus").Text
	'Total_account = Total_account + Nodes(0).selectSingleNode("Amt_etc").Text
	'Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text


	account = Nodes(0).selectSingleNode("Amt_contents").Text


	bonus_account  = 0	
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_shop").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_bonus").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_etc").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text			

Else
	Total_account = 0
End If 
'	Total_account = 100000
'========================================== //구매수 , 가격 조회 ====================================================

	sql = " exec EM_Shop_Item_Buy_count "& sidx &",'"& Login_Id &"' "	'--구매 가능 개수 조회
	set rs = memDB.execute(sql)
	if not rs.eof then
		ok_count = rs(0)	'구매가능 개수
	else
		ok_count = 0
	end if
	set rs = nothing
	if cint(ok_count) < cint(itemcount) then
		memDBClose()
		response.write "5"	'--구매수 재한
		response.End
	end if 

	totalprice = 0
	one_price = P_Price - round(((P_Price * P_SaleRate)/100),1)		'개별 가격
	totalprice = cint(one_price) * cint(itemcount)								'총 구매가격
	if Total_account < totalprice then
		memDBClose()
		response.write "6"	'--캐시 안됨
		response.end
	end if



'========================================== //상품 주문 번호 생성 ====================================================

	'결제 고유 번호 난수 발생
	function Tradeid()
	chr_array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9")
	Randomize
	k=0
	c_chr=""
	for i = 0 to 7
	k = int(Rnd * 36)
		'임의 문자 넣기.
		c_chr  = c_chr & chr_array(k)
	Next
	sDate = FormatDateTime(now(), 2)
	sTime = FormatDateTime(now(), 4)
	sSec = Right(sData, 2)
	GetTime = Replace(sDate,"-","") & Replace(sTime,":","")
	Tradeid = trim(GetTime&c_chr)
	end function
	Tradeid()
	trade_code = Tradeid


'========================================== //결재 - 캐시 차감 ====================================================

	ip = Request.ServerVariables("REMOTE_ADDR")
	user_no = cstr(Enpang_Idx)
	user_id = cstr(Login_ID)
	cc 	= "EYAH"
	nick 	= Login_Name
	user_ip = cstr(ip)
	good_no = 11
	pay_amt = totalprice
	agency_no = trade_code
	etc2 = cstr(sidx)
	etc3 = cstr(P_Name)
	etc4 = cstr(cateName)
	
	'If sidx = "45" or sidx = "49" or sidx = "50" or sidx = "51" or sidx = "52" Then
	'	retcode = "0000"
	'	bxaid = trade_code
	'else
	
	'response.write user_no &"/"& user_id &"/"& cc &"/"& nick &"/"& user_ip &"/"& good_no &"/"& cint(totalprice) &"/"& agency_no &"/"& etc2 &"/"& etc3 &"/"& etc4
	'response.end
	Set com = CreateObject("BxIPGClient.IPGClient.1")
	retcode = com.Output(user_no, user_id, cc, nick, user_ip, good_no, cint(totalprice), agency_no, etc2, etc3, etc4, bxaid)
	
	'End If

	if retcode <> "0000" then
	'애러 로그 넣기
	Set objCmd = Server.CreateObject("ADODB.Command")
	With objCmd
	   .ActiveConnection = memDB
	   .CommandText = "dbo.EM_Shop_Error_Insert_Proc"
	   .CommandType = adCmdStoredProc
	   .Parameters.Append .CreateParameter("@type",adInteger,adParamInput,0,402)	'캐시 지급 실패
	   .Parameters.Append .CreateParameter("@trade_code",adVarchar,adParamInput,100,trade_code)	 '주문 번호
	   .Parameters.Append .CreateParameter("@bill_code",adVarchar,adParamInput,100,"error")	 '결재 번호
	   .Parameters.Append .CreateParameter("@login_id",adVarchar,adParamInput,20,Login_Id)	'아이디
	   .Parameters.Append .CreateParameter("@server",adInteger,adParamInput,0,ServerNo)	'서버
	   .Parameters.Append .CreateParameter("@character_idx",adInteger,adParamInput,0,CharacterName)	'캐릭터 인덱스
	   .Parameters.Append .CreateParameter("@p_cate",adInteger,adParamInput,0,P_Cate)	'상품 카테고리
	   .Parameters.Append .CreateParameter("@p_idx",adInteger,adParamInput,0,sidx)	'상품번호
	   .Parameters.Append .CreateParameter("@defaultprice",adInteger,adParamInput,0,one_price)	'개당 기본 가격
	   .Parameters.Append .CreateParameter("@price",adInteger,adParamInput,0,totalprice)	'전체 구입 가격
	   .Parameters.Append .CreateParameter("@cash",adInteger,adParamInput,0,Total_account)	'보유 캐시
	   .Parameters.Append .CreateParameter("@count",adInteger,adParamInput,0,itemcount)	'구입 개수
	   .Parameters.Append .CreateParameter("@content",adVarchar,adParamInput,2000,retcode)	 ' 
	
	   .Execute , , adExecuteNoRecords
	End with
	Set objCmd = Nothing
	response.write "7"	'--결재실패
	response.end
	
	end if

'========================================== //아이템 지급 ====================================================

	if otype = "2" then
		'sql = " exec dbo.Character_Name_By_Idx "& ServerNo &","& CharacterName
		'set cNm = memDB.execute(sql)
		'if not cNm.eof then
		'	ch_name = cNm(0)
		'end if
		'if ServerNo = 1 then
		'	s_Name = "매지션"
		'elseif ServerNo = 2 then
		'	s_Name = "타워"
		'end if 
		title = "선물이 도착했습니다."
		msg = replace(msg,"'","""")
		content = msg '"["& s_Name &"] ["& ch_name &"] 님으로부터 캐시 선물이 도착했습니다.\n수령함을 확인바랍니다.\n선물: ["& P_Name &"] ["& itemcount &"] 개\n"& msg
		content = "캐시 선물이 도착했습니다.장바구니를 확인바랍니다."
	else
		title = ""
		content = ""
	end if 

	itemcupon =""

	if sidx = 17 then
		Proc_exe_name = "dbo.EM_Lucky_Item_Insert_Proc"
	else
		Proc_exe_name = "dbo.EM_Item_Insert_Proc"
	end if
	
'	response.write Proc_exe_name &"<br />"
'	response.write buy_type &"<br />"
'	response.write trade_code &"<br />"
'	response.write bxaid &"<br />"
'	response.write Login_Id &"<br />"
'	response.write ServerNo &"<br />"
'	response.write CharacterName &"<br />"
'	response.write in_ServerNo &"<br />"
'	response.write in_CharacterIdx &"<br />"
'	response.write P_Cate &"<br />"
'	response.write sidx &"<br />"
'	response.write Total_account &"<br />"
'	response.write itemcount &"<br />"
'	response.write itemcupon &"<br />"
'	response.write title &"<br />"
'	response.write content &"<br />"
'	response.end
	
	Set objCmd = Server.CreateObject("ADODB.Command")    
	With objCmd
	   .ActiveConnection = memDB      '회원DB
	   .CommandText = Proc_exe_name
	   .CommandType = adCmdStoredProc
	   .Parameters.Append .CreateParameter("@type",adInteger,adParamInput,0,buy_type)	'구입타입
	   .Parameters.Append .CreateParameter("@trade_code",adVarchar,adParamInput,100,trade_code)	 '주문 번호
	   .Parameters.Append .CreateParameter("@bill_code",adVarchar,adParamInput,100,bxaid)	 '결재 번호
	   .Parameters.Append .CreateParameter("@login_id",adVarchar,adParamInput,20,Login_Id)	'아이디
	   .Parameters.Append .CreateParameter("@server",adInteger,adParamInput,0,ServerNo)	'서버
	   .Parameters.Append .CreateParameter("@character_idx",adInteger,adParamInput,0,CharacterName)	'캐릭터 인덱스
	   .Parameters.Append .CreateParameter("@in_server",adInteger,adParamInput,0,in_ServerNo)	'서버
	   .Parameters.Append .CreateParameter("@in_character_idx",adInteger,adParamInput,0,in_CharacterIdx)	'캐릭터 인덱스
	   .Parameters.Append .CreateParameter("@p_cate",adInteger,adParamInput,0,P_Cate)	'상품 카테고리
	   .Parameters.Append .CreateParameter("@p_idx",adInteger,adParamInput,0,sidx)	'상품번호
	   .Parameters.Append .CreateParameter("@cash",adInteger,adParamInput,0,Total_account)	'보유 캐시
	   .Parameters.Append .CreateParameter("@count",adInteger,adParamInput,0,itemcount)	'구입 개수
	   .Parameters.Append .CreateParameter("@cupon",adVarchar,adParamInput,40,itemcupon)	'쿠폰번호
	   .Parameters.Append .CreateParameter("@title",adVarchar,adParamInput,30,title)	 ' 
	   .Parameters.Append .CreateParameter("@content",adVarchar,adParamInput,500,content)	 ' 
	   .Parameters.Append .CreateParameter("@return",adInteger,adParamOutput)
	   .Execute , , adExecuteNoRecords
	   return_v = .Parameters("@return")
	End with
	Set objCmd = Nothing
	
	if return_v = 1 then
		memDBClose()
		response.write trade_code
		response.end
	end if

'========================================== //결재 - 캐시 복구 ====================================================

org_bxaid = bxaid
Set com2 = CreateObject("BxIPGClient.IPGClient.1")
retcode = com2.OutputCancel(user_no, user_id, cc, nick, user_ip, org_bxaid, good_no, agency_no, etc2, etc3, etc4, bxaid)
memDBClose()
response.write return_v
response.end

%>
