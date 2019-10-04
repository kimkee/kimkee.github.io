
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
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csFaqTopVisual.jpg" alt="자주묻는질문" /></div>
            	<!-- FAQ 리스트 -->
                <script type="text/javascript">
					function pBoxToggle(K) {
						if (document.getElementById('p'+K).style.display=='block')
						{
							document.getElementById('p'+K).style.display='none';
						}else{
							for (i = 1; i <= 10 ; i++){
								document.getElementById('p'+i).style.display='none';
							}
							document.getElementById('p'+K).style.display='block';
						}
					}
					
					function fn_openBrWindow() { //청약철회
						var url = "http://www.kbpointreemall.com/b2e/jsp/KB/myhelpdesk/faq_recall.html";
						window.open(url, "pop_main_event", "width=646,height=700,resizable=no,scrollbars=yes,status=no");
					}

				</script>
                <div class="csFaqList">
                	<ul>
                    	<li class="listQ" onClick="javascript:pBoxToggle(1);">1. 포인트리란 무엇인가요?</li>
                    	<li class="listA" id="p1">
                        	Point(포인트) + Tree(나무)의 합성어로 포인트가 주렁주렁, 다양한 혜택이 주렁주렁, 즐거움이 주렁주렁, 
                        	하늘높이 쭉쭉 뻗어가는 나무를 통해 최고의 포인트를 적립해 드린다는 의미입니다.<br />
							<a href="#"><img src="/work/kbpoint/images/customer/csFaqBtn1.gif" alt="상세내용보기" /></a>                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(2);">2. 포인트확인은 어떻게 할수 있나요?</li>
                    	<li class="listA" id="p2">                       	

                                포인트리는 <span class="tcOrange">사이트 우측상단에 &quot;포인트리란&quot;을 클릭하시면 KB국민카드사이트 새창이 뜨면 화면상단 메뉴중   &quot;나의포인트리&quot;에서 확인가능하시며</span> 상세 이용내역 확인은 1588-1688로 문의주시면 됩니다.<br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(3);">3. 공인인증서가 뭐죠?</li>
                    	<li class="listA" id="p3">
                        	공인인증서(Certificate)는 공인인증기관(Certification Authority-금융결제원 등)이 발행한 사이버 거래 인감증명서입니다.  인터넷 쇼핑몰에서 30만원이상의 물품을 구매하실 경우 공인인증서를 통해 본인임을 확인합니다.<br />
                        	공인인증서의 이용을 통해 전자서명법에 따라 가입자 본인의 개인정보를 보호 받을 수 있을 뿐 아니라, 인증서를 사용한 거래에 대한 법적인 효력을 부여 받을 수 있습니다. <strong><br />
                        	<br />
                        	공인인증서 발급절차</strong>  <br />
                        	1.거래은행 방문(신분증 지참) 2.인터넷뱅킹 사용신청서 제출(인터넷거래신청) 3.은행 사이트에서 공인인증서 발급신청 4.신청이 완료되면 공인인증서 발급(다운로드) 하드디스크에 다운로드하면 해당 PC에서만 사용 가능 이동식디스크(플로피디스크)에 다운로드하면 여러 PC에서 사용할 수 있어 편리함 <br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(4);">4. 인터넷안전결제(ISP)가 뭔가요?</li>
                    	<li class="listA" id="p4">
                        	인터넷 전자상거래시 고객님의 개인신용정보유출을 원천적으로 차단하는 신용카드 결제서비스로서 안전결제(ISP) 서비스 비밀번호만 입력하여 결제하도록 하여 고객님께서 안전하고 편리하게 전자상거래(인터넷쇼핑)를 하실 수 있도록 하는 서비스입니다. <br />
                        	<img src="/work/kbpoint/images/customer/imgKbtxt.gif" alt="" width="659" height="98" /><br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(5);">5. 주문한 상품의 주문/배송조회는 어떻게 확인하나요?</li>
                    	<li class="listA" id="p5">
                        	인터넷은 화면 상단의 [주문/배송]을 클릭하시면 현재까지의주문리스트를 확인하실 수 있습니다. 전화는 080-083-0000 로 월~금 09시~18시(주말/공휴일 휴무) 확인 가능합니다. <br />
                        	<a href="http://www.kbpointreemall.com/b2e/OrderInfo.do?scnr=List"><img src="/work/kbpoint/images/customer/btnFaqgo5.gif" alt="주문/배송조회 바로가기" width="155" height="23" /></a><br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(6);">6. 주문한 상품의 취소/반품/교환/AS 신청은 어떻게 하나요?</li>
                    	<li class="listA" id="p6">화면 상단의 [주문/배송]을 클릭하시면 현재까지 주문하신 상품의 리스트를 확인하실 수 있으며 <br />
                    	    현재 취소/반품/교환/AS신청은 전화신청(080-083-0000)만 가능합니다. <br />
                    	    빠른시일내 인터넷 신청 확인이 가능하도록 서비스 준비 중에 있습니다. <br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(7);">7. 교환 또는 반품이 안되는 경우는 어떤 경우인가요?</li>
                    	<li class="listA" id="p7">상품설명에 배송/교환/반품/취소 관련 안내가 기재된 경우 다음 안내사항보다 우선 적용됩니다. <br />
                    	    <strong>교환/반품/취소 </strong><br />
                    	    · 상품을 인도 받은 날로부터 7일 이내에 당해 계약에 관한 청약철회가 가능합니다.   <br />
                    	    단,상품명 주변에 <img src="/work/kbpoint/images/customer/ic_hs.gif" alt="현대홈쇼핑" width="55" height="16" />이 표시된 상품일 경우는 인도일 이후 30일 (의류·보석·핸드백·슈즈·선글라스:15일,   <br />
                    	    농산물·수산물·축산물 등 신선식품:7일)이내 교환/반품이 가능합니다.<br />
                    	    <strong>교환/반품 예외 사항(상품하자시 제외) </strong><br />
                    	    · 상품을 사용하였거나 부주의로 인하여 상품이 훼손된 경우 · 세탁 또는 다림질한 경우 <br />
                    	    · 상품 사용 시 상품설명에 기재된 주의사항을 지키지 않은 경우 <br />
                    	    · 상품택을 파손하였거나 분실했을 경우<br />
                    	    상품이 불량일 경우는 30일이내에 반품이 가능합니다. 단, 아래의 경우는 반품이 불가능합니다.<br />
                            
                            <table width="600" cellspacing="2" cellpadding="6" border="0" class="csFaqTable">
                                <tbody>
                                    <tr>
                                        <th>상품군</th>
                                        <th>반품이 안되는 경우</th>
                                    </tr>
                                    <tr>
                                        <td>가전/컴퓨터</td>
                                        <td>제품을 설치했을 경우<br />
                                            프로그램 또는 데이터를 입력했을 경우<br />
                                            면도기 등 위생상품을 사용했을 경우<br />
                                            카메라 상품을 사용했을 경우</td>
                                    </tr>
                                    <tr>
                                        <td>의류/잡화</td>
                                        <td>세탁을 했거나 수선 했을 경우<br />
                                            명품 상품 중 텍(상표)을 제거한 경우<br />
                                            홀로그램 부착 상품의 홀로그램을 제거한 경우</td>
                                    </tr>
                                    <tr>
                                        <td>화장품/향수</td>
                                        <td>밀봉 상품의 경우 밀봉을 개봉하였을 경우</td>
                                    </tr>
                                    <tr>
                                        <td>도서/음반</td>
                                        <td>읽은 흔적이 있는 경우<br />
                                            CD, VCD, 비디오테이프 등 박스 포장을 제거했거나 바코드가 손상된 경우</td>
                                    </tr>
                                    <tr>
                                        <td>꽃/케이크</td>
                                        <td>시들거나 상할 우려가 있는 경우</td>
                                    </tr>
                                    <tr>
                                        <td>레포츠</td>
                                        <td>골프 상품을 받은 후 헤드 그립을 제거했거나 사용 흔적이 있는 경우<br />
                                            자전거, 퀵보드, 신발 등의 상품을 외부에서 사용했을 경우</td>
                                    </tr>
                                    <tr>
                                        <td>침구</td>
                                        <td>제품을 수선했거나 세탁했을 경우</td>
                                    </tr>
                                    <tr>
                                        <td>가구/인터리어</td>
                                        <td>설치 가구 상품을 설치 했을 경우<br />
                                            ※ 주문 제작 가구일 경우 제작 중 취소도 불가능합니다.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(8);">8. 백화점 상품의 교환/반품/AS는 어떻게 진행되나요?</li>
                    	<li class="listA" id="p8"><strong>쇼핑몰 이용약관</strong><br /> 
                    	    - 수신확인의 통지를 받은날부터 7일 <br />
                    	    <strong>TV홈쇼핑 이용약관 </strong><br />
                    	    수신확인의 통지를 받은 날부터 30일 (의류,보석,핸드백,슈즈,선글라스는 15일)<br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(9);">9. 청약철회 청구안내</li>
                    	<li class="listA" id="p9"><a href="javascript:fn_openBrWindow();"><img src="/work/kbpoint/images/customer/btnFaqcancel.gif" alt="청약철회 보러가기" width="127" height="23" /></a><br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(10);">10. 제세공과금은 무엇입니까?</li>
                    	<li class="listA" id="p10">
                        	제세공과금은 기업의 판촉활동으로 발생된 고객의 이익에 대하여 국가에서 불로소득으로 처리하여 납세하시는 세금입니다.  통상 상품가격 또는 현금의 22%를 납세하셔야 하며,해당 회사가 이를 세무소에 대신받아서 납부해드리고 있습니다. <br />
                        	따라서 제세공과금을 당사에 납부하셔야 사은품 및 금액을 받으실 수 있습니다. <br />
                        	<br />
                        	※ 예를 들어, 이벤트에 당첨되어 10만원짜리 상품을 받게 된다면,      <br />
                        	이는 5만원을 넘는 물건이기 때문에 10만원의 22%를 부담해야 합니다.      <br />
                        	참고로 5억원을 초과하는 경우 33%를 뗍니다.<br />
                        </li>
                    	<li class="listQ" onClick="javascript:pBoxToggle(11);">11. 여러 고객에게 개별 발송하고 싶을 때는 어떻게 해야 하나요?</li>
                    	<li class="listA" id="p11">
                        	먼저 원하시는 사은품을 고르신 후 080-083-0000으로 연락주시기 바랍니다. <br />
                        </li>
                    </ul>
                </div>
                
            	<!-- FAQ 리스트 -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>