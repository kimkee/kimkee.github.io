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

PATH_INFO =  Request.ServerVariables("PATH_INFO")
%>
<script language="javascript">
<!--
function go_year(val){
	location.href="<%=PATH_INFO%>?check_year="+val;
}

function go_src(){	
	var frm = document.frm;

	frm.action = "<%=PATH_INFO%>";
	frm.submit();
}
//-->
</script>
<%
memDBConnect()

pagesize=3 '한페이지당 레코드 수
setsize=10 ' 페이지셋 단위 수


page = request("page")
If page = "" Then 
	page = "1"
End If 
if request("startpage")="" then
startpage=1
else  
startpage=request("startpage")
end If

totalpage = Int((listcount-1)/pagesize)+1

now_year = Request.Form("now_year")
now_month = Request.Form("now_month")

If now_year <> "" And now_month <> "" Then
	If Len(now_month) < 10 Then
		now_month = "0" & now_month
	End If 

	If Len(now_month) < 10 Then
		mm = now_month
	End If 
End If 

If now_month = "" Then
	mm = Month(Now())

	If Len(mm) < 10 Then
		mm = "0" & mm
	End If
End If 

Set objRs = Server.CreateObject("ADODB.RecordSet")
Set objGetData = Server.CreateObject("ADODB.Command")
With objGetdata
   .ActiveConnection = memDB
   .CommandType = adCmdStoredProc
   .CommandText = "dbo.EM_Point_Pay_List_Proc"
   .Parameters.Append .CreateParameter("@login_id",adVarchar,adParamInput,30,Login_ID)	'보드번호
   .Parameters.Append .CreateParameter("@yyyy",adVarchar,adParamInput,4,now_year)	 '찾을 필드명
   .Parameters.Append .CreateParameter("@mm",adVarchar,adParamInput,2,now_month)	'찾을 내용
   .Parameters.Append .CreateParameter("@pagesize",adInteger,adParamInput,0,pagesize)	 'page size
   .Parameters.Append .CreateParameter("@page",adInteger,adParamInput,0,page)	 'page 번호
   .Parameters.Append .CreateParameter("@listcount",adInteger,adParamoutput)
   objRs.CursorLocation = adUseClient
   objRs.Open objGetData, ,adOpenStatic, adLockReadOnly
   listcount = .Parameters("@listcount")
   Set objRS.ActiveConnection = Nothing
   Set objGetData.ActiveConnection = Nothing
End With

pgcount = int(listcount/pagesize)
if pgcount*pagesize <> listcount then
	 pgcount = pgcount+1
end If
%>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/itemMall/images/subTit01.png" alt="아이템몰" class="png24" /></div>
						<div class="location">Home &gt; 아이템몰 </div>
					</div>
					<div class="ctnBox itemMall">

						<?php include("../itemMall/itBoardTop.php"); ?>
												
						<div class="itemTab">
							<ul>
								<li class="on"><a href="/work/lunaPlus/itemMall/pointList1.php">지급내역</a></li>
								<!-- <li><a href="/work/lunaPlus/itemMall/pointList2.php">사용내역</a></li> -->
								<li><a href="javascript:alert('coming soon');">사용내역</a></li>
							</ul>
						</div>
						
						<form name="frm" method="post">
						<input type="hidden" name="now_year" value="<%=Year(now)%>" />
						<div class="itBbsHead aRight"> 월간보기 							
							<select style="width:40px;" name="now_month">
							<%
								For sel_month=1 To 12
							%>
								<option value="<%=sel_month%>" <%If CInt(sel_month)=CInt(mm) Then%>selected<%End If%>><%=sel_month%></option>
							<%
								Next
							%>
							</select> 
							<a href="javascript:go_src();"><img src="/work/lunaPlus/itemMall/images/btnSch.gif" alt="검색" /></a>
						</div>
						</form>
						
						<table border="1" cellspacing="0" class="itBbsList">
							<tr>
								<th>포인트종류</th>
								<th>적립내역</th>
								<th>적립포인트</th>
								<th>처리상태</th>
								<th>적립일</th>
							</tr>
<%
If Not(objRs.EOF) Then
	i = 1
	Do Until objRs.EOF
		idx = objRs("idx")
		Ptype = objRs("type")
		Select Case Ptype
			Case "101"
				PtypeName = "아이템구매"
			Case "102"
				PtypeName = "아이템선물"
			Case "201"
				PtypeName = "포인트구매"
			Case "202"
				PtypeName = "포인트선물"
		End Select

		P_Point = objRs("P_Point")
		
		Regdate = objRs("Regdate")
		Regdate_Year = Mid(Regdate,3,2)
		Regdate_Monteh = Mid(Regdate,6,2)
		Regdate_Day = Mid(Regdate,9,2)
		Regdate_Hour = Mid(Regdate,15,1)
		If Len(CInt(Regdate_Hour)) < "10" Then
			Regdate_Hour = "0"&Regdate_Hour
		End If 
		Regdate_minute = Mid(Regdate,17,2)
		Regdate = Regdate_Year &"."& Regdate_Monteh &"."& Regdate_Day &" "& Regdate_Hour &":"& Regdate_minute
%>
							<tr>
								<td>e-Point</td>
								<td><%=PtypeName%></td>
								<td><%=P_Point%> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td><%=Regdate%></td>
							</tr>
<%
	objRs.MoveNext
	i = i + 1
	Loop
End If 
%>							
						</table>
						
						<div class="paginate"> 
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=1&now_year=<%=now_year%>&now_month=<%=mm%>" class="pre_end"><img src="/work/lunaPlus/itemMall/images/btnPrevEnd.gif" alt="처음" /></a> 

							<% If startpage = 1 Then %>
								<img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" />
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%= startpage-setsize%>&now_year=<%=now_year%>&now_month=<%=mm%>" class="pre"><img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" /></a> 
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
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=i%>&now_year=<%=now_year%>&now_month=<%=mm%>"><%=i%></a>
							<%
									End If 
									Next
							%>

							<% If pgcount < setsize Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% ElseIf i>pgcount Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=startpage+setsize%>&now_year=<%=now_year%>&now_month=<%=mm%>" class="next"><img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /></a> 
							<% End If %>
														
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=pgcount%>&now_year=<%=now_year%>&now_month=<%=mm%>" class="next_end"><img src="/work/lunaPlus/itemMall/images/btnNextEnd.gif" alt="끝" /></a> 
						</div>
						
						
						
						
						
					</div>
<?php include("../_include/_foot.php"); ?>
