
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="csOrderCancelPop">
    <div class="head">
        <div class="tit"><img src="/work/kbpoint/images/customer/orderCancelTit.gif" alt="주문즉시취소" /></div>
        <div class="right"></div>
    </div>
    <div class="ctnBox">
        <h4 class="title">주문번호 <strong class="tcGreen">20110203454512</strong> 의 상품내역 입니다.</h4>
        <table cellspacing="0" class="orCancelList">
            <tr>
                <th>주문일자</th>
                <th>상품코드</th>
                <th>상품명</th>
                <th>판매가</th>
                <th>수량</th>
                <th>결제금액</th>
            </tr>
            <tr>
                <td class="bPrice">2011.0.01</td>
                <td class="bPrice">201012123256</td>
                <td class="bTit">[간절기 MD 추천아우터!!현대만이가격단독찬스</td>
                <td class="bPrice">69,000원</td>
                <td class="bPrice">1</td>
                <td class="bPrice">537,300 원</td>
            </tr>
        </table>
        <div class="orderCancelPrice">
            <table cellspacing="0" class="tList">
                <tr>
                    <td class="t1">결제수단별 금액현황 (결제 수단별 환불 금액을 참고 하시오.)</td>
                    <th>총 주문금액</th>
                    <td class="t2">597,300 원</td>
                </tr>
                <tr>
                    <td class="t3">카드 : 537,300 원</td>
                    <th><span class="tcOrange">+</span> 배송비</th>
                    <td class="t2">0 원</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <th><span class="tcOrange">-</span> 할인금액</th>
                    <td class="t2">59,700 원</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <th><span class="tcOrange">=</span> 결제금액</th>
                    <td class="t2"><strong>537,300 원</strong></td>
                </tr>
            </table>
        </div>
        <table cellspacing="0" class="orCancelListOpt">
            <tr>
                <th>결제금액을 입금하셨습니까?</th>
                <td>
                    <label> <input type="radio" name="r1" class="radio" value="radio" /> 예 </label>
                    <label> <input type="radio" name="r1" class="radio" value="radio" /> 아니오 </label>
                </td>
            </tr>
            <tr>
                <th class="bPrice">취소사유</th>
                <td class="bPrice">
                    <select>
                        <option>선택</option>
                        <option>가격</option>
                        <option>서비스불만</option>
                        <option>기타</option>
                    </select>
                    <select>
                        <option>선택</option>
                        <option>결제수단변경</option>
                        <option>유사상품구입</option>
                        <option>충동구매</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="btn"><a href="/work/kbpoint/customer/csOrderCancelCom.php"><img src="/work/kbpoint/images/customer/btnConfirm.gif" alt="확인" /></a> <a href="javascript:self.close();"><img src="/work/kbpoint/images/customer/btnCancel.gif" alt="취소" /></a> </div>
    </div>
</div>
<?php include("../include/foot.php"); ?>