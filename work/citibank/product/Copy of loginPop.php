
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="loginPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/main/loginPopHeadTit.gif" alt="로그인" /></div>
    </div>
    <div class="ctnBox">
        <div class="left"><img src="/work/citibank/images/main/loginPopImg1.gif" alt="" /></div>
        <div class="right">
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
                        <input type="text" value="" class="w50" />
                        -
                        <input type="text" value="" class="w50" />
                        -
                        <input type="text" value="" class="w50" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2" style="vertical-align:top; padding-top:13px;">비밀번호</th>
                    <td style="border-bottom:#ccc dotted 1px;">
                        <input type="text" value="" class="w150" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="ulist">
                            <li>비밀번호는 문자+숫자조합 4~12자리  </li>
                            <li> 등록하신 비밀번호를 기억해주시기 바랍니다. </li>
                            <li> 재로그인시 필요한 정보입니다. <a href="#"><img src="/work/citibank/images/main/loginPopBtn3.gif" alt="안내" /></a> </li>
                        </ul>
                        </td>
                </tr>
            </table>
            <div class="btn"><a href="javascript:self.close();"><img src="/work/citibank/images/main/loginPopBtn1.gif" alt="확인" /></a> <a href="javascript:self.close();"><img src="/work/citibank/images/main/loginPopBtn2.gif" alt="비밀번호변경" /></a> </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/main/loginPopBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
