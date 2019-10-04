
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
            	    <div class="tit"><img src="/work/citibank/images/customer/csHeadTitCounsel.gif" alt="내상담내역" /></div>
            	    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
            	</div>
                <div class="csSubTopVisual"><img src="/work/citibank/images/customer/csCounselTopVisual.jpg" alt="내상담내역" /></div>
                <!-- 본문 -->
            	<ul class="csCounTab">
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab01On.gif" alt="전체내역(주문)" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab02.gif" alt="취소신청" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab03.gif" alt="반품신청" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab04.gif" alt="교환신청" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab05.gif" alt="AS신청" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab06.gif" alt="배송문의" /></a></li>
                	<li class="gap"><a href="#"><img src="/work/citibank/images/customer/csCounTab07.gif" alt="전체내역(비주문)" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab08.gif" alt="이벤트문의" /></a></li>
                	<li><a href="#"><img src="/work/citibank/images/customer/csCounTab09.gif" alt="결제/로그인/사이트문의" /></a></li>
                </ul>
            	<div class="btnList"> 
            	    <div class="right"><a href="/work/citibank/customer/csCounsel.php"><img src="/work/citibank/images/customer/btnCoun1.gif" alt="상담신청" /></a></div>
            	</div>
                
                
            	<div class="csCounDayOpt">
                    <a href="#"><img src="/work/citibank/images/customer/btnCounDay1On.gif" alt="일주일" /></a>
                    <a href="#"><img src="/work/citibank/images/customer/btnCounDay2.gif" alt="1개월" /></a>
                    <a href="#"><img src="/work/citibank/images/customer/btnCounDay3.gif" alt="3개월" /></a>
                    <a href="#"><img src="/work/citibank/images/customer/btnCounDay4.gif" alt="6개월" /></a>
                </div>
                
				<script type="text/javascript">
					function csBoxToggle(K) {
						if (document.getElementById('p'+K).style.display=='block')
						{
							document.getElementById('p'+K).style.display='none';
						}else{
							for (i = 1; i <= 2 ; i++){
								document.getElementById('p'+i).style.display='none';
							}
							document.getElementById('p'+K).style.display='block';
						}
					}
				</script>
                
                
                <table cellspacing="0" class="counTableNew counTableTop">
	                <thead>
                    <tr>
                        <th class="t1 left">상담분야</th>
                        <th class="t2">상담신청일</th>
                        <th class="t3">상품평</th>
                        <th class="t4">주문번호</th>
                        <th class="t5">처리상태</th>
                        <th class="t6">답변일</th>
                        <th class="t7 right">답변확인</th>
                    </tr>
                    </thead>
                </table>
                <table cellspacing="0" class="counTable">
                    <tr>
                        <td class="t1">취소신청</td>
                        <td class="t2">2011.02.11 <br />11:05:42</td>
                        <td class="t3">데쉬보드 주차알림판</td>
                        <td class="t4">20145898754211</td>
                        <td class="t5"><img src="/work/citibank/images/customer/btnCounReply1.gif" alt="답변완료" /></td>
                        <td class="t6">2011.02.11 <br />11:05:42</td>
                        <td class="t7"><a href="javascript:csBoxToggle(1);"><img src="/work/citibank/images/customer/btnCounReply2.gif" alt="답변보기"  /></a></td>
                    </tr>
                </table>
                
                <div class="counReplyBox" id="p1">
                    <table cellspacing="0" class="counTableVeiw">
                        <tr>
                            <th class="w100">주문매체</th>
                            <td>인터넷</td>
                            <th class="w100">수량</th>
                            <td>1</td>
                            <th class="w100">결제금액</th>
                            <td><strong class="tcBlue">35,500</strong></td>
                        </tr>
                        <tr>
                            <th>문의내용</th>
                            <td colspan="5">취소신청이요..<br />
                                아래는 신청내용입니다.<br />
                                세부문의 분야<br />
                                .<br />
                                .<br />
                                .<br />
                                .<br />
                                입금하신 금액 : 54,000<br /></td>
                        </tr>
                    </table>
                    <div class="counHead">
                        <div class="tit">문의한 내용 답변보기</div>
                        <div class="btn"><a href="javascript:csBoxToggle(1);"><img src="/work/citibank/images/customer/csCounBtnClose.gif" alt="닫기" /></a></div>
                    </div>
                    <table cellspacing="0" class="counTableVeiw counTableVeiw2">
                        <tr>
                            <th class="w100">처리상태</th>
                            <td>처리완료</td>
                            <th class="w100">답변일</th>
                            <td>2011-02-02 11:08:08</td>
                        </tr>
                        <tr>
                            <th>답변내용</th>
                            <td colspan="3">고객님 안녕하세요 <br />
                                고객님께서 구매하신 상품은 취소 처리 되었습니다. <br /></td>
                        </tr>
                    </table>
                </div>
                <table cellspacing="0" class="counTable">
                    <tr>
                        <td class="t1">취소신청</td>
                        <td class="t2">2011.02.11 <br />11:05:42</td>
                        <td class="t3">데쉬보드 주차알림판 주차알림판 주차알림판</td>
                        <td class="t4">20145898754211</td>
                        <td class="t5"><img src="/work/citibank/images/customer/btnCounReply1.gif" alt="답변완료" /></td>
                        <td class="t6">2011.02.11 <br />11:05:42</td>
                        <td class="t7"><a href="javascript:csBoxToggle(2);"><img src="/work/citibank/images/customer/btnCounReply2.gif" alt="답변보기"  /></a></td>
                    </tr>
                </table>
                
                <div class="counReplyBox" id="p2">
                    <table cellspacing="0" class="counTableVeiw">
                        <tr>
                            <th class="w100">주문매체</th>
                            <td>인터넷</td>
                            <th class="w100">수량</th>
                            <td>1</td>
                            <th class="w100">결제금액</th>
                            <td><strong class="tcBlue">35,500</strong></td>
                        </tr>
                        <tr>
                            <th>문의내용</th>
                            <td colspan="5">취소신청이요..<br />
                                아래는 신청내용입니다.<br />
                                세부문의 분야<br />
                                .<br />
                                .<br />
                                .<br />
                                .<br />
                                입금하신 금액 : 54,000<br /></td>
                        </tr>
                    </table>
                    <div class="counHead">
                        <div class="tit">문의한 내용 답변보기</div>
                        <div class="btn"><a href="javascript:csBoxToggle(2);"><img src="/work/citibank/images/customer/csCounBtnClose.gif" alt="닫기" /></a></div>
                    </div>
                    <table cellspacing="0" class="counTableVeiw counTableVeiw2">
                        <tr>
                            <th class="w100">처리상태</th>
                            <td>처리완료</td>
                            <th class="w100">답변일</th>
                            <td>2011-02-02 11:08:08</td>
                        </tr>
                        <tr>
                            <th>답변내용</th>
                            <td colspan="3">고객님 안녕하세요 <br />
                                고객님께서 구매하신 상품은 취소 처리 되었습니다. <br /></td>
                        </tr>
                    </table>
                </div>
                
				<?php include("bbsPaging.php"); ?>
                

                
                <div class="counBot"><img src="/work/citibank/images/customer/csQnaListGuide.gif" alt="" /></div>

                
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
