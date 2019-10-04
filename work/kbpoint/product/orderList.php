
<?php include("../include/commonMeta.php"); ?>
</head>
<body id="subBody">
<?php include("../include/commonInc.php"); ?>
<div class="subWrap">
    <div class="subCenter subCenterOrder">
        <?php include("../include/header.php"); ?>
        <div class="basketHead">
            <?php include("../include/locationSelect.php"); ?>
        </div>
        <div class="mainShopArea basketArea">
            <div class="basketStep"><img src="/work/kbpoint/images/main/basketTop02.gif" alt="장바구니" /></div>
            <div class="orderTit">주문하실 상품</div>
            <table cellspacing="0" class="baketList orderList">
                <tr>
                    <th>&nbsp;</th>
                    <th>상품명/선택사항</th>
                    <th>판매가</th>
                    <th>수량</th>
                    <th>무이자/혜택</th>
                    <th>배송비</th>
                    <th>포인트리</th>
                </tr>
                <tr>
                    <td class="bImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="제품" /></td>
                    <td class="bName"><p class="iName"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                        <p class="iOptName">옵션 : 화이트/3Gs/32G <a href="javascript:optChangePop();"><img src="/work/kbpoint/images/main/basketBtnMod2.gif" alt="변경" /></a> <a href="javascript:orderMemoPop();"><img src="/work/kbpoint/images/main/basketBtnMemo.gif" alt="주문메모" /></a></p></td>
                    <td class="bPrice"><p><span class="priceCommon">20,000원</span></p>
                        <p><span class="icoBenefit"><strong>혜택모음가</strong></span><br />
                            <span class="priceSale">20,000원</span></p></td>
                    <td class="bEa"><div class="btnNum">
                            <input type="text" class="inputPnum" value="1" />
                            <div class="btnArrow"> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumUp.gif" alt="UP" /></a></span> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumDown.gif" alt="Down" /></a> </span> </div>
                            <div class="btnMod"><a href="javascript:;"><img src="/work/kbpoint/images/main/basketBtnMod.gif" alt="수정" /></a></div>
                        </div></td>
                    <td class="benefit"><p><span class="icoSuprice"><strong>깜짝 34,100</strong></span></p>
                        <p><span class="icoPayOne"><strong>일시불 3,100</strong></span></p>
                        <p><span class="icoCoupon"><strong>쿠폰 10%</strong></span></p>
                        <p><span class="icoMoo"><strong>무 10%</strong></span></p></td>
                    <td class="bCarry">2,500원</td>
                    <td class="bPoint">100%</td>
                </tr>
                <tr>
                    <td class="bImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="제품" /></td>
                    <td class="bName"><p class="iName"><a href="#">[애완용품/멍도리] 아이리스 고양이 화장실 NE-550(베이지)</a></p>
                        <p class="iOptName">옵션 : 화이트/3Gs/32G <a href="javascript:optChangePop();"><img src="/work/kbpoint/images/main/basketBtnMod2.gif" alt="변경" /></a></p></td>
                    <td class="bPrice"><p><span class="priceCommon">20,000원</span></p>
                        <p><span class="icoBenefit"><strong>혜택모음가</strong></span><br />
                            <span class="priceSale">20,000원</span></p></td>
                    <td class="bEa"><div class="btnNum">
                            <input type="text" class="inputPnum" value="1" />
                            <div class="btnArrow"> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumUp.gif" alt="UP" /></a></span> <span><a href="#"><img src="/work/kbpoint/images/main/btnNumDown.gif" alt="Down" /></a> </span> </div>
                            <div class="btnMod"><a href="javascript:;"><img src="/work/kbpoint/images/main/basketBtnMod.gif" alt="수정" /></a></div>
                        </div></td>
                    <td class="benefit"><p><span class="icoSuprice"><strong>깜짝 34,100</strong></span></p>
                        <p><span class="icoPayOne"><strong>일시불 3,100</strong></span></p>
                        <p><span class="icoCoupon"><strong>쿠폰 10%</strong></span></p>
                        <p><span class="icoMoo"><strong>무 10%</strong></span></p></td>
                    <td class="bCarry">2,500원</td>
                    <td class="bPoint">50%</td>
                </tr>
            </table>
            <div class="basketTotalPriceBox">
                <div class="priceTotal">총 판매가 : 50,000원   +   배송비 2,500원 = <strong class="totalPrice">198,000</strong> 원</div>
            </div>
            <div class="basketBtnList">
                <div class="bLeft"><a href="basketList.php"><img src="/work/kbpoint/images/main/basketBtnOut.gif" alt="장바구니나가기" /></a></div>
            </div>
            <?php include("../product/privacyAgreeBox.php"); ?>
            <div class="orderTit orderTit2">
                <div class="bLeft">배송정보</div>
                
                <div class="bRight2">
                	<span class="txt1">* 주문하신 분의 전화번호는 주문/배송 확인시 필요한 정보이므로 꼭 기억해두시기 바랍니다.</span>
                    <span class="txt2">* 여러명에게 배송</span> 
                    <a href="#" class="btn"><img src="/work/kbpoint/images/main/orderBtnTab01On.gif" alt="직접입력" /></a>
                </div>
                
<!--            <div class="bRight">
                    <div class="orderTabTit">* 여러명에게 배송</div>
                    <ul class="orderBtnTab">
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab01On.gif" alt="직접입력" /></a></li>
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab02.gif" alt="엑셀파일업로드" /></a></li>
                    </ul>
                </div> -->
            </div>
            <table cellspacing="0" class="orderForm">
                <tr class="tLine">
                    <th class="th1">주문하신분</th>
                    <td class="td1"><input type="text" style="width:80px; margin-right:40px;" value="테스터" /></td>
                    <th class="th2">핸드폰번호</th>
                    <td class="td2">
                    	<select name="select3">
                            <option>010</option>
                        </select>
                        <input type="text" style="width:30px;" value="2211" />
                        -
                        <input type="text" style="width:30px;" value="4567" /></td>
                    <th class="th3">이메일 </th>
                    <td class="th4"><input type="text" value="kimkee@naver.com" /></td>
                </tr>
                <tr>
                    <th>받으신분</th>
                    <td colspan="5"><input type="text" style="width:80px;" value="전효성" />
                    </td>
                </tr>
                <tr>
                    <th>배송지 주소</th>
                    <td colspan="5">
                    	<p style="margin-bottom:5px;">
                            <input type="text" style="width:40px;"  />
                            -
                            <input type="text" style="width:40px;"  />
                            <a href="javascript:zipcodePop();"><img src="/work/kbpoint/images/main/orderBtnZipSch.gif" alt="우편번호찾기" /></a> <a href="javascript:adsNewPop();"><img src="/work/kbpoint/images/main/orderBtnNewAdds.gif" alt="새로운주소입력" /></a> <a href="javascript:adsListPop();;"><img src="/work/kbpoint/images/main/orderBtnNewAddsList.gif" alt="배송주소록보기" /></a>
                        </p>
                        <input type="text" style="width:200px;"  />
                        <input type="text" style="width:200px;"  />
                    </td>
                </tr>
                <tr>
                    <th>전화번호1</th>
                    <td colspan="5">
                    	<select>
                            <option>010</option>
                        </select>
                        <input type="text" style="width:40px;" />
                        -
                        <input type="text" style="width:40px;" />
                    </td>
                </tr>
                <tr>
                    <th>전화번호2</th>
                    <td colspan="5">
                    	<select>
                            <option>010</option>
                        </select>
                        <input type="text" style="width:40px;" />
                        -
                        <input type="text" style="width:40px;" />
                    </td>
                </tr>
                <tr>
                    <th>배송시 요청사항</th>
                    <td colspan="5"><input type="text" style="width:410px;" />
                        (요청하실 내용을 한글 50자 이내로 작성해 주세요) </td>
                </tr>
            </table>
            <div class="orderGift">
                <table cellspacing="0" class="orderGiftTable">
                    <tr>
                        <td class="pImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="" /></td>
                        <td class="gItem"><div class="btnBox">
                                <div class="btn">
                                    <ul>
                                        <li><a href="javascript:adsListSelPop();"><img src="/work/kbpoint/images/main/orderBtnAddress1.gif" alt="배송지목록에서선택" /></a></li>
                                        <li><a href="javascript:adsNewPop();"><img src="/work/kbpoint/images/main/orderBtnAddress2.gif" alt="새로운주소입력" /></a></li>
                                        <li><a href="javascript:orderMemoPop();"><img src="/work/kbpoint/images/main/orderBtnAddress3.gif" alt="주문메모" /></a></li>
                                        <li class="totalEA">총구매수량
                                            <select>
                                                <option>2</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>[일시불할인상품][추가구성:]</p>
                            <p> 상품명  [수량:3개]</p>
                            <p> -옵션1:설명 </p></td>
                    </tr>
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
                        <td><input type="text" style="width:700px" />
                            (0/200byte) </td>
                    </tr>
                    <tr>
                        <th>희망 배송일 </th>
                        <td><input type="text" style="width:80px" value="2011-01-01"  />
                            <a href="javascript:calendarPop();"><img src="/work/kbpoint/images/main/icoCalendar.gif" alt="달력" /></a> </td>
                    </tr>
                </table>
                <table cellspacing="0" class="orderGiftTable">
                    <tr>
                        <td class="pImg"><img src="/work/kbpoint/images/main/basketThumb.gif" alt="" /></td>
                        <td class="gItem"><div class="btnBox">
                                <div class="btn">
                                    <ul>
                                        <li><a href="javascript:adsListSelPop();"><img src="/work/kbpoint/images/main/orderBtnAddress1.gif" alt="배송지목록에서선택" /></a></li>
                                        <li><a href="javascript:adsNewPop();"><img src="/work/kbpoint/images/main/orderBtnAddress2.gif" alt="새로운주소입력" /></a></li>
                                        <li><a href="javascript:orderMemoPop();"><img src="/work/kbpoint/images/main/orderBtnAddress3.gif" alt="주문메모" /></a></li>
                                        <li class="totalEA">총구매수량
                                            <select name="select2">
                                                <option>2</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p>[일시불할인상품][추가구성:]</p>
                            <p> 상품명  [수량:3개]</p>
                            <p> -옵션1:설명 </p></td>
                    </tr>
                    <tr>
                        <th>선물포장</th>
                        <td>해당상품의 선물 포장을 원하십니까?
                            <label>
                            <input type="radio" name="rg2" class="radio" value="" />
                            사용함</label>
                            <label>
                            <input type="radio" name="rg2" class="radio" value="" />
                            사용안함</label>
                        </td>
                    </tr>
                    <tr>
                        <th>선물 메세지 </th>
                        <td><input type="text" style="width:700px" />
                            (0/200byte) </td>
                    </tr>
                    <tr>
                        <th>희망 배송일 </th>
                        <td><input type="text" style="width:80px" value="2011-01-01"  />
                            <a href="javascript:calendarPop();"><img src="/work/kbpoint/images/main/icoCalendar.gif" alt="달력" /></a> </td>
                    </tr>
                </table>
                <div class="btnList btnAdds"><a href="#"><img src="/work/kbpoint/images/main/orderBtnAddress4.gif" alt="배송지추가" /></a></div>
            </div>
            <div class="orderAdrsList">
                <table cellspacing="0" class="orderAdrTable">
                    <tr>
                        <th class="bNum">NO.</th>
                        <th class="bName">받으시는분</th>
                        <th class="bPhone">전화번호1</th>
                        <th class="bAds">배송지주소</th>
                        <th class="bMemo">배송시요청사항</th>
                        <th class="bEa">수량/내역</th>
                    </tr>
                </table>
                <div class="oderAdrTableBox">
                    <table cellspacing="0" class="orderAdrTable orderAdrTableList">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                    </table>
                </div>
                <div class="totalAddPay">
                    <div class="tLeft"></div>
                    <div class="tRight">추가배송비합계 : <strong class="tcBlue">298,000원</strong></div>
                </div>
            </div>
            <div class="orderTit orderTit2">
                <div class="bLeft">배송정보</div>
                <div class="bRight">
                    <div class="orderTabTit">* 여러명에게 배송</div>
                    <ul class="orderBtnTab">
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab01.gif" alt="직접입력" /></a></li>
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab02On.gif" alt="엑셀파일업로드" /></a></li>
                    </ul>
                </div>
            </div>
            <table cellspacing="0" class="orderExlForm">
                <tr>
                    <th>주문하신분</th>
                    <td><input type="text" class="orderName" />
                    </td>
                </tr>
                <tr>
                    <th>대량주문서<br />
                        파일등록</th>
                    <td><ol class="olNum2">
                            <li><strong>대량주문서 파일을 받아서 해당 데이터를 입력합니다.</strong><br />
                            <a href="#"><img src="/work/kbpoint/images/main/orderBtnExl1.gif" alt="대량주문서 파일받기" /></a></li>
                            <li><strong>파일업로드</strong><br />
                                <input type="file" style="width:300px;" />
                                <a href="#"><img src="/work/kbpoint/images/main/orderBtnExl2.gif" alt="등록" /></a>
                                <ul class="ulBul2">
                                    <li>수량,성명,전화번호1(연락가능한번호),우편번호,주소,정보는 필수 항목으로 꼭 입력해주세요.</li>
                                    <li>받으시는 분의 주소 불분명,수취거부에 따른 반품은 주문하시는 분이 반품비를 부답하셔야합니다.</li>
                                    <li>대량 주문서 작성시 샘플 파일을 이용하여 작성해 주시기 바랍니다.</li>
                                    <li>엑셀파일에 상품별 상품 수량을 입력하시기 바랍니다.</li>
                                </ul>
                            </li>
                        </ol></td>
                </tr>
            </table>
            <div class="orderAdrsList">
                <table cellspacing="0" class="orderAdrTable">
                    <tr>
                        <th class="bNum">NO.</th>
                        <th class="bName">받으시는분</th>
                        <th class="bPhone">전화번호1</th>
                        <th class="bAds">배송지주소</th>
                        <th class="bMemo">배송시요청사항</th>
                        <th class="bEa">수량/내역</th>
                    </tr>
                </table>
                <div class="oderAdrTableBox">
                    <table cellspacing="0" class="orderAdrTable orderAdrTableList">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                    </table>
                </div>
                <div class="totalAddPay">
                    <div class="tLeft">[성공]파일을 통한 등록이 성공적으로 완료 되었습니다.</div>
                    <div class="tRight">추가배송비합계 : <strong class="tcBlue">298,000원</strong></div>
                </div>
            </div>
            <div class="orderTit orderTit2">
                <div class="bLeft">배송정보 - 모바일상품권(기본)</div>
                <div class="bRight">
                    <div class="orderTabTit">* 여러명에게 배송</div>
                    <ul class="orderBtnTab">
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab01.gif" alt="직접입력" /></a></li>
                        <li><a href="#"><img src="/work/kbpoint/images/main/orderBtnTab02On.gif" alt="엑셀파일업로드" /></a></li>
                    </ul>
                </div>
            </div>
            <table cellspacing="0" class="orderForm">
                <tr>
                    <th>보내시는분</th>
                    <td><select name="select">
                            <option>010</option>
                        </select>
                        <input type="text" style="width:40px;" value="2211" />
                        -
                        <input type="text" style="width:40px;" value="4567" />
                    </td>
                </tr>
                <tr>
                    <th>받으신분</th>
                    <td><div class="recentAddsArea">
                            <input type="text" style="width:80px;" value="전효성" />
                            <a href="javascript:recentAddsOn();"><img src="/work/kbpoint/images/main/orderBtnRecentAddsList.gif" alt="최근보낸번호보기" /></a>
                            <script type="text/javascript">
                            function recentAddsOn() {
                                document.getElementById('recentAdds').style.display='block';
                            }
                            function recentAddsOff() {
                                document.getElementById('recentAdds').style.display='none';
                            }
                       		</script>
                            <div class="recentAdds" id="recentAdds">
                                <div class="head">
                                    <div class="tit">최근보낸 번호보기</div>
                                    <div class="btn"><a href="javascript:recentAddsOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
                                </div>
                                <div class="ctn">
                                    <table cellspacing="0" class="adsList">
                                        <tr>
                                            <th>이름</th>
                                            <th>전화번호</th>
                                        </tr>
                                        <tr>
                                            <td>이효리</td>
                                            <td><a href="#">010-2000-0000</a></td>
                                        </tr>
                                        <tr>
                                            <td>이효리</td>
                                            <td><a href="#">010-2000-0000</a></td>
                                        </tr>
                                        <tr>
                                            <td>이효리</td>
                                            <td>010-2000-0000</td>
                                        </tr>
                                        <tr>
                                            <td>이효리</td>
                                            <td>010-2000-0000</td>
                                        </tr>
                                        <tr>
                                            <td>이효리</td>
                                            <td>010-2000-0000</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div></td>
                </tr>
                <tr>
                    <th>받으시는분 번호</th>
                    <td><select name="select">
                            <option>052</option>
                        </select>
                        <input type="text" style="width:40px;" />
                        -
                        <input type="text" style="width:40px;margin-right:40px;" />
                    </td>
                </tr>
                <tr>
                    <th>SMS메세지 제목</th>
                    <td><input type="text" style="width:410px;" />
                        (0/120byte) *문자메시지와 동일합니다.</td>
                </tr>
                <tr>
                    <th>MMS메세지</th>
                    <td><textarea cols="80" rows="10" style="width:410px; height:200px;"></textarea>
                        (0/120byte) *MMS 다운로드 후 보게 되는 메시지입니다. </td>
                </tr>
            </table>
            <div class="orderAdrsList">
                <table cellspacing="0" class="orderAdrTable">
                    <tr>
                        <th class="bNum">NO.</th>
                        <th class="bName">받으시는분</th>
                        <th class="bPhone">전화번호1</th>
                        <th class="bAds">배송지주소</th>
                        <th class="bMemo">배송시요청사항</th>
                        <th class="bEa">수량/내역</th>
                    </tr>
                </table>
                <div class="oderAdrTableBox">
                    <table cellspacing="0" class="orderAdrTable orderAdrTableList">
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                        <tr>
                            <td class="bNum">1</td>
                            <td class="bName">홍길자</td>
                            <td class="bPhone">010-1234-5698</td>
                            <td class="bAds">서울시 노원구 상계동 주공아파트  413동 1301호</td>
                            <td class="bMemo">경비실에 맏겨주세요</td>
                            <td class="bEa">3/2</td>
                        </tr>
                    </table>
                </div>
                <div class="totalAddPay">
                    <div class="tLeft">[성공]파일을 통한 등록이 성공적으로 완료 되었습니다.</div>
                    <div class="tRight">추가배송비합계 : <strong class="tcBlue">298,000원</strong></div>
                </div>
            </div>
            <div class="btnList btnAdds"><a href="#"><img src="/work/kbpoint/images/main/orderBtnAddress4.gif" alt="배송지추가" /></a></div>
            <div class="orderTit">
                <div class="bLeft">결제정보</div>
                <div class="bRight"></div>
            </div>
            <div class="payInfo">
                <div class="payInfoLeft">
                    <div class="tit"><img src="/work/kbpoint/images/main/payInfoTit01.gif" alt="결제수단" /></div>
                    <div class="info">
                        <table cellspacing="0" class="pInfo">
                            <tr class="tLine">
                                <th>총 상품금액</th>
                                <td><strong class="payPrice">1,290,000원</strong></td>
                            </tr>
                            <!--<tr>
                                <th>일시불할인</th>
                                <td><input type="text" style="width:90px;" />
                                    <input type="checkbox" class="checkbox"/>
                                    일시불결제로
                                    *,000원 할인 받기</td>
                            </tr> -->
                            <tr>
                                <th>깜짝할인쿠폰</th>
                                <td><input type="text" style="width:90px;" />
                                    <input type="checkbox" class="checkbox"/>
                                    할인적용 </td>
                            </tr>
                            <tr>
                                <th>쿠폰할인</th>
                                <td><input type="text" style="width:90px;" />
                                    <a href="javascript:couponUseOn()"><img src="/work/kbpoint/images/main/payInfoBtn02.gif" alt="쿠폰적용" /></a> <a href="#"><img src="/work/kbpoint/images/main/payInfoBtn03.gif" alt="취소" /></a>
                                    <div class="payCoupon">
                                        <?php include("../product/couponUse.php"); ?>
                                    </div></td>
                            </tr>
                            <tr>
                                <th>포인트리사용</th>
                                <td><input type="text" style="width:90px;" />
                                    <a href="javascript:pointKbPopOn();"><img src="/work/kbpoint/images/main/payInfoBtn01.gif" alt="보유포인트리 확인" /></a>
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
                                            <div class="head">
                                                <div class="tit">KB국민카드 포인트리 확인</div>
                                                <div class="btn"><a href="javascript:pointKbPopOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
                                            </div>
                                            <div class="ctn">
                                                <table cellspacing="0" class="pointList">
                                                    <tr>
                                                        <th>카드선택</th>
                                                        <td><select size="4" style="width:173px;">
                                                                <option>KB해피포인트카드</option>
                                                            </select>                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>ISP 비밀번호</th>
                                                        <td><input type="password" style="width:170px;" />                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="btnList"><a href="javascript:pointKbPopOff();"><img src="/work/kbpoint/images/main/payInfoBtn04.gif" alt="확인" /></a> <a href="javascript:pointKbPopOff();"><img src="/work/kbpoint/images/main/payInfoBtn03.gif" alt="취소" /></a></div>
                                            </div>
                                        </div>
                                    </div></td>
                            </tr>
                            <tr>
                                <th>카드선택</th>
                                <td>KB국민카드
                                    <select>
                                        <option>할부선택</option>
                                    </select>                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="payInfoRight">
                    <div class="tit"><img src="/work/kbpoint/images/main/payInfoTit02.gif" alt="결제금액" /></div>
                    <div class="info">
                        <table cellspacing="0" class="pInfo2">
                            <tr class="tLine">
                                <th>총 상품금액</th>
                                <td><strong class="payPrice tcBlue">31,290,000원</strong></td>
                            </tr>
                            <tr>
                                <th>일시불할인</th>
                                <td><strong class="payPrice tcBlue">-5,000원</strong></td>
                            </tr>
                            <tr>
                                <th>깜짝할인쿠폰</th>
                                <td><strong class="payPrice tcBlue">-5,000원</strong></td>
                            </tr>
                            <tr>
                                <th>일시불할인</th>
                                <td><strong class="payPrice tcBlue">-5,000원</strong></td>
                            </tr>
                            <tr>
                                <th>최종 결제금액</th>
                                <td><strong class="payPriceEnd">1,250,000원</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="clear"></div>
                <div id="loadingPay" class="loadingPay"><img class="img" alt="결재가진행중입니다." src="/work/kbpoint/images/main/loadingOrder.gif" /></div>
            </div>
            <div class="payBtn"> <a href="/work/kbpoint/product/orderCom.php"><img src="/work/kbpoint/images/main/basketBtnPay.gif" alt="결제하기" /></a> <a href="#"><img src="/work/kbpoint/images/main/basketBtnCancel.gif" alt="취소하기" /></a> </div>
            
            <div class="basketInfoBox basketInfoBox2">
                <ul>
                    <li>ISP인증창이 정상적으로 동작하지 않을경우 키보드보안 진단 프로그램을 통해 설치환경을 검사해주시기 바랍니다. <br />
                        만약,검사 이후에도 동일현상이 지속될 경우에는 고객센터(080-083-0000)</li>
                </ul>
                <div class="btnSecProgram"><a href="javascript:;"><img src="/work/kbpoint/images/main/btnSecProgram.gif" alt="키보드보안 진단 프로그램" /></a></div>
            </div>
        </div>
        <?php include("../include/skyScraper.php"); ?>
        <?php include("../include/footer.php"); ?>
    </div>
</div>
<?php include("../include/foot.php"); ?>
