
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop" style="background:#e7ecf2">
<?php include("../include/commonInc.php"); ?>
<div class="orderMemo" style="display:block; left:0; top:0">
    <div class="head">
        <div class="tit">주문메모</div>
        <div class="btn"><!--<a href="javascript:couponUseOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a> --></div>
    </div>
    <div class="ctn">
        <p class="oderMemoInfo">* 별도로 요청하실사항을 입력해주세요 </p>
        <textarea class="textMemo" cols="60" rows="6"></textarea>
    </div>
    <div class="btnList"> <a href="javascript:self.close();"><img src="/work/kbpoint/images/main/optChangeBtnConfirm.gif" alt="확인" /></a></div>
</div>
<?php include("../include/foot.php"); ?>