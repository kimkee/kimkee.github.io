
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <?php include("../product/searchHead.php"); ?>
        
        <div class="mainShopArea searchArea">
            <div class="ctnSearch">
                
                <?php include("../product/searchTopBox.php"); ?>
                
                <div class="schBrand">
                	<div class="checkList">
                   		<span class="tit"><img src="/work/kbpoint/images/main/schBrdTit.gif" alt="브랜드" /></span>
                    	<ul class="list">
                        	<li><input type="checkbox" class="checkbox" value="" /> 킨룩<span class="cNum">(20)</span></li>
                        	<li><input type="checkbox" class="checkbox" value="" /> SOUP<span class="cNum">(20)</span></li>
                        	<li><input type="checkbox" class="checkbox" value="" /> 96NY<span class="cNum">(20)</span></li>
                        	<li><input type="checkbox" class="checkbox" value="" /> ENC<span class="cNum">(20)</span></li>
                        	<li><input type="checkbox" class="checkbox" value="" /> GGP<span class="cNum">(20)</span></li>
                        </ul> 
                    </div>
                    <!--<div class="btn"><a href="#"><img src="/work/kbpoint/images/main/schBrdBtn1.gif" alt="브랜드검색" /></a> <a href="#"><img src="/work/kbpoint/images/main/schBrdBtn2.gif" alt="더보기" /></a> </div> -->
                </div>
                <div class="clear"></div>
                <div class="schMoneyOption">
                    <ul class="arrayPrice">
                        <li><a href="#">정확도순</a></li>
                        <li class="on"><a href="#">판매량순</a></li>
                        <li><a href="#">낮은가격순</a></li>
                        <li><a href="#">높은가격순</a></li>
                        <li><a href="#">신상품순</a></li>
                    </ul>
                    <ul class="listStyle">
                        <li><a href="#"><img src="/work/kbpoint/images/main/schTabBtn1.gif" alt="리스트보기" /></a></li>
                        <li><a href="#"><img src="/work/kbpoint/images/main/schTabBtn2On.gif" alt="이미지보기" /></a></li>
                    </ul>
                </div>
                
                <?php include("../product/searchOption.php"); ?>

                
                <?php include("../product/itemPaging.php"); ?>
                
                <!-- IF 3뎁스 리스트형 보기  -->
                <?php include("../product/3DepthStyleList.php"); ?>
                
                <!-- IF 3뎁스 이미지형 보기  -->
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