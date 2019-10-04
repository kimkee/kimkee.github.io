
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
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csOrderTopVisual.jpg" alt="상품추천함" /></div>
            	<!-- 주문 보기 -->
                <div class="bbsHead">주문상품 및 배송정보</div>
                <table cellspacing="0" class="orderTable1">
                    <tr>
                        <th>주문번호</th>
                        <td>20110210000005</td>
                        <th>주문자 전화번호</th>
                        <td>010-5555-5585</td>
                        <th>주문일</th>
                        <td>2011.02.23</td>
                    </tr>
                </table>

                <div class="orderFormTit">주문상품 및 배송정보</div>
                
                
                <table cellspacing="0" class="orderTable2">
                    <tr>
                        <th>주문상태</th>
                        <th>상품명</th>
                        <th>가격</th>
                        <th>수량</th>
                    </tr>
                    <tr>
                        <td class="aCenter"><span class="tcGreen">입금완료</span></td>
                        <td>[애완용품/멍도리]벨버드 린스 400ml  /  속성 : 없음</td>
                        <td>4,000원</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="th1">받으시는분</td>
                        <td colspan="3">서우석</td>
                    </tr>
                    <tr>
                        <td class="th1">배송지주소</td>
                        <td colspan="3">134-060  서울 강동구 둔촌동 둔촌주공아파트 421-408</td>
                    </tr>
                    <tr>
                        <td class="th1">전화번호1</td>
                        <td colspan="3">031-2143-5555</td>
                    </tr>
                    <tr>
                        <td class="th1">전화번호2</td>
                        <td colspan="3">031-2143-5555</td>
                    </tr>
                    <tr>
                        <td class="th1">배송시 요청사항</td>
                        <td colspan="3">빠른배송 바랍니다.</td>
                    </tr>
                </table>

                <div class="orderFormTit">결제정보</div>
                <table cellspacing="0" class="orderTable2">
                    <tr>
                        <td class="th1 w120">총 상품금액</td>
                        <td>6,500원</td>
                    </tr>
                    <tr>
                        <td class="th1">결제하신 금액</td>
                        <td><strong class="tcOrange">6,500원</strong></td>
                    </tr>
                    <tr>
                        <td class="th1">전화번호1</td>
                        <td><span class="tcOrange">3원</span></td>
                    </tr>
                    <tr>
                        <td class="th1">전화번호2</td>
                        <td><span class="tcOrange">6,497원</span>  <a href="#" class="csOrderPrint"><img src="/work/kbpoint/images/customer/csOrderPrint.gif" alt="신용카드영수증인쇄" width="108" height="19" /></a></td>
                    </tr>
                </table>
                <script type="text/javascript">
					function csTaxformPop() {
					  window.open('csTaxformPop.php','csTaxformPop','scrollbars=no,width=715,height=550,left=100,top=100');
					}
				</script>
                <div class="btnList">
                    <a href="javascript:csTaxformPop();"><img src="/work/kbpoint/images/customer/btnTax.gif" alt="세금계산서신청" /></a>
                    <a href="#"><img src="/work/kbpoint/images/customer/btnOrderList.gif" alt="주문리스트" /></a>                 
                </div>
                
                <!-- 주문 보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>