
<script type="text/javascript">
	function orderMemoOn() {
		document.getElementById('orderMemo').style.display='block';
	}
	function orderMemoOff() {
		document.getElementById('orderMemo').style.display='none';
	}

</script>
<div class="orderMemo" id="orderMemo">
    <div class="head">
        <div class="tit"><strong>주문메모</strong> (상품관련 요청내용 기입)</div>
        <div class="btn"><a href="javascript:orderMemoOff();"><img src="/work/citibank/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
    </div>
    <div class="ctn">
        <textarea class="textMemo" cols="60" rows="6"></textarea>
        <p class="oderMemoInfo">* 배송관련 메모는 아래 배송정보의 배송 시 &nbsp;&nbsp;  요청사항에 입력하시기 바랍니다. </p>
    </div>
    <div class="btnList"> <a href="javascript:orderMemoOff();"><img src="/work/citibank/images/main/optChangeBtnConfirm.gif" alt="확인" /></a></div>
</div>
