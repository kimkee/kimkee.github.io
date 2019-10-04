
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>


<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea">
            <div class="leftArea">
                <?php include("csLeftMenu.php"); ?>
            </div>
            <div class="contents mainCsArea">
                <div class="csHead">
                    <div class="tit"><img src="/work/citibank/images/customer/csHeadTitCounsel.gif" alt="1:1상담" /></div>
                    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
                </div>
                <div class="csSubTopVisual"><img src="/work/citibank/images/customer/csCounselTopVisual.jpg" alt="1:1상담" /></div>
                <div class="csCounselFaq" ><a href="csFaq.php"><img src="/work/citibank/images/customer/csCounselFaq.gif" alt="FAQ보기" /></a></div>
                <!-- 본문 -->
                
                <div class="loadingCounsel" id="loadingCounsel">
                    <img src="/work/citibank/images/main/loadingCounsel.gif" alt="상담신청진행중입니다." class="img" />
                </div>
                
                <div class="csCounselTit"><img src="/work/citibank/images/customer/csCounselTit1.gif" alt="1:1상담신청" /></div>
                <table cellspacing="0" class="bbsWrite bbsWriteCsCounsel" style="margin-bottom:0px;">
                    <tr>
                        <th class="w120">문의유형선택</th>
                        <td>
                            <div class="select" style="width:80px; z-index:10;">
                                <span class="ctrl"><span class="arrow">.</span></span>
                                <button type="button" class="selected">취소신청</button>
                                <ul>
                                    <li><a href="javascript:;">111111</a></li>
                                    <li><a href="javascript:;">222222</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>상담상품선택</th>
                        <td>
                            <div style="position:relative;"> <a href="javascript:csCounselPopOn();"><img src="/work/citibank/images/customer/btnOrderList2.gif" alt="주문내역확인하기" /></a>
                                <?php include("../customer/csCounselPop.php"); ?>
                            </div>
                        </td>
                    </tr>
                </table>
                <table cellspacing="0" class="baketList" style="border-top:none;">
                    <tr>
                        <th>주문번호/주문일</th>
                        <th>결제금액</th>
                        <th>상품명</th>
                        <th>주문상태/수정</th>
                    </tr>
                    <tr>
                        <td class="bCheck">
                            <p class="bold">20145898754211</p>
                            <p>2011-02-16</p>
                        </td>
                        <td><strong class="tcBlue">20,000</strong></td>
                        <td> 데쉬보드형주차 알림판 </td>
                        <td class="bHit">
                            <p>상품발송/1개</p>
                            <p><a href="#"><img src="/work/citibank/images/customer/csCounselBtn1.gif" alt="배송추적" /></a></p>
                        </td>
                    </tr>
                </table>
                <table cellspacing="0" class="bbsWrite bbsWriteCsCounsel">
                    <tr>
                        <th class="w120">상담제목</th>
                        <td>
                            <input type="text" style="width:580px;" />
                        </td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td>
                            <textarea name="textarea2" cols="500" rows="6" style="width:580px; height:150px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>답변받으실 <br />
                            E-mail</th>
                        <td>
                            <input type="text" style="width:80px;" />
                            <strong>@</strong>
                            <div class="select" style="width:80px; z-index:10;">
                                <span class="ctrl"><span class="arrow">.</span></span>
                                <button type="button" class="selected">선택하세요</button>
                                <ul>
                                    <li><a href="javascript:;">naver.com</a></li>
                                    <li><a href="javascript:;">hmall.com</a></li>
                                </ul>
                            </div>
                            <label>
                            <input type="checkbox" value="" class="checkbox" />
                            <strong>E-mail로 답변받음</strong> </label>
                            <p style="padding-top:8px;"> 답변은 고객센터 &gt;나의 상담내역에서도 확인하실 수 있습니다.</p>
                        </td>
                    </tr>
                </table>
                <div class="btnList"> <a href="#"><img src="/work/citibank/images/customer/csCounselQna.gif" alt="문의하기" /></a> <a href="#"><img src="/work/citibank/images/customer/btnCancel.gif" alt="취소" /></a> </div>

				<?php include("csOrderInfo.php"); ?>
                <!-- 본문 -->
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
