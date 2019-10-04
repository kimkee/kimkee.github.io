
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter">
        <?php include("../include/header.php"); ?>
        <div class="mainShopArea">
            <div class="leftArea">
                <?php include("../include/leftMenu.php"); ?>
            </div>
            <div class="contents basketArea">
                <div class="basketStep"><img src="/work/citibank/images/main/basketTop02.gif" alt="주문결제" /></div>
                <div class="basketTit">주문하실 상품 </div>
                <table cellspacing="0" class="baketList orderList">
                    <tr>
                        <th>&nbsp;</th>
                        <th>상품명/선택사항</th>
                        <th>판매가</th>
                        <th>수량</th>
                        <th>합계</th>
                    </tr>
                    <tr>
                        <td class="bImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="제품" /></td>
                        <td class="bName">
                            <p class="iName"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                            <p class="iOptName">옵션 : 화이트/3Gs/32G </p>
                            <p><a href="javascript:orderMemoOn();"><img src="/work/citibank/images/main/basketBtnMemo.gif" alt="주문메모" /></a></p>
                            <div style="position:relative">
                                <?php include("orderMemo.php"); ?>
                            </div>
                        </td>
                        <td class="bPrice">
                            <p><span class="priceCommon">20,000원</span></p>
                        </td>
                        <td class="bEa">
                            <div class="btnNum">
                                <input type="text" class="inputPnum" value="1" />
                                <div class="btnArrow"> <span><a href="#"><img src="/work/citibank/images/main/btnNumUp.gif" alt="UP" /></a></span> <span><a href="#"><img src="/work/citibank/images/main/btnNumDown.gif" alt="Down" /></a> </span> </div>
                                <div class="btnMod"><a href="javascript:;"><img src="/work/citibank/images/main/basketBtnMod.gif" alt="수정" /></a></div>
                            </div>
                        </td>
                        <td class="bPoint">
                            <p><span class="priceCommon">20,000원</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="bImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="제품" /></td>
                        <td class="bName">
                            <p class="iName"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                            <p class="iOptName">옵션 : 화이트/3Gs/32G </p>
                            <p> <a href="javascript:orderMemoOn();"><img src="/work/citibank/images/main/basketBtnMemo.gif" alt="주문메모" /></a></p>
                        </td>
                        <td class="bPrice">
                            <p><span class="priceCommon">20,000원</span></p>
                        </td>
                        <td class="bEa">
                            <div class="btnNum">
                                <input type="text" class="inputPnum" value="1" />
                                <div class="btnArrow"> <span><a href="#"><img src="/work/citibank/images/main/btnNumUp.gif" alt="UP" /></a></span> <span><a href="#"><img src="/work/citibank/images/main/btnNumDown.gif" alt="Down" /></a> </span> </div>
                                <div class="btnMod"><a href="javascript:;"><img src="/work/citibank/images/main/basketBtnMod.gif" alt="수정" /></a></div>
                            </div>
                        </td>
                        <td class="bPoint">
                            <p><span class="priceCommon">20,000원</span></p>
                        </td>
                    </tr>
                </table>
                <div class="basketTotalPriceBox">
                    <div class="bLeft"><a href="basketList.php"><img src="/work/citibank/images/main/basketBtnOut.gif" alt="장바구니가기" /></a> </div>
                    <div class="priceTotal bRight"> 상품 합계 금액 <strong class="totalPrice">2,198,000 원</strong></div>
                </div>
                
                <?php include("../product/privacyAgreeBox.php"); ?>

                
                
                <div class="orderInfoWrap">
                    <div class="oLeft">
                        <div class="orderTit">주문자정보</div>
                        <table cellspacing="0" class="orderForm">
                            <tr>
                                <th class="bgGray" style="height:23px">주문자명 </th>
                                <th class="bgGray" style="padding-left:3px; ">
                                    <input type="text" style="width:80px;" value="테스터" />
                                </th>
                            </tr>
                            <tr>
                                <th>핸드폰</th>
                                <td>
                                
                                    <div class="select" style="width:80px; z-index:10;">
                                        <span class="ctrl"><span class="arrow">.</span></span>
                                        <button type="button" class="selected">선택하세요</button>
                                    
                                    <ul>
                                        <li><a href="#">010</a></li>
                                        <li><a href="#">016</a></li>
                                        <li><a href="#">017</a></li>
                                        <li><a href="#">018</a></li>
                                        <li><a href="#">019</a></li>
                                        </ul>
                                    </div>

                                   <!-- <select>
                                        <option selected="selected">선택하세요</option>
                                        <option>010</option>
                                    </select> -->
                                    <input type="text" style="width:40px;" />
                                    -
                                    <input type="text" style="width:40px;" />
                                </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td>
                                    <input type="text" style="width:220px;" />
                                </td>
                            </tr>
                            <tr>
                                <th style="height:116px; *height:118px;">주소</th>
                                <td>
                                    <p>
                                        <input type="text" style="width:40px;"  />
                                        -
                                        <input type="text" style="width:40px;"  />
                                        <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a></p>
                                    <p>
                                        <input type="text" style="width:220px;"  />
                                    </p>
                                    <p>
                                        <input type="text" style="width:220px;"  />
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" class="bgGray" style="height:36px;">＊전화번호는 주문/배송 확인 시 반드시 필요한 정보이므로 <br />
                                    &nbsp; &nbsp;꼭 기억해두시기 바랍니다. </th>
                            </tr>
                        </table>
                    </div>
					<script type="text/javascript">
                        function excelScreenOn() {
                            document.getElementById('excelScreen').style.display='block';
                            document.getElementById('orderExlWrap').style.display='block';
                            document.getElementById('orderGift').style.display='none';
							
                        }
                        function excelScreenOff() {
                            document.getElementById('excelScreen').style.display='none';
                            document.getElementById('orderExlWrap').style.display='none';
                            document.getElementById('orderGift').style.display='block';
                        }
                    </script>
                    <div class="oRight">
                        <div class="orderTit orderTit2">
                            <div class="bLeft">배송정보</div>
                            <div class="bRight">
                                <div class="orderTabTit">* 여러명에게 배송</div>
                                <ul class="orderBtnTab">
                                    <li><a href="javascript:excelScreenOff();"><img src="/work/citibank/images/main/orderBtnTab01On.gif" alt="직접입력" /></a></li>
                                    <li><a href="javascript:excelScreenOn();"><img src="/work/citibank/images/main/orderBtnTab02.gif" alt="엑셀파일업로드" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="excelScreen" id="excelScreen">
                        	<iframe src="blank.html" width="367" height="280" frameborder="0" scrolling="no"></iframe>
                        </div>
                        <table cellspacing="0" class="orderForm">
                            <tr>
                                <th colspan="2" class="bgGray" style="height:23px">
                                    <label>
                                    <input type="radio" class="radio" value="radio" />
                                    주문자 정보 동일</label>
                                    <a href="javascript:adsListPop();;"><img src="/work/citibank/images/main/orderBtnNewAddsList.gif" alt="배송주소록보기" /></a>                                </th>
                            </tr>
                            <tr>
                                <th class="w100">주문자명</th>
                                <td>
                                    <input type="text" style="width:80px;" value="테스터" />
                                </td>
                            </tr>
                            <tr>
                                <th>핸드폰</th>
                                <td>
                                    <div class="select" style="width:80px; z-index:10">
                                        <span class="ctrl"><span class="arrow">.</span></span>
                                        <button type="button" class="selected">선택하세요</button>
                                    
                                    <ul>
                                        <li><a href="#">010</a></li>
                                        <li><a href="#">016</a></li>
                                        <li><a href="#">017</a></li>
                                        <li><a href="#">018</a></li>
                                        <li><a href="#">019</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" style="width:40px;" />
                                    -
                                    <input type="text" style="width:40px;margin-right:40px;" />
                                </td>
                            </tr>
                            <tr>
                                <th>연락처</th>
                                <td>
                                    <div class="select" style="width:80px; z-index:5">
                                        <span class="ctrl"><span class="arrow">.</span></span>
                                        <button type="button" class="selected">선택하세요</button>
                                    
                                    <ul>
                                        <li><a href="#">010</a></li>
                                        <li><a href="#">016</a></li>
                                        <li><a href="#">017</a></li>
                                        <li><a href="#">018</a></li>
                                        <li><a href="#">019</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" style="width:40px;" />
                                    -
                                    <input type="text" style="width:40px;margin-right:40px;" />
                                </td>
                            </tr>
                            <tr>
                                <th style="height:80px;">배송지 주소</th>
                                <td>
                                    <p>
                                        <input type="text" style="width:40px;"  />
                                        -
                                        <input type="text" style="width:40px;"  />
                                        <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a></p>
                                    <p>
                                        <input type="text" style="width:220px;"  />
                                    </p>
                                    <p>
                                        <input type="text" style="width:220px;"  />
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                	<p>배송시 요청사항<br /><span class="normal">(0/100byte)</span></p>
                                </th>
                                <td>
                                    <input type="text" style="width:220px;" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="orderGift" id="orderGift">
                	<-- 일반주문 
                	<table cellspacing="0" class="orderGiftTable">
                        <tr>
                            <td class="pImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="" /></td>
                            <td class="gItem">
                                <p>[일시불할인상품][추가구성:]</p>
                                <p> 상품명  [수량:3개]</p>
                                <p> -옵션1:설명 </p>
                            </td>
                            <td class="gItem">
                                <div class="gBox">
                                    <input type="text" style="width:30px" />
                                    <a href="javascript:;"><img src="/work/citibank/images/main/btnUp.gif" alt="추가" /></a> <a href="javascript:;"><img src="/work/citibank/images/main/btnDown.gif" alt="빼기" /></a> 충구매수량 : 0/1개 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="pImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="" /></td>
                            <td class="gItem">
                                <p>[일시불할인상품][추가구성:]</p>
                                <p> 상품명  [수량:3개]</p>
                                <p> -옵션1:설명 </p>
                            </td>
                            <td class="gItem">
                                <div class="gBox">
                                    <input type="text" style="width:30px" />
                                    <a href="javascript:;"><img src="/work/citibank/images/main/btnUp.gif" alt="추가" /></a> <a href="javascript:;"><img src="/work/citibank/images/main/btnDown.gif" alt="빼기" /></a> 충구매수량 : 0/1개 
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table cellspacing="0" class="orderGiftTable">
                        <tr>
                            <th>선물포장</th>
                            <td>해당상품의 선물 포장을 원하십니까?
                                <label>
                                <input type="radio" name="rg1" class="radio" value="" />
                                사용함</label>
                                <label>
                                <input type="radio" name="rg1" class="radio" value="" />
                                사용안함</label>
                            </td>
                        </tr>
                        <tr>
                            <th>선물 메세지 </th>
                            <td>
                                <input type="text" style="width:500px" />
                            </td>
                        </tr>
                        <tr>
                            <th>희망 배송일 </th>
                            <td>
                                <input type="text" style="width:80px" value="2011-01-01"  />
                                <a href="javascript:calendarPop();"><img src="/work/citibank/images/main/icoCalendar.gif" alt="달력" /></a> </td>
                        </tr>
                    </table>
                    <div class="btnList btnAdds"><a href="#"><img src="/work/citibank/images/main/orderBtnAddress4.gif" alt="배송지추가" /></a></div>
                    <div class="orderAdrsList">
                    
                        <table cellspacing="0" class="orderAdrTable orderAdrTableHead">
                            <tr>
                                <th class="bNum">NO.</th>
                                <th class="bName">받으시는분</th>
                                <th class="bPhone">전화번호1</th>
                                <th class="bAds">배송지주소</th>
                                <th class="bMemo">배송시요청사항</th>
                                <th class="bEa">수량/내역</th>
                            </tr>
                        </table>
                        
                        <table cellspacing="0" class="orderAdrTable">
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70"/>
                                </td>
                                <td class="bPhone">
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                </td>
                                <td class="bAds">
                                    <p>
                                        <input type="text" class="w70"/>
                                        <input type="text" class="w120"/>
                                    </p>
                                    <p> <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a>
                                            <input type="text" class="w120"/>
                                    </p>
                                </td>
                                <td class="bMemo">
                                    <textarea name="textarea2" cols="10" rows="3" style="width:200px; height:37px;"></textarea>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDetail.gif" alt="상세내역보기" /></a></p>
                                </td>
                            </tr>
                        </table>
                        
                        <table cellspacing="0" class="orderGiftTable orderGiftTable2">
                            <tr>
                                <td class="pImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="" /></td>
                                <td class="gItem">
                                    <p>[일시불할인상품][추가구성:]</p>
                                    <p> 상품명  [수량:3개]</p>
                                    <p> -옵션1:설명 </p>
                                </td>
                                <td class="gItem">
                                    <div class="gBox">ssssss</div>
                                </td>
                            </tr>
                        </table>
                        
                        <table cellspacing="0" class="orderGiftTable orderGiftTable2">
                            <tr>
                                <td class="pImg"><img src="/work/citibank/images/main/basketThumb.gif" alt="" /></td>
                                <td class="gItem">
                                    <p>[일시불할인상품][추가구성:]</p>
                                    <p> 상품명  [수량:3개]</p>
                                    <p> -옵션1:설명 </p>
                                </td>
                                <td class="gItem">
                                    <div class="gBox">ssssss</div>
                                </td>
                            </tr>
                        </table>
                        
                        <table cellspacing="0" class="orderAdrTable">
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70"/>
                                </td>
                                <td class="bPhone">
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                </td>
                                <td class="bAds">
                                    <p>
                                        <input type="text" class="w70"/>
                                        <input type="text" class="w120"/>
                                    </p>
                                    <p> <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a>
                                            <input type="text" class="w120"/>
                                    </p>
                                </td>
                                <td class="bMemo">
                                    <textarea name="textarea2" cols="10" rows="3" style="width:200px; height:37px;"></textarea>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDetail.gif" alt="상세내역보기" /></a></p>
                                </td>
                            </tr>
                        </table>
                        
                        <div class="totalAddPay"><strong>[성공]</strong> 직접입력을 통한 등록이 성공적으로 완료되었습니다.</div>
                        
                    </div>
                    일반주문-->
                    <br />
                    <br /><br />
                    <-- 모바일주문
                    <table cellspacing="0" class="orderGiftTable orderGiftTableMb">
                        <tr>
                            <td class="pImg"><img src="/work/citibank/images/main/basketThumbMb.gif" alt="" /></td>
                            <td class="gItem">
                                <p><strong>[기프티쇼] 아이스 카페모카라떼(Tell)10개</strong></p>
                                <p> -옵션1:설명 </p>
                            </td>
                            <td class="gItem">
                                <div class="gBox">
                                    <input type="text" style="width:30px" />
                                    <a href="javascript:;"><img src="/work/citibank/images/main/btnUp.gif" alt="추가" /></a> <a href="javascript:;"><img src="/work/citibank/images/main/btnDown.gif" alt="빼기" /></a> 충구매수량 : 0/1개
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <div class="btnList btnAdds"><a href="#"><img src="/work/citibank/images/main/orderBtnAddress4.gif" alt="배송지추가" /></a></div>
                    <table cellspacing="0" class="orderAdrTable orderAdrTableMobile orderAdrTableHead">
                        <tr>
                            <th class="bNum">NO.</th>
                            <th class="bName">받으시는분</th>
                            <th class="bPhone">받으시는분 번호</th>
                            <th class="bAds">상품</th>
                            <th class="bEa">수량</th>
                        </tr>
                    </table>
                    <table cellspacing="0" class="orderAdrTable orderAdrTableMobile">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">
                                <input type="text" class="w70" value="홍길동"/>
                            </td>
                            <td class="bPhone">
                                <input type="text" class="w100" value="010-000-0000"/>
                            </td>
                            <td class="pImg"><img src="/work/citibank/images/main/basketThumbMb.gif" alt="" /></td>
                            <td class="gItem aLeft">
                                <p><strong>[기프티쇼] 아이스 카페모카라떼(Tell)10개</strong></p>
                                <p> -옵션1:설명 </p>
                            </td>
                            <td class="bEa">
                                <p>1개</p>
                                <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                            </td>
                        </tr>
                    </table>
                    <table cellspacing="0" class="orderAdrTable orderAdrTableMobile">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">
                                <input type="text" class="w70" value="홍길동"/>
                            </td>
                            <td class="bPhone">
                                <input type="text" class="w100" value="010-000-0000"/>
                            </td>
                            <td class="pImg"><img src="/work/citibank/images/main/basketThumbMb.gif" alt="" /></td>
                            <td class="gItem aLeft">
                                <p><strong>[기프티쇼] 아이스 카페모카라떼(Tell)10개</strong></p>
                                <p> -옵션1:설명 </p>
                            </td>
                            <td class="bEa">
                                <p>1개</p>
                                <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                            </td>
                        </tr>
                    </table>
                    <div class="totalAddPay"><strong>[성공]</strong> 직접입력을 통한 등록이 성공적으로 완료되었습니다.</div>
                    모바일주문-->
                </div>
                <div id="orderExlWrap" style="display:none;">
                    <table cellspacing="0" class="orderExlForm">
                        <tr>
                            <th>주문하신분</th>
                            <td>
                                <input type="text" class="orderName" /> 
                            </td>
                        </tr>
                        <tr>
                            <th>대량주문서<br />
                                파일등록</th>
                            <td>
                                <ol class="olNum2">
                                    <li><strong>대량주문서 파일을 받아서 해당 데이터를 입력합니다.</strong><br />
                                        <a href="#"><img src="/work/citibank/images/main/orderBtnExl1.gif" alt="대량주문서 파일받기" /></a></li>
                                    <li><strong>파일업로드</strong><br />
                                        <input type="file" style="width:300px;" />
                                        <a href="#"><img src="/work/citibank/images/main/orderBtnExl2.gif" alt="등록" /></a>
                                        <ul class="ulBul2">
                                            <li><span class="tcBlue">배송은 우편번호 기준으로 진행되오니 정확히 입력하여 주시기 바랍니다.</span> </li>
                                            <li><span class="tcBlue">수량</span>, 성명, 전화번호 1(연락가능한 번호), 우편번호, 주소 정보는 필수 항목으로 꼭 입력해 주세요.</li>
                                            <li>받으시는 분의 주소 불분명, 수취거부에 따른 반품은 주문하시는 분이 반품비를 부담 하셔야 합니다.</li>
                                            <li>대량 주문서 작성 시 샘플 파일을 이용하여 작성해 주시기 바랍니다. </li>
                                            <li>CSV파일에 상품별 상품 수량을 입력 하시기 바랍니다.(배송지별 보내지 않는 상품이 있는 경우, 수량은 0으로 입력해 주세요.)</li>
                                            <li>CSV파일의 1행(첫번째)항목은 제목행이므로, 수취인관련 정보는 2행부터 입력해주시기 바랍니다.</li>
                                        </ul>
                                    </li>
                                </ol>
                            </td>
                        </tr>
                    </table> 
                                
                    <div class="orderAdrsList">
                    	<-- 일반주문엑셀 
                        <table cellspacing="0" class="orderAdrTable">
                            <tr>
                                <th class="bNum">NO.</th>
                                <th class="bName">받으시는분</th>
                                <th class="bPhone">전화번호1</th>
                                <th class="bAds">배송지주소</th>
                                <th class="bMemo">배송시요청사항</th>
                                <th class="bEa">수량/내역</th>
                            </tr>
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70"/>
                                </td>
                                <td class="bPhone">
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                </td>
                                <td class="bAds">
                                    <p>
                                        <input type="text" class="w70"/>
                                        <input type="text" class="w120"/>
                                    </p>
                                    <p> <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a>
                                            <input type="text" class="w120"/>
                                    </p>
                                </td>
                                <td class="bMemo">
                                    <textarea name="textarea" cols="10" rows="3" style="width:200px; height:37px;"></textarea>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDetail.gif" alt="상세내역보기" /></a></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70"/>
                                </td>
                                <td class="bPhone">
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                    <p>
                                        <input type="text" class="w100"/>
                                    </p>
                                </td>
                                <td class="bAds">
                                    <p>
                                        <input type="text" class="w70"/>
                                        <input type="text" class="w120"/>
                                    </p>
                                    <p> <a href="javascript:zipcodePop();"><img src="/work/citibank/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a>
                                            <input type="text" class="w120"/>
                                    </p>
                                </td>
                                <td class="bMemo">
                                    <textarea name="textarea" cols="10" rows="3" style="width:200px; height:37px;"></textarea>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDetail.gif" alt="상세내역보기" /></a></p>
                                </td>
                            </tr>
                        </table>
                        <div class="totalAddPay"><strong>[성공]</strong> 직접입력을 통한 등록이 성공적으로 완료되었습니다.</div>
                        -->
                        <br /><br /><br />

                    	<-- 모바일 주문엑셀 
                        <table cellspacing="0" class="orderAdrTable">
                            <tr>
                                <th class="bNum">NO.</th>
                                <th class="bName">받으시는분</th>
                                <th class="bPhone">받으시는분 번호</th>
                                <th colspan="2" class="bAds">상품</th>
                                <th class="bEa">수량</th>
                            </tr>
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70" value="홍길동"/>
                                </td>
                                <td class="bPhone">
                                    <input type="text" class="w100" value="010-000-0000"/>
                                </td>
                                <td class="pImg"><img src="/work/citibank/images/main/basketThumbMb.gif" alt="" /></td>
                                <td class="gItem aLeft">
                                    <p><strong>[기프티쇼] 아이스 카페모카라떼(Tell)10개</strong></p>
                                    <p> -옵션1:설명 </p>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="bNum">1</td>
                                <td class="bName">
                                    <input type="text" class="w70" value="홍길동"/>
                                </td>
                                <td class="bPhone">
                                    <input type="text" class="w100" value="010-000-0000"/>
                                </td>
                                <td class="pImg"><img src="/work/citibank/images/main/basketThumbMb.gif" alt="" /></td>
                                <td class="gItem aLeft">
                                    <p><strong>[기프티쇼] 아이스 카페모카라떼(Tell)10개</strong></p>
                                    <p> -옵션1:설명 </p>
                                </td>
                                <td class="bEa">
                                    <p>1개</p>
                                    <p><a href="#"><img src="/work/citibank/images/main/orderBtnDel.gif" alt="삭제" /></a></p>
                                </td>
                            </tr>
                        </table>
                        <div class="totalAddPay"><strong>[성공]</strong> 직접입력을 통한 등록이 성공적으로 완료되었습니다.</div>
                        -->
                    </div>
                </div>
                
                
                
                <div class="orderTit">
                    <div class="bLeft">결제정보</div>
                    <div class="bRight"></div>
                </div>
                <div class="payInfo">
                    <table cellspacing="0" class="pInfo">
                        <tr>
                            <th class="bgGray w100"><strong class="tcBlue">총 상품금액</strong></th>
                            <td class="bgGray"><strong class="tcBlue">1,290,000원</strong></td>
                        </tr>
                        <tr>
                            <th>깜짝 할인</th>
                            <td>
                                <input type="text" style="width:150px;" value="3,500" />
                                <input type="checkbox" class="checkbox"/>
                                일시불결제로
                                *,000원 할인 받기</td>
                        </tr>
                        <tr>
                            <th>쿠폰할인</th>
                            <td>
                                <input type="text" style="width:150px;" />
                                <a href="javascript:couponUsePop()"><img src="/work/citibank/images/main/payInfoBtn02.gif" alt="쿠폰적용" /></a> <a href="#"><img src="/work/citibank/images/main/payInfoBtn03.gif" alt="취소" /></a>

                            </td>
                        </tr>
                        <tr>
                            <th>결제 금액</th>
                            <td><strong class="size14 tcOrange">24,500 원</strong> <strong>(= 판매금액 31500원 - 할인금액 7000원)</strong></td>
                        </tr>
                        <tr>
                            <th>결제 방법</th>
                            <td>
                                <label>
                                <input name="r1" type="radio" class="radio" value="" />
                                씨티카드</label>
                                <label>
                                <input name="r1" type="radio" class="radio" value="" />
                                씨티포인트</label>
                                <label>
                                <input name="r1" type="radio" class="radio" value="" />
                                씨티카드 + 씨티포인트</label>
                            </td>
                        </tr>
                        <tr>
                            <th>결제할포인트</th>
                            <td>
                                <div style="float:left;">
                                    <input type="text" style="width:150px;" />
                                    <a href="javascript:pointPop();"><img src="/work/citibank/images/main/payInfoBtn01.gif" alt="보유포인트리 확인" /></a></div>
								<div style=" float:right; width:330px;" class="tcBlue size11">매입절차에 따른 시간 차로 조회하신 포인트와 <br />   결제시 차감되는 포인트 금액이 서로 상이할 수 있습니다.</div>
                            </td>
                        </tr>
                        <tr>
                            <th>카드결제금액</th>
                            <td>
                                <input type="text" style="width:150px;" />
                            </td>
                        </tr>
                        <tr>
                            <th>할부방식</th>
                            <td>
                                <label>
                                <input name="r2" type="radio" class="radio" value="" />
                                일시불</label>
                                <label>
                                <input name="r2" type="radio" class="radio" value="" />
                                할부</label>
                                <select>
                                    <option>할부선택</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="tcBlue payInfoMsg">※ 씨티 포인트로 결제 시 포인트는 실시간 차감이 아닌 매입 시 차감됩니다. (포인트 차감분은 약 2~3일 후 확인하실 수 있습니다.)    <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;매입절차에 따른 시간 차로 조회하신 포인트와 결제시 차감되는 포인트 금액이 서로 상이할 수 있습니다.    <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;씨티 포인트 결제를 이용하실 경우 씨티 포인트가 먼저 차감되고 부족한 부분은 카드 결제로 이루어집니다</div>
                    <div class="loadingPay" id="loadingPay">
                        <img src="/work/citibank/images/main/loadingOrder.gif" alt="결재가진행중입니다." class="img" />
                    </div>
               
                </div>

                <div class="btnList"> <a href="orderCom.php"><img src="/work/citibank/images/main/basketBtnPay.gif" alt="결제하기" /></a> <a href="basketList.php"><img src="/work/citibank/images/main/basketBtnCancel.gif" alt="이전화면가기" /></a> </div>
            </div>
            <?php include("../include/footGuide.php"); ?>
            <div class="clear"></div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
