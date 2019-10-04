
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
                <div class="csSubTopVisual" style="margin-bottom:10px;"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
            	<!-- 상품추천 리스트 -->
            	<div class="bbsHead">다운로드 쿠폰조회</div>
                <div class="bbsHead2"><strong>현재쿠폰 보유&amp; 사용현황</strong> <span class="txt">사용가능하나 쿠폰 : <span class="tcGreen">4장</span></span></div>
				<script type="text/javascript">
					function csCouponPop() {
					  window.open('csCouponPop.php','csCouponPop','scrollbars=no,width=715,height=300,left=100,top=100');
					}
				</script>
                <table cellspacing="0" border="1" class="bbsList">
                    <thead>
                        <tr>
                            <th class="left">쿠폰명</th>
                            <th><span>쿠폰종류</span></th>
                            <th>제한사항</th>
                            <th><span>주문번호</span></th>
                            <th><span>사용완료</span></th>
                            <th><span>남은일자</span></th>
                            <th class="right"><span>사용일</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">신규가입감사쿠폰</td>
                            <td class="bName">10,000원할인</td>
                            <td class="bName"><p><a href="javascript:csCouponPop();"> <img src="/jsp/CP/images/customer/btnCoupon1.gif" alt="적용상품보기" /></a></p> 
                            [애완용품/멍도리]벨버드 린스 400ml</td>
                            <td class="bDate">20110210000005</td>
                            <td class="bHit">2011.12.25</td>
                            <td class="bHit"><a href="#">6일</a></td>
                            <td class="bHit"><a href="#">미사용</a></td>
                        </tr>
                        <tr>
                            <td class="bNum">신규가입감사쿠폰</td>
                            <td class="bName">10,000원할인</td>
                            <td class="bName"><p><a href="javascript:csCouponPop();"> <img src="/jsp/CP/images/customer/btnCoupon1.gif" alt="적용상품보기" /></a></p> 
                            [애완용품/멍도리]벨버드 린스 400ml</td>
                            <td class="bDate">20110210000005</td>
                            <td class="bHit">2011.12.25</td>
                            <td class="bHit">6일</td>
                            <td class="bHit">2011.12.25 사용</td>
                        </tr>
                    </tbody>
                </table>
                
                <?php include("../customer/bbsPaging.php"); ?>
                
            	<!-- 상품추천 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>