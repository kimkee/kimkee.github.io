
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="csBody">
<?php include("../include/commonInc.php"); ?>
<div class="csWrap">
    <div class="csCenter">
        <?php include("../include/header.php"); ?><?php include("../customer/csLocation.php"); ?>
        <div class="mainCsArea">
            <?php include("../customer/csLeftMenu.php"); ?>
            <div class="rightArea">
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csOrderTopVisual.jpg" alt="상품추천함" /></div>
                <div class="orderTop"><img src="/work/kbpoint/images/customer/myordertop.gif" alt="" /></div>
                <!-- 주문 리스트 -->
				<script type="text/javascript">
					function orderCancelPopup() {
					  window.open('csOrderCancel.php','deliverPopup','scrollbars=no,width=615,height=500,left=100,top=100');
					}
				</script>
                <div class="bbsHead">주문상품 및 배송정보</div>
                
               <ul class="bbsTab">
                    <li class="on"><a href="csOrderList.php">나의주문내역</a></li>
                    <li><a href="csPointList.php">나의포인트</a></li>
                </ul>
                
                <table cellspacing="0" border="1" class="bbsList bbsListOrder">
                    <thead>
                        <tr>
                            <th class="hd1 left">주문번호</th>
                            <th class="hd2">결제금액</th>
                            <th class="hd3">상품명</th>
                            <th class="hd4">주문상태</th>
                            <th class="hd5 right">취소/반품/교환/AS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">
                                <p>20110210000005</p>
                                <p><a href="#"><img src="/work/kbpoint/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                            </td>
                            <td class="bName"><span class="price">1,006,500원</span></td>
                            <td colspan="3" class="bTit">
                                <table cellspacing="0" class="bbsListOrderS">
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/kbpoint/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><span class="bHit"><a href="#"><img src="/work/kbpoint/images/customer/btnReq.gif" alt="신청" /></a></span></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/kbpoint/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/kbpoint/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><span class="bHit"><a href="#"><img src="/work/kbpoint/images/customer/btnReq.gif" alt="신청" /></a></span></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/kbpoint/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/kbpoint/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><span class="bHit"><a href="#"><img src="/work/kbpoint/images/customer/btnReq.gif" alt="신청" /></a></span></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/kbpoint/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                </table> 
                            </td>
                        </tr>
                        <tr>
                            <td class="bNum">
                                <p>20110210000005</p>
                                <p><a href="#"><img src="/work/kbpoint/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                            </td>
                            <td class="bName"><span class="price">6,500원</span></td>
                            <td colspan="3" class="bTit">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="padding:30px 0">
                                <p>주문/배송 내역이 없습니다.<a href="#"></a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php include("../customer/bbsPaging.php"); ?>
                <!-- 주문 리스트 -->
                <div class="csOrderGuide"> <img src="/work/kbpoint/images/customer/csOrderGuide.gif" alt="" /> </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>