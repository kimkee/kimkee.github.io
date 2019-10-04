




<form name="frmlogin" method="post" action = "https://joinssl.eyainteractive.com/edda/login_ok.php" onsubmit="return login_check();">
<input type="hidden" name="GameKey" value="3" />
<div class="loginBox">
	<input class="id" type="text" id="login_id" name="login_id" onblur="javascript:InputBackImg(this,'/images/main/id.gif');" style="background:url(/work/edda/images/main/id.gif) no-repeat 0px 0px #1e2123;" onfocus="javascript:OutputBackImg(this);" />
	<input class="pw" type="password" id="passwd" name="passwd" onblur="javascript:InputBackImg(this,'/images/main/pw.gif');" style="background:url(/work/edda/images/main/pw.gif) no-repeat 0px 0px #1e2123;" onfocus="javascript:OutputBackImg(this);"/>
	<div class="btnLogin">
		<input type="image" src="/work/edda/images/main/btnLogin.gif" alt="로그인" />
	</div>
	<div class="btnJoin"><a href="http://join.enpang.com/member/?GameKey=3" target="_self"><span>회원가입</span></a></div>
	<div class="btnIdpw"><a href="http://cs.enpang.com/" target="_blank"><span>아이디패스워드찾기</span></a></div>
	<div class="btnPc off"><a href="#"><span>이야PC방On</span></a></div>
	<div class="loginDot"></div>
	<div class="bannerMotp"><a href="#"><span>안심보안 MOTP캠배인배너</span></a></div>
</div>
</form>




<script type="text/javascript">
	function logTab(L) {
		for (i = 0; i <= 2 ; i++){
			document.getElementById('loginInfo'+i).style.display='none';
		}
		document.getElementById('loginInfo'+L).style.display='block';
	}
	
	
	function profileModify() {
	  window.open('/work/edda/_personal/profileMod.php','popReple','scrollbars=no,width=370,height=200');
	}
</script>





<!--<div class="logoutBox">
	<div class="name">포티아님이시다 <span class="size11 normal">님 반갑습니다.</span></div>
	<div class="btnMypage"><a href="http://cs.enpang.com/mypage/myInfo.php?GameKey=3"><img src="/work/edda/images/main/btnMypage.gif" alt="My고객센터" /></a></div>
	<div class="btnLogin"><a href="/work/edda/_include/logout.php"><img src="/work/edda/images/main/btnLogout.gif" alt="로그아웃" /></a></div>
	<div class="loginDot"></div>
	<div class="btnPc on"><a href="#"><span>이야PC방</span></a></div>
	<div class="infoWrap" id="loginInfo0">
		<ul class="logTab">
			<li class="on"><a href="javascript:logTab(0);">계좌</a></li>
			<li><a href="javascript:logTab(1);">프로필</a></li>
			<li><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox">
			<table width="200" border="1" cellspacing="0" class="infoTable">
				<tr>
					<th>보유캐시</th>
					<td><span class="nColor">100,000,000N</span></td>
				</tr>
				<tr>
					<th>보유쿠폰</th>
					<td>3장</td>
				</tr>
				<tr>
					<th>i-Point</th>
					<td>1,000P</td>
				</tr>
			</table>
			<div class="btn"><a href="#"><img src="/work/edda/images/main/btnAdmin.gif" alt="관리" /></a></div>
		</div>	
	</div>
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo1">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">계좌</a></li>
			<li class="on"><a href="javascript:logTab(1);">프로필</a></li>
			<li><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2">
			<div class="profileIMG"><img src="/work/edda/images/main/loginPhoto.gif" alt="" /></div>
			<table width="200" border="1" cellspacing="0" class="infoTable t2">
				<tr>
					<th>서버:</th>
					<td>아이리스</td>
				</tr>
				<tr>
					<th>종족:</th>
					<td>오크</td>
				</tr>
				<tr>
					<th>직업:</th>
					<td>백수</td>
				</tr>
				<tr>
					<th>레벨:</th>
					<td>10</td>
				</tr>
				<tr>
					<th>길드:</th>
					<td>대머리</td>
				</tr>
			</table>
			<div class="btn"><a href="#"><img src="/work/edda/images/main/btnUpdate.gif" alt="업데이트" /></a> <a href="javascript:profileModify();"><img src="/work/edda/images/main/btnModify.gif" alt="수정" /></a></div>
		</div>	
	</div>
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo2">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">계좌</a></li>
			<li><a href="javascript:logTab(1);">프로필</a></li>
			<li class="on"><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox">
			<table width="200" border="1" cellspacing="0" class="infoTable t3">
				<tr>
					<th>보안번호</th>
					<td><span class="nColor size11">미 설정</span></td>
				</tr>
				<tr>
					<th>OTP</th>
					<td>미 설정</td>
				</tr>
				<tr>
					<th>지정IP</th>
					<td>가입</td>
				</tr>
				<tr>
					<th>전용PC</th>
					<td>미 설정</td>
				</tr>
			</table>
			<div class="btn"><a href="#"><img src="/work/edda/images/main/btnAdmin.gif" alt="관리" /></a></div>
		</div>	
	</div>
	
</div> -->













