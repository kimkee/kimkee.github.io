
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
                <!-- 열린 보기 -->
            	
                
                <table cellspacing="0" class="bbsWrite">
                    <tr>
                        <th class="w100">작성자</th>
                        <td><input type="text" style="width:100px;" /></td>
                        <th>비밀번호(숫자 4~12자리)</th>
                        <td><input type="text" style="width:100px;" /> 
                        <label>
                            <input type="checkbox" name="checkbox" class="checkbox" /> 비밀글설정
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <th>제목 <span class="chStar">*</span></th>
                        <td colspan="3"><input type="text" style="width:585px;" /></td>
                    </tr>
                    <tr>
                        <th>내용 <span class="chStar">*</span></th>
                        <td colspan="3"><textarea cols="500" rows="6"></textarea></td>
                    </tr>
                </table>

                
                <div class="btnList">
                    <div class="right"><a href="csRecomView.php"><img alt="확인" src="/work/kbpoint/images/customer/btnConfirm.gif" /></a> <a href="csRecomList.php"><img alt="취소" src="/work/kbpoint/images/customer/btnCancel.gif" /></a></div>
                </div>

                
            	<!-- 열린 보기 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>