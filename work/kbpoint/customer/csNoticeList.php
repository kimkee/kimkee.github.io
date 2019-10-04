
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
                <div class="csSubTopVisual"><img src="/work/kbpoint/images/customer/csNoticeTopVisual.jpg" alt="공지사항" /></div>
            	<!-- 공지 리스트 -->
                <div class="bbsSch csBbsSch">
                    <form action="">
                        <select style="width: 70px;" name="schtype">
                            <option value="board_title">제목</option>
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
                            <th><span>작성자</span></th>
                            <th><span>작성일</span></th>
                            <th class="right"><span>조회</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요! 응모합니다....</a> <img src="/work/kbpoint/images/customer/icoNew.gif" alt="NEW" /></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                        <tr>
                            <td class="bNum">12</td>
                            <td class="bTit"><a href="/work/kbpoint/customer/csNoticeView.php">선물추천해주세요</a></td>
                            <td class="bName">관리자</td>
                            <td class="bDate">2011.12.25</td>
                            <td class="bHit">815</td>
                        </tr>
                    </tbody>
                </table>
                
                 <?php include("../customer/bbsPaging.php"); ?>
                
            	<!-- 공지 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>