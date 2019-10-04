
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="idpwPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/main/idpwPopTit.gif" alt="비밀번호변경" /></div>
        <div class="right"></div>
    </div>
    <div class="ctnBox">

            <table cellspacing="0" class="dTable">
                <tr>
                    <th class="w110">이름</th>
                    <td>
                        <input type="text" value="" class="w150" />
                    </td>
                </tr>
                <tr>
                    <th>핸드폰</th>
                    <td>
                        <input type="text" value="" class="w50" /> -
                        <input type="text" value="" class="w50" /> -
                        <input type="text" value="" class="w50" />
                    </td>
                </tr>
                <tr>
                    <th>현재비밀번호</th>
                    <td>
                        <input type="text" value="" class="w150" />
                    </td>
                </tr>
                <tr>
                    <th>변경비밀번호</th>
                    <td>
                        <input type="text" value="" class="w120" /> 
                         (영문+숫자 4~12자리)                    
                     </td>
                </tr>
                <tr>
                    <th>변경비밀번호확인</th>
                    <td>
                        <input type="text" value="" class="w150" />
                    </td>
                </tr>
            </table>
            <div class="btnList"><a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwPopBtn1.gif" alt="확인" /></a> <a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwPopBtn2.gif" alt="취소" /></a> </div>

    </div>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/main/idpwPopBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
