<!--#include virtual="/_lib/includeFiles.php"); ?>

<%
num = Request("num")

brdDBConnect()

SQL = "update Fansite_Info set read_count = read_count + 1 where idx=" & num
brdDB.Execute(SQL)

brdDBClose()
%>
