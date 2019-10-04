<?php include("../_lib/includeFiles.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<%
'============================================ 엔팡 캐쉬 조회 ======================================================
Login_ID ="skanthskan"
Enpang_Idx=150766

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
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_etc").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
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

'========================================== //엔팡 캐쉬 조회 ====================================================
%>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="imagetoolbar" content="no" />
<?php include("../_include/title.php"); ?>
<link rel="icon" href="/work/lunaPlus/images/main/fav.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/work/lunaPlus/images/main/fav.ico" type="image/x-icon" />
<link rel="icon" href="/work/lunaPlus/images/main/fav.gif" type="image/gif" />
<link href="/work/lunaPlus/_css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/work/lunaPlus/_js/common.js"></script>
<script type="text/javascript" src="/work/lunaPlus/_js/default.js"></script>
<script type="text/javascript">
function bill_pop(URL){
	x = (document.body.scrollWidth ) / 3;
	//y = (document.body.scrollHeight) / 6;
	
	window.open(URL,'billPop','width=540,height=700,left='+x+',top=200');
}
</script>
</head>
<body>
	<div id="login_box" style="width:200px; height:150px; border:2px solid #efefef;">
		<div id="UName" style="width:195px; height:30px; background:#C1D2C2; padding:10px 2px 0 3px;"><b><%=Login_ID%><b> 님</div>
		<div id="cash_info" style="padding-top:10px;">
			<ul>
				<li>보유캐시 <%=formatnumber(Total_account,0)%> <s>N</s></li>
				<li>I-Point 0 <s>P</s></li>
				<li>보유쿠폰 0장</li>
			</ul>
		</div>
		<div style="padding-top:10px;"><input type="button" value="캐시 충전하기" onclick="bill_pop('http://cs.enpang.com/popUpBill/cashAgreeCheck.php');" style="cursor:pointer; border:2px solid #efefef; width:120px; height:30px;" /></div>
	</div><br><br>
<%
Set Nodes = Nothing
Set myRec = Nothing
Set oDOM = Nothing
%>	
	<table border="1" width="560px;" cellspacing="0">
		<tr height="30">
			<td colspan="2" align="center"><a href="cash_test.php">충전내역</a></td>
			<td colspan="3" align="center"><a href="cash_test2.php">사용내역</a></td>
		</tr>
		<tr height="30">
			<td colspan="5" align="center"><b>사용내역</b></td>
		</tr>
		<tr height="27">
			<th>사용서비스</th>
			<th>사용상품</th>
			<th>사용캐시</th>
			<th>처리상태</th>
			<th>사용일</th>
		</tr>		
<%
yyear = request.Form("yyear")      '년
mmonth = request.Form("mmonth")      '월

If yyear = "" Or mmonth = "" Then		
	yyear = Year(Now())
	mmonth = Month(Now())
	dday = Day(Now())

	If CInt(mmonth) < 10 Then
		mmonth = "0"&mmonth
	End If
	If CInt(dday) < 10 Then
		dday = "0"&dday
	End If

	yyyymmdd_s = "20091101"
	yyyymmdd_e = yyear & mmonth & dday
Else 
	If CInt(mmonth) < 10 Then
		mmonth = "0"&mmonth
	End If

	yyyymmdd_s = yyear & mmonth & "01"
	yyyymmdd_e = yyear & mmonth & "31"
End If


pgsize=10 '한페이지당 레코드 수
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


'url = "http://218.234.20.212:8000/ansi_api/API_BP_BUYHIST_SEARCH_VER3.php?cnt_for_view="&pgsize&"&no_page="&page&"&no_user="&Enpang_Idx&""
'url = url & "&id_user="&Login_ID&"&cd_company=EYAH&yyyymmdd_s="&yyyymmdd_s&"&yyyymmdd_e="&yyyymmdd_e&"&status=TTTT&no_contents=1"

url = "http://218.234.20.212:8000/ansi_api/API_BP_BUYHIST_SEARCH_VER3.php?cnt_for_view="&pgsize&"&no_page="&page&"&no_user="&Enpang_Idx&""
url = url & "&id_user="&Login_ID&"&cd_company=EYAH&yyyymmdd_s="&yyyymmdd_s&"&yyyymmdd_e="&yyyymmdd_e&"&status=TTTT&no_contents=1"

Set oDOM = Server.CreateObject("Microsoft.XMLDOM")
with oDOM
	.async = False
	.setProperty "ServerHTTPRequest", True
	.Load(url)

end with
Set myRec = oDOM.documentElement

Set Nodes = myRec.selectNodes("//Data")

If myRec.selectSingleNode("//root/Return_Code").Text = "0000" Then

	TOT_COUNT = myRec.selectSingleNode("//root/Data/TOT_COUNT ").Text

	 For i=0 To Nodes.length-1
		NM_CONTENTS = Nodes(i).selectSingleNode("NM_CONTENTS").Text
		NM_GOOD = Nodes(i).selectSingleNode("NM_GOOD").Text
		AMT_PAY = Nodes(i).selectSingleNode("AMT_PAY").Text
		NM_ACPT_RESULT = Nodes(i).selectSingleNode("NM_ACPT_RESULT").Text
		DT_DATE = Nodes(i).selectSingleNode("DT_DATE").Text
		TM_TIME = Nodes(i).selectSingleNode("TM_TIME").Text


		if Len(DT_DATE) = 6 then
			DT_DATE_Year = left(DT_DATE,4)
			DT_DATE_Monteh = Right(DT_DATE,2)
			DT_DATE_Day = ""
		else
			DT_DATE_Year = left(DT_DATE,4)
			DT_DATE_Monteh = Mid(DT_DATE,5,2)
			DT_DATE_Day = "." & Right(DT_DATE,2)
		end if 
		DT_DATE = DT_DATE_Year &"."& DT_DATE_Monteh & DT_DATE_Day
%>
		<tr height="24">
			<td style="text-align:center;"><%=NM_CONTENTS%></td>
			<td style="text-align:center;"><%=NM_GOOD%></td>
			<td style="text-align:right;padding-right:3px;"><%=FormatNumber(AMT_PAY,0)%> <s>N</s></td>
			<td style="text-align:center;"><%=NM_ACPT_RESULT%></td>
			<td style="text-align:center;"><%=DT_DATE%></td>
		</tr>
<%
	Next
End If
Set Nodes = Nothing
Set myRec = nothing
Set oDOM = Nothing

TotalCount = TOT_COUNT

pgcount = int(TotalCount/pgsize)
if pgcount*pgsize <> TotalCount then
	 pgcount = pgcount+1
end If
%>
		<tr height="28">
			<td colspan="5" style="text-align:center;">
				<% If startpage = 1 Then %>
					◁
				<% Else %>
					<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%= startpage-setsize%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>">◀</a>
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
				<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=i%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>"><%=i%></a>&nbsp;
				<%
						End If 
						Next
				%>

				<% If pgcount < setsize Then %>
					▷
				<% ElseIf i>pgcount Then %>
					▷
				<% Else %>
					<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=startpage+setsize%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>">▶</a>
				<% End If %>
			</td>
		</tr>
	</table>
</body>
</html>