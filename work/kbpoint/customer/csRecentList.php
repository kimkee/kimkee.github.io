
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="csBody">
<?php include("../include/commonInc.php"); ?>
<div class="csWrap">
    <div class="csCenter">
        <?php include("../include/header.php"); ?>
        <?php include("../customer/csLocation.php"); ?>
        <div class="mainCsArea">
            <?php include("../customer/csLeftMenu.php"); ?>
            <div class="rightArea">
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
                <!-- 최근본 리스트 -->
                <div class="bbsHead">나의 최근 본 상품</div>
                <?php include("../product/prdLayerPop.php"); ?>
                <table cellspacing="0" class="csRecentList">
                    <tr>
                        <td class="bImg"><a href="/B2E/ViewProduct_KB.do?ItemCode=2012441229"> <img height="60" width="60" alt="제품" src="http://image.hmall.com/static/image/product/small/20129/small2012441229.jpg" /></a></td>
                        <td class="bName">
                            <a href="#">키친아트 직화 바베큐오븐 키친아트 직화 바베큐오븐 키친아트 직화 </a>
                            <p><a href="javascript:prdLayerPopOn('2012441229', '');"> <img alt="확대" src="http://image.hmall.com/static/b2b/image/KP/images/customer/btnWishZoom.gif" /></a> </p></td>
                        <td class="benefit"><p><span class="icoCoupon"><strong>쿠폰2000%</strong></span></p>
                            <p><span class="icoSuprice"><strong>깜짝할인4980</strong></span></p></td>
                        <td class="bPrice">
                            <p class="priceCommon">49,800원 </p>
                            <p class="priceSale">
	                            <p><span class="icoBenefit"><strong>혜택모음가</strong></span></p>
                                <p class="priceSale">42,820원</p>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="bImg"><a href="/B2E/ViewProduct_KB.do?ItemCode=2012441229"> <img height="60" width="60" alt="제품" src="http://image.hmall.com/static/image/product/small/20129/small2012441229.jpg" /></a></td>
                        <td class="bName">
                            <a href="#">키친아트 직화 바베큐오븐 키친아트 직화 바베큐오븐 키친아트 직화 </a>
                            <p><a href="javascript:prdLayerPopOn('2012441229', '');"> <img alt="확대" src="http://image.hmall.com/static/b2b/image/KP/images/customer/btnWishZoom.gif" /></a> </p></td>
                        <td class="benefit"><p><span class="icoCoupon"><strong>쿠폰2000%</strong></span></p>
                            <p><span class="icoSuprice"><strong>깜짝할인4980</strong></span></p></td>
                        <td class="bPrice">
                            <p class="priceCommon">49,800원 </p>
                            <p class="priceSale">
	                            <span class="icoBenefit"><strong>혜택모음가</strong></span>
                                42,820원
                            </p>
                        </td>
                    </tr>
                </table>
				<?php include("../customer/bbsPaging.php"); ?>
                <!-- 최근본 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>