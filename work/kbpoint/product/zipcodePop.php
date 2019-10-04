
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop" style="background:#fff">
<div class="zipcodePop">
    <div class="head">
        <div class="tit"><img src="/work/kbpoint/images/main/zipCodePopTit.gif" alt="우편번호찾기" /></div>
    </div>
    <div class="ctn">
        <div class="zipInfo">
            <p class="t1">찾고자하시는 지역의 동이나 읍/면의 이름을 공백없이<br />
                입력하신 후, 찾기버튼을 클릭하십시오. </p>
        </div>
        <form action="zipcodePop2.php">
            <div class="zipSch"><img src="/work/kbpoint/images/main/zipCodePopBul1.gif" alt="" /> 읍/면/동의 이름
                <input type="text" class="keyword" />
                <input type="image" src="/work/kbpoint/images/main/zipCodePopBtn.gif" alt="확인" class="btnSch" />
            </div>
        </form>
        <div class="zipInfo">
            <p class="t1">주소가 '서울시특별시 강남구 역삼동..' 인경우 역삼동 만
                <br />
            입력하시면 됩니다. </p>
        </div>
        <div class="zipListWrap">
            <table cellspacing="0" class="zipList">
                <tr>
                    <th class="w60">우편번호</th>
                    <th>주소</th>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="zipcodePop2.php">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
                <tr>
                    <td>138-836</td>
                    <td class="bTit"><a href="#">서울 송파구 삼전동 890-24호</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="btnList"><a href="javascript:self.close();"><img src="/work/kbpoint/images/main/zipCodePopBot.gif" alt="확인" /></a></div>
</div>
<?php include("../include/foot.php"); ?>