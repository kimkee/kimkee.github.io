
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="idpwTemPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/main/idpwTemPopHeadTit.gif" alt="비밀번호변경" /></div>
        <div class="right"></div>
    </div>
    <div class="ctnBox">

            <table cellspacing="0" class="dTable">
                <tr>
                    <th class="w70">이름</th>
                    <td>
                        <input type="text" value="" class="w150" />
                    </td>
                </tr>
                <tr>
                    <th>핸드폰</th>
                    <td>
                        <input type="text" value="" class="w50" name="tel1" maxlength="3" onkeyup="no1KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel2" maxlength="4" onkeyup="no2KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel3" maxlength="4" onkeyup="no3KeyUp()"/>
                        <input type="hidden" name="tel" />
                        <a href="#"><img src="/work/citibank/images/main/loginPopBtn3.gif" alt="핸드폰인증" /></a> </td>
                </tr>
            </table>
        <div class="btnList"><a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwPopBtn1.gif" alt="확인" /></a> <a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwPopBtn2.gif" alt="취소" /></a> </div>

        <ul class="ulist">
            <li>최초 로그인 시 입력한 이메일 주소로 임시비밀번호가 발급되면 비밀번호<br />
            변경을 통해 재설정하시면 됩니다.</li>
            <li>이메일 주소를 잊어버린 경우에는 고객센터(1600-9883) 로 연락주시기 바랍니다.<br />
            </li>
        </ul>
    </div>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwTemPopBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
