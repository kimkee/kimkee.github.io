
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
                    <div class="tit"><img src="/work/citibank/images/customer/csHeadTitOrder.gif" alt="나의주문배송조회" /></div>
                    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
                </div>
                <div class="csSubTopVisual"><img src="/work/citibank/images/customer/csOrderTopVisual.jpg" alt="주문내역" /></div>
                <div class="orderFormTit"><img src="/work/citibank/images/customer/orderFormTit1.gif" alt="주문상세조회" /></div>
                <table cellspacing="0" class="orderTable1">
                    <tr>
                        <th class="w100">주문번호</th>
                        <td>20110210000005</td>
                        <th>주문자 명</th>
                        <td>이희경선임</td>
                        <th>주문자 전화번호</th>
                        <td>010-5555-5585</td>
                        <th>주문일</th>
                        <td>2011.02.23</td>
                    </tr>
                </table>
                <table cellspacing="0" class="orderTable2" style="margin-bottom:0; border-bottom:none;">
                    <tr>
                        <th class="w100">주문상태</th>
                        <th>상품명/옵션</th>
                        <th>&nbsp;</th>
                        <th>가격</th>
                        <th>수량</th>
                    </tr>
                    <tr>
                        <td class="aCenter">
                            <p>배송준비</p>
                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                        </td>
                        <td>
                            <p>[애완용품/멍도리]벨버드 린스 400ml  /  속성 : 없음</p>
                        </td>
                        <td class="aCenter">
                            <p><a href="#"><img src="/work/citibank/images/customer/basketBtnMemo.gif" alt="주문메모" /></a></p>
                        </td>
                        <td class="aCenter">4,000원</td>
                        <td class="aCenter">1</td>
                    </tr>
                    <tr>
                        <td class="aCenter">
                            <p>배송준비</p>
                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                        </td>
                        <td>
                            <p>[애완용품/멍도리]벨버드 린스 400ml  /  속성 : 없음</p>
                        </td>
                        <td class="aCenter">
                            <p><a href="#"><img src="/work/citibank/images/customer/basketBtnMemo.gif" alt="주문메모" /></a></p>
                        </td>
                        <td class="aCenter">4,000원</td>
                        <td class="aCenter">1</td>
                    </tr>
                </table>
                <table cellspacing="0" class="orderTable2">
                    <tr>
                        <td class="th1 w100">받으시는분</td>
                        <td>서우석</td>
                        <td class="th1 w100">주문일</td>
                        <td>2011.04.07</td>
                    </tr>
                    <tr>
                        <td class="th1">배송지주소</td>
                        <td colspan="3">134-060  서울 강동구 둔촌동 둔촌주공아파트 421-408</td>
                    </tr>
                    <tr>
                        <td class="th1">전화번호1</td>
                        <td>031-2143-5555</td>
                        <td class="th1">연락처</td>
                        <td>02-111-1111</td>
                    </tr>
                    <tr>
                        <td class="th1">배송시 요청사항</td>
                        <td colspan="3">빠른배송 바랍니다.</td>
                    </tr>
                </table>
                
                <div class="btnBox">
                    <a href="javascript:;"><img src="/work/citibank/images/customer/csOrderBtnOpen.gif" alt="전체열기" /></a>
                    <!--<a href="javascript:;"><img src="/work/citibank/images/customer/csOrderBtnClose.gif" alt="전체닫기" /></a> -->
                </div>
                
                
                <div class="orderFormTit"><img src="/work/citibank/images/customer/orderFormTit2.gif" alt="결제정보" /></div>
                <script type="text/javascript">
					function csReceiptPop() {
					  window.open('csReceiptPop.php','csReceiptPop','scrollbars=no,width=400,height=750,left=100,top=100');
					}
				</script>
                <table cellspacing="0" class="orderTable2">
                    <tr>
                        <td class="th1 w100">총 판매금액</td>
                        <td class="aRight"><strong>6,500원</strong></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="th1">총 할인금액</td>
                        <td class="aRight"><strong class="tcBlue">500원</strong></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="th1">최종결제금액</td>
                        <td class="aRight"><strong class="tcOrange">6,497원</strong></td>
                        <td>(사용포인트 4,000원 | 신용카드 20,000원)<a href="javascript:csReceiptPop();" class="csOrderPrint"><img src="/work/citibank/images/customer/csOrderPrint.gif" alt="신용카드영수증인쇄" /></a></td>
                    </tr>
                </table>
                <script type="text/javascript">
					function csTaxformPop() {
					  window.open('csTaxformPop.php','csTaxformPop','scrollbars=no,width=640,height=520,left=100,top=100');
					}
				</script>
                <div class="btnList"> <a href="javascript:csTaxformPop();"><img src="/work/citibank/images/customer/btnTax.gif" alt="세금계산서신청" /></a> <a href="#"><img src="/work/citibank/images/customer/btnOrderList.gif" alt="주문리스트" /></a> </div>
				
                <div class="orderFormInfo"><img src="/work/citibank/images/customer/orderFormInfo.gif" alt="" /></div>
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
