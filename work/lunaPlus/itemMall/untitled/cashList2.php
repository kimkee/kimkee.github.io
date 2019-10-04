<%        
dim menuTop        
menuTop=8
%>
<?php include("../_include/_head.php"); ?>
<%
If Login_ID = "" Then
	Response.Write "<script>not_login('"& Request.ServerVariables("PATH_INFO") &"?"&Request.ServerVariables("QUERY_STRING")&"');</script>"
	Response.END
End If
%>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/itemMall/images/subTit01.png" alt="아이템몰" class="png24" /></div>
						<div class="location">Home &gt; 아이템몰 </div>
					</div>
					<div class="ctnBox itemMall">
						<?php include("../itemMall/itBoardTop.php"); ?>
						
						<div class="itemTab">
							<ul>
								<li><a href="/work/lunaPlus/itemMall/cashList1.php">충전내역</a></li>
								<li class="on"><a href="/work/lunaPlus/itemMall/cashList2.php">사용내역</a></li>
							</ul>
						</div>
<script language="javascript">
<!--
function go_year(val){
	location.href="<%=PATH_INFO%>?check_year="+val;
}
function go_src(){	
	var frm = document.frm1;

	frm.action = "<%=PATH_INFO%>";
	frm.submit();
}
//-->
</script>
<%
check_year = Request("check_year")
now_year = Request.Form("now_year")
now_month = Request.Form("now_month")

If check_year = "" Then
	check_year = Year(Now())
End If 

If Request("yyyymmdd_s")="" Or Request("yyyymmdd_e")="" then
	If now_year="" Or now_month="" Then
		now_year = Year(Now())
		now_month = Month(Now())
		now_day = Day(Now())

		If CInt(now_month) < 10 Then
			mmonth = "0"&now_month
		Else 
			mmonth = now_month
		End If

		If CInt(now_day) < 10 Then
			dday = "0"&now_day
		Else
			dday = now_day
		End If

		yyyymmdd_s = "20090901"
		yyyymmdd_e = now_year & mmonth & dday
	Else
		If CInt(now_month) < 10 Then
			mmonth = "0"&now_month
		Else 
			mmonth = now_month
		End If

		now_year = Year(Now())
		yyyymmdd_s = now_year & mmonth & "01"
		yyyymmdd_e = now_year & mmonth & "31"
	End If
Else
	If now_year="" Or now_month="" Then
		now_year = Year(Now())
		now_month = Month(Now())
	Else
		If CInt(now_month) < 10 Then
			now_month = "0"&now_month
		End If
	End If 
	yyyymmdd_s = Request("yyyymmdd_s")
	yyyymmdd_e = Request("yyyymmdd_e")
End if
%>												
						<form name="frm1" method="post">
						<input type="hidden" name="check_year" value="<%=check_year%>" />
						<div class="itBbsHead aRight"> 월간보기 
							<select style="width:60px;" name="now_year" onchange="go_year(this.value);">
							<%
								For sel_year=2009 To now_year
							%>
								<option value="<%=sel_year%>" <%If CInt(sel_year)=CInt(check_year) Then%>selected<%End If%>><%=sel_year%></option>
							<%
								Next
							%>
							</select> 
							<select style="width:40px;" name="now_month">
							<%
								If CInt(check_year) <= 2009 Then
									sel_i = 9
								Else
									sel_i = 1
								End If 
								For sel_month=sel_i To 12
							%>
								<option value="<%=sel_month%>" <%If CInt(sel_month)=CInt(now_month) Then%>selected<%End If%>><%=sel_month%></option>
							<%
								Next
							%>
							</select> 
							<a href="javascript:go_src();"><img src="/work/lunaPlus/itemMall/images/btnSch.gif" alt="검색" /></a>
						</div>
						</form>						
						<table border="1" cellspacing="0" class="itBbsList">
							<tr>
								<th>사용 서비스</th>
								<th>사용상품</th>
								<th>사용캐시</th>
								<th>구매타입</th>
								<th>처리상황</th>
								<th>사용일</th>
							</tr>
<%
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

url ="http://218.234.20.212:8000/ANSI_API/API_BP_BUYHIST_SEARCH_VER3.php?cnt_for_view="&pgsize&"&no_page="&page&"&no_user="&Enpang_Idx&""
url = url & "&id_user="&Login_ID&"&cd_company=EYAH&yyyymmdd_s="&yyyymmdd_s&"&yyyymmdd_e="&yyyymmdd_e&"&status=TTTT&no_contents=0"

Set oDOM = Server.CreateObject("Microsoft.XMLDOM")
with oDOM
	.async = False
	.setProperty "ServerHTTPRequest", True
	.Load(url)

end with
Set myRec = oDOM.documentElement

Set Nodes = myRec.selectNodes("//Data")

memDBConnect()
If myRec.selectSingleNode("//root/Return_Code").Text = "0000" Then

	TOT_COUNT = myRec.selectSingleNode("//root/Data/TOT_COUNT ").Text

	 For i=0 To Nodes.length-1
		TXT_BXAID = Nodes(i).selectSingleNode("TXT_BXAID").Text

		sql = "select [Type] from dbo.EM_Shop_Log where BillCode = '"&TXT_BXAID&"'"
		Set TRs = memDB.Execute(sql)

		If Not(TRs.EOF) then
		shop_type = TRs("Type")
		select case shop_type
			case "101"
				type_name = "구매"
			case "102"
				type_name = "선물"
		end Select
		Else
			type_name = "-"
		End If
		
		NM_CONTENTS = Nodes(i).selectSingleNode("NM_CONTENTS").Text
		NM_ITEM = Nodes(i).selectSingleNode("NM_ITEM").Text
		AMT_PAY = Nodes(i).selectSingleNode("AMT_PAY").Text
		NM_ACPT_RESULT = Nodes(i).selectSingleNode("NM_ACPT_RESULT").Text
		DT_DATE = Nodes(i).selectSingleNode("DT_DATE").Text
		TM_TIME = Nodes(i).selectSingleNode("TM_TIME").Text

		DT_DATE_Year = left(DT_DATE,4)
		DT_DATE_Monteh = Mid(DT_DATE,5,2)
		DT_DATE_Day = Right(DT_DATE,2)
		DT_DATE_Hour = Left(TM_TIME,2)
		DT_DATE_minute = Mid(TM_TIME,3,2)
		DT_DATE = DT_DATE_Year &"."& DT_DATE_Monteh &"."& DT_DATE_Day &" "& DT_DATE_Hour &":"& DT_DATE_minute
%>
							<tr>
								<td><%=NM_CONTENTS%></td>
								<td><%=NM_ITEM%></td>
								<td><%=FormatNumber(AMT_PAY,0)%> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><%=type_name%></td>
								<td><span class="tGray"><%=NM_ACPT_RESULT%></span></td>
								<td><%=DT_DATE%></td>
							</tr>
<%
	Next
End If
memDBClose()
Set Nodes = Nothing
Set myRec = nothing
Set oDOM = Nothing

TotalCount = TOT_COUNT

pgcount = int(TotalCount/pgsize)
if pgcount*pgsize <> TotalCount then
	 pgcount = pgcount+1
end If
%>							
						</table>

						<div class="paginate"> 
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=1&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>&check_year=<%=check_year%>" class="pre_end"><img src="/work/lunaPlus/itemMall/images/btnPrevEnd.gif" alt="처음" /></a> 

							<% If startpage = 1 Then %>
								<img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" />
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%= startpage-setsize%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>&check_year=<%=check_year%>" class="pre"><img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" /></a> 
							<% End If %>	

							<%
								For i=startpage To setsize+startpage -1
									If i > pgcount Then
										Exit For 
									End If 

									If CInt(page) = CInt(i) Then 
							%>
							<strong><%=i%></strong>
							<%
									Else 
							%>
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=i%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>&check_year=<%=check_year%>"><%=i%></a>
							<%
									End If 
									Next
							%>

							<% If pgcount < setsize Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% ElseIf i>pgcount Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=startpage+setsize%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>&check_year=<%=check_year%>" class="next"><img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /></a> 
							<% End If %>
														
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=pgcount%>&yyyymmdd_s=<%=yyyymmdd_s%>&yyyymmdd_e=<%=yyyymmdd_e%>&check_year=<%=check_year%>" class="next_end"><img src="/work/lunaPlus/itemMall/images/btnNextEnd.gif" alt="끝" /></a> 
						</div>
						
						
					</div>
<?php include("../_include/_foot.php"); ?>
