<%
IF Login_ID = "" THEN
%>
<form name="frmlogin" method="post" action="">
	<input type="hidden" name="sID" value="<%=session.sessionID%>" />
	<input type="hidden" name="Rt_Url" value="<%=Request.ServerVariables("HTTP_HOST") & Request.ServerVariables("URL")%>" />
	<input type="hidden" name="GameKey" value="5" />
	<input type="hidden" name="plus_cp" value="<%=session("plus_cp")%>" />
	<div class="loginBox">
		<input class="id" type="text" id="login_id" name="login_id" onblur="javascript:InputBackImg(this,'/images/main/id.gif');" style="background:url(/images/main/id.gif) no-repeat 0px 0px ;" onfocus="javascript:OutputBackImg(this);" onkeydown="javascript:eEnterCheck(1);"  />
		<input class="pw" type="password" id="passwd" name="passwd" onblur="javascript:InputBackImg(this,'/images/main/pw.gif');" style="background:url(/images/main/pw.gif) no-repeat 0px 0px ;" onfocus="javascript:OutputBackImg(this);" onkeydown="javascript:eEnterCheck(2);" />
		<div class="btnLogin">
			<a href="javascript:login_ok();"><img src="/work/lunaPlus/images/main/btnLogin.gif" alt="로그인" /></a>
		</div>
		<div class="btnJoin"><a href="http://join.enpang.com/member/?GameKey=3&amp;edda_cp=<%=session("edda_cp")%>" target="_self"><span>회원가입</span></a></div>
		<div class="btnIdpw"><a href="javascript:IDPASSPOP()"><span>아이디패스워드찾기</span></a></div>
		<div class="btnPc"><a href="http://pcbang.enpang.com/introduction/pcSearch.php" target="_blank"><span>이야PC방On</span></a></div>
		<div class="bannerMotp"><a href="http://cs.enpang.com/safety/safetyList.php?cidx=4" target="_blank"><span>안심보안 MOTP캠배인배너</span></a></div>
	</div>
</form>
<script type="text/javascript">
function eEnterCheck(i)
	{
		if  (event.keyCode ==13 && i==1)
		{
			document.frmlogin.passwd.focus();
		}
		if  (event.keyCode ==13 && i==2)
		{
			login_ok();
		}
	}
</script>
<%
Else 
%>
<script type="text/javascript">
	function logTab(L) {
		for (i = 0; i <= 2 ; i++){
			document.getElementById('loginInfo'+i).style.display='none';
		}
		document.getElementById('loginInfo'+L).style.display='block';
	}
	
	
	function profileModify() {
	  window.open('/_personal/profileMod.php','popReple','scrollbars=no,width=370,height=200');
	}

	function chageTab2(){
		var url = "/_include/cashInfo.php";

		request.open("GET", url, true);
		request.onreadystatechange = cashHTML;
		request.send(null)
	}

	function cashHTML(){
		if(request.readyState == 4){
			var HTML = request.responseText;
			var output = document.getElementById("cashInfo");

			output.innerHTML = HTML;
		}
	}

	function chageTab3(){
		var url = "/_include/otpInfo.php";

		request.open("GET", url, true);
		request.onreadystatechange = otpHTML;
		request.send(null)
	}

	function otpHTML(){
		if(request.readyState == 4){
			var HTML = request.responseText;
			var output = document.getElementById("otpInfo");

			output.innerHTML = HTML;
		}
	}
</script>

<div class="logoutBox">
	<div class="name"><%If Session("Login_NickName") = "" Then %><%=Login_Name%><% Else %><%=Login_NickName%><% End If %> <span class="size11 normal">님 반갑습니다.</span></div>
	<div class="btnMypage"><a href="http://cs.enpang.com/?GameKey=5"><span>My고객센터</span></a></div>
	<div class="btnLogin"><a href="/work/lunaPlus/_include/logout.php"><span>로그아웃</span></a></div>
	<div class="btnPc off"><a href="http://pcbang.enpang.com/introduction/pcSearch.php" target="_blank"><span>이야PC방</span></a></div>
	
	
	<div class="infoWrap" id="loginInfo0">
		<ul class="logTab">
			<li class="on"><a href="javascript:logTab(0);">프로필</a></li>
			<li><a href="javascript:chageTab2();logTab(1);">계좌</a></li>
			<li><a href="javascript:chageTab3();logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2">
<%
memDBConnect()

' 기본 프로필
Set objRs = Server.CreateObject("ADODB.RecordSet")
Set objGetData = Server.CreateObject("ADODB.Command")
With objGetdata
	.ActiveConnection = memDB
	.CommandType = adCmdStoredProc
	.CommandText = "dbo.PERSON_BASIC_SELECT"
	.Parameters.Append .CreateParameter("@Login_ID",adVarchar,adParamInput,32,Login_ID)
	.Parameters.Append .CreateParameter("@GameKey",adInteger,adParamInput,4,5)
	objRs.CursorLocation = adUseClient
	objRs.Open objGetData, ,adOpenStatic, adLockReadOnly
	Set objRs.ActiveConnection = Nothing
	Set objGetData.ActiveConnection = Nothing
End With

If Not objRs.eof Then 
	IMG = objRs("IMG")
	If IMG = "" Or IsNull(IMG) = True Then 
		IMG = "photo08.jpg"
	End If 
Else 
	IMG = "photo08.jpg"
End If

'게임정보 
Set objRs = Server.CreateObject("ADODB.RecordSet")
Set objGetData = Server.CreateObject("ADODB.Command")
With objGetdata
	.ActiveConnection = memDB
	.CommandType = adCmdStoredProc
	.CommandText = "dbo.PERSON_REP_SELECT"
	.Parameters.Append .CreateParameter("@Login_ID",adVarchar,adParamInput,32,Login_ID)
	.Parameters.Append .CreateParameter("@GameKey",adInteger,adParamInput,4,5)
	objRs.CursorLocation = adUseClient
	objRs.Open objGetData, ,adOpenStatic, adLockReadOnly
	Set objRs.ActiveConnection = Nothing
	Set objGetData.ActiveConnection = Nothing
End With

If Not objRs.eof Then 
	INFO_1 = objRs("INFO_1") '서버
	INFO_2 = objRs("INFO_2") '캐릭
	INFO_3 = objRs("INFO_3") ' 종족
	INFO_4 = objRs("INFO_4") '전사
	
	If INFO_1 <> "" And IsNull(INFO_1)=False Then 
		If INFO_1 = "1" Then 
			INFO_1 = "디렌"
		Elseif INFO_1 = "2" Then 
			INFO_1 = "블루랜드"
		else 
			INFO_1 = ""
		End If 
	End If 

	If left(INFO_2,1) = "@" Then 
		INFO_3 = ""
		INFO_4 = ""
	End If 

Else
	INFO_1 = ""
	INFO_2 = ""
	INFO_3 = ""
	INFO_4 = ""
End If 

memDBClose()
%>
			<div class="profileIMG"><img src="/work/lunaPlus/savefile/LunaBlue/PERSON/<%=IMG%>" width="55" height="55" alt="" /></div>
			<table width="200" border="1" cellspacing="0" class="infoTable t2">
				<tr>
					<th>서버:</th>
					<td><%=INFO_1%></td>
				</tr>
				<tr>
					<th>캐릭:</th>
					<td><%=INFO_2%></td>
				</tr>
				<tr>
					<th>종족:</th>
					<td><%=INFO_3%></td>
				</tr>
				<tr>
					<th>직업:</th>
					<td><%=INFO_4%></td>
				</tr>
			</table>
			<div class="btn"> <a href="javascript:profileModify();"><img src="/work/lunaPlus/images/main/btnModify.gif" alt="수정" /></a></div>
		</div>	
	</div>
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo1">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">프로필</a></li>
			<li class="on"><a href="javascript:chageTab2();logTab(1);">계좌</a></li>
			<li><a href="javascript:chageTab3();logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2" id="cashInfo">			
		</div>	
	</div>
	
	
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo2">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">프로필</a></li>
			<li><a href="javascript:chageTab2();logTab(1);">계좌</a></li>
			<li class="on"><a href="javascript:chageTab3();logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2" id="otpInfo">
		</div>	
	</div>
	
	
</div>
<%
End If 
%>