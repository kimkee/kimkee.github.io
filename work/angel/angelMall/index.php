<?php include("../angelMall/_head.php"); ?>	
<%
memDBConnect()
%>
					<div class="headTit">
						<h3 class="tit"><img src="/work/angel/angelMall/images/subTit01.png" alt="Angel 몰" /></h3>
						<div class="location"><%=HOME%> &gt; <a href="/work/angel/angelMall/">Angel 몰</a></div>
					</div>
					<div class="ctnBox">
						<div class="top"></div>
						<div class="ctn">
							<!-- 컨텐츠시작 -->

							<h3><img src="/work/angel/angelMall/images/topTit01.gif" width="610" height="21" alt="아이템상점" /></h3>
							<div class="topInfo">
<%
				If login_id <> "" Then
				login_id = Trim(login_id)
				'login_id = "gm001"
				
					brdDBConnect()

					Set mdRS = Server.CreateObject("ADODB.RecordSet")
					Set objmd = Server.CreateObject("ADODB.Command")
					With objmd
						.ActiveConnection = brdDB
						.CommandType = adCmdStoredProc
						.CommandText = "dbo.up_Create_MD5"
						.Parameters.Append .CreateParameter("@v3",adVarchar,adParamInput,100,login_id)
						.Parameters.Append .CreateParameter("@re_value",adVarchar,adParamOutput,100)
						mdRS.CursorLocation = adUseClient
						mdRS.Open objmd, ,adOpenStatic, adLockReadOnly
						re_value = .Parameters("@re_value")
						Set mdRS.ActiveConnection = Nothing
						Set objmd.ActiveConnection = Nothing
					End With


					set xml = server.CreateObject("Microsoft.XMLHTTP") 
						xml.open "GET", "http://192.168.10.1/AngelAdmSys/WebApi/API_Checkpoints.phpx?acc="&login_id&"&v3="&re_value, false
						xml.setRequestHeader "Content-Type","text/xml"
						xml.send

						check = xml.responseText
					set xml  = Nothing

					chkcash = check
					chkcash = Split(chkcash,"#")
					cash = chkcash(2)
					'cash = 0

					set xml1 = server.CreateObject("Microsoft.XMLHTTP") 
						xml1.open "GET", "http://192.168.10.1/AngelAdmSys/WebApi/API_GetFreePoints.phpx?acc="&login_id&"&v3="&re_value, false
						xml1.setRequestHeader "Content-Type","text/xml"
						xml1.send

						check1 = xml1.responseText
					set xml1  = Nothing

					chkcash1 = check1
					chkcash1 = Split(chkcash1,"#")
					Bcash= chkcash1(2)

					TotTalant = CLng(cash) + CLng(Bcash)

					
					brdDBClose()

				End If 
			%>
								<div class="dInfo">
									<div class="name"><strong><%=NickName%></strong> 님이 보유한</div>
									<div class="info">달란트 <img src="/work/angel/angelMall/images/icoCoin.gif" alt="" /> <span class="talan"><strong><%=FormatNumber(TotTalant,0)%> <img src="/work/angel/angelMall/images/icoT.gif" alt="T" /></strong></span><a href="/work/angel/angelMall/popTalan.php" onclick="window.open(this.href, 'popupName', 'width=557, height=600, left=50, top=0, statusbar=0, scrollbars=1'); return false;" ><img src="/work/angel/angelMall/images/btnTbuy.gif" alt="달란트구매" /></a></div>
									<div class="txt">(구매 <%=FormatNumber(cash,0)%> + 보너스 <%=FormatNumber(Bcash,0)%>)&nbsp; <a href="/work/angel/angelMall/talanList.php">엔젤계좌관리</a></div>
								</div>
<%
'	'##########  결제 방법 리스트를 얻어와서 결제가 가능한 방법별로 보여주기나 현재 결제할수 없음의 처리를 해볼까? ##########

			 url = "http://billics.enpang.com:8000/api/API_BC_USERINFO_SEARCH.php?userno=" & user_no &"&userid=" & Login_ID &"&companycd=EYAH"

			Set oDOM = Server.CreateObject("Microsoft.XMLDOM")
			with oDOM
				.async = False
				.setProperty "ServerHTTPRequest", True
				.Load(url)

			end with
			Set myRec = oDOM.documentElement

			Set Nodes = myRec.selectNodes("//Data")
			
			Total_account = 0
			
			If myRec.selectSingleNode("//root/Return_Code").Text = "0000" Then
				talent = Nodes(0).selectSingleNode("Amt_contents").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_shop").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_contents").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_bonus").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_etc").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
				Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text

				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_shop").Text)
				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_contents").Text)
				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_bonus").Text)
				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_etc").Text)
				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_mileage_shop").Text)
				'Total_account = Total_account + CINT(Nodes(0).selectSingleNode("Amt_mileage_contents").Text)

				account = Nodes(0).selectSingleNode("Amt_contents").Text

				bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_shop").Text
				'bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_bonus").Text
				'bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_etc").Text
				'bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
				'bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text

				'bonus_account = bonus_account + CINT(Nodes(0).selectSingleNode("Amt_shop").Text)
				'bonus_account = bonus_account + CINT(Nodes(0).selectSingleNode("Amt_bonus").Text)
				'bonus_account = bonus_account + CINT(Nodes(0).selectSingleNode("Amt_etc").Text)
				'bonus_account = bonus_account + CINT(Nodes(0).selectSingleNode("Amt_mileage_shop").Text)
				'bonus_account = bonus_account + CINT(Nodes(0).selectSingleNode("Amt_mileage_contents").Text)

				'bonus_account = bonus_account + CLONG(Nodes(0).selectSingleNode("Amt_shop").Text)
				'bonus_account = bonus_account + CLONG(Nodes(0).selectSingleNode("Amt_bonus").Text)
				'bonus_account = bonus_account + CLONG(Nodes(0).selectSingleNode("Amt_etc").Text)
				'bonus_account = bonus_account + CLONG(Nodes(0).selectSingleNode("Amt_mileage_shop").Text)
				'bonus_account = bonus_account + CLONG(Nodes(0).selectSingleNode("Amt_mileage_contents").Text)
				

			Else
				Total_account = 0
			End If 
			'============= //엔팡 캐쉬 조회 ==================

%>
								<div class="cInfo">
									<div class="name"><strong><%=NickName%></strong> 님이 보유한</div>
									<div class="info">엔팡캐시 <img src="/work/angel/angelMall/images/icoCoin.gif" alt="" /> <span class="talan"><strong><%=FormatNumber(Total_account,0)%> <img src="/work/angel/angelMall/images/icoN.gif" alt="N" /></strong></span><a href="javascript:;" onclick="bill_pop('http://cs.enpang.com/popUpBill/cashAgreeCheck.php');"><img src="/work/angel/angelMall/images/btnCashCharge.gif" alt="캐시충전" /></a></div>
									<div class="txt">(유료 <%=FormatNumber(account,0)%> + 보너스 <%=FormatNumber(bonus_account,0)%>) &nbsp; &nbsp;&nbsp; <a href="http://cs.enpang.com/mypage/myCashList.php">MY계좌관리</a></div>
								</div>
<%
		Set Nodes = Nothing
		Set myRec = nothing
		Set oDOM = Nothing
%>
							</div>
							<div class="newItem b1">
							<div id="listDiv" style="overflow-x:hidden; overflow-y:hidden; width:412px; height:70px;">
<%
randomize
rand_num = Int((3*rnd)+1)
sql = "select item_image,item_name,item_Price,item_count,item_term from dbo.AM_RollBanner_Item where RType="&rand_num&" and deleteYN='N' order by idx asc"
Set newRs = memDB.Execute(sql)

Do Until newRs.EOF
	nitem_image = newRs("item_image")
	nitem_name = newRs("item_name")
	If Len(nitem_name) >= 14 Then
		nitem_name = Left(nitem_name,11)&".."
	End If 
	nitem_price = newRs("item_Price")
	nitem_count = newRs("item_count")
	nitem_term = newRs("item_term")
%>
								<div class="itemBox" style="height:70px;">
									<div class="ico"><img src="/work/angel/savefile/angelMall/item/<%=nitem_image%>" alt="" /></div>
									<div class="val"><!-- <img src="/work/angel/angelMall/images/icoCoin.gif" alt="" /> --><%=FormatNumber(nitem_price,0)%><s style="color:#e95f32;">T</s></div>
									<div class="opt">수량:<%=nitem_count%>개<br />
										기간:<%=nitem_term%></div>
									<div class="clear"></div>
									<div class="name"><%=nitem_name%></div>
								</div>
<%
newRs.MoveNext
Loop
%>								
							</div>
							</div>
							<?php include("../angelMall/mallBanner.php"); ?>	
							<div class="clear"></div>

<%
'page,psize,total_count
pgsize=9 '한페이지당 레코드 수
setsize=10 ' 페이지셋 단위 수

if Request.QueryString("page") = "" then      '넘겨받는 변수는 페이지 값만
	 page = 1
	 startpage = 1
else
	 page = clng(Request("page"))
	 startpage = int(page/setsize)
	 
	 if startpage = (page/setsize) then
		startpage = page-setsize + 1
	 else
		startpage = int(page/setsize)*setsize + 1
	 end if									 
end If

cate1 = Request("cate1") 
cate2 = Request("cate2")


If cate1 = "" Or cate2 = "" Then
	onoff1 = "class='on'"
	strSQL = ""
Else
	Select Case cate1
		Case "1"
			onoff2 = "class='on'"
		Case "2"
			onoff3 = "class='on'"
		Case "3"
			onoff4 = "class='on'"
		Case "4"
			onoff5 = "class='on'"
		Case "5"
			onoff6 = "class='on'"
	End Select 


	If cate1 = "1" Then
		If cate2 = "1" Then
			onoff100 = "class='on'"
		End If 
	ElseIf cate1 = "2" Then
		If cate2 = "1" Then
			onoff101 = "class='on'"
		ElseIf cate2 = "2" Then
			onoff102 = "class='on'"
		ElseIf cate2 = "3" Then
			onoff103 = "class='on'"
		End If 
	ElseIf cate1 = "4" Then
		If cate2 = "1" Then
			onoff104 = "class='on'"
		ElseIf cate2 = "2" Then
			onoff105 = "class='on'"
		ElseIf cate2 = "3" Then
			onoff106 = "class='on'"
		End if
	End If 

	If cate2 = "0" Then
		strSQL = "and cate1="&cate1&""
	Else 
		strSQL = " and cate1="&cate1&" and cate2="&cate2&""
	End If 
End If 



'페이지수 가져오기
sqlList = "set transaction isolation level read uncommitted "
sqlList = sqlList & "Select count(*) as tn "
sqlList = sqlList & "from dbo.AM_Item "
sqlList = sqlList & "where deleteYN = 'N' "&strSQL
Set rsList = memDB.Execute(sqlList)
tn = rsList("tn")
rsList.close
Set rsList = Nothing

pgcount = int(tn/pgsize)
if pgcount*pgsize <> tn then
	 pgcount = pgcount+1
end If



listsql = "select top "&pgsize*page&" * "
listsql = listsql & "from dbo.AM_Item "
listsql = listsql & "where deleteYN = 'N' "&strSQL
listsql = listsql & "order by cate1 asc"
Set dbrec = memDB.Execute(listsql)

if not dbRec.EOF then      '만약 레코드가 1개 이상이면
	 nextpage = clng(page)+1
	 prevpage = clng(page)-1
	 n = tn - (page-1) * pgsize
Else 
	tn = 0
	pgcount = 0
End If 
%>
							<div class="itemWrap">
								<script type="text/javascript">
									function itemCateD2(K) {
										document.getElementById('itemCateDep2_3').style.display='none';
										document.getElementById('itemCateDep2_5').style.display='none';
										document.getElementById('itemCateDep2_6').style.display='none';
										document.getElementById('itemCateDep2_'+K).style.display='block';								
									}
								</script>

								<div class="itemTabMenu">
									<ul>
										<li <%=onoff1%>><a href="index.php">전체보기</a></li>
										<li <%=onoff2%>><a href="index.php?cate1=1&cate2=0" onmouseover="itemCateD2(3);">기능류</a></li>
										<li <%=onoff3%>><a href="index.php?cate1=2&cate2=0" onmouseover="itemCateD2(5);">특수류</a></li>
										<li <%=onoff4%>><a href="index.php?cate1=3&cate2=0">펫류</a></li>
										<li <%=onoff5%>><a href="index.php?cate1=4&cate2=0" onmouseover="itemCateD2(6);">패션</a></li>
										<li <%=onoff6%>><a href="index.php?cate1=5&cate2=0">주택</a></li>
									</ul>
								</div>
								
								<div class="itemTabMenuD2" id="itemCateDep2_3" name="itemCateDep2_3" style="left:70px;">
									<div class="arrow" style="left:50px;"></div>
									<div class="left"></div>
									<ul>
										<li <%=onoff100%>><a href="index.php?cate1=1&cate2=1">일반</a></li>
									</ul>
									<div class="right"></div>
								</div>
								
								<div class="itemTabMenuD2" id="itemCateDep2_5" name="itemCateDep2_5" style="left:132px;">
									<div class="arrow" style="left:45px;"></div>
									<div class="left"></div>
									<ul>
										<li <%=onoff101%>><a href="index.php?cate1=2&cate2=1">일반</a></li>			
										<li <%=onoff102%>><a href="index.php?cate1=2&cate2=2">물약</a></li>	
										<li <%=onoff103%>><a href="index.php?cate1=2&cate2=3">이동</a></li>	
									</ul>
									<div class="right"></div>
								</div>
								
								<div class="itemTabMenuD2" id="itemCateDep2_6" name="itemCateDep2_6" style="left:208px;">
									<div class="arrow" style="left:80px;"></div>
									<div class="left"></div>
									<ul>
										<li <%=onoff104%>><a href="index.php?cate1=4&cate2=1">남성</a></li>
										<li <%=onoff105%>><a href="index.php?cate1=4&cate2=2">여성</a></li>
										<li <%=onoff106%>><a href="index.php?cate1=4&cate2=3">로봇</a></li>
									</ul>
									<div class="right"></div>
								</div>
								
								
								<div class="clear"></div>
								<div class="itemCtn">
<%
For a=1 to (page-1)*pgsize
		dbrec.MoveNext
Next

For i = 1 To pgsize
	If DbRec.EOF Then
		Exit For 
	End If 

	item_name = DbRec("item_name")
	If Len(item_name) > 15 Then
		item_name = Left(item_name,15)&".."
	End If 
	item_image = DbRec("item_image")
	If item_image = "준비중" Then
		item_image = "preparation.jpg"
	End If 
	item_price = DbRec("item_price")
	item_count = DbRec("item_count")
	item_term = DbRec("item_term")
	item_Weight = DbRec("item_Weight")
	item_content = DbRec("content")
%>
									<div class="itemBox">
										<div class="name"><%=item_name%></div>
										<div class="ico"><img src="/work/angel/savefile/angelMall/item/<%=item_image%>" alt=""/></div>
										<ul class="opt">
											<li>가격: <!-- <img src="/work/angel/angelMall/images/icoCoin.gif" alt="" /> --> <strong><%=FormatNumber(item_price,0)%><s style="color:#e95f32;">T</s></strong></li>
											<li>수량: <%=item_count%>개</li>
											<li>기간: <%=item_term%></li>
											<li>무게: <%=item_Weight%></li>
										</ul>
										<div class="info"><textarea name="" cols="" rows="" width="145" height="75"><%=item_content%></textarea></div>
									</div>
<%
n = n - 1
DbRec.MoveNext
Next
%>										
									<div class="clear"></div>
									<div class="paginate">
									<% If startpage = 1 Then %>
									<img src="/work/angel/images/board/pPrev.gif" alt="이전" width="9" height="9" />
									<% Else %>
									<a href="index.php?page=<%= startpage-setsize%>&cate1=<%=cate1%>&cate2=<%=cate2%>" class="pre"><img src="/work/angel/images/board/pPrev.gif" alt="이전" width="9" height="9" /></a>
									<% End If %>

									<%
										For i=startpage To setsize+startpage -1
											If i > pgcount Then
												Exit For 
											End If 

											If CInt(page) = CInt(i) Then 
									%>
									<strong><%=i%></strong>&nbsp;
									<%
											Else 
									%>
									<a href="index.php?page=<%=i%>&cate1=<%=cate1%>&cate2=<%=cate2%>"><%=i%></a>&nbsp;
									<%
											End If 
											Next
									%>

									<% If pgcount < setsize Then %>
									<img src="/work/angel/images/board/pNext.gif" alt="다음" width="9" height="9" /> 
									<% ElseIf i>pgcount Then %>
									<img src="/work/angel/images/board/pNext.gif" alt="다음" width="9" height="9" /> 
									<% Else %>
									<a href="#" class="next"><img src="/work/angel/images/board/pNext.gif" alt="다음" width="9" height="9" /></a> 
									<% End If %>
									</div>
								</div>
								<div class="itemBot"></div>
							</div>
							<!-- 컨텐츠끝 //-->
						</div>
						<div class="bot"></div>
					</div>
					<?php include("../angelMall/_foot.php"); ?>	
<%
memDBClose()
%>
<%
If cate1 = "1" or cate1 = "2"or cate1 = "4" Then
	If cate1 = "1" Then
		CateD2 = 3
	ElseIf cate1 = "2" Then
		CateD2 = 5
	ElseIf cate1 = "4" Then
		CateD2 = 6
	End If 
%>
<script>
itemCateD2(<%=CateD2%>);
</script>
<%
End If
%>
<script language="javascript"> 
var listDiv = document.getElementById("listDiv");
var total_listroll = 2+1;
var listroll_count = 0 ; 
var set_roll = 0;
function list_rolling(){
 
	if (set_roll == 70)
	{
			set_roll = 0 ; 
			total_listroll 
			//alert(listroll_count);
			stop_roll();
			if (listroll_count == total_listroll)
			{
				listDiv.scrollTop="0";
				listroll_count = 0 ;
				set_roll = 0;
				rollY = 0;
				return;
				
			}
			return;
			}else{
			var rollY = listDiv.scrollTop;
			//alert(rollY);
			listDiv.scrollTop = rollY + 1 ;
			set_roll += 1;
			return;
	}
}
function stop_roll(){
		
		clearInterval(roll_obj);
		listroll_count = listroll_count + 1
		setTimeout("start_roll();",2000);
		return;
 
}
function start_roll()
{
	roll_obj=window.setInterval("list_rolling();",15);
	return;
}
 
setTimeout("start_roll();",2000);
 
 
</script>