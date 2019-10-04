
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="csBody">
<?php include("../include/commonInc.php"); ?>
<div class="csWrap">
    <div class="csCenter">
        <?php include("../include/header.php"); ?>
        <?php include("../customer/csLocation.php"); ?>
        <div class="mainCsArea">
        	<?php include("../customer/csLeftMenu.php"); ?>
            <div class="rightArea">
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csCounselTopVisual.jpg" alt="고객상담" /></div>
            	<!--  -->
                <div class="csCounSelTop"><img src="/work/kbpoint/images/customer/csCounselImg.gif" alt="" /></div>
                <div id="loadingCounsel" class="loadingCounsel"><img class="img" alt="상담신청진행중입니다." src="/work/kbpoint/images/main/loadingCounsel.gif" /></div>
                <div class="bbsHead">1:1상담문의</div>
            	<table cellspacing="0" class="bbsWrite">
                    <tr>
                        <th class="w120">문의유형선택</th>
                        <td>
                            <select name="select" id="select">
                                <option>취소신청</option>
                            </select>                        </td>
                    </tr>
                    <tr>
                        <th>상담상품선택</th>
                        <td><a href="#"><img src="/work/kbpoint/images/customer/btnOrderList2.gif" alt="주문내역확인하기" /></a></td>
                    </tr>
                    <tr>
                        <th>상담제목</th>
                        <td><input type="text" style="width:560px;" /></td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td><textarea name="textarea" cols="500" rows="6" style="width:560px; height:150px;"></textarea></td>
                    </tr>
                    <tr>
                        <th>답변받으실 E-mail</th>
                        <td><input type="text" style="width:80px;" /> @ 
                            <select name="select" id="select">
                                <option>naver.com</option>
                            </select>
                            <input type="checkbox" value="" class="checkbox" />
                         	E-mail로 답변받음 
                             <p style="padding-top:8px;">    답변은 고객센터 >나의 상담내역에서도 확인하실 수 있습니다.</p>                        </td>
                    </tr>
                    <tr>
                        <th>알림 받으실 SMS</th>
                        <td><select name="select" id="select">
                            <option>010</option>
                            </select>
                            -
                            <input type="text" style="width:40px;" />
                            -
                            <input type="text" style="width:40px;" />
                            <input type="checkbox" value="" class="checkbox" />
                            SMS 알림요청 
                        <p style="padding-top:8px;">       SMS알람요청을 신청하시면 답변처리가 완료된 시점에 휴대폰 SMS로 알려드립니다. </p>                        </td></tr>
                </table>
            	<div class="btnList"> <a href="#"><img src="/work/kbpoint/images/customer/btnQna.gif" alt="문의하기" /></a></div>
            	<!-- -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>