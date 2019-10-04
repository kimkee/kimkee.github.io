
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
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
            	<!-- Qna 리스트 -->
            	<div class="bbsHead">내가 쓴 Q&amp;A</div>
            	<table cellspacing="0" border="1" class="bbsList csBbsLsit">
                    <thead>
                        <tr>
                            <th class="left"><span>번호</span></th>
                            <th class="w250"><span>제목</span></th>
                            <th><span>등록일</span></th>
                            <th><span>구분</span></th>
                            <th class="right">조회수</th>
                            <th class="right">답변</th>
                            <th class="right">수정</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="csQnaView.php">제조일자 최근걸로 부탁드려요~~　</a></td>
                            <td class="bName">2011.12.25</td>
                            <td class="bDate">전체</td>
                            <td class="bHit"><a href="#">11</a></td>
                            <td class="bHit"><a href="#"><img src="/work/kbpoint/images/customer/btnQnaReply.gif" alt="수정" /></a></td>
                            <td class="bHit"><a href="csQnaModify.php"><img src="/work/kbpoint/images/customer/btnQnaMod.gif" alt="수정" width="53" height="19" /></a></td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="csQnaView.php">제조일자 최근걸로 부탁드려요~~　</a></td>
                            <td class="bName">2011.12.25</td>
                            <td class="bDate">전체</td>
                            <td class="bHit"><a href="#">11</a></td>
                            <td class="bHit"><a href="#"><img src="/work/kbpoint/images/customer/btnQnaReply.gif" alt="수정" /></a></td>
                            <td class="bHit"><a href="csQnaModify.php"><img src="/work/kbpoint/images/customer/btnQnaMod.gif" alt="수정" width="53" height="19" /></a></td>
                        </tr>
                    </tbody>
                </table>
                
                 <?php include("../customer/bbsPaging.php"); ?>
                 <!-- Qna 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>