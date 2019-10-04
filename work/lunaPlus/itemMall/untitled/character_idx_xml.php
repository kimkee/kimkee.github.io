<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<%
Response.CharSet = "euc-kr"
%>
<?php include("../_lib/db_connection.php"); ?>
<%
ServerN = request("ServerN")
if ServerN = "" then
	ServerN = "1"
end if 
cName = request("cName")

if ServerN <> "" then
memDBConnect()

	Set rs = Server.CreateObject("ADODB.RecordSet")
	Set objRs = Server.CreateObject("ADODB.Command")
	With objRs
		.ActiveConnection = memDB
		.CommandType = adCmdStoredProc
		.CommandText = "eS_151.EDDA_MID.dbo.WEB_CHRINFO_BYChrName"
		.Parameters.Append .CreateParameter("@server",adInteger,adParamInput,4,ServerN)
		.Parameters.Append .CreateParameter("@cName",adVarchar,adParamInput,40,cName)
		rs.CursorLocation = adUseClient
		rs.Open objRs, ,adOpenStatic, adLockReadOnly
		Set rs.ActiveConnection = Nothing
		Set objRs.ActiveConnection = Nothing
	End With

	if not rs.eof then
		response.write rs("Idx")
	else
		response.write "0"
	end if

memDBClose()
else
response.write "0"
end if
response.end
%>
