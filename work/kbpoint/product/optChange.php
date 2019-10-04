
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop" style="background:#e7ecf2">
<?php include("../include/commonInc.php"); ?>
<div class="optChange">
    <div class="head">
        <div class="tit">선택사항 변경/추가하기</div>
        <div class="btn"><!--<a href="javascript:couponUseOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a> --></div>
    </div>
    <div class="ctn">
        <table cellspacing="0" class="optChangeList">
            <tr>
                <th>색상/종류</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>핑크</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>리더기1</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>SD8GB (+28,000원)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>메모리추가</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>선택안함</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>보호필림</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>선택안함</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>삼각대</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>선택안함</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>충전기</th>
                <td>
                    <select name="select" class="optSelect">
                        <option>선택안함</option>
                    </select>
                </td>
            </tr>
        </table>
        <p class="optChangeInfo">선택사항 추가를 원하시면 위에서 다시한번 선택해주시면 됩니다.</p>
        <table cellspacing="0" class="optChangeList2">
            <tr>
                <td class="bTit">핑크</td>
                <td class="eaOpt">
                	<div class="btnNum">
                        <input type="text" class="inputPnum" value="1" />
                        <div class="btnArrow"> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumUp.gif" alt="UP" /></a></span> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumDown.gif" alt="Down" /></a> </span> </div>
                        <div class="btnMod">개</div>
                    </div>
                </td>
                <td class="price">325,000 원 <a href="#"><img src="/work/kbpoint/images/main/optChageBtnDel.gif" alt="삭제" /></a></td>
            </tr>
            <tr>
                <td class="bTit">+ 메모리추가/8GB 추가</td>
                <td>&nbsp;</td>
                <td class="price">28,000 원 <a href="#"><img src="/work/kbpoint/images/main/optChageBtnDel.gif" alt="삭제" /></a></td>
            </tr>
        </table>
        <div class="totalPrice">총 상품금액 : <strong class="commonPrice">353,000 원</strong> <a href="#"><img src="/work/kbpoint/images/main/icoQuestion.gif" alt="도움말" /></a></div>
    </div>
    <div class="btnList"> <a href="javascript:self.close();"><img src="/work/kbpoint/images/main/optChangeBtnConfirm.gif" alt="확인" /></a></div>
</div>
<?php include("../include/foot.php"); ?>