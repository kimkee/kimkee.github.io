
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea mainShopAreaPlanSale">
            <div class="leftArea">
            	<?php include("../include/leftMenu.php"); ?>
            </div>

            <div class="contents">
                <div class="planSaleTop"><img width="740" src="/work/citibank/images/main/planSaleTopBanner.jpg"  alt="기획전이미지"/></div>
                
                <div class="moneyOption">
                	<ul class="arrayPrice">
                    	<li><a href="#" class="on">인가상품순</a></li>
                    	<li><a href="#">신상품순</a></li>
                    	<li><a href="#">낮은가격순</a></li>
                    	<li><a href="#">높은가격순</a></li>
                    </ul>
                    <div class="listStyle">
                    	<img src="/work/citibank/images/main/optTabTit.gif" alt="상품보기" />
                        <select class="select" id="listStyleSelect">
                            <option>20개</option>
                        </select>
                    </div>
                </div>
                
                <?php include("../product/itemPaging.php"); ?>
                
                <?php include("../product/prdLayerPop.php"); ?>
                <div class="ItemList2Depth">
                    <div class="itemBoxWrap">
                        <?php include("itemBox.php"); ?>
						<?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <div class="itemLine"></div>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <?php include("itemBox.php"); ?>
                        <div class="itemLine"></div>
                    </div>
                </div>
                
                <?php include("../product/itemPaging.php"); ?>
                
            </div>
			<?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
            
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>