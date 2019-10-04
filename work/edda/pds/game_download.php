<!--#include virtual="/_lib/includeFiles.php"); ?>

<%
IF Login_ID = "" THEN
	Response.write "<script>alert('로그인 후 이용하세요.');self.close();</script>"
	Response.END
END IF

memDBConnect()

SQL = "insert into Web_DownLoad_LOG (Login_ID, write_IP) values('" & Login_ID & "','" & Request.ServerVariables("REMOTE_ADDR") & "')"
SET Rs = memDB.Execute(SQL)

memDBClose()

'Response.Redirect "http://edda.gscdn.com/edda/1CBT_EDDAClient_09121701.exe"

%>
