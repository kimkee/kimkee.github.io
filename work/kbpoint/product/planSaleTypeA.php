
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody" class="body3Depth">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        
        <div class="planSaleTop"><img src="/work/kbpoint/images/planSaleImg1.jpg" alt="기획전이미지" width="910" /></div>
        
        <div class="mainShopArea Depth3Area">
            
            <div class="ctn3Depth">
            
            	<?php include("../product/planSaleCate.php"); ?>
                


                <?php include("../product/prdLayerPop.php"); ?> <!-- 미리보기 레이어 -->
                
				<!-- 아이템리스트 4개씩 -->
                
                <div class="ItemList3Depth itemListPlanSaleTypeA">
                    <div class="itemBoxWrap">
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <div class="itemLine"></div> <!-- 4마다 줄바꿈 -->
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <?php include("../product/itemBox.php"); ?>
                        <div class="clear"></div>
                    </div>
                </div>

                <?php include("../product/itemPaging.php"); ?> <!-- 페이징 1.2.3.4. -->
                
                
            </div>
            
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>