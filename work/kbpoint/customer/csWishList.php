
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
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
                <!-- 주문 리스트 -->
                <div class="bbsHead">나의 쇼핑찜</div>
                <?php include("../product/prdLayerPop.php"); ?>
                <table cellspacing="0" class="baketWishList">
                    <tr>
                        <th><span class="bCheck">
                            <input type="checkbox" name="checkbox2" />
                            </span></th>
                        <th colspan="6"><a href="#"><img src="/work/kbpoint/images/customer/btnWishSelDel.gif" alt="선택상품삭제" width="75" height="19" /> </a> <a href="#"><img src="/work/kbpoint/images/customer/btnWishBuy.gif" alt="선택상품구매" width="75" height="19" /></a> <a href="#"><img src="/work/kbpoint/images/customer/btnWishbasket.gif" alt="장바구니담기" width="75" height="19" /> </a></th>
                    </tr>
                    <tr>
                        <td class="bCheck">
                            <input type="checkbox" name="checkbox" />
                        </td>
                        <td class="bImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="제품" /></td>
                        <td class="bName">
                            <p><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                            <p><a href="javascript:prdLayerPopOn();"><img src="/work/kbpoint/images/customer/btnWishZoom.gif" alt="미리보기" /></a> 상품평(21) </p>
                        </td>
                        <td class="bOpt">
                            <select name="select">
                                <option>옵션</option>
                            </select>
                        </td>
                        <td class="bPrice">
                            <p class="priceCommon">325,000원</p>
                            <p class="priceSale">
                            	<span class="icoBenefit"><strong>혜택모음가</strong></span>
                          	  	308,750원
                            </p>
                        </td>
                        <td class="benefit">
                            <p><span class="icoSuprice"><strong>깜짝 14,950</strong></span></p>
                            <p><span class="icoCoupon"><strong>쿠폰 20%</strong></span></p>
                            <p><span class="icoMoo"><strong>무 3</strong></span></p>
                            <p><span class="icoPayOne"><strong>일시불 2,990</strong></span></p>
                        </td>
                        <td class="bPoint">
                            <p><a href="#"><img src="/work/kbpoint/images/customer/btnWishBuy2.gif" alt="바로구매" /></a></p>
                            <p><a href="#"><img src="/work/kbpoint/images/customer/btnWishbasket2.gif" alt="장바구니" /></a></p>
                        </td>
                    </tr>
                    <tr>
                        <th><span class="bCheck">
                            <input type="checkbox" name="checkbox2" />
                            </span></th>
                        <th colspan="6"><a href="#"><img src="/work/kbpoint/images/customer/btnWishSelDel.gif" alt="선택상품삭제" width="75" height="19" /> </a> <a href="#"><img src="/work/kbpoint/images/customer/btnWishBuy.gif" alt="선택상품구매" width="75" height="19" /></a> <a href="#"><img src="/work/kbpoint/images/customer/btnWishbasket.gif" alt="장바구니담기" width="75" height="19" /> </a></th>
                    </tr>
                </table>
                <?php include("../customer/bbsPaging.php"); ?>
                <!-- 주문 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
