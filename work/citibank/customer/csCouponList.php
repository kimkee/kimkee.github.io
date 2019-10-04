
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea">
            <div class="leftArea">
                <?php include("csLeftMenu.php"); ?>
            </div>
            <div class="contents mainCsArea">
            	<div class="csHead">
            	    <div class="tit"><img src="/work/citibank/images/customer/csHeadTitCoupon.gif" alt="다운로드쿠폰조회" /></div>
            	    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
            	</div>
                <div class="csSubTopVisual"><img src="/work/citibank/images/customer/csCouponTopVisual.jpg" alt="다운로드쿠폰조회" /></div>
                <!-- 본문 -->
                <div><img src="/work/citibank/images/customer/csCouponTit.gif" alt="" style="vertical-align:middle; margin-right:20px;"/><span class="txt size11">사용가능하나 쿠폰 : <span class="tcBlue"><strong>4</strong>장</span></span></div>
				<script type="text/javascript">
					function csCouponPop() {
					  window.open('csCouponPop.php','csCouponPop','scrollbars=no,width=640,height=260,left=100,top=100');
					}
				</script>
                <table cellspacing="0" border="1" class="bbsList csCouponList">
                    <thead>
                        <tr>
                            <th class="w90">쿠폰명</th>
                            <th class="w90">쿠폰종류</th>
                            <th>제한사항</th>
                            <th class="w90">주문번호</th>
                            <th class="w80">사용완료</th>
                            <th class="w50">남은일자</th>
                            <th class="w90">사용일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">신규가입감사쿠폰</td>
                            <td class="bName">10,000원할인</td>
                            <td class="bName"><p><a href="javascript:csCouponPop();"> <img src="/work/citibank/images/customer/btnCoupon1.gif" alt="적용상품보기" /></a></p> 
                            [애완용품/멍도리]벨버드 린스 400ml</td>
                            <td class="bDate">20110210000005</td>
                            <td class="bHit">2011.12.25</td>
                            <td class="bHit"><a href="#">6일</a></td>
                            <td class="bHit"><a href="#">미사용</a></td>
                        </tr>
                        <tr>
                            <td class="bNum">신규가입감사쿠폰</td>
                            <td class="bName">10,000원할인</td>
                            <td class="bName"><p><a href="javascript:csCouponPop();"> <img src="/work/citibank/images/customer/btnCoupon1.gif" alt="적용상품보기" /></a></p> 
                            [애완용품/멍도리]벨버드 린스 400ml</td>
                            <td class="bDate">20110210000005</td>
                            <td class="bHit">2011.12.25</td>
                            <td class="bHit">6일</td>
                            <td class="bHit">2011.12.25 사용</td>
                        </tr>
                    </tbody>
                </table>
                
                <?php include("bbsPaging.php"); ?>

                <!-- 본문 -->
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
