
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
            	<!-- 상품추천 보기 -->
                <div class="bbsHead">내용보기</div>
            	<table cellspacing="0" class="bbsView2">
                    <tr>
                        <th>작성자</th>
                        <td colspan="3">홍길동</td>
                    </tr>
                    <tr>
                        <th class="w100">등록일</th>
                        <td>2010-09-01 11:11:11 </td>
                        <th>조회수</th>
                        <td>222</td>
                    </tr>
                    <tr>
                        <th>제목 </th>
                        <td colspan="3">이쁜 연아옷 </td>
                    </tr>
                    <tr>
                        <th>내용 </th>
                        <td colspan="3">이것도 팔았으면 좋겠어요<br />
                            <br />
                            <img src="http://image.hmall.com/static/image/product/middle/20121/middle2012514031.jpg" alt="" />                        </td>
                    </tr>
                </table>
                <div class="bbsHead">답변보기</div>
                <table cellspacing="0" class="bbsView2">

                    <tr>
                        <th class="w100">등록일</th>
                        <td>2010-09-01 11:11:11 </td>
                        <th>작성자</th>
                        <td>관리자</td>
                    </tr>

                    <tr>
                        <th>내용 </th>
                        <td colspan="3">네 참조 하겠습니다.<br />
                        </td>
                    </tr>
                </table>
                <?php include("../customer/bbsLinkPage.php"); ?>
                <div class="btnList">
                    <div class="right"><a href="/work/kbpoint/customer/csRecomList.php"><img alt="답변하기" src="/work/kbpoint/images/customer/btnReply.gif" /></a> <a href="/work/kbpoint/customer/csRecomList.php"><img alt="목록" src="/work/kbpoint/images/customer/btnList.gif" /></a> <a href="/work/kbpoint/customer/csRecomList.php"><img alt="수정하기" src="/work/kbpoint/images/customer/btnModify.gif" /></a>  <a href="/work/kbpoint/customer/csRecomList.php"><img alt="삭제하기" src="/work/kbpoint/images/customer/btnDel.gif" /></a> </div>
                </div>
                
                
                
            	<!-- 상품추천 보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>