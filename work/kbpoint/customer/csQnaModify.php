
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
                <table cellspacing="0" class="bbsWrite">
                    <tr>
                        <th class="w150">작성자</th>
                        <td>
                            <input type="text" style="width:90px;" value="김기현" />
                        </td>
                    </tr>
                    <tr>
                        <th>제목 <span class="chStar">*</span></th>
                        <td>
                            <input type="text" style="width:585px;" value="제조일자 최근걸로 보내주세헴" />
                        </td>
                    </tr>
                    <tr>
                        <th>내용 <span class="chStar">*</span></th>
                        <td>
                            <textarea cols="500" rows="6">제조일자 최근걸로 보내주세헴</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>답변일리미</th>
                        <td>
                            <p>
                                <select>
                                    <option>010</option>
                                </select>
                                -
                                <input type="text" style="width:40px;" />
                                -
                                <input type="text" style="width:40px;" />
                                <input type="checkbox" class="checkbox" value="" />
                                SMS 알림요청 </p>
                            <p> SMS알람요청을 신청하시면 답변처리가 완료된 시점에 휴대폰 SMS로 알려드립니다. </p>
                        </td>
                    </tr>
                </table>
                <div class="btnList"> <a href="csQnaList.php"><img alt="확인" src="/work/kbpoint/images/customer/btnConfirm.gif" /></a> <a href="csQnaList.php"><img alt="취소" src="/work/kbpoint/images/customer/btnCancel.gif" /></a> </div>
                <div class="qnaGuideBox">
                    <h4>글 등록 시 주의 사항</h4>
                    <ul>
                        <li>중복되는 질문이나 상업적인 내용, 욕설, 음란한 글 등은 사전 양해 없이 삭제될 수 있으며 작성된 글에 대한 책인은 작성자 본인에게 있습니다. </li>
                        <li>상품에 대한 효과, 효능 및 등록한 글에 대해서는 작성하신 고객님의 개인의견이며 <span class="tcOrange">KB국민카드 포인트리사은품몰과 무관합니다.</span> </li>
                        <li>질문을 하시기 전에 고객님이 원하는 질문이 상품Q&amp;A에 있는지 중복질문 검색을 통해 확인해 주시기 바랍니다.</li>
                    </ul>
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