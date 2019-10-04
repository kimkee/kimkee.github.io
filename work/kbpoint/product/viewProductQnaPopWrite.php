
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="viewPopWrap viewPopWrapASS">
    <div class="popCenter">
        <div class="bbsHead">상품평 쓰기</div>
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
                <td colspan="3">
                    <input type="text" style="width:585px;" value="제조일자 최근걸로 보내주세헴" />                </td>
            </tr>
            <tr>
                <th>내용 <span class="chStar">*</span></th>
                <td colspan="3">
                    <textarea name="textarea" cols="500" rows="6">제조일자 최근걸로 보내주세헴</textarea>                </td>
            </tr>
            <tr>
                <th>답변알림서비스</th>
                <td colspan="3">
                    <p style="margin-bottom:10px;">
                        <select>
                            <option>010</option>
                        </select>
                        -
                        <input type="text" style="width:40px;" />
                        -
                        <input type="text" style="width:40px;" />
                        <input type="checkbox" class="checkbox" value="" />
                    </p>
                    <p>*고객님의 질문에 답변이 등록되었을 경우 고객님의 휴대폰으로 문자메시지가 전달됩니다. </p>                </td>
            </tr>
        </table>
        <div class="btnList" style="margin-bottom:15px;"><a href="javascript:self.close();"><img alt="확인" src="/work/kbpoint/images/customer/btnConfirm.gif" /></a> <a href="javascript:self.close();"><img alt="취소" src="/work/kbpoint/images/customer/btnCancel.gif" /></a> </div>
        <div class="qnaGuideBox">
            <h4>글 등록 시 주의 사항</h4>
            <ul>
                <li>중복되는 질문이나 상업적인 내용, 욕설, 음란한 글 등은 사전 양해 없이 삭제될 수 있으며 작성된 글에 대한 책인은 작성자 본인에게 있습니다. </li>
                <li>상품에 대한 효과, 효능 및 등록한 글에 대해서는 작성하신 고객님의 개인의견이며 <span class="tcOrange">KB국민카드 포인트리사은품몰과 무관합니다.</span> </li>
                <li>질문을 하시기 전에 고객님이 원하는 질문이 상품Q&amp;A에 있는지 중복질문 검색을 통해 확인해 주시기 바랍니다.</li>
            </ul>
        </div>
        <div class="btnList">
            <div class="right"> <a href="javascript:self.close();"><img src="/work/kbpoint/images/customer/btnClose.gif" alt="닫기" /></a></div>
        </div>
    </div>
</div>
<?php include("../include/foot.php"); ?>