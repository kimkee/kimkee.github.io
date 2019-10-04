
<div class="bestItem">
    <div class="tit"><img src="/work/citibank/images/main/bestItemTit.gif" alt="베스트아이템" /></div>
    <ul class="tab">
        <li><a href="#"><img src="/work/citibank/images/main/priceTab01.gif" onmouseover="this.src='/work/citibank/images/main/priceTab01On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab01.gif'" alt="1~2만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab02.gif" onmouseover="this.src='/work/citibank/images/main/priceTab02On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab02.gif'"  alt="3~4만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab03.gif" onmouseover="this.src='/work/citibank/images/main/priceTab03On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab03.gif'"  alt="5~6만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab04.gif" onmouseover="this.src='/work/citibank/images/main/priceTab04On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab04.gif'"  alt="7~8만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab05.gif" onmouseover="this.src='/work/citibank/images/main/priceTab05On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab05.gif'"  alt="9~10만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab06.gif" onmouseover="this.src='/work/citibank/images/main/priceTab06On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab06.gif'"  alt="20~30만원" /></a></li>
        <li><a href="#"><img src="/work/citibank/images/main/priceTab07.gif" onmouseover="this.src='/work/citibank/images/main/priceTab07On.gif'" onmouseout="this.src='/work/citibank/images/main/priceTab07.gif'"  alt="40만원이상" /></a></li>
    </ul>
    <script type="text/javascript">
		function scLeft() {
			document.getElementById('m01_field').style.left = '-50px';
		}
		function scRight() {
			document.getElementById('m01_field').style.left = '0px';
		}
	</script>
    <div class="itemBoxWrap">
        <div class="btnLeft"><a href="javascript:scLeft();"><img src="/work/citibank/images/main/bestItemBtnLeft.gif" alt="이전" /></a></div>
        <div class="btnRight"><a href="javascript:scRight();"><img src="/work/citibank/images/main/bestItemBtnRight.gif" alt="다음" /></a></div>
        <div class="itemBoxScreen">
            <div id="m01_field" class="m01_field" style="left:0px;">
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
                <?php include("itemBox.php"); ?>
            </div>
        </div>
    </div>
</div>