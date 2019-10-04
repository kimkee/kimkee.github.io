<%  
dim menuTop        
menuTop=6
%>
<?php include("../_include/_head.php"); ?>

					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/itemMall/images/subTit01.png" alt="아이템몰" class="png24" /></div>
						<div class="location">Home &gt; 아이템몰 </div>
					</div>
<input type="hidden" id="outObj1" name="outObj1" />
<%
ip = trim(request.ServerVariables("REMOTE_ADDR"))
ip = split(ip,".")
ips = ip(0)&ip(1)&ip(2)
If not (ips = "123212194" ) And Not(ips = "122199250") And Not(ips = "122199248") And Not(ips = "22113284") And Not(ips = "21123263")  And Not(ips = "21156252") Then 
	response.redirect "/"
	Response.end
end If

memDBConnect()

pagesize=6 '한페이지당 레코드 수
setsize=10 ' 페이지셋 단위 수

cidx = Request("cidx")
Search = Request("Search")
key = Request("key")

If cidx = "" Then
	cidx = 0
End If 

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

Set objRs = Server.CreateObject("ADODB.RecordSet")
Set objGetData = Server.CreateObject("ADODB.Command")
With objGetdata
   .ActiveConnection = memDB
   .CommandType = adCmdStoredProc
   .CommandText = "dbo.EM_Shop_Item_List_Proc"
   .Parameters.Append .CreateParameter("@cidx",adInteger,adParamInput,0,cidx)	'보드번호
   .Parameters.Append .CreateParameter("@search",adVarchar,adParamInput,20,Search)	 '찾을 필드명
   .Parameters.Append .CreateParameter("@key",adVarchar,adParamInput,80,key)	'찾을 내용
   .Parameters.Append .CreateParameter("@pagesize",adInteger,adParamInput,0,pagesize)	 'page size
   .Parameters.Append .CreateParameter("@page",adInteger,adParamInput,0,page)	 'page 번호
   .Parameters.Append .CreateParameter("@listcount",adInteger,adParamoutput)
   objRs.CursorLocation = adUseClient
   objRs.Open objGetData, ,adOpenStatic, adLockReadOnly
   listcount = .Parameters("@listcount")
   Set objRS.ActiveConnection = Nothing
   Set objGetData.ActiveConnection = Nothing
End With
listcount = 0
pgcount = int(listcount/pagesize)
if pgcount*pagesize <> listcount then
	 pgcount = pgcount+1
end If
%>
					<div class="ctnBox itemMall">
						<%'<?php include("../itemMall/itemTop.php"); ?>
						'<?php include("../itemMall/itemSch.php"); ?>
						'<?php include("../itemMall/itemList.php"); ?>%>
						<div class="paginate"> 
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=1&cidx=<%=cidx%>&Search=<%=Search%>&key=<%=key%>" class="pre_end"><img src="/work/lunaPlus/itemMall/images/btnPrevEnd.gif" alt="처음" /></a> 

							<% If startpage = 1 Then %>
								<img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" />
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%= startpage-setsize%>&cidx=<%=cidx%>&Search=<%=Search%>&key=<%=key%>" class="pre"><img src="/work/lunaPlus/itemMall/images/btnPrev.gif" alt="이전" /></a> 
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
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=i%>&cidx=<%=cidx%>&Search=<%=Search%>&key=<%=key%>"><%=i%></a>
							<%
									End If 
									Next
							%>

							<% If pgcount < setsize Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% ElseIf i>pgcount Then %>
								<img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /> 
							<% Else %>
								<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=startpage+setsize%>&cidx=<%=cidx%>&Search=<%=Search%>&key=<%=key%>" class="next"><img src="/work/lunaPlus/itemMall/images/btnNext.gif" alt="다음" /></a> 
							<% End If %>
														
							<a href="<%=Request.ServerVariables("PATH_INFO")%>?page=<%=pgcount%>&cidx=<%=cidx%>&Search=<%=Search%>&key=<%=key%>" class="next_end"><img src="/work/lunaPlus/itemMall/images/btnNextEnd.gif" alt="끝" /></a> 
						</div>
						
						
					</div>
<?php include("../_include/_foot.php"); ?>
