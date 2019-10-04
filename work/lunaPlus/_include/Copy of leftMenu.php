<script type="text/javascript">
window.onload = function(){
	
	var mSat = "<%=menuTop%>" ;
	
	if( mSat == "1"){
		document.getElementById('news').style.display='block';
	}
	if( mSat == "2"){
		document.getElementById('guide').style.display='block';
	}
	if( mSat == "3"){
		document.getElementById('community').style.display='block';
	}
	if( mSat == "4"){
		document.getElementById('pds').style.display='block';
	}
	if( mSat == "5"){
		document.getElementById('itemMall').style.display='block';
	}

}
</script>


<div id="news" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/news/images/leftMenuTit.gif" alt="루나소식"/></h3>
	<ul class="menu">
		<li><a href="/work/lunaPlus/news/noticeList.php"><%IF INSTR(Request.ServerVariables("PATH_INFO"),"notice")>0 THEN%><img src="/work/lunaPlus/news/images/subMenu01On.gif" alt="공지사항" /><%ELSE%><img src="/work/lunaPlus/news/images/subMenu01.gif" alt="공지사항" onmouseover="this.src='/news/images/subMenu01On.gif'" onmouseout="this.src='/news/images/subMenu01.gif'" /><%END IF%></a></li>
		<li><a href="/work/lunaPlus/news/updateList.php"><%IF INSTR(Request.ServerVariables("PATH_INFO"),"update")>0 THEN%><img src="/work/lunaPlus/news/images/subMenu02On.gif" alt="업데이트" /><%ELSE%><img src="/work/lunaPlus/news/images/subMenu02.gif" alt="업데이트" onmouseover="this.src='/news/images/subMenu02On.gif'" onmouseout="this.src='/news/images/subMenu02.gif'" /><%END IF%></a></li>
		<li><a href="/work/lunaPlus/news/devList.php"><%IF INSTR(Request.ServerVariables("PATH_INFO"),"dev")>0 THEN%><img src="/work/lunaPlus/news/images/subMenu03On.gif" alt="이벤트" /><%ELSE%><img src="/work/lunaPlus/news/images/subMenu03.gif" alt="이벤트" onmouseover="this.src='/news/images/subMenu03On.gif'" onmouseout="this.src='/news/images/subMenu03.gif'" /><%END IF%></a></li>
		<li><a href="/work/lunaPlus/news/eventList.php"><%IF INSTR(Request.ServerVariables("PATH_INFO"),"event")>0 THEN%><img src="/work/lunaPlus/news/images/subMenu04On.gif" alt="설문조사" /><%ELSE%><img src="/work/lunaPlus/news/images/subMenu04.gif" alt="설문조사" onmouseover="this.src='/news/images/subMenu04On.gif'" onmouseout="this.src='/news/images/subMenu04.gif'" /><%END IF%></a></li>
		<li><a href="/work/lunaPlus/news/eventList.php"><%IF INSTR(Request.ServerVariables("PATH_INFO"),"event")>0 THEN%><img src="/work/lunaPlus/news/images/subMenu05On.gif" alt="탐구생활" /><%ELSE%><img src="/work/lunaPlus/news/images/subMenu05.gif" alt="탐구생활" onmouseover="this.src='/news/images/subMenu05On.gif'" onmouseout="this.src='/news/images/subMenu05.gif'" /><%END IF%></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>

<div id="guide" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/guide/images/leftMenuTit.gif" alt="게임소개"/></h3>
	<ul class="menu">
		<li><a href="#"><img src="/work/lunaPlus/guide/images/subMenu01.gif" alt="게임정보" onmouseover="this.src='/guide/images/subMenu01On.gif'" onmouseout="this.src='/guide/images/subMenu01.gif'" /></a>
			<ul>
				<li><a href="#">스토리</a></li>
				<li><a href="#">캐릭터</a></li>
				<li><a href="#">스킬</a></li>
				<li><a href="#">지역</a></li>
				<li><a href="#">아이템</a></li>
				<li><a href="#">몬스터</a></li>
			</ul>
		</li>
		<li><a href="#"><img src="/work/lunaPlus/guide/images/subMenu02.gif" alt="게임시스템" onmouseover="this.src='/guide/images/subMenu02On.gif'" onmouseout="this.src='/guide/images/subMenu02.gif'" /></a>
			<ul>
				<li><a href="#">초보자가이드</a></li>
				<li><a href="#">플러스시스템</a></li>
			</ul>
		</li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>


<div id="community" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/community/images/leftMenuTit.gif" alt="게임소개"/></h3>
	<ul class="menu">
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu01.gif" alt="토론게시판" onmouseover="this.src='/community/images/subMenu01On.gif'" onmouseout="this.src='/community/images/subMenu01.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu02.gif" alt="스크린샷" onmouseover="this.src='/community/images/subMenu02On.gif'" onmouseout="this.src='/community/images/subMenu02.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu03.gif" alt="게임공략" onmouseover="this.src='/community/images/subMenu03On.gif'" onmouseout="this.src='/community/images/subMenu03.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu04.gif" alt="루플랭킹" onmouseover="this.src='/community/images/subMenu04On.gif'" onmouseout="this.src='/community/images/subMenu04.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu05.gif" alt="마이블로그" onmouseover="this.src='/community/images/subMenu05On.gif'" onmouseout="this.src='/community/images/subMenu05.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/community/images/subMenu06.gif" alt="루플에바란다" onmouseover="this.src='/community/images/subMenu06On.gif'" onmouseout="this.src='/community/images/subMenu06.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>


<div id="pds" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/pds/images/leftMenuTit.gif" alt="자료실"/></h3>
	<ul class="menu">
		<li><a href="#"><img src="/work/lunaPlus/pds/images/subMenu01.gif" alt="루플다운로드" onmouseover="this.src='/pds/images/subMenu01On.gif'" onmouseout="this.src='/pds/images/subMenu01.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/pds/images/subMenu02.gif" alt="드라이브" onmouseover="this.src='/pds/images/subMenu02On.gif'" onmouseout="this.src='/pds/images/subMenu02.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/pds/images/subMenu03.gif" alt="아트워크" onmouseover="this.src='/pds/images/subMenu03On.gif'" onmouseout="this.src='/pds/images/subMenu03.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/pds/images/subMenu04.gif" alt="루플영상" onmouseover="this.src='/pds/images/subMenu04On.gif'" onmouseout="this.src='/pds/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>



<div id="itemMall" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/itemMall/images/leftMenuTit.gif" alt="아이템몰"/></h3>
	<ul class="menu">
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu01.gif" alt="전체상품" onmouseover="this.src='/itemMall/images/subMenu01On.gif'" onmouseout="this.src='/itemMall/images/subMenu01.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu02.gif" alt="캐시계좌" onmouseover="this.src='/itemMall/images/subMenu02On.gif'" onmouseout="this.src='/itemMall/images/subMenu02.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu03.gif" alt="캐시충전" onmouseover="this.src='/itemMall/images/subMenu03On.gif'" onmouseout="this.src='/itemMall/images/subMenu03.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu04.gif" alt="캐시이용약관" onmouseover="this.src='/itemMall/images/subMenu04On.gif'" onmouseout="this.src='/itemMall/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>






