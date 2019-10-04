<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<?php include("../_lib/includeFiles.php"); ?>
<%
Response.CharSet = "euc-kr"
%>
<!--
<div class="itemPop p1">
에서 p1 ~ p6 까지가 팝업위치입니다.
 -->
<%
sidx = request("sidx")
num = request("num")
memDBConnect()
Set objCmd = Server.CreateObject("ADODB.Command")
Set objRs1 = Server.CreateObject("ADODB.Recordset")
With objCmd
   .ActiveConnection = memDB
   .CommandType = adCmdStoredProc
   .CommandText = "dbo.LM_Shop_Item_View_Proc"
   .Parameters.Append .CreateParameter("@sidx",adInteger,adParamInput,0,sidx)	 'idx 번호
	objRs1.CursorLocation = adUseClient
	set objRs1 = .execute()
Set objCmd.ActiveConnection = Nothing
End With 


if objRs1("P_Name") = "0" then
	response.write "<script>alert('잘못된 경로입니다.');document.getElementById('itemPop1').style.display='none';</script>"
	response.End
end if 

P_Name = objRs1("P_Name")
P_Content = objRs1("P_Content")
P_UseEffect = "" 'objRs1("P_UseEffect")
set objRs1 = objRs1.NextRecordset

%>
    <div class="itemPop p<%=num%>" id="itemPop1" style="display:block;">
		<div class="arrow"></div>
		<div class="head">
			<div class="tit"><%=P_Name%></div>
			<div class="btn"><a href="javascript:;" onclick="document.getElementById('itemPopA').style.display='none';"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
		</div>		
					
		<?php include("../itemMall/itemCtn.php"); ?>
    </div>
<%

set objRs1 = nothing
memDBClose()

%>