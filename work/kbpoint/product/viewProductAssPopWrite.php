
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="viewPopWrap viewPopWrapASS">
    <div class="popCenter">
        <div class="bbsHead">상품평 쓰기</div>
        <table cellspacing="0" class="bbsWrite">
            <tr>
                <th>상품명 </th>
                <td>
                    <input type="text" style="width:585px;" />
                </td>
            </tr>
            <tr>
                <th class="w100">작성자
                    <div class="clear" style="width:100px;"></div>
                </th>
                <td class="w300">
                    <input type="text" style="width:585px;" />
                </td>
            </tr>
            <tr>
                <th>제목 </th>
                <td>
                    <input type="text" style="width:585px;" />
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:7px 0px;"><img src="/work/kbpoint/images/main/editor.gif" alt="" width="708" height="207" /></td>
            </tr>
            <tr>
                <th>첨부하기</th>
                <td><a href="#"><img src="/work/kbpoint/images/main/btnImgAdd.gif" alt="이미지추가" /></a> <a href="#"><img src="/work/kbpoint/images/main/btnMediaAdd.gif" alt="멀티미디어추가" /></a> </td>
            </tr>
            <tr>
                <th>이미지첨부하기</th>
                <td>
                    <div class="imgAddBox">
                        <select size="3" class="imgFileList">
                            <option>이쁜 하의실종 원피스.JPG</option>
                            <option>개간지 레깅스.JPG</option>
                            <option>노숙자 어그부츠.JPG</option>
                        </select>
                        <a href="#" class="btn"><img src="/work/kbpoint/images/main/btnImgDel.gif" alt="삭제" /></a>
                        <div class="imgByte">
                            <input type="text" /> KB/<span class="tcGreen">2000KB</span>
                        </div>
                    </div>
                    <div class="imgAddInfo"><span class="tcGreen">500K이하</span>의 파일로 <span class="tcGreen">총2MB</span>만 업로드 하실 수 있습니다.<span class="tcGreen">JPG,GIF 파일 형식</span>으로 가능하며,파일명이 한글인 경우 이미지가 깨어질수도 있습니다.</div>
                </td>
            </tr>
            <tr>
                <th>평가</th>
                <td>
                    <dl class="starAss">
                        <dt>디자인</dt>
                        <dd>
                            <label><input name="rStar1" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar1" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar1" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar1" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar1" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>품질</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>이용편리성</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>서비스</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>배송</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>사이즈</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>맛/신선도</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                        <dt>가격</dt>
                        <dd>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint5.gif" alt="별표5개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint4.gif" alt="별표4개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint3.gif" alt="별표3개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint2.gif" alt="별표2개" /></label>
                            <label><input name="rStar2" type="radio" class="radio" value="" /><img src="/work/kbpoint/images/main/starPoint1.gif" alt="별표1개" /></label>
                        </dd>
                    </dl>
                </td>
            </tr>
        </table>
        <div class="btnList">
           <a href="javascript:self.close();"><img alt="확인" src="/work/kbpoint/images/customer/btnConfirm.gif" /></a> <a href="javascript:self.close();"><img alt="취소" src="/work/kbpoint/images/customer/btnCancel.gif" /></a>
        </div>
    </div>
</div>
<?php include("../include/foot.php"); ?>