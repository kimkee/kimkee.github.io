
<?php include("../include/commonMeta.php"); ?>
</head>
<body class="viewPop">
<?php include("../include/commonInc.php"); ?>
<div class="csTaxformPop">
    <div class="head">
        <div class="tit"><img src="/work/citibank/images/customer/csTaxformTit.gif" alt="세금계산서 신청양식" /></div>
    </div>
    <div class="ctnBox">
        <table cellspacing="0" class="csTaxformList">
            <tr>
                <th class="w130">사업자등록번호</th>
                <td>
                    <input type="text" style="width:90px;" value="김기현" />
                    ex) 000-00-0000 </td>
            </tr>
            <tr>
                <th>법인명</th>
                <td>
                    <input type="text" style="width:100px;" />
                </td>
            </tr>
            <tr>
                <th>대표자명</th>
                <td>
                    <input type="text" style="width:100px;" />
                </td>
            </tr>
            <tr>
                <th>사업장 소재지</th>
                <td>
                    <p style="margin-bottom:5px;">
                        <input type="text" style="width:40px;" />
                        -
                        <input type="text" style="width:40px;" />
                        <a href="javascript:zipcodePop();"><img src="/work/citibank/images/customer/csTaxformBtn1.gif" alt="우편번호찾기" /></a> </p>
                    <p>나머지 주소
                        <input type="text" style="width:300px;" />
                    </p>
                </td>
            </tr>
            <tr>
                <th>사업의 종류(업태)</th>
                <td>
                    <input type="text" style="width:300px;" />
                    ex) 도매,소매,서비스 </td>
            </tr>
            <tr>
                <th>(품목)</th>
                <td>
                    <input type="text" style="width:300px;" />
                    ex) 무역,통신판매</td>
            </tr>
            <tr>
                <th>전화번호</th>
                <td><span style="margin-bottom:10px;">
                    <select>
                        <option selected="selected">선택하세요</option>
                        <option>010</option>
                        <option>011</option>
                        <option>016</option>
                        <option>018</option>
                        <option>019</option>
                    </select>
                    -
                    <input type="text" style="width:40px;" />
                    -
                    <input type="text" style="width:40px;" />
                    </span></td>
            </tr>
            <tr>
                <th>휴대폰</th>
                <td><span style="margin-bottom:10px;">
                    <select>
                        <option selected="selected">선택하세요</option>
                        <option>010</option>
                        <option>011</option>
                        <option>016</option>
                        <option>018</option>
                        <option>019</option>
                    </select>
                    -
                    <input type="text" style="width:40px;" />
                    -
                    <input type="text" style="width:40px;" />
                    </span></td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>
                    <input type="text" style="width:100px;" />
                    전자세금계산서를 받으실 이메일 주소입니다. </td>
            </tr>
        </table>
    </div>
    <div class="btnList"><a href="javascript:self.close();"><img src="/work/citibank/images/customer/csTaxformConfirm.gif" alt="확인" /></a> </div>
    
    <div class="bot"><a href="javascript:self.close();"><img src="/work/citibank/images/customer/csTaxformBot.gif" alt="닫기" /></a></div>
</div>
<?php include("../include/foot.php"); ?>
