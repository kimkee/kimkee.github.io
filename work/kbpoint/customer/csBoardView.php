
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
                <div class="csSubTopVisual" style="margin-bottom:15px;"><img src="/work/kbpoint/images/customer/csBoardTopVisual.jpg" alt="열린게시판" /></div>
            	<!-- 열린 보기 -->
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
                        <td colspan="3" style="height:200px; vertical-align:top">이것도 팔았으면 좋겠어요<br />
                                <br /></td>
                    </tr>
                </table>
            	<div class="btnList">
                    <div class="right"><a href="csBoardList.php"><img alt="목록" src="/work/kbpoint/images/customer/btnList.gif" /></a> <a href="csBoardList.php"><img alt="답변달기" src="/work/kbpoint/images/customer/btnReply.gif" /></a> <a href="csBoardList.php"><img alt="수정" src="/work/kbpoint/images/customer/btnModify.gif" /></a> <a href="csBoardList.php"><img alt="삭제하기" src="/work/kbpoint/images/customer/btnDel.gif" /></a> </div>
                </div>

                
            	<div class="bbsReply"> <img src="/work/kbpoint/images/customer/icoRe.gif" alt="답변" /> <a href="#">답변입니다.</a></div>
                
                <?php include("../customer/bbsLinkPage.php"); ?>
                
                
            	<!-- 열린 보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>