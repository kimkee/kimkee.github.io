
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
            	<div class="csMainTopVisual"><img src="/work/kbpoint/images/customer/mainTopVisual.jpg" alt="고객센터" /></div>
                
                <div class="csMainCounsel">
                    <div class="img"><img src="/work/kbpoint/images/customer/mainQna.gif" alt="일대일고객상담" /></div>
                    <ul>
                    	<li><a href="csCounsel.php">취소신청</a></li>
                    	<li><a href="csCounsel.php">반품신청</a></li>
                    	<li><a href="csCounsel.php">교환신청</a></li>
                    	<li><a href="csCounsel.php">A/S신청</a></li>
                    	<li><a href="csCounsel.php">배송문의</a></li>
                    	<li><a href="csCounsel.php">이벤트문의</a></li>
                    	<li style=" width:130px;"><a href="csCounsel.php">결제/로그인/사이트문의</a></li>
                    </ul>
                </div>
                <?php include("../customer/csMainNotice.php"); ?>
                <div class="clear"></div>
                <div class="csMainRecom"><a href="/work/kbpoint/customer/csRecomList.php"><img src="/work/kbpoint/images/customer/mainRecom.gif" alt="상품추천함" /></a></div>
                <div class="csMainOrder"><a href="/work/kbpoint/customer/csOrderList.php"><img src="/work/kbpoint/images/customer/mainOrder.gif" alt="나의주문/배송조회" /></a></div>
                <div class="csMainFaq">
                    <div class="img"><img src="/work/kbpoint/images/customer/mainFaq.gif" alt="자주묻는질문" /></div>
                    <div class="list">
                        <ul>
                            <li><a href="/work/kbpoint/customer/csFaq.php?q=1">포인트리란 무엇인가요?</a></li>
                            <li><a href="/work/kbpoint/customer/csFaq.php?q=2">포인트 확인은 어떻게 할 수 있나요?</a></li>
                            <li><a href="/work/kbpoint/customer/csFaq.php?q=3">인터넷안전결제 (ISP)가 뭔가요?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>