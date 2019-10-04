
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
                <ul class="bbsTab">
                    <li><a href="csOrderList.php"><img src="/work/citibank/images/customer/myorderTab01.gif" alt="나의주문내역" /></a></li>
                    <li><a href="csPointList.php"><img src="/work/citibank/images/customer/myorderTab02On.gif" alt="나의포인트" /></a></li>
                </ul>
                <table cellspacing="0" border="1" class="bbsList bbsListOrder">
                    <thead>
                        <tr>
                            <th class="left">등록일</th>
                            <th><span>금액</span></th>
                            <th>사유</th>
                            <th class="right"><span>주문정보</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum"> 2011.12.25</td>
                            <td class="bName">21,222원</td>
                            <td class="bName">구매</td>
                            <td class="bName">
                                <p>20145898754211 </p>
                                <p>데쉬보드형주차 알림판</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php include("bbsPaging.php"); ?>
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
