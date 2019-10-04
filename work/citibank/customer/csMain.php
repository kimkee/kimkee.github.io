
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
            	    <div class="tit"><img src="/work/citibank/images/customer/csHeadTit.gif" alt="고객센터" /></div>
            	    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
            	</div>
                <div class="csMainTopVisual"><img src="/work/citibank/images/customer/mainTopVisual.jpg" alt="고객센터" /></div>
                <div class="csMainCounsel">
                    <div class="img"><img src="/work/citibank/images/customer/mainQna.gif" alt="일대일고객상담" /></div>
                    <ul>
                        <li><a href="csCounsel.php">취소신청</a></li>
                        <li><a href="csCounsel.php">반품신청</a></li>
                        <li><a href="csCounsel.php">교환신청</a></li>
                        <li><a href="csCounsel.php">A/S신청</a></li>
                        <li><a href="csCounsel.php">배송문의</a></li>
                        <li><a href="csCounsel.php">이벤트문의</a></li>
                        <li style=" width:190px;"><a href="csCounsel.php">결제/로그인/사이트문의</a></li>
                    </ul>
                </div>
                <?php include("../customer/csMainNotice.php"); ?>
                <div class="clear"></div>
                <div class="csMainOrder"><a href="csOrderList.php"><img src="/work/citibank/images/customer/mainOrder.gif" alt="나의주문/배송조회" border="0" /></a></div>
                <div class="csMainFaq">
                    <div class="img"><img src="/work/citibank/images/customer/mainFaq.gif" alt="자주묻는질문" border="0" usemap="#mainFaq" /></div>
                    <map name="mainFaq" id="mainFaq">
                        <area shape="rect" coords="22,21,242,71" href="csFaq.php" alt="자주묻는질문" />
                    </map>
                    <div class="list">
                        <ul>
                            <li><a href="/work/citibank/customer/csFaq.php?q=7">로그인 안내</a></li>
                            <li><a href="/work/citibank/customer/csFaq.php?q=8">로그인 비밀번호를 잊어버린 경우 확인은 어떻게 할 수 있나요?</a></li>
                            <li><a href="/work/citibank/customer/csFaq.php?q=2">취소/반품/교환/AS 등을 신청하려면 어떻게 해야 하나요?</a></li>
                        </ul>
                    </div>
                </div>
				
                <div class="clear"></div>
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
