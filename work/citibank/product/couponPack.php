
<script type="text/javascript">
    function couponPackOn() {
        document.getElementById('couponPack').style.display='block';
        document.getElementById('specTable').style.display='none';
    }
    function couponPackOff() {
        document.getElementById('couponPack').style.display='none';
        document.getElementById('specTable').style.display='block';
    }
</script>

<div class="couponPack" id="couponPack" style="display:none;">
    <div class="top"></div>
    <div class="bg">
        <div class="head">
            <div class="tit"><img src="/work/citibank/images/main/couponPackTit.gif" alt="사용가능한 쿠폰" /></div>
        </div>
        <div class="ctn">
            <table cellspacing="0" class="cpList">
                <tr>
                    <th>쿠폰명</th>
                    <th>할인율</th>
                    <th>보유/유효기간</th>
                </tr>
                <tr>
                    <td>13% 할일쿠폰</td>
                    <td>13%</td>
                    <td>주문시바로사용</td>
                </tr>
                <tr>
                    <td>13% 할일쿠폰</td>
                    <td>13%</td>
                    <td>미보유 <a href="javascript:;"><img src="/work/citibank/images/main/couponPackBtnGet.gif" alt="쿠폰받기" /></a></td>
                </tr>
            </table>
            <div class="cpInfo"><span class="size12">※</span> 쿠폰은 상품별로 한개씩만 사용하실 수 있습니다.</div>
        </div>
        <div class="btnList aRight"><a href="javascript:couponPackOff();"><img src="/work/citibank/images/main/btnCloseLayer.gif" alt="닫기" /></a></div>
    </div>
    <div class="bot"></div>
</div>
