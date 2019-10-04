
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="csCouponPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/customer/csCounPopTit.gif" alt="적용가능상품보기" /></div>
        <div class="right"></div>
    </div>
    <div class="ctnBox">
    	<form action="">
            <div class="cpnSel"> 보유하신
                <select>
                    <option>[11년02월]신규가입 1만원 할인쿠폰</option>
                </select>
                을 사용하실 수 있는 상품을 확인하실 수 있습니다. </div>
            <div class="cpnSch">
                <div class="sch">
                    <input type="text"  class="keyword" value="상품코드입력" onclick="this.value=''" />
                    <input type="image" src="/work/citibank/images/customer/csCounPopSchBtn.gif" alt="검색" />
                </div>
            </div>
        </form>
        <div class="cpnExImg"><img src="/work/citibank/images/customer/csCounPopImg1.gif" alt="상품코드 설명" /></div>
    </div>
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/customer/csCounPopBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>