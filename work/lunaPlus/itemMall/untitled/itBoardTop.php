<%
IF Request("mycashType") = "" THEN
	mycashType = 0
ELSE
	mycashType = cint(Request("mycashType"))
END If


'============================================ 엔팡 캐쉬 조회 ======================================================
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
PATH_INFO =  Request.ServerVariables("PATH_INFO")
%>
<script type="text/javascript">
<!--
function go_mycash(val){
	location.href = "<%=PATH_INFO%>?mycashType="+val;
	return;
}
//-->
</script>
<div class="itemBoardTop">
	<div class="myCash"> <span class="bold">나의 포인트</span> &nbsp;
		<select style="width:100px;" name="mycash" onchange="go_mycash(this.value);">
			<!--<option value="0" <%IF mycashType = 0 THEN %>selected<% END IF %>>전체</option>-->
			<option value="0" <%IF mycashType = 0 THEN %>selected<% END IF %>>E-포인트</option>
		</select>
		<% IF mycashType = 0 THEN %>
		&nbsp; <span class="tRed bold"><%=FormatNumber(Total_account,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /> &nbsp; (유료) <%=FormatNumber(account,0)%> + (보너스) <%=FormatNumber(bonus_account,0)%>
		<% ELSEIF mycashType = 1 THEN %>
		&nbsp; <span class="tRed bold"><%=FormatNumber(account,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" />
		<% ELSEIF mycashType = 2 THEN %>
		&nbsp; <span class="tRed bold"><%=FormatNumber(bonus_account,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" />
		<% END IF %>
	</div>
	<ul class="notice">
		<li><img src="/work/lunaPlus/itemMall/images/noticeIco1.gif" alt="1" /> <span class="tRed bold">엔팡캐시</span>는 엔팡(enpang.com)에서 현금과 같이 이용하실 수 있는 선불전자지급수단입니다.</li>
		<li><img src="/work/lunaPlus/itemMall/images/noticeIco2.gif" alt="2" /> 보너스 캐시는 각종 이벤트 및 보상으로 고객님께 제공되는 무료 캐시 입니다.</li>
		<li><img src="/work/lunaPlus/itemMall/images/noticeIco3.gif" alt="3" /> 전용캐시는 해당 서비스에서만 사용 가능한 캐시입니다.</li>
	</ul>
</div>