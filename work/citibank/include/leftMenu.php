

<!--<div class="leftMypoint">
    <div class="tit"><img src="/work/citibank/images/main/leftMypointTit.gif" alt="My Point" /></div>
    <div class="info">고객님의 보유 포인트는 <br /><strong class="tcBlue">5,000 point</strong> 입니다.</div>
</div> -->
<script type="text/javascript">
	function leftMenu(K) {
		for (i = 1; i <= 2 ; i++){
			document.getElementById('leftMenu'+i).style.display='none';
		}
		document.getElementById('leftMenu'+K).style.display='block';
	}
</script>
<div class="leftMenu" id="leftMenu1" style="display:block">
    <ul class="leftMenuTab">
        <li><a href="javascript:leftMenu(1);"><img src="/work/citibank/images/main/leftTab1On.gif" alt="카테고리별" /></a></li>
        <li><a href="javascript:leftMenu(2);"><img src="/work/citibank/images/main/leftTab2.gif" alt="가격별" /></a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">생활/주방 </a></li>
        <li><a href="#">패션/잡화 </a></li>
        <li><a href="#">화장품/미용 </a></li>
        <li><a href="#">스포츠/레저 </a></li>
        <li><a href="#">가전/디지털 </a></li>
        <li><a href="#">가구/인테리어 </a></li>
        <li><a href="#">유아동 </a></li>
        <li><a href="#">백화점 </a></li>
        <li><a href="#">홈쇼핑</a></li>
    </ul>
</div>
<div class="leftMenu" id="leftMenu2">
    <ul class="leftMenuTab">
        <li><a href="javascript:leftMenu(1);"><img src="/work/citibank/images/main/leftTab1.gif" alt="카테고리별" /></a></li>
        <li><a href="javascript:leftMenu(2);"><img src="/work/citibank/images/main/leftTab2On.gif" alt="가격별" /></a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">1~2만 Point </a></li>
        <li><a href="#">3~4만 Point </a></li>
        <li><a href="#">5~6만 Point </a></li>
        <li><a href="#">7~8만 Point </a></li>
        <li><a href="#">9~10만 Point </a></li>
        <li><a href="#">20~30만 Point </a></li>
        <li><a href="#">40만이상 Point </a></li>
    </ul>
</div>

<?php include("../include/leftBanner.php"); ?>
