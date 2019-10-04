
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
            	<!-- 공지 보기 -->
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
                <div class="bbsView">
                    <div class="head">
                    	<div class="bhTit">제목</div>
                        <div class="bTit"> 루나블루 티저사이트를 오픈하였습니다.</div>
                    </div>
                    <div class="postInfo">
                        <div class="bName"></div>
                        <div class="bDate">작성일 : 2011.11.11   <span class="hSpace">|</span>  작성자 : 관리자 </div>
                    </div>
                    <div class="memo">
                        <p>공지합니다.. </p>
                        <br />
                        <p>[SSTV l 양나래 인턴기자] MBC ‘무한도전’의 장기프로젝트 종목이 결정됐다.<br />
                        </p>
                        <p>8일 MBC 제작진에 따르면 무한도전은 ‘조정’을 장기프로젝트로 선정해 8월 방송을 목표로 준비 중이다. 제작진은 “대한조정협회 주최로 열리는 특별 경기에 참가할 예정”이라며 “현재 멤버들은 물 적응훈련 등을 마쳤다”고 밝혔다.</p>
                        <p>무한도전의 장기프로젝트 종목인 ‘조정’은 개인 또는 여러 명이 팀을 이뤄 보트에서 노를 저어 속력을 겨루는 경기로 싱글 스컬부터 8명이 함께 노를 젓는 에이트까지 9개 종목이 있다.<br />
                        </p>
                        <br />
                        <p>갑사합니다.</p>
                    </div>
                </div>
                <?php include("../customer/bbsLinkPage.php"); ?>
                <div class="btnList">
                    <div class="right"><a href="/work/kbpoint/customer/csNoticeList.php"><img alt="목록" src="/work/kbpoint/images/customer/btnList.gif" /></a></div>
                </div>
                
            	<!-- 공지 보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>