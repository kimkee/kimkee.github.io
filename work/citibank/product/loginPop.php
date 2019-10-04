
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="loginPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/main/loginPopHeadTit.gif" alt="로그인" /></div>
    </div>
    <form action="">
        <div class="ctnBox">
        	<div class="selMem">
            	<label><input name="r1" type="radio" /> 신규고객</label>
                <label><input name="r1" type="radio" /> 기존고객</label>
            </div>
            <table cellspacing="0" class="dTable">
                <tr>
                    <th class="w80">이름</th>
                    <td>
                        <input type="text" value="" class="w100" name="custName" maxlength="10" style="ime-mode:active;"/>
                    </td>
                </tr>
                <tr>
                    <th>핸드폰</th>
                    <td>
                        <input type="text" value="" class="w50" name="tel1" maxlength="3" onKeyUp="no1KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel2" maxlength="4" onKeyUp="no2KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel3" maxlength="4" onKeyUp="no3KeyUp()"/>
                        <input type="hidden" name="tel">
                        <a href="#"><img src="/work/citibank/images/main/loginPopBtn3.gif" alt="핸드폰인증" /></a>                    </td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>
                        <input type="password" name="passwd" class="w100" maxlength="30">
                    </td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td>
                        <input type="password" name="passwd" class="w100" maxlength="30">
                        (영문+숫자 4~12자리) </td>
                </tr>
                <tr>
                    <th>비밀번호확인</th>
                    <td>
                        <input type="password" name="passwd" class="w100" maxlength="30">
                    </td>
                </tr>
            </table>
            <!-- 기존고객 
            <table cellspacing="0" class="dTable">
                <tr>
                    <th class="w80">이름</th>
                    <td>
                        <input type="text" value="" class="w100" name="custName" maxlength="10" style="ime-mode:active;"/>
                    </td>
                </tr>
                <tr>
                    <th>핸드폰</th>
                    <td>
                        <input type="text" value="" class="w50" name="tel1" maxlength="3" onKeyUp="no1KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel2" maxlength="4" onKeyUp="no2KeyUp()"/>
                        -
                        <input type="text" value="" class="w50" name="tel3" maxlength="4" onKeyUp="no3KeyUp()"/>
                        <input type="hidden" name="tel">
                    </td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td>
                        <input type="password" name="passwd" class="w100" maxlength="30">
                        (영문+숫자 4~12자리) </td>
                </tr>
            </table> 
            -->
            <div class="btn aCenter"><a href="javascript:login();"><img src="/work/citibank/images/main/loginPopBtn1.gif" alt="확인" /></a> <a href="#"><img src="/work/citibank/images/main/loginPopBtn2.gif" alt="취소" /></a> </div>
            <ul class="ulist">
                <li>씨티카드 쇼핑몰에 최초 입장하실 때는 신규고객으로 기존고객님께서는 기존고객으로     로그인하시기 바랍니다. </li>
                <li>이름/핸드폰번호/비밀번호는 개인내역(주문/배송, 1:1고객상담 등) 확인 시 반드시 필요한     정보이므로 꼭 기억해 주시기 바랍니다. </li>
                <li>비밀번호를 잊어버리신 경우 <img src="/work/citibank/images/main/loginPopBtn4.gif" alt="임시비밀번호발급"  /> 을  이용해 주시기 바랍니다.<br />
                </li>
            </ul>
        </div>
    </form>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/main/loginPopBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
