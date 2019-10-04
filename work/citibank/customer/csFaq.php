
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
                    <div class="tit"><img src="/work/citibank/images/customer/csHeadTitFaq.gif" alt="FAQ" /></div>
                    <div class="btnHisBack"><a href="javascript:history.back();"><img src="/work/citibank/images/customer/csHistBack.gif" alt="이전화면가기" /></a></div>
                </div>
                <div class="csSubTopVisual"><img src="/work/citibank/images/customer/csFaqTopVisual.jpg" alt="FAQ" /></div>
                <!-- 본문 -->
                <script type="text/javascript">
					function pBoxToggle(K) {
						if (document.getElementById('p'+K).style.display=='block')
						{
							document.getElementById('p'+K).style.display='none';
						}else{
							for (i = 1; i <= 8 ; i++){
								document.getElementById('p'+i).style.display='none';
							}
							document.getElementById('p'+K).style.display='block';
						}
					}
					
					function fn_openBrWindow() { //청약철회
						var url = "/work/citibank/etc/faqRecall.php";
						window.open(url, "pop_main_event", "width=730,height=700,resizable=no,scrollbars=yes,status=no");
					}

				</script>
                <div class="csFaqList">
                	<div class="csFaqListHead"><img src="/work/citibank/images/customer/csFaqListHead.gif" alt="" /></div>
                    <ul>
                        <li class="listQ" onClick="javascript:pBoxToggle(1);"><strong>01.</strong> 주문 후 배송상태를 어떻게 알 수 있나요</li>
                        <li class="listA" id="p1"> 화면 상단의 주문/배송조회에서 확인하실 수 있습니다. <br />
                            상품발송 단계에서는 배송 추적기능을 통해 택배사, 상품의 현재 위치를 시간대별로 실시간 조회하실수 있습니다. <br />
                            주문상태의 변경은 실시간으로 반영하는것을 원칙으로 하오나, 업체배송 상품의 경우 간혹 반영이 늦어지는 경우가 발생될 수 있습니다. <a href="#"></a> </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(2);"><strong>02.</strong> 취소/반품/교환/AS 등을 신청하려면 어떻게 해야 하나요?</li>
                        <li class="listA" id="p2">상단 메뉴의 고객센터를 클릭하신 후 좌측 메뉴 1:1고객상담을 통해 신청 가능합니다. <br />
                            또한, 전화신청 1600-9883 으로도 취소/반품/교환/AS 처리가 가능합니다.(단, 월~금, 09시~18시, 주말/공휴일 휴무) <br />
                            상품설명에 배송/교환/반품/취소 관련 안내가 기재된 경우 다음 안내사항보다 우선 적용됩니다. <br />
                            <h4 class="faqTit">교환/반품/취소</h4>
                            <ul class="uList">
                                <li> 상품을 인도 받은 날로부터 7일 이내에 당해 계약에 관한 청약철회가 가능합니다.단,상품명 주변에 [현대홈쇼핑]이 표시된 상품일 경우는 인도일 이후 30일 (의류·보석·핸드백·슈즈·선글라스:15일,				
                                    농산물·수산물</li>
                                <li>축산물 등 신선식품:7일)이내 교환/반품이 가능합니다.</li>
                                <li> 일부상품은 고객변심에 의한 반품/교환시 배송비 고객부담(상품설명에 명시된 상품) </li>
                                <li>교환/반품/취소신청 방법 : 인터넷 주문배송 조회 </li>
                            </ul>
                            <h4 class="faqTit">교환/반품 예외 사항(상품하자시 제외) </h4>
                            <ul class="uList">
                                <li> 상품을 사용하였거나 부주의로 인하여 상품이 훼손된 경우</li>
                                <li>세탁 또는 다림질한 경우</li>
                                <li>상품 사용 시 상품설명에 기재된 주의사항을 지키지 않은 경우</li>
                                <li>상품택을 파손하였거나 분실했을 경우 </li>
                            </ul>
                            <p>주문의 진행상태에 따라 신청가능한 항목은 다음과 같습니다. </p>
                            <h4 class="faqTit"><img src="<c:out value='${img_root_ct}'/>images/customer/csFaqTit1.gif" alt="" /></h4>
                            <table cellspacing="0" cellpadding="0" class="csFaqTable">
                                <tr>
                                    <th class="w90">주문상태</th>
                                    <th>신청가능항목</th>
                                </tr>
                                <tr>
                                    <td>주문접수</td>
                                    <td>취소신청,    기타문의, 입금문의</td>
                                </tr>
                                <tr>
                                    <td>주문취소</td>
                                    <td>기타문의</td>
                                </tr>
                                <tr>
                                    <td>결제완료</td>
                                    <td>취소신청,    기타문의</td>
                                </tr>
                                <tr>
                                    <td>상품준비</td>
                                    <td>취소신청,    기타문의</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">발송준비</td>
                                    <td>취소신청,    반품신청, 교환신청,</td>
                                </tr>
                                <tr>
                                    <td>AS신청, 기타문의</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">상품발송</td>
                                    <td>취소신청,    반품신청, 교환신청,</td>
                                </tr>
                                <tr>
                                    <td>AS신청, 기타문의</td>
                                </tr>
                                <tr>
                                    <td>반품접수</td>
                                    <td>기타문의</td>
                                </tr>
                                <tr>
                                    <td>반품완료</td>
                                    <td>기타문의</td>
                                </tr>
                                <tr>
                                    <td>교환접수</td>
                                    <td>기타문의</td>
                                </tr>
                                <tr>
                                    <td>교환완료</td>
                                    <td>취소신청,    반품신청, 교환신청, AS신청, 기타문의</td>
                                </tr>
                                <tr>
                                    <td>AS접수</td>
                                    <td>기타문의</td>
                                </tr>
                                <tr>
                                    <td>AS완료</td>
                                    <td>취소신청,    반품신청, 교환신청, AS신청, 기타문의</td>
                                </tr>
                            </table>
                            <h4 class="faqTit"><img src="<c:out value='${img_root_ct}'/>images/customer/csFaqTit2.gif" alt="" /></h4>
                            <p><img src="<c:out value='${img_root_ct}'/>images/customer/csFaqImg1.gif" alt="" /></p>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(3);"><strong>03.</strong> 교환 또는 반품이 안되는 경우는 어떤 경우인가요?</li>
                        <li class="listA" id="p3">상품설명에 배송/교환/반품/취소 관련 안내가 기재된 경우 다음 안내사항보다 우선 적용됩니다.
                            <p><br />
                            </p>
                            <h4 class="faqTit">교환/반품/취소</h4>
                            <ul class="uList">
                                <li>상품을 인도 받은 날로부터 7일 이내에 당해 계약에 관한 청약철회가 가능합니다.<br />
                                    단,상품명 주변에 <img src="<c:out value='${img_root_ct}'/>images/customer/ic_hs.gif" alt="현대홈쇼핑" width="55" height="16" /> 이 표시된 상품일 경우는 인도일 이후 30일 (의류·보석·핸드백·슈즈·선글라스:15일,<br />
                                    농산물·수산물·축산물 등 신선식품:7일)이내 교환/반품이 가능합니다. </li>
                            </ul>
                            <h4 class="faqTit">교환/반품 예외 사항(상품하자시 제외)</h4>
                            <ul class="uList">
                                <li>상품을 사용하였거나 부주의로 인하여 상품이 훼손된 경우 </li>
                                <li> 세탁 또는 다림질한 경우	 · 상품 사용 시 상품설명에 기재된 주의사항을 지키지 않은 경우 </li>
                                <li>상품택을 파손하였거나 분실했을 경우 </li>
                            </ul>
                            <p style="margin-bottom:10px;">상품이 불량일 경우는 30일이내에 반품이 가능합니다. 단, 아래의 경우는 반품이 불가능합니다. </p>
                            <table cellspacing="0" class="csFaqTable">
                                <tr>
                                    <th>상품군</th>
                                    <th>반품이 안되는 경우</th>
                                </tr>
                                <tr>
                                    <td rowspan="4">가전/컴퓨터</td>
                                    <td>제품을    설치했을 경우</td>
                                </tr>
                                <tr>
                                    <td>프로그램 또는 데이터를 입력했을 경우</td>
                                </tr>
                                <tr>
                                    <td>면도기 등 위생상품을 사용했을 경우</td>
                                </tr>
                                <tr>
                                    <td>카메라 상품을 사용했을 경우</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">의류/잡화</td>
                                    <td>세탁을    했거나 수선 했을 경우</td>
                                </tr>
                                <tr>
                                    <td>명품 상품 중 텍(상표)을 제거한 경우</td>
                                </tr>
                                <tr>
                                    <td>홀로그램 부착 상품의 홀로그램을 제거한 경우</td>
                                </tr>
                                <tr>
                                    <td>화장품/향수</td>
                                    <td>밀봉    상품의 경우 밀봉을 개봉하였을 경우</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">도서/음반</td>
                                    <td>읽은    흔적이 있는 경우</td>
                                </tr>
                                <tr>
                                    <td>CD, VCD, 비디오테이프 등 박스 포장을 제거했거나 바코드가 손상된 경우</td>
                                </tr>
                                <tr>
                                    <td>꽃/케이크</td>
                                    <td>시들거나    상할 우려가 있는 경우</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">레포츠</td>
                                    <td>골프    상품을 받은 후 헤드 그립을 제거했거나 사용 흔적이 있는 경우</td>
                                </tr>
                                <tr>
                                    <td>자전거, 퀵보드, 신발 등의 상품을 외부에서 사용했을 경우</td>
                                </tr>
                                <tr>
                                    <td>침구</td>
                                    <td>제품을    수선했거나 세탁했을 경우</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">가구/인터리어</td>
                                    <td>설치    가구 상품을 설치 했을 경우</td>
                                </tr>
                                <tr>
                                    <td>※ 주문 제작 가구일 경우 제작 중 취소도 불가능합니다.</td>
                                </tr>
                            </table>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(4);"><strong>04.</strong> 청약철회 청구 안내</li>
                        <li class="listA" id="p4">
                            <p><a href="javascript:fn_openBrWindow('/jsp/CT/etc/faqRecall.php');"><img src="/work/citibank/images/customer/btnFaqcancel.gif" alt="청약철회 보러가기" width="127" height="23" /></a></p>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(5);"><strong>05.</strong> 세금계산서/영수증(신용카드, 현금) 이중발행 금지 안내</li>
                        <li class="listA" id="p5">
                            <p>"부가세법시행령 제 57조 2항에 따라 온라인 신용카드 매출전표가 매입계산서로 사용가능함에 따라 신용카드로 발급하신분은 별도의 세금계산서를 발행하지 않습니다.<br />
                                "
                                현금으로 결제하신 금액은 현금영수증을 신청하신 경우 세금계산서를 발급하지 않습니다. 신용카드 영수증으로도 신용카드매입세액공제규정에 의해 매입세액을 정당히 공제받으실 수 있습니다. </p>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(6);"><strong>06.</strong> 제세공과금은 무엇입니까?</li>
                        <li class="listA" id="p6">
                            <p style="margin-bottom:10px;">제세공과금은 기업의 판촉활동으로 발생된 고객의 이익에 대하여 국가에서 불로소득으로 처리하여 납세하시는 세금입니다. 통상 상품가격 또는 현금의 22%를 납세하셔야 하며,해당 회사가 이를 세무소에 대신받아서 납부해드리고 있습니다. 따라서 제세공과금을 당사에 납부하셔야 사은품 및 금액을 받으실 수 있습니다. </p>
                            <p>※예를 들어, 이벤트에 당첨되어 10만원짜리 상품을 받게 된다면,<br />
                            &nbsp;&nbsp;&nbsp;이는 5만원을 넘는 물건이기 때문에 10만원의 22%를 부담해야 합니다. <br />
                            &nbsp;&nbsp;&nbsp;참고로 5억원을 초과하는 경우 33%를 뗍니다. </p>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(7);"><strong>07.</strong> 로그인 안내</li>
                        <li class="listA" id="p7">
                            <p>ㆍ 신규 고객님께서는 휴대폰인증이 반드시 필요하며, 확인 버튼 클릭 시 휴대폰 인증창으로 연결됩니다.  </p>
                                                                                   ㆍ 로그인 창에서 입력하신 이름/휴대폰번호와  인증시 입력한 이름/휴대폰번호가  다른 경우 인증 정보로 자동 변경되어 다음<br />
                            	  &nbsp;&nbsp;&nbsp;&nbsp;로그인 시에는 휴대폰으로 인증하였던 이름과 휴대폰번호로 로그인이 가능합니다.<br />
                                                                                   ㆍ 이름/휴대폰번호/비밀번호는 개인내역(주문/배송, 1:1고객상담 등) 확인 시 반드시 필요한 정보이므로 꼭 기억해주시기<br />
                            	  &nbsp;&nbsp;&nbsp; 바랍니다.
                            </p>
                        </li>
                        <li class="listQ" onClick="javascript:pBoxToggle(8);"><strong>08.</strong> 로그인 비밀번호를 잊어버린 경우 확인은 어떻게 할 수 있나요?</li>
                        <li class="listA" id="p8">
                            <p>비밀번호를 잊어버린 경우에는 고객센터(1600-9883)로 연락 주시면 임시 비밀번호를 SMS를 통해 발급해 드리며 <br />
                            	비밀번호 변경을 통해 재 설정하시면 됩니다.
							</p>
                        </li>
                    </ul>
                </div>
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
