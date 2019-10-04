
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="preCalcPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/main/preCalcHeadTit.gif" alt="미리계산" /></div>
        <div class="right"></div>
    </div>
    <div class="ctnBox">
        <table cellspacing="0" class="preCalcOptList">
            <tr>
                <th class="w100">판매금액</th>
                <td class="w100"><strong class="tcOrange">69,000 원</strong></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>깜짝할인쿠폰</th>
                <td>
                    <input type="text" value="2,070" class="payVal w60" />
                    원 </td>
                <td>
                    <input type="checkbox" value="" class="checkbox" />
                    할인적용 </td>
            </tr>
            <tr>
                <th>쿠폰할인</th>
                <td>
                    <input type="text" value="2,070" class="payVal w60" />
                    원</td>
                <td>
                    <p><a href="javascript:couponUsePop();"><img src="/work/citibank/images/main/preCalcBtnCoupon.gif" alt="쿠폰적용" /></a> <a href="javascript:;"><img src="/work/citibank/images/main/preCalcBtnCancel.gif" alt="취소" /></a></p>
                    <p class="tcBlue size11">! 보유한 쿠폰이 있습니다.</p>
                </td>
            </tr>
            <tr>
                <th>전체 할인금액</th>
                <td>70,000 원</td>
                <td>최종 결제금액</td>
            </tr>
            <tr>
                <th>최종 결제금액</th>
                <td><strong class="tcOrange">66,300 원</strong></td>
                <td>(5만원이상시 2~3개월 무이자</td>
            </tr>
        </table>
    </div>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/main/preCalcBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
