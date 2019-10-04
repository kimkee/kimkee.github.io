
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter subCenter2Depth">
        <?php include("../include/header.php"); ?>
        
        <div class="shopHead">
        	<div class="shopTit"><img src="/work/kbpoint/images/main/shopHeadT01.gif" alt="주방용품/주방가전" /></div>
            <?php include("../include/locationSelect.php"); ?>
        </div>
        
        <div class="mainShopArea Depth2Area">
            <div class="leftArea">
            	<?php include("../include/leftMenu.php"); ?>
            </div>
            <?php include("../product/prdLayerPop.php"); ?>
            <div class="ctn2Depth">
           	 	<h4 class="cateTitT01"><img src="/work/kbpoint/images/main/cateTitT01.gif" alt="주방용품/주방가전" /></h4>
                
				<script type="text/javascript">
					function cMenuListOverOn() {
						document.getElementById('cMenuList').style.overflow="";
						document.getElementById('cMenuList').style.height="";
					}
					function cMenuListOverOff() {
						document.getElementById('cMenuList').style.overflow='hidden';
						document.getElementById('cMenuList').style.height="33px";
					}
				</script>
                
                
                <div class="cateMenu2Depth">
                	<div class="cTop"><h5 class="tit">주방가저/주방용품</h5></div>
                    <div class="cMenu" onmouseover="javasript:cMenuListOverOn();" onmouseout="javasript:cMenuListOverOff();">
                        <ul class="cMenuList" id="cMenuList" style="overflow:hidden; height:33px;">
                            <li><a href="#">조리용품</a><span class="txtEa">(145)</span></li>
                            <li><a href="#">식기보관용기</a><span class="txtEa">(23)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(145)</span></li>
                            <li><a href="#">식기보관용기</a><span class="txtEa">(23)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(42)</span></li>
                            <li><a href="#">패션잡화/화장품 </a><span class="txtEa">(21)</span></li>
                            <li><a href="#">조리용품</a><span class="txtEa">(1)</span></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                
                
                
                <div class="prodBest">
                	<div class="tit"><img src="/work/kbpoint/images/main/cateTitBest.gif" alt="Best of Best" /></div>
                	<div class="itemBoxWrap">
              		   <?php include("../product/itemBoxBest.php"); ?>
              		   <?php include("../product/itemBoxBest.php"); ?>
              		   <?php include("../product/itemBoxBest.php"); ?>
              		   <?php include("../product/itemBoxBest.php"); ?>
                    </div>
                </div>
                
                <div class="schResultHead">
                	<span class="cateTit">주방/생활/식품</span>  검색결과 <span class="schNum">22</span>개의 상품이 검색되었습니다 
                </div>
                
                <div class="moneyOption">
                	<ul class="arrayPrice">
                    	<li><a href="#"><img src="/work/kbpoint/images/main/depth3Tab01On.gif" alt="높은가격순" /></a></li>
                    	<li><a href="#"><img src="/work/kbpoint/images/main/depth3Tab02.gif" alt="낮은가격순" /></a></li>
                    	<li><a href="#"><img src="/work/kbpoint/images/main/depth3Tab03.gif" alt="MD추천순" /></a></li>
                    </ul>
                    <ul class="listStyle">
                    	<li><a href="#"><img src="/work/kbpoint/images/main/depth3Btn01.gif" alt="리스트보기" /></a></li>
                    	<li><a href="#"><img src="/work/kbpoint/images/main/depth3Btn02On.gif" alt="이미지보기" /></a></li>
                    </ul>
                </div>
                
                <?php include("../product/itemPaging.php"); ?>
                
                <!-- IF 3뎁스 리스트형 보기  -->
                <?php include("../product/2DepthStyleList.php"); ?>

                <!-- IF 3뎁스 이미지형 보기  -->
				<?php include("../product/2DepthStyleImg.php"); ?>

                <?php include("../product/itemPaging.php"); ?>
                
            </div>
            
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
