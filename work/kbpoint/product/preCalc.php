
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<?php include("../product/couponUse.php"); ?>

<div class="preCalcPop">
    <div class="head">
        <div class="tit"><img src="/work/kbpoint/images/main/preCalcHeadTit.gif" alt="미리계산" /></div>
        <div class="right"><img src="/work/kbpoint/images/main/preCalcHeadRight.gif" alt="국민카드포인트리몰" /></div>
    </div>
    <div class="ctnBox">
        <table cellspacing="0" class="preCalcList">
            <tr>
                <th colspan="2">상품명</th>
                <th>판매가</th>
            </tr>
            <tr>
                <td class="pImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="" /></td>
                <td class="bTit">[간절기 MD 추천아우터!!현대만이가격단독찬스]GGPX넥워머SET샤이니자켓(GASD534) - 네이비</td>
                <td class="bPrice">69,000원</td>
            </tr>
        </table>
        <div class="prePrice">상품합계금액 <strong>69,000 원</strong> + 배송비 <strong>0 원</strong> = <strong class="tcOrange">69,000 원</strong></div>

        <table cellspacing="0" class="preCalcOptList">
            <tr>
                <th>판매금액</th>
                <td><strong class="tcOrange">69,000 원</strong></td>
            </tr>
            <tr>
                <th>일시불할인</th>
                <td>
                    <input type="text" value="2,070" class="payVal" />
                    원
                    <input type="checkbox" value="" class="checkbox" />
                    할인적용 </td>
            </tr>
            <tr>
                <th>깜짝쿠폰할인</th>
                <td>
                    <input type="text" value="2,070" class="payVal" />
                    원
                    <input type="checkbox" value="" class="checkbox" />
                    할인적용 </td>
            </tr>
            <tr>
                <th>쿠폰할인</th>
                <td>
                    <input type="text" value="2,070" class="payVal" />
                    원 <a href="javascript:couponUseOn();"><img src="/work/kbpoint/images/main/preCalcBtnCoupon.gif" alt="쿠폰적용" /></a> <a href="javascript:;"><img src="/work/kbpoint/images/main/preCalcBtnCancel.gif" alt="취소" /></a> </td>
            </tr>
            <tr>
                <th>할부조건</th>
                <td>
                    <select id="monSelct">
                        <option>선택해주세요</option>
                    </select>
                    무이자 0개월까지 가능 </td>
            </tr>
        </table>
        
        
        <div class="preTotalPay">
            <table cellspacing="0" >
                <tr>
                    <th class="w80">전체할인금액</th>
                    <td class="w80 aRight">2,070,000 원</td>
                    <th class="thVline w90">최종 결제금액</th>
                    <td class="aRight">69,930,000 원 <br />
                    <span class="normal">(13,000원 X 6개월)</span></td>
                </tr>
            </table>
        </div>
    </div>
        <div class="btnList">
            <div class="right"><a href="javascript:self.close();"><img src="/work/kbpoint/images/main/preCalcBtnClose.gif" alt="닫기" /></a></div>
    </div>
</div>
<?php include("../include/foot.php"); ?>