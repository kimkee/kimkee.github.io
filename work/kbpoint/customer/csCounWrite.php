
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
                <div class="csSubTopVisual" style="margin-bottom:20px;"><img src="/work/kbpoint/images/customer/csMypageTopVisual.jpg" alt="마이페이지" /></div>
                <!--  -->
                <div class="bbsHead">1:1상담문의</div>
                <script type="text/javascript">
				function csOrderListPop() { //미리계산 팝업
				  window.open('csOrderListPop.php','csOrderListPop','scrollbars=no,width=720,height=502,left=300,top=300');
				}
				</script>
                <table cellspacing="0" class="bbsWrite bbsWriteCoun">
                    <tr>
                        <th class="w120">문의유형선택</th>
                        <td>
                            <select>
                                <option>취소신청</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>상담상품선택</th>
                        <td><a href="javascript:csOrderListPop();"><img src="/work/kbpoint/images/customer/btnOrderList2.gif" alt="주문내역확인하기" /></a></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="counTD aCenter" style="padding:20px 10px">취소/반품/교환/AS 문의 시 주문내역 확인버튼을 클릭해서 뜨는 주문내역 창에서<br />
                            원하시는 주문번호를 선택하신 후 신청해 주시기 바랍니다. </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="counTD">
                            <table cellspacing="0" class="counTable counTableIn" >
                                <tr>
                                    <th>주문번호/주문일</th>
                                    <th>결제금액</th>
                                    <th>상품명</th>
                                    <th>주문번호</th>
                                </tr>
                                <tr>
                                    <td>20145898754211<br />
                                        2011-02-16 </td>
                                    <td>22,000</td>
                                    <td>데쉬보드 주차알림판</td>
                                    <td>
                                        <p style="margin-bottom:4px;">상품발송/1개</p>
                                        <p> <a href="#"><img src="/work/kbpoint/images/customer/btnDelivery.gif" alt="배송추적" width="56" height="19" /></a></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th>상담제목</th>
                        <td>
                            <input type="text" style="width:560px;" />
                        </td>
                    </tr>
                    <tr>
                        <th>내용</th>
                        <td>
                            <textarea name="textarea" cols="500" rows="6" style="width:560px; height:150px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>답변받으실 E-mail</th>
                        <td>
                            <input type="text" style="width:80px;" />
                            @
                            <select>
                                <option>naver.com</option>
                            </select>
                            <input type="checkbox" value="" class="checkbox" />
                            E-mail로 답변받음
                            <p style="padding-top:8px;"> 답변은 고객센터 >나의 상담내역에서도 확인하실 수 있습니다.</p>
                        </td>
                    </tr>
                    <tr>
                        <th>알림 받으실 SMS</th>
                        <td>
                            <select>
                                <option>010</option>
                            </select>
                            -
                            <input type="text" style="width:40px;" />
                            -
                            <input type="text" style="width:40px;" />
                            <input type="checkbox" value="" class="checkbox" />
                            SMS 알림요청
                            <p style="padding-top:8px;"> SMS알람요청을 신청하시면 답변처리가 완료된 시점에 휴대폰 SMS로 알려드립니다. </p>
                        </td>
                    </tr>
                </table>
                <div class="btnList"> <a href="#"><img src="/work/kbpoint/images/customer/btnQna.gif" alt="문의하기" /></a> <a href="#"><img src="/work/kbpoint/images/customer/btnCancel.gif" alt="취소" /></a></div>
                <div class="bbsHead">주문 상태별 1:1고객상담 신청가능 항목 안내</div>
                <table cellspacing="0" class="deliveryTable">
                    <tr>
                        <th class="w80">주문상태</th>
                        <th>신청가능한항목</th>
                    </tr>
                    <tr>
                        <th>주문접수</th>
                        <td>취소신청,입금문의 배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>주문취소 </th>
                        <td>배송및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>결제완료</th>
                        <td>취소신청, 배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>상품준비</th>
                        <td>취소신청, 배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>발송준비</th>
                        <td>반품신청, 교환신청, AS신청, 배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>상품발송</th>
                        <td>반품신청, 교환신청, AS신청, 배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>반품접수 </th>
                        <td>배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>반품완료</th>
                        <td>배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>교환접수 </th>
                        <td>배송 및 기타문의 </td>
                    </tr>
                    <tr>
                        <th>교환완료</th>
                        <td>취소시니청, 반품신청, 교환신청, AS신청 </td>
                    </tr>
                    <tr>
                        <th>AS접수</th>
                        <td>배송 및 기타문의 </td>
                    </tr>
                </table>
                <!-- -->
            </div>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>