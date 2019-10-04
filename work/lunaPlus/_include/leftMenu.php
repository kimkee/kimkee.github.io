<script type="text/javascript">
window.onload = function(){
	
	var mSat = "<? echo $skal; ?>" ;
	
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
		<li><a href="/work/lunaPlus/news/noticeList.php"><img src="/work/lunaPlus/news/images/subMenu01.gif" alt="공지사항" onmouseover="this.src='/work/lunaPlus/news/images/subMenu01On.gif'" onmouseout="this.src='/work/lunaPlus/news/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/lunaPlus/news/updateList.php"><img src="/work/lunaPlus/news/images/subMenu02.gif" alt="업데이트" onmouseover="this.src='/work/lunaPlus/news/images/subMenu02On.gif'" onmouseout="this.src='/work/lunaPlus/news/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/lunaPlus/news/eventList.php"><img src="/work/lunaPlus/news/images/subMenu03.gif" alt="이벤트" onmouseover="this.src='/work/lunaPlus/news/images/subMenu03On.gif'" onmouseout="this.src='/work/lunaPlus/news/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/lunaPlus/news/pollList.php"><img src="/work/lunaPlus/news/images/subMenu04.gif" alt="설문조사" onmouseover="this.src='/work/lunaPlus/news/images/subMenu04On.gif'" onmouseout="this.src='/work/lunaPlus/news/images/subMenu04.gif'" /></a></li>
		<li><a href="/work/lunaPlus/news/reschList.php"><img src="/work/lunaPlus/news/images/subMenu05.gif" alt="탐구생활" onmouseover="this.src='/work/lunaPlus/news/images/subMenu05On.gif'" onmouseout="this.src='/work/lunaPlus/news/images/subMenu05.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>

<div id="guide" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/guide/images/leftMenuTit.gif" alt="게임소개"/></h3>
	<ul class="menu">
		<li><a href="#"><img src="/work/lunaPlus/guide/images/subMenu01.gif" alt="게임정보" onmouseover="this.src='/work/lunaPlus/guide/images/subMenu01On.gif'" onmouseout="this.src='/work/lunaPlus/guide/images/subMenu01.gif'" /></a>
			<ul>
				<li><a href="/work/lunaPlus/guide/story.php">스토리</a></li>
				<li><a href="/work/lunaPlus/guide/character1.php">캐릭터</a></li>
				<li><a href="/work/lunaPlus/guide/skill1.php">스킬</a></li>
				<li><a href="/work/lunaPlus/guide/map.php">지역</a></li>
				<li><a href="/work/lunaPlus/guide/item1.php">아이템</a></li>
				<li><a href="/work/lunaPlus/guide/monster.php">몬스터</a></li>
			</ul>
		</li>
		<li><a href="/work/lunaPlus/guide/beginner.php"><img src="/work/lunaPlus/guide/images/subMenu02.gif" alt="게임시스템" onmouseover="this.src='/work/lunaPlus/guide/images/subMenu02On.gif'" onmouseout="this.src='/work/lunaPlus/guide/images/subMenu02.gif'" /></a>
			<ul>
				<li><a href="/work/lunaPlus/guide/beginner.php">초보자가이드</a></li>
				<li><a href="/work/lunaPlus/guide/plusSystem.php">플러스시스템</a></li>
			</ul>
		</li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>


<div id="community" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/community/images/leftMenuTit.gif" alt="게임소개"/></h3>
	<ul class="menu">
		<li><a href="/work/lunaPlus/community/discussList.php"><img src="/work/lunaPlus/community/images/subMenu01.gif" alt="토론게시판" onmouseover="this.src='/work/lunaPlus/community/images/subMenu01On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/lunaPlus/community/ussList.php"><img src="/work/lunaPlus/community/images/subMenu02.gif" alt="스크린샷" onmouseover="this.src='/work/lunaPlus/community/images/subMenu02On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/lunaPlus/community/attackList.php"><img src="/work/lunaPlus/community/images/subMenu03.gif" alt="게임공략" onmouseover="this.src='/work/lunaPlus/community/images/subMenu03On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/lunaPlus/community/rankTotal.php"><img src="/work/lunaPlus/community/images/subMenu04.gif" alt="루플랭킹" onmouseover="this.src='/work/lunaPlus/community/images/subMenu04On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu04.gif'" /></a>
			<ul>
				<li><a href="/work/lunaPlus/community/rankTotal.php">전체랭킹</a></li>
				<li><a href="/work/lunaPlus/community/rankClass.php">클래스랭킹</a></li>
				<li><a href="/work/lunaPlus/community/rankHousing.php">하우징랭킹</a></li>
			</ul>
		</li>
		<li><a href="/work/lunaPlus/community/myBlogList.php"><img src="/work/lunaPlus/community/images/subMenu05.gif" alt="마이블로그" onmouseover="this.src='/work/lunaPlus/community/images/subMenu05On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu05.gif'" /></a></li>
		<li><a href="/work/lunaPlus/community/wishList.php"><img src="/work/lunaPlus/community/images/subMenu06.gif" alt="루플에바란다" onmouseover="this.src='/work/lunaPlus/community/images/subMenu06On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu06.gif'" /></a></li>
		<li><a href="/work/lunaPlus/community/parterList.php"><img src="/work/lunaPlus/community/images/subMenu07.gif" alt="파트너모집" onmouseover="this.src='/work/lunaPlus/community/images/subMenu07On.gif'" onmouseout="this.src='/work/lunaPlus/community/images/subMenu07.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>


<div id="pds" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/pds/images/leftMenuTit.gif" alt="자료실"/></h3>
	<ul class="menu">
		<li><a href="/work/lunaPlus/pds/download.php"><img src="/work/lunaPlus/pds/images/subMenu01.gif" alt="루플다운로드" onmouseover="this.src='/work/lunaPlus/pds/images/subMenu01On.gif'" onmouseout="this.src='/work/lunaPlus/pds/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/lunaPlus/pds/driver.php"><img src="/work/lunaPlus/pds/images/subMenu02.gif" alt="드라이브" onmouseover="this.src='/work/lunaPlus/pds/images/subMenu02On.gif'" onmouseout="this.src='/work/lunaPlus/pds/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/lunaPlus/pds/artWork.php"><img src="/work/lunaPlus/pds/images/subMenu03.gif" alt="아트워크" onmouseover="this.src='/work/lunaPlus/pds/images/subMenu03On.gif'" onmouseout="this.src='/work/lunaPlus/pds/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/lunaPlus/pds/movie.php"><img src="/work/lunaPlus/pds/images/subMenu04.gif" alt="루플영상" onmouseover="this.src='/work/lunaPlus/pds/images/subMenu04On.gif'" onmouseout="this.src='/work/lunaPlus/pds/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>



<div id="itemMall" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/itemMall/images/leftMenuTit.gif" alt="아이템몰"/></h3>
	<ul class="menu">
		<li><a href="/work/lunaPlus/itemMall/?cidx=0"><img src="/work/lunaPlus/itemMall/images/subMenu01.gif" alt="전체상품" onmouseover="this.src='/work/lunaPlus/itemMall/images/subMenu01On.gif'" onmouseout="this.src='/work/lunaPlus/itemMall/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/lunaPlus/itemMall/cashList1.php"><img src="/work/lunaPlus/itemMall/images/subMenu02.gif" alt="캐시계좌" onmouseover="this.src='/work/lunaPlus/itemMall/images/subMenu02On.gif'" onmouseout="this.src='/work/lunaPlus/itemMall/images/subMenu02.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu03.gif" alt="캐시충전" onmouseover="this.src='/work/lunaPlus/itemMall/images/subMenu03On.gif'" onmouseout="this.src='/work/lunaPlus/itemMall/images/subMenu03.gif'" /></a></li>
		<li><a href="#"><img src="/work/lunaPlus/itemMall/images/subMenu04.gif" alt="캐시이용약관" onmouseover="this.src='/work/lunaPlus/itemMall/images/subMenu04On.gif'" onmouseout="this.src='/work/lunaPlus/itemMall/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.gif" alt="" /></div>
</div>






