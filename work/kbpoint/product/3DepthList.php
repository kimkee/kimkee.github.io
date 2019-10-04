
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody" class="body3Depth">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        
        <div class="shopHead">
        	<!--<div class="shopTit"><img src="/work/kbpoint/images/main/shopHeadT01.gif" alt="주방용품/주방가전" /></div> -->
            <?php include("../include/locationSelect.php"); ?>
        </div>
        <div class="mainShopArea Depth3Area">
            
            <div class="ctn3Depth">
            
                <?php include("../product/3DepthCate.php"); ?>

                <div class="schResultHead">
                	<span class="cateTit">주방/생활/식품</span>  검색결과 <span class="schNum">22</span>개의 상품이 검색되었습니다 
                </div>
                
				<?php include("../product/moneyOption.php"); ?>
                
                <?php include("../product/itemPaging.php"); ?>
                
                
                <-- IF 3뎁스 리스트형 보기  -->
                <?php include("../product/3DepthStyleList.php"); ?>

                
                <-- IF 3뎁스 이미지형 보기    -->
               
                <?php include("../product/prdLayerPop.php"); ?>
				<?php include("../product/3DepthStyleImg.php"); ?>

                
                <?php include("../product/itemPaging.php"); ?>
                
                
            </div>
            
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>