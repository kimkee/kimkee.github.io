<script type="text/javascript">
	function slideArea(slide) {
		if( slide == 'on'){
		document.getElementById('slideArea').style.display='block';
		document.getElementById('slideBtnOn').style.display='none';
		document.getElementById('slideBtnOff').style.display='block';
		}
		if( slide == 'off'){
		document.getElementById('slideArea').style.display='none';
		document.getElementById('slideBtnOn').style.display='block';
		document.getElementById('slideBtnOff').style.display='none';
		}
	}
</script>

<div class="slideArea" id="slideArea" style="display:none">
	<!--내용 -->
	<div class="pageTit">
		<h3>공지사항</h3>
		<div class="pNum">올라온글: 9932 | 페이지:1/497</div>
	</div>
	<?php include("/free/home/imgwizard1/html/work/eyaGroup/board/list.php"); ?>
	<?php include("/free/home/imgwizard1/html/work/eyaGroup/board/page.php"); ?>
	<!--// 내용 -->
</div>
<div class="btnBar2">
	<a href="javascript:slideArea('on');" id="slideBtnOn"><img src="/work/eyaGroup/images/btnBar2Open.png" alt="" width="800" height="8" /></a>
	<a href="javascript:slideArea('off');" id="slideBtnOff" style="display:none"><img src="/work/eyaGroup/images/btnBar2Close.png" alt="" width="800" height="8" /></a>
</div>
