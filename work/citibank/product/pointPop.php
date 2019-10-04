
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<script type="text/javascript">
	function pointKbPopOn() {
		document.getElementById('pointKbPop').style.display='block';
	}
	function pointKbPopOff() {
		document.getElementById('pointKbPop').style.display='none';
	}
</script>
<div class="pointKbPopWrap">
    <div class="pointKbPop" id="pointKbPop">
    	<div class="top"></div>
        <div class="bg">
        <div class="head">
            <div class="tit"><img src="/work/citibank/images/main/pointPopTit.gif" alt="보유포인트확인" /></div>
        </div>
            <table cellspacing="0" class="pointList">
                <tr>
                    <th>카드선택</th>
                    <td>
                        <input type="text" style="width:40px;" /> - 
                        <input type="text" style="width:40px;" /> - 
                        <input type="text" style="width:40px;" /> - 
                        <input type="text" style="width:40px;" /> 
                    </td>
                </tr>
                <tr>
                    <th>유효기간</th>
                    <td>
                        <select style="width:50px;">
                            <option>월</option>
                        </select>
                        <select style="width:50px;">
                            <option>년</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="btnList"><a href="javascript:self.close();"><img src="/work/citibank/images/main/pointPopBtn1.gif" alt="조회" /></a> <a href="javascript:self.close();"><img src="/work/citibank/images/main/pointPopBtn2.gif" alt="취소" /></a> </div>
        </div>
        <div class="bot"></div>
    </div>
</div>
<?php include("../include/foot.php"); ?>
