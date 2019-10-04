
<script type="text/javascript">
	function csCounselPopOn() {
		document.getElementById('csCounselPop').style.display='block';
	}
	function csCounselPopOff() {
		document.getElementById('csCounselPop').style.display='none';
	}
</script>

<div class="csCounselPop" id="csCounselPop">
    <div class="top"></div>
    <div class="bg">
        <div class="ctn">
            <table cellspacing="0" class="cpList">
                <tr>
                    <th>&nbsp;</th>
                    <th>주문번호/주문일</th>
                    <th>결제금액</th>
                    <th>상품명</th>
                    <th>주문상태/수량</th>
                </tr>
                <tr>
                    <td>
                        <input name="r1" type="radio" class="radio" value="radio" />
                    </td>
                    <td>
                        <p>456124652</p>
                        <p>2011-12-12</p>
                        <p><a href="javascript:;"><img src="/work/citibank/images/customer/csCounselPopBtn1.gif" alt="상세내역" /></a></p>
                    </td>
                    <td>13% 할일쿠폰</td>
                    <td>득템 아이폰 케이스 에어자켓 </td>
                    <td>
                        <p><a href="javascript:;"><img src="/work/citibank/images/customer/csCounselPopBtn2.gif" alt="쿠폰받기" /></a></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="r1" type="radio" class="radio" value="radio" />
                    </td>
                    <td>
                        <p>456124652</p>
                        <p>2011-12-12</p>
                        <p><a href="javascript:;"><img src="/work/citibank/images/customer/csCounselPopBtn1.gif" alt="상세내역" /></a></p>
                    </td>
                    <td>13% 할일쿠폰</td>
                    <td>득템 아이폰 케이스 에어자켓 </td>
                    <td>
                        <p><a href="javascript:;">주문취소/1개</a></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="r1" type="radio" class="radio" value="radio" />
                    </td>
                    <td>
                        <p>456124652</p>
                        <p>2011-12-12</p>
                        <p><a href="javascript:;"><img src="/work/citibank/images/customer/csCounselPopBtn1.gif" alt="상세내역" /></a></p>
                    </td>
                    <td>13% 할일쿠폰</td>
                    <td>득템 아이폰 케이스 에어자켓 </td>
                    <td>
                        <p>배송시작/1개</p>
                        <p><a href="javascript:;"><img src="/work/citibank/images/customer/csCounselPopBtn2.gif" alt="쿠폰받기" /></a></p>
                    </td>
                </tr>
            </table>
            <?php include("../customer/bbsPaging.php"); ?>
        </div>
        <div class="btnList aRight"><a href="javascript:csCounselPopOff();"><img src="/work/citibank/images/main/btnCloseLayer.gif" alt="닫기" /></a></div>
    </div>
    <div class="bot"></div>
</div>
