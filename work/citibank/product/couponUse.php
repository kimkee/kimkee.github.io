
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
		<script type="text/javascript">
			function couponUseOn() {
				document.getElementById('couponUse').style.display='block';
				document.getElementById('monSelct').style.display='none';
			}
			function couponUseOff() {
				document.getElementById('couponUse').style.display='none';
				document.getElementById('monSelct').style.display='inline-block';
			}

		</script>
        <div class="couponUse" id="couponUse">
        	<div class="head">
            	<div class="tit">할인쿠폰적용</div>
                <div class="btn"><a href="javascript:couponUseOff();"><img src="/work/citibank/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
        	</div>
            <div class="ctn">
            	<table cellspacing="0" class="couponList">
                    <tr>
                        <th>상품명</th>
                        <th>판매가</th>
                        <th>수량</th>
                        <th>쿠폰선택/유효기간</th>
                        <th>쿠폰적용</th>
                    </tr>
                    <tr>
                        <td class="bTit">[간절기 MD 추천아우터!!현대만이가격...</td>
                        <td>69,000 원</td>
                        <td>1</td>
                        <td>
                            <select name="select" style="width:110px;">
                                <option>15% 할인 [바로사용쿠폰]</option>
                            </select>
                        </td>
                        <td>10,030 원</td>
                    </tr>
                    <tr>
                        <td class="bTit">[간절기 MD 추천아우터!!현대만이가격...</td>
                        <td>69,000 원</td>
                        <td>1</td>
                        <td>
                            <select name="select" style="width:110px;">
                                <option>15% 할인 [바로사용쿠폰]</option>
                            </select>
                        </td>
                        <td>10,030 원</td>
                    </tr>
                </table>
            </div>
            <div class="btnList">
	            <a href="javascript:self.close();"><img src="/work/citibank/images/main/preCalcBtnCoupon.gif" alt="쿠폰적용" /></a>	<a href="javascript:self.close();"><img src="/work/citibank/images/main/preCalcBtnCancel.gif" alt="닫기" /></a>            </div>
        </div>
<?php include("../include/foot.php"); ?>