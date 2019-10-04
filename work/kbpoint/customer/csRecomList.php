
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
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csRecomTopVisual.jpg" alt="상품추천함" /></div>
                <!-- 상품추천 리스트 -->
                <div class="bbsHead">상품추천함</div>
                <div class="bbsDescription">근거 없는 악성 비방글, 상업적 광고 글은 통보 없이 임의로 삭제될 수 있으니양해 부탁 드립니다.<br />글쓰기는 구매이후 사용가능합니다.<br />비구매 고객님께서는 <a href="mailto:lifeservice1@kbcard.com">lifeservice1@kbcard.com</a> 메일로연락주시면 최대한 빠르게 답변 드리도록 하겠습니다</div>
                <div class="bbsSch csBbsSch">
                    <form action="">
                        검색 :
                        <select name="schtype">
                            <option value="board_title" selected="selected">제목</option>
                            <option value="write_name">작성자</option>
                        </select>
                        <input type="text" class="keyword" id="schVal" name="schVal" />
                        <input type="image" class="btn" alt="검색" src="/work/kbpoint/images/customer/btnSch.gif" />
                    </form>
                </div>
                <table cellspacing="0" border="1" class="bbsList csBbsLsit">
                    <thead>
                        <tr>
                            <th class="left"><span>번호</span></th>
                            <th><span>제목</span></th>
                            <th>작성자</th>
                            <th><span>등록일</span></th>
                            <th class="right"><span>첨부</span></th>
                            <th class="right"><span>조회</span></th>
                            <th class="right"><span>답변</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csRecomView.php">선물추천해주세요! 응모합니다....</a></td>
                            <td class="bName">홍길동</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit"><a href="#" target="_blank"><img src="/work/kbpoint/images/customer/icoFile.gif" alt="첨부파일" width="12" height="12" /></a></td>
                            <td class="bHit">815</td>
                            <td class="bHit"><img src="/work/kbpoint/images/customer/btnCounReply1.gif" alt="답변완료" width="56" height="19" /></td>
                        </tr>
                    </tbody>
                </table>
                <?php include("../customer/bbsPaging.php"); ?>
                <div class="btnList">
                    <div class="right"><a href="csRecomWrite.php"><img alt="글쓰기" src="/work/kbpoint/images/customer/btnWrite.gif" /></a></div>
                </div>
                <!-- 상품추천 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>