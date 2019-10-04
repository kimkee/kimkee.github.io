<!-- 로긴 -->
<form name="frmlogin" method="post" action = "https://joinssl.enpang.com/userOn/login_ok.php" onsubmit="return login_check();">
	<div class="loginBox">
		<input class="id" type="text" id="login_id" name="login_id" onblur="javascript:InputBackImg(this,'/work/lunaPlus/images/main/id.gif');" style="background:url(/work/lunaPlus/images/main/id.gif) no-repeat 0px 0px ;" onfocus="javascript:OutputBackImg(this);" />
		<input class="pw" type="password" id="passwd" name="passwd" onblur="javascript:InputBackImg(this,'/work/lunaPlus/images/main/pw.gif');" style="background:url(/work/lunaPlus/images/main/pw.gif) no-repeat 0px 0px ;" onfocus="javascript:OutputBackImg(this);"/>
		<div class="btnLogin">
			<input type="image" src="/work/lunaPlus/images/main/btnLogin.gif" alt="로그인" />
		</div>
		<div class="btnJoin"><a href="http://join.enpang.com/member/?GameKey=3&amp;edda_cp=" target="_self"><span>회원가입</span></a></div>
		<div class="btnIdpw"><a href="javascript:IDPASSPOP()"><span>아이디패스워드찾기</span></a></div>
		<div class="btnPc"><a href="http://pcbang.enpang.com/introduction/pcSearch.php" target="_blank"><span>이야PC방On</span></a></div>
		<div class="bannerMotp"><a href="http://cs.enpang.com/safety/safetyList.php?cidx=4" target="_blank"><span>안심보안 MOTP캠배인배너</span></a></div>
	</div>
</form>




<!-- 로그아웃 
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
</script>

<div class="logoutBox">
	<div class="name">Login_ID <span class="size11 normal">님 반갑습니다.</span></div>
	<div class="btnMypage"><a href="http://cs.enpang.com/mypage/myInfo.php?GameKey=3"><span>My고객센터</span></a></div>
	<div class="btnLogin"><a href="/work/lunaPlus/_include/logout.php"><span>로그아웃</span></a></div>
	<div class="btnPc off<%=PCYN%>"><a href="http://pcbang.enpang.com/introduction/pcSearch.php" target="_blank"><span>이야PC방</span></a></div>
	
	
	<div class="infoWrap" id="loginInfo0">
		<ul class="logTab">
			<li class="on"><a href="javascript:logTab(0);">프로필</a></li>
			<li><a href="javascript:logTab(1);">계좌</a></li>
			<li><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2">
			<div class="profileIMG"><img src="/work/lunaPlus/images/main/loginPhoto.gif" alt="" /></div>
			<table width="200" border="1" cellspacing="0" class="infoTable t2">
				<tr>
					<th>서버:</th>
					<td>아이리스</td>
				</tr>
				<tr>
					<th>캐릭:</th>
					<td>오크</td>
				</tr>
				<tr>
					<th>종족:</th>
					<td>휴먼</td>
				</tr>
				<tr>
					<th>직업:</th>
					<td>전사</td>
				</tr>
			</table>
			<div class="btn"> <a href="javascript:profileModify();"><img src="/work/lunaPlus/images/main/btnModify.gif" alt="수정" /></a></div>
		</div>	
	</div>
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo1">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">프로필</a></li>
			<li class="on"><a href="javascript:logTab(1);">계좌</a></li>
			<li><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2">
	
			<table border="1" cellspacing="0" class="infoTable">
	
				<tr>
					<th>보유캐시</th>
					<td class="nColor bold">9900<img src="/work/lunaPlus/images/main/icoCashL.gif" alt="L" style="vertical-align:middle"/></td>
				</tr>
				<tr>
					<th>보유쿠폰</th>
					<td>3</td>
				</tr>
				<tr>
					<th>e-Poing</th>
					<td>0</td>
				</tr>
			</table>
			<div class="btn aCenter"><a href="javascript:profileModify();"><img src="/work/lunaPlus/images/main/btnCash.gif" alt="수정" /></a></div>
		</div>	
	</div>
	
	
	
	
	<div class="infoWrap" style="display:none;" id="loginInfo2">
		<ul class="logTab">
			<li><a href="javascript:logTab(0);">프로필</a></li>
			<li><a href="javascript:logTab(1);">계좌</a></li>
			<li class="on"><a href="javascript:logTab(2);">보안</a></li>
		</ul>
		<div class="infoBox i2">
			<table width="200" border="1" cellspacing="0" class="infoTable t3">
				<tr>
					<th>보안번호</th>
					<td><span class="nColor size11">미 설정</span></td>
				</tr>
				<tr>
					<th>OTP</th>
					<td>미 설정</td>
				</tr>
			</table>
			<div class="btn"><a href="#"><img src="/work/lunaPlus/images/main/btnAdmin.gif" alt="관리" /></a></div>
		</div>	
	</div>
	
	
</div>


-->