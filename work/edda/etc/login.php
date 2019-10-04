<?
$skal = 1;
?>
<?php include("../_include/_head.php"); ?>		

<script type="text/javascript">
	window.onload = function(){
		document.frmlogin2.login_id.focus();
	}
</script>
<%
If Login_ID <> "" Then 
	response.redirect "/"
End If 
%>
						<div class="headTit">
							<div class="tit"><img src="/work/edda/etc/images/subTit01.gif" alt="로그인" /></div>
							<div class="location">Home &gt; 로그인</div>
						</div>
						
						
						<form name="frmlogin2" method="post" action = "https://joinssl.enpang.com/userOn/login_ok.php" onsubmit="return login_check2();">
						<input type="hidden" name="GameKey" value="3" />
						<input type="hidden" name="sID" value="<%=session.sessionID%>">
						<input type="hidden" name="Rt_Url" value="<%=replace(Request.ServerVariables("HTTP_REFERER"),"http://","")%>" />
						<div class="loginBoxEtc">
							<input class="id" type="text" id="login_id" name="login_id" />
							<input class="pw" type="password" id="passwd" name="passwd" />
							<div class="btnLogin">
								<input type="image" src="/work/edda/etc/images/btnLogin.gif" alt="로그인" />
							</div>
							<div class="btnJoin"><a href="http://join.enpang.com/member/" target="_blank"><img src="/work/edda/etc/images/btnJoin.gif" alt="회원가입" /></a></div>
							<div class="btnIdpw"><a href="http://cs.enpang.com/" target="_blank"><img src="/work/edda/etc/images/btnIdpw.gif" alt="아이디패스워드찾기" /></a></div>
						</div>
						</form>
						
						
						

<?php include("../_include/_foot.php"); ?>

<script type="text/javascript">
	function login_check2(){
		if(document.frmlogin2.login_id.value == ""){
			alert("아이디를 입력해 주세요.");
			document.frmlogin2.login_id.focus();
			return false;
		}
		
		if(document.frmlogin2.passwd.value == ""){
			alert("비밀번호를 입력해 주세요.");
			document.frmlogin2.passwd.focus();
			return false;
		}
		
		document.frmlogin2.submit();
	}
</script>