<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<%
Response.CharSet = "euc-kr"
%>
<?php include("../_lib/includeFiles.php"); ?>
<%
ServerN = request("ServerN")
if ServerN = "" then
	ServerN = "1"
end if 

if ServerN <> "" then
memDBConnect()
%>
    <div id="serv_n" style="display:block;">
        <select id="ServerNo" name="ServerNo" onChange="category_change1('/itemMall/character_xml.php', 'serv_n', '');">
            <option value="">서버선택</option>
            <option value="1" <% if ServerN = 1 then %>selected<% end if %>>가이아</option>
            <option value="2" <% if ServerN = 2 then %>selected<% end if %>>크로노스</option>
        </select>
<%
	Set rs = Server.CreateObject("ADODB.RecordSet")
	Set objRs = Server.CreateObject("ADODB.Command")
	With objRs
		.ActiveConnection = memDB
		.CommandType = adCmdStoredProc
		.CommandText = "ES_151.EDDA_MID.dbo.WEB_USER_CHARACTER_LIST"
		.Parameters.Append .CreateParameter("@serverNo",adInteger,adParamInput,4,ServerN)
		.Parameters.Append .CreateParameter("@UserIdx",adInteger,adParamInput,4,0)
		.Parameters.Append .CreateParameter("@Login_ID",adVarchar,adParamInput,20,login_id)
		.Parameters.Append .CreateParameter("@sKind",adInteger,adParamInput,4,0)
		rs.CursorLocation = adUseClient
		rs.Open objRs, ,adOpenStatic, adLockReadOnly
		Set rs.ActiveConnection = Nothing
		Set objRs.ActiveConnection = Nothing
	End With
%>
		<select id="CharacterName" name="CharacterName">
<%
	Do until rs.EOF
		chrNo = rs("idx")
		name = rs("Name")
%>
			<option value="<%=chrNo%>"><%=name%></option>
<%
	  rs.MoveNext
   Loop
   Set rs = Nothing
%>
        </select>
	</div>
<%
memDBClose()
else
%>
      <div id="serv_n" style="display:block;">
          <select id="ServerNo" name="ServerNo" onchange="category_change1('/itemMall/character_xml.php', 'serv_n', '');">
              <option value="">서버선택</option>
              <option value="1" <% if ServerN = 1 then %>selected<% end if %>>가이아</option>
              <option value="2" <% if ServerN = 2 then %>selected<% end if %>>크로노스</option>
          </select>
          <select id="CharacterName" name="CharacterName">
              <option value="">캐릭터선택</option>
          </select>
      </div>
<%
end if 
%>