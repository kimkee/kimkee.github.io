
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
                <div class="orderTop"><img src="/work/citibank/images/customer/myordertop.gif" alt="" /></div>
                <script type="text/javascript">
					function orderCancelPopup() {
					  window.open('csOrderCancel.php','deliverPopup','scrollbars=no,width=615,height=500,left=100,top=100');
					}
				</script>
                <!--
				<ul class="bbsTab">
                    <li><a href="csOrderList.php"><img src="/work/citibank/images/customer/myorderTab01On.gif" alt="나의주문내역" /></a></li>
                    <li><a href="csPointList.php"><img src="/work/citibank/images/customer/myorderTab02.gif" alt="나의포인트" /></a></li>
                </ul> 
                -->
                <table cellspacing="0" border="1" class="bbsListNew bbsListOrder">
                    <thead>
                        <tr>
                            <th class="w80 left">주문번호</th>
                            <th class="w80">결제금액</th>
                            <th class="right">
                            	
                                <table cellspacing="0" class="bbsListOrderS">
                                    <tr>
                                        <th class="bTit">상품명</th>
                                        <th class="bBtn">주문상태</th>
                                        <th class="bBtn2">취소/반품/교환/AS</th>
                                    </tr>
                                </table>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">
                                <p>20110210000005</p>
                                <p><a href="csOrderView.php"><img src="/work/citibank/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                            </td>
                            <td class="bName"><span class="tcBlue">1,006,500원</span></td>
                            <td class="bTit">
                                <table cellspacing="0" class="bbsListOrderS">
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnReq.gif" alt="신청" /></a></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/citibank/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnReq.gif" alt="신청" /></a></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/citibank/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php"> 버드 린스 400ml 버드 린스 400ml 버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnReq.gif" alt="신청" /></a></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/citibank/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="bNum">
                                <p>20110210000005</p>
                                <p><a href="csOrderView.php"><img src="/work/citibank/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                            </td>
                            <td class="bName"><span class="tcBlue">6,500원</span></td>
                            <td class="bTit">
                                <table cellspacing="0" class="bbsListOrderS">
                                    <tr>
                                        <td class="bTit"><a href="csOrderView.php">  버드 린스 400ml </a></td>
                                        <td class="bBtn">
                                            <p>상품발송/1개</p>
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                                        </td>
                                        <td class="bBtn2">
                                            <p><a href="#"><img src="/work/citibank/images/customer/btnReq.gif" alt="신청" /></a></p>
                                            <p><a href="javascript:orderCancelPopup();"><img src="/work/citibank/images/customer/btnDirCancel.gif" alt="즉시취소" /></a></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding:30px 0">
                                <p>주문/배송 내역이 없습니다.<a href="#"></a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php include("bbsPaging.php"); ?>
                <?php include("csOrderInfo.php"); ?>
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
