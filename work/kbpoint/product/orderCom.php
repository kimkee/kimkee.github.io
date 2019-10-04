
<?php include("../include/commonMeta.php"); ?>

</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        
        <div class="basketHead">
            <?php include("../include/locationSelect.php"); ?>
        </div>
        
        <div class="mainShopArea basketArea">
            <div class="basketStep"><img src="/work/kbpoint/images/main/basketTop03.jpg" alt="장바구니" /></div>
            <div class="basketStep"><img src="/work/kbpoint/images/main/OrderComMsg.gif" alt="주문이 정상적으로 완료되었습니다. 구매해주셔셔 감사합니다." /></div>
            
            <div class="orderNumberBox">주문번호 : <span class="tcOrange">20110401A123456789</span></div>
            <div class="basketMsg">결제하지 않은 6개 상품이 장바구니에 남아있습니다. <a href="orderList.php"><img src="/work/kbpoint/images/main/btnOrderCom3.gif" alt="장바구니가기" /></a></div>
            
            <-- 단수배송 -->
            <div class="orderComTit">배송정보</div>
            <table cellspacing="0" class="orderForm orderFormCom">
                <tr class="tLine">
                    <th class="th1">주문하신분</th>
                    <td class="td1">이희경</td>
                    <th class="th2">핸드폰번호</th>
                    <td class="td2">
                    	010-XXXX-XXXX</td>
                    <th class="th3">이메일 </th>
                    <td class="th4">test@hmall.com</td>
                </tr>
                <tr>
                    <th>받으신분</th>
                    <td colspan="5">이희경</td>
                </tr>
                <tr>
                    <th>전화번호1</th>
                    <td colspan="5">
                    	010-XXXX-XXXX                    </td>
                </tr>
                <tr>
                    <th>전화번호2</th>
                    <td colspan="5">
                    	010-XXXX-XXXX                    </td>
                </tr>
                <tr>
                    <th>배송지 주소</th>
                    <td colspan="5">서울강동구 천호동 현대홈쇼핑 8층</td>
                </tr>
                <tr>
                    <th>배송시 요청사항</th>
                    <td colspan="5">빨리배송해주써뉘~!~!~!</td>
                </tr>
            </table>
            
            < -- 복수배송 -->
            <div class="orderComTit">배송정보</div>
            <table cellspacing="0" class="orderForm orderFormCom orderFormComHead">
                <tr class="tLine">
                    <th class="th1">주문하신분</th>
                    <td class="td1">이희경</td>
                    <th class="th2">핸드폰번호</th>
                    <td class="td2">
                    	010-XXXX-XXXX</td>
                    <th class="th3">이메일 </th>
                    <td class="th4">test@hmall.com</td>
                </tr>
            </table>
            <div class="orderAdrsList">
                <table cellspacing="0" class="orderAdrTable">
                    <tr>
                        <th class="bNum">NO.</th>
                        <th class="bName">받으시는분</th>
                        <th class="bPhone">전화번호1</th>
                        <th class="bAds">배송지주소</th>
                        <th class="bMemo">배송시요청사항</th>
                        <th class="bEa">수량/내역</th>
                    </tr>
                </table>
                <div class="oderAdrTableBox">
                    <table cellspacing="0" class="orderAdrTable orderAdrTableList">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                    </table>
                </div>
                <div class="totalAddPay">
                    <div class="tLeft"></div>
                    <div class="tRight">추가배송비합계 : <strong class="tcBlue">298,000원</strong></div>
                </div>
            </div>
            
            < -- -->
            
            
            
            <div class="orderComBox">
            	<div class="oLeft">
                	<div class="orderComTit">할인정보</div>
            	    <table cellspacing="0" class="orderComDcInfo">
            	        <tr class="totPayTop">
            	            <th>총 상품금액</th>
                            <td><span class="totPay">290,000원</span></td>
                        </tr>
            	        <tr class="tDC">
            	            <th>
                            	<p>일시불할인</p>
                            	<p>깜짝할인쿠폰</p>
                            	<p>일시불할인</p>
                            </th>
                            <td>
                            	<p>-5,000원</p>
                            	<p>-5,000원</p>
                            	<p>-5,000원</p>
                            </td>
                        </tr>
            	        <tr>
            	            <th>할인합계금액</th>
                            <td>15,000원</td>
                        </tr>
            	        <tr>
            	            <th>배송비</th>
                            <td>+ 2,500원 </td>
                        </tr>
            	        <tr class="totPayBot">
            	            <th>최종 결제금액</th>
                            <td><span class="totPayCom">278,300원 원</span></td>
                        </tr>
           	        </table>
                </div>
            	<div class="oRight">
                	<div class="orderComTit">결제정보</div>
            	    <table cellspacing="0" class="orderComList2">
            	        <tr class="totPayTop">
            	            <th>총상품금액</th>
                            <td><span class="totPayCom">198,000 원</span></td>
                        </tr>
            	        <tr>
            	            <th class="ts">사용포인트리</th>
                            <td class="ts">200,500 원</td>
                        </tr>
            	        <tr class="totPayBot">
            	            <th class="ts">신용카드</th>
                            <td class="ts">200,500 원</td>
                        </tr>
           	        </table>
        	    </div>
                <div class="clear"></div>
            </div>
            
            <div class="btnList"><a href="/work/kbpoint/customer/csOrderList.php"><img src="/work/kbpoint/images/main/btnOrderCom1.gif" alt="주문내역보기" /></a> <a href="/b2e/jsp/KP/"><img src="/work/kbpoint/images/main/btnOrderCom2.gif" alt="홈으로" /></a></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>