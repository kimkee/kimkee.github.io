
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="csCouponPop csOrderListPop">
    <div class="ctnBox">
    	<table cellspacing="0" border="1" class="bbsList">
            <thead>
                <tr>
                    <th class="left"><span>주문번호</span></th>
                    <th><span>결제금액</span></th>
                    <th><span>상품명</span></th>
                    <th><span>주문상태/수량</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bNum">
                        <p>20110210000005</p>
                        <p><a href="#"><img src="/work/kbpoint/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                    </td>
                    <td class="bName">6500원</td>
                    <td class="bTit"><a href="/work/kbpoint/customer/csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml </a></td>
                    <td class="bDate">
                        <p>상품발송/1개</p>
                        <p><a href="#"><img src="/work/kbpoint/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                    </td>
                </tr>
                <tr>
                    <td class="bNum">
                        <p>20110210000005</p>
                        <p><a href="#"><img src="/work/kbpoint/images/customer/btnDetailList.gif" alt="상세내역" /></a></p>
                    </td>
                    <td class="bName">6500원</td>
                    <td class="bTit"><a href="/work/kbpoint/customer/csOrderView.php">[애완용품/멍도리]벨버드 린스 400ml </a></td>
                    <td class="bDate">
                        <p>상품발송/1개</p>
                        <p><a href="#"><img src="/work/kbpoint/images/customer/btnDeliv.gif" alt="배송추적" /></a></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="padding:30px 0">
                        <p>주문/배송 내역이 없습니다.<a href="#"></a></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php include("../customer/bbsPaging.php"); ?>
    </div>
    <div class="btnList"><a href="javascript:self.close();"><img src="/work/kbpoint/images/customer/btnClose.gif" alt="취소" /></a> </div>
</div>
<?php include("../include/foot.php"); ?>