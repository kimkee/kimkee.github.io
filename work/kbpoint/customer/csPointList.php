
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
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csOrderTopVisual.jpg" alt="상품추천함" /></div>
                
            	<div class="orderTop"><img src="/work/kbpoint/images/customer/myordertop.gif" alt="" /></div>
            	<!-- 주문 리스트 -->
                <div class="bbsHead">주문상품 및 배송정보</div>
				<ul class="bbsTab">
                	<li><a href="csOrderList.php">나의주문내역</a></li>
                	<li class="on"><a href="csPointList.php">나의포인트</a></li>
                </ul>
                <table cellspacing="0" border="1" class="bbsList bbsListOrder">
                    <thead>
                        <tr>
                            <th class="left"><span>등록일</span></th>
                            <th><span>금액</span></th>
                            <th>사유</th>
                            <th><span>주문정보</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">2011.12.25</td>
                            <td class="bName">21,222</td>
                            <td class="bName">구매</td>
                            <td class="bTit">20145898754211 <br />
                            데쉬보드형주차 알림판 </td>
                        </tr>
                        <tr>
                            <td class="bNum">2011.12.25</td>
                            <td class="bName">21,222</td>
                            <td class="bName">구매</td>
                            <td class="bTit">20145898754211 <br />
                            데쉬보드형주차 알림판 </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="padding:30px 0"><p>포인트 내역이 없습니다.<a href="#"></a></p></td>
                        </tr>
                    </tbody>
                </table>
                
                 <?php include("../customer/bbsPaging.php"); ?>
                
            	<!-- 주문 리스트 -->
                <div class="csOrderGuide">
                	<img src="/work/kbpoint/images/customer/csOrderGuide.gif" alt="" />
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>