
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea">
            <div class="leftArea">
            	<?php include("../include/leftMenu.php"); ?>
            </div>
            <div class="schTop">
            	<form action="../product/search.php">
                    <span class="tit"><img src="/work/citibank/images/main/schTopTit.gif" alt="상품검색" /></span>
                    <input type="text" class="keyword" />
                    <input type="image" src="/work/citibank/images/main/schTopBtn.gif" alt="검색" />
                </form> 
            </div>
            
            
            <div class="contents prdViewArea">
            	<div class="shopHead">
                	<h3>식품/유아동</h3>
                </div>
            	
                <div class="prdViewLeft">
                    
                    <?php include("../product/viewProductTop.php"); ?>
    
                    <!-- 상품설명 -->
                    <a name="viewDetail1"></a>          
                    <ul class="prdViewTab">
                        <li class="on"><a href="#viewDetail1">상품설명</a></li>
                        <li><a href="#viewDetail2">배송|교환|반품</a></li>
                    </ul>
                    <?php include("../product/viewProductDetail.php"); ?>
                    
                    <!-- 배송| 교환 -->
                    <a name="viewDetail2"></a>
                    <ul class="prdViewTab">
                        <li><a href="#viewDetail1">상품설명</a></li>
                        <li class="on"><a href="#viewDetail2">배송|교환|반품</a></li>
                    </ul>
                    <?php include("../product/viewProductGuide.php"); ?>
                </div>
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>