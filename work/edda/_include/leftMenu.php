<script type="text/javascript">
window.onload = function(){
	
	var mSat = "<? echo $skal; ?>" ;
	
	if( mSat == "1"){
		document.getElementById('news').style.display='block';
	}
	if( mSat == "2"){
		document.getElementById('gameInfo').style.display='block';
	}
	if( mSat == "3"){
		document.getElementById('guide').style.display='block';
	}
	if( mSat == "4"){
		document.getElementById('pds').style.display='block';
	}
	if( mSat == "5"){
		document.getElementById('community').style.display='block';
	}
	if( mSat == "6"){
		document.getElementById('itemMall').style.display='block';
	}

}
</script>

<div id="news" class="leftMenu">
	<h3 class="tit"><img src="/work/edda/news/images/leftMenuTit.gif" alt="News"/></h3>
	<ul class="menu">
		<li><a href="/work/edda/news/noticeList.php"><img src="/work/edda/news/images/subMenu01.gif" alt="공지사항" onmouseover="this.src='/work/edda/news/images/subMenu01On.gif'" onmouseout="this.src='/work/edda/news/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/edda/news/devList.php"><img src="/work/edda/news/images/subMenu03.gif" alt="영웅의 대서사시" onmouseover="this.src='/work/edda/news/images/subMenu03On.gif'" onmouseout="this.src='/work/edda/news/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/edda/news/pollList.php"><img src="/work/edda/news/images/subMenu02.gif" alt="업데이트" onmouseover="this.src='/work/edda/news/images/subMenu02On.gif'" onmouseout="this.src='/work/edda/news/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/edda/news/eventList.php"><img src="/work/edda/news/images/subMenu04.gif" alt="이벤트" onmouseover="this.src='/work/edda/news/images/subMenu04On.gif'" onmouseout="this.src='/work/edda/news/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/edda/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>

<div id="gameInfo" class="leftMenu" >
	<h3 class="tit"><img src="/work/edda/gameInfo/images/leftMenuTit.gif" alt="게임정보"/></h3>
	<ul class="menu">
		<li><a href="/work/edda/gameInfo/story.php">
			<img src="/work/edda/gameInfo/images/subMenu01.gif" alt="스토리" onmouseover="this.src='/work/edda/gameInfo/images/subMenu01On.gif'" onmouseout="this.src='/work/edda/gameInfo/images/subMenu01.gif'" />
			</a>
		</li>
		<li><a href="/work/edda/gameInfo/graphic.php">
			<img src="/work/edda/gameInfo/images/subMenu02.gif" alt="게임특징" onmouseover="this.src='/work/edda/gameInfo/images/subMenu02On.gif'" onmouseout="this.src='/work/edda/gameInfo/images/subMenu02.gif'" />
			</a>
		</li>
		<li>
			<a href="/work/edda/gameInfo/control.php">
			<img src="/work/edda/gameInfo/images/subMenu03.gif" alt="초보자가이드" onmouseover="this.src='/work/edda/gameInfo/images/subMenu03On.gif'" onmouseout="this.src='/work/edda/gameInfo/images/subMenu03.gif'" />
			</a>
		</li>
		<li>
			<a href="/work/edda/gameInfo/classA1.php">
			<img src="/work/edda/gameInfo/images/subMenu04.gif" alt="캐릭터" onmouseover="this.src='/work/edda/gameInfo/images/subMenu04On.gif'" onmouseout="this.src='/work/edda/gameInfo/images/subMenu04.gif'" />
			</a>
		</li>
	</ul>
	<div class="bot"><img src="/work/edda/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>


<div id="guide" class="leftMenu" >
	<h3 class="tit"><img src="/work/edda/guide/images/leftMenuTit.gif" alt="가이드"/></h3>
	<ul class="menu">
		<li><a href="/work/edda/guide/system01.php"><img src="/work/edda/guide/images/subMenu01.gif" alt="시스템정보" onmouseover="this.src='/work/edda/guide/images/subMenu01On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu01.gif'" /></a>
			<ul>
				<li><a href="/work/edda/guide/system01.php"><img src="/work/edda/guide/images/subMenu01_01.gif" onmouseover="this.src='/work/edda/guide/images/subMenu01_01On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu01_01.gif'" alt="게임시스템" /></a></li>
				<li><a href="/work/edda/guide/pet.php"><img src="/work/edda/guide/images/subMenu01_02.gif" onmouseover="this.src='/work/edda/guide/images/subMenu01_02On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu01_02.gif'" alt="특화시스템" /></a></li>
				<li><a href="/work/edda/guide/quest.php"><img src="/work/edda/guide/images/subMenu01_03.gif" onmouseover="this.src='/work/edda/guide/images/subMenu01_03On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu01_03.gif'" alt="게임공략정보" /></a></li>
			</ul>
		</li>
		<li><a href="/work/edda/guide/monster.php"><img src="/work/edda/guide/images/subMenu02.gif" alt="몬스터" onmouseover="this.src='/work/edda/guide/images/subMenu02On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/edda/guide/skillA1.php"><img src="/work/edda/guide/images/subMenu03.gif" alt="스킬" onmouseover="this.src='/work/edda/guide/images/subMenu03On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/edda/guide/worldMap.php"><img src="/work/edda/guide/images/subMenu04.gif" alt="에다대륙맵" onmouseover="this.src='/work/edda/guide/images/subMenu04On.gif'" onmouseout="this.src='/work/edda/guide/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/edda/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>



<div id="pds" class="leftMenu" >
	<h3 class="tit"><img src="/work/edda/pds/images/leftMenuTit.gif" alt="다운로드"/></h3>
	<ul class="menu">
		<li><a href="/work/edda/pds/download.php"><img src="/work/edda/pds/images/subMenu01.gif" alt="다운로드" onmouseover="this.src='/work/edda/pds/images/subMenu01On.gif'" onmouseout="this.src='/work/edda/pds/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/edda/pds/driver.php"><img src="/work/edda/pds/images/subMenu02.gif" alt="드라이버" onmouseover="this.src='/work/edda/pds/images/subMenu02On.gif'" onmouseout="this.src='/work/edda/pds/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/edda/pds/movie.php"><img src="/work/edda/pds/images/subMenu03.gif" alt="동영상" onmouseover="this.src='/work/edda/pds/images/subMenu03On.gif'" onmouseout="this.src='/work/edda/pds/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/edda/pds/wallPaper.php"><img src="/work/edda/pds/images/subMenu04.gif" alt="월페이퍼" onmouseover="this.src='/work/edda/pds/images/subMenu04On.gif'" onmouseout="this.src='/work/edda/pds/images/subMenu04.gif'" /></a></li>
	</ul>
	<div class="bot"><img src="/work/edda/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>


<div id="community" class="leftMenu" >
	<h3 class="tit"><img src="/work/edda/community/images/leftMenuTit.gif" alt="커뮤니티"/></h3>
	<ul class="menu">
		<li><a href="/work/edda/community/withEddaList.php"><img src="/work/edda/community/images/subMenu08.gif" alt="함께하는 에다전설" onmouseover="this.src='/work/edda/community/images/subMenu08On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu08.gif'" /></a></li>
		<li><a href="/work/edda/community/freeboardList.php"><img src="/work/edda/community/images/subMenu01.gif" alt="영웅들의이야기" onmouseover="this.src='/work/edda/community/images/subMenu01On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu01.gif'" /></a></li>
		<li><a href="/work/edda/?edda_cp=8" target="_blank"><img src="/work/edda/community/images/subMenu06.gif" alt="TIG게시판" onmouseover="this.src='/work/edda/community/images/subMenu06On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu06.gif'" /></a></li>	
		
		<li><a href="/work/edda/community/gameTip.php"><img src="/work/edda/community/images/subMenu02.gif" alt="GameTip" onmouseover="this.src='/work/edda/community/images/subMenu02On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu02.gif'" /></a></li>
		<li><a href="/work/edda/community/userSSList.php"><img src="/work/edda/community/images/subMenu03.gif" alt="유저스크린샷" onmouseover="this.src='/work/edda/community/images/subMenu03On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu03.gif'" /></a></li>
		<li><a href="/work/edda/community/ranking.php"><img src="/work/edda/community/images/subMenu04.gif" alt="에다랭킹" onmouseover="this.src='/work/edda/community/images/subMenu04On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu04.gif'" /></a>

		</li>
		<li><a href="/work/edda/community/fansiteList.php"><img src="/work/edda/community/images/subMenu05.gif" alt="팬사이트" onmouseover="this.src='/work/edda/community/images/subMenu05On.gif'" onmouseout="this.src='/work/edda/community/images/subMenu05.gif'" /></a></li>
	
	</ul>
	<div class="bot"><img src="/work/edda/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>

<?php include("../itemMall/leftMenu.php"); ?>