
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        
        <div class="productHead">
            <?php include("../include/locationSelect.php"); ?>
        </div>
        
        <div class="mainShopArea prdViewArea">
            <h3 class="productName">퀸센스 실속 다이아몬드 후라이팬 5종(20cm,28cm,30cm,궁중28cm,뚜껑28cm)  </h3>
            <div class="prdViewLeft">
            	
				<?php include("../product/viewProductTop.php"); ?>

				<!-- 상품설명 -->
                <a name="viewDetail1"></a>          
                <ul class="prdViewTab">
                    <li><a href="#viewDetail1" class="on">상품설명</a></li>
                    <li><a href="#viewDetail2">배송|교환|반품</a></li>
                    <li><a href="#viewDetail3">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="#viewDetail4">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <?php include("../product/viewProductDetail.php"); ?>
                
                <!-- 배송| 교환 -->
                <a name="viewDetail2"></a>
                <ul class="prdViewTab">
                    <li><a href="#viewDetail1">상품설명</a></li>
                    <li><a href="#viewDetail2" class="on">배송|교환|반품</a></li>
                    <li><a href="#viewDetail3">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="#viewDetail4">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <?php include("../product/viewProductGuide.php"); ?>
                
                <!-- 상품평 -->
                <a name="viewDetail3"></a>          
                <ul class="prdViewTab">
                    <li><a href="#viewDetail1">상품설명</a></li>
                    <li><a href="#viewDetail2">배송|교환|반품</a></li>
                    <li><a href="#viewDetail3" class="on">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="#viewDetail4">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <?php include("../product/viewProductAss.php"); ?>
                
                <!-- 상품Q&A -->
                <a name="viewDetail4"></a> 
                <ul class="prdViewTab">
                    <li><a href="#viewDetail1">상품설명</a></li>
                    <li><a href="#viewDetail2">배송|교환|반품</a></li>
                    <li><a href="#viewDetail3">상품평<span class="tNum">(3)</span></a></li>
                    <li><a href="#viewDetail4" class="on">상품 Q&amp;A <span class="tNum">(3)</span></a> </li>
                </ul>
                <?php include("../product/viewProductQna.php"); ?>
                
                <!-- 상품평 식품류 -->
                <a name="viewDetail5"></a> 
                <ul class="prdViewTab">
                    <li><a href="#viewDetail1">상품설명</a></li>
                    <li><a href="#viewDetail2">배송|교환|반품</a></li>
                    <li><a href="#viewDetail5" class="on">상품만족도</a> </li>
                </ul>
                <?php include("../product/viewProductAssFood.php"); ?>


            </div>

            <?php include("../product/viewProductRight.php"); ?>
            
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>