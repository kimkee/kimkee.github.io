<div class="mainGameHelp">
	<h3><img src="/work/eyaCs/images/main/gameHelpTit.gif" alt="게임별도움말" /></h3>
	<div class="list">
		<ul>
			<li><a href="#"><img src="/work/eyaCs/images/main/gameHelpBanner01.gif" alt="에다전설" /></a></li>
			<li><a href="#"><img src="/work/eyaCs/images/main/gameHelpBanner02.gif" alt="엔젤온라인" /></a></li>
			<li><a href="#"><img src="/work/eyaCs/images/main/gameHelpBanner03.gif" alt="아이리스온라인" /></a></li>
		</ul>
	</div>
	<script type="text/javascript">
		function gLink(gLinkVar) {
			document.getElementById('gamePolOff').style.display='none';
			document.getElementById('gamePolOn').style.display='none';
			document.getElementById('gamePol'+gLinkVar).style.display='block';
		}
	</script>
	<div style="position:relative;">
		<div class="gamePolLink" id="gamePolOff" onmouseover="gLink('On');" style="position:absolute; top:0">
			<div class="sel"><a href="#">게임별운영정책바로가기</a></div>
		</div>
		<div class="gamePolLink" id="gamePolOn" onmouseover="gLink('On');" onmouseout="gLink('Off');" style="display:none; position:absolute; top:0">
			<div class="sel"><a href="#">게임별운영정책바로가기</a></div>
			<div class="list">
				<ul>
					<li><a href="#">에다전설</a></li>
					<li><a href="#">엔젤러브온라인</a></li>
					<li><a href="#">아이리스온라인</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
