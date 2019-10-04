
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
            <div class="contents basketArea">
                <div class="basketStep"><img src="/work/citibank/images/main/basketTop03.jpg" alt="장바구니" /></div>
                <div class="basketStep"><img src="/work/citibank/images/main/OrderComMsg.gif" alt="주문이 정상적으로 완료되었습니다. 구매해주셔셔 감사합니다." /></div>
                <div class="orderNumberBox">주문번호 : <span class="tcOrange">20110401A123456789</span></div>
                <div class="basketMsg">결제하지 않은 6개 상품이 장바구니에 남아있습니다. <a href="basketList.php"><img src="/work/citibank/images/main/btnOrderCom3.gif" alt="장바구니가기" /></a></div>
                
                <div class="orderTit">주문상세정보</div>
                <table cellspacing="0" class="baketList orderList" style="margin-bottom:20px;">
                    <tr>
                        <td class="bImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="제품" /></td>
                        <td class="bName">
                            <p class="iName"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                            </td>
                        <td class="bgGray">
                            <p>외 10개</p>
                        </td>
                    </tr>
                </table>
                
                <div class="orderTit">주문완료정보</div>
                <div class="orderComBox">
                    <div class="oLeft">
                        <table cellspacing="0" class="orderComInfo">
                            <tr>
                                <th>주문하시는분</th>
                                <td>이희경</td>
                            </tr>
                            <tr>
                                <th>전화번호 </th>
                                <td>010-xxx-xxxx <span class="tcOrange">(*주문 배송 확인시 필요한 번호)</span> </td>
                            </tr>
                            <tr>
                                <th>휴대폰번호</th>
                                <td>070 - 555 - 1111 </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td>kimkee@naver.com</td>
                            </tr>
                            <tr>
                                <th>받이시는분</th>
                                <td>홍길순</td>
                            </tr>
                            <tr>
                                <th>배송지주소</th>
                                <td>138-85               서울 강동구 천호동 454-2 현대홈쇼핑 Hmall </td>
                            </tr>
                            <tr>
                                <th>배송시요청사항</th>
                                <td>사람이 없으면 경비실 열쇠 1111누르고 202호 앞에 놓아주세요 </td>
                            </tr>
                        </table>
                    </div>
                
                                    
                    <div class="btnBox">
                    	<a href="javascript:;"><img src="/work/citibank/images/main/basketOrderComBtnOpen.gif" alt="전체열기" /></a>
                    	<!--<a href="javascript:;"><img src="/work/citibank/images/main/basketOrderComBtnClose.gif" alt="전체닫기" /></a> -->
                    </div>
                    
                    <div class="orderTit">최종결제정보</div>
                    <div class="oRight">
                        <table cellspacing="0" class="orderComList">
                            <tr>
                                <th>총 상품금액</th>
                                <td> <strong class="totalPrice">31,198,000</strong> 원</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>총 할인금액</th>
                                <td><strong class="tcBlue">1,000 </strong> 원</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th class="ts">최종 결제 금액</th>
                                <td class="ts"> <strong class="totalPrice">1,198,000</strong> 원</td>
                                <td class="aLeft">(=총 판매금액 1,000,000 - 총 할인금액 1,000,000원)</td>
                            </tr>
                        </table>
                        <div class="btnList"><a href="/work/citibank/customer/csOrderList.php"><img src="/work/citibank/images/main/btnOrderCom1.gif" alt="주문내역보기" /></a> <a href="javascript:history.back();"><img src="/work/citibank/images/main/btnHistBack2.gif" alt="이전가기" /></a> </div>
                    </div>
                    <div class="clear"></div>
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
