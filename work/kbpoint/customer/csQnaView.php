
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
            	 <!-- Qna보기 -->
            	<div class="bbsHead">내가 쓴 Q&amp;A</div>
            	<div class="bbsView bbsViewQna">
            	    <div class="head">
                        <div class="bhTit">질문</div>
            	        <div class="bTit">[미용,황장품 &gt; 기프트] 제조일자 최근걸로 부탁드려요~~!</div>
        	            <div class="btn"><a href="/work/kbpoint/customer/csQnaList.php"><img src="/work/kbpoint/images/customer/btnQnaList.gif" alt="목록" /></a></div>
            	    </div>
                    <div class="postInfo">
                        <div class="bName">작성자 : udkkalidy34 <span class="hSpace">|</span> 2011.01.01</div>
                        <div class="bDate"> 추천 : 12 <span class="hSpace">|</span> 답변 : 2<span class="hSpace">|</span>조회수 : 5</div>
                    </div>
            	    <?php include("../product/prdLayerPop.php"); ?>
                    <table cellspacing="0" class="baketList csRecentList">
                        <tr>
                            <td class="bImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="제품" /></td>
                            <td class="bName">
                                <p style="margin-bottom:10px;"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                                <p><a href="javascript:prdLayerPopOn();"><img src="/work/kbpoint/images/main/icoPreview.gif" alt="미리보기" /></a> </p>
                            </td>
                            <td class="bPrice">
                            	<div class="grayBg">
                             		<p><strong class="tcBlue">55,000원</strong></p>
                             		<p><img src="/work/kbpoint/images/customer/icoWish3.gif" alt="무" /> 12개월(월,7,500원)</p>
                                    <p><img src="/work/kbpoint/images/customer/icoWish4.gif" alt="적" /> 7,500원</p>
                            	</div>
                            </td>
                        </tr>
                    </table>
                    <div class="memo">
                        <p>1111111111111111111111111111111111111111111111111제조일자 최근걸로 부탁드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요드려요~~</p>
        	        </div>
            	    <div class="head">
                        <div class="bhTit">답변</div>
            	        <div class="bTit">안녕하세요 고객님.</div>
        	            <div class="btn"><a href="/work/kbpoint/customer/csQnaList.php"><img src="/work/kbpoint/images/customer/btnQnaReplyOn.gif" alt="답변채택" /></a></div>
            	    </div>
            	    <div class="memo">
                        <p>응모합니다. 내용자리.. </p>
        	        </div>
        	    </div>
                <!-- Qna보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>