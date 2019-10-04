
<div class="prdInfo">
    <div class="prdImgBox">
        <div class="prdBig">
            <img src="/work/kbpoint/images/main/prdImgBig.gif" alt="제품이미지" />
        </div>
        <div class="btnArea">
            <div class="viewLarge"><a href="javascript:viewProductPopup();"><img src="/work/kbpoint/images/main/btnLargeView.gif" alt="크게보기" /></a></div>

        </div>
        <div class="thumList">
            <ul>
                <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/kbpoint/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
            </ul>
        </div>
    </div>

    <div class="prdSpecBox">
		 <table cellspacing="0" class="priceOpt2">
            <tr>
                <th><img src="/work/kbpoint/images/main/icoSale.gif" alt="Sale" class="icoSale" /> 기간</th>
                <td><span class="date"><strong>~2011/00/00까지</strong> (4일 0시간 00분 남았습니다.)</span></td>
            </tr>
            <tr>
                <th>판&nbsp;&nbsp; &nbsp;매&nbsp; &nbsp;&nbsp;가</th>
                <td>
                    <div class="ppp">
                        <p><span class="pNum">65,000원</span></p>
                        <p><span class="salePrice">65,000원</span></p>
                    </div>
                    <div class="btnIco"><a href="javascript:preCalcPopup();"><img src="/work/kbpoint/images/main/btnCalc.gif" alt="미리계산" /></a>
    	            <a href="javascript:couponPackOn();"><img src="/work/kbpoint/images/main/btnCouponView.gif" alt="사용가능한쿠폰보기" /></a></div>
                </td>
            </tr>
            <tr>
                <th>혜택모음가</th>
                <td><span class="pTxt">48,000원</span></td>
            </tr>
            <tr>
                <th>바로사용쿠폰</th>
                <td><span class="icoCoupon"><strong>3,000원</strong></span></td>
            </tr>
            <tr>
                <th>무이지할부 </th>
                <td><span class="icoMoo"><strong>5개월</strong></span></td>
            </tr>
        </table>


		 <script type="text/javascript">
			function couponPackOn() {
				document.getElementById('couponPack').style.display='block';
				document.getElementById('specTable').style.display='none';
			}
			function couponPackOff() {
				document.getElementById('couponPack').style.display='none';
				document.getElementById('specTable').style.display='block';
			}
		</script>
        <div class="couponPack" id="couponPack" style="display:none">
        	<div class="head">
            	<div class="tit">사용가능한 쿠폰</div>
                <div class="btn"><a href="javascript:couponPackOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
        	</div>
            <div class="ctn">
            	<table cellspacing="0" class="cpList">
                    <tr>
                        <th>쿠폰명</th>
                        <th>할인율</th>
                        <th>보유/유효기간</th>
                    </tr>
                    <tr>
                        <td>13% 할일쿠폰</td>
                        <td>13%</td>
                        <td>미보유 <a href="javascript:;"><img src="/work/kbpoint/images/main/btnCouponGet.gif" alt="쿠폰받기" /></a></td>
                    </tr>
                    <tr>
                        <td>13% 할일쿠폰</td>
                        <td>13%</td>
                        <td>주문시바로사용</td>
                    </tr>
                </table>
                <div class="cpInfo"><span class="size12">※</span> 쿠폰은 상품별로 한개씩만 사용하실 수 있습니다.</div>
            </div>
        </div>
        
        <div class="specOption">
            <table class="list" cellspacing="0" id="specTable">
                <tr>
                    <th>색상/종류</th>
                    <td>
                    	<select class="optSel" id="prdOptSelet">
                        	<option>선택사항없음</option>
                    	</select>
                    </td>
                </tr>
                <tr>
                    <th>수량</th>
                    <td>
                        <div class="btnNum">
                            <input type="text" class="inputPnum" value="1" />
                            <div class="btnArrow">
                                <span><a href="#"><img src="/work/kbpoint/images/main/btnNumUp.gif" alt="UP" /></a></span>
                                <span><a href="#"><img src="/work/kbpoint/images/main/btnNumDown.gif" alt="Down" /></a> </span>
                            </div> 
                        </div>
                        <span class="btnNumEa"><a href="javascript:rightEaListOn();"><img src="/work/kbpoint/images/main/btnNumEa.gif" alt="수량조회" /></a></span>
                    </td>
                </tr>
            </table>
        </div>
        <ul class="btn">
            <li class="prdBtn"><a href="viewProduct.php" target="_top"><img src="/work/kbpoint/images/main/btnPrdView.gif" alt="상품상세" /></a></li>
            <li><a href="orderList.php" target="_top"><img src="/work/kbpoint/images/main/btnBuy.gif" alt="바로구매" /></a></li>
            <li><a href="basketList.php" target="_top"><img src="/work/kbpoint/images/main/btnBasket.gif" alt="장바구니" /></a></li>
            <li><a href="javascript:zzimBoxMsg();"><img src="/work/kbpoint/images/main/btnWish.gif" alt="찜" /></a></li>
            <!-- <li><img src="/work/kbpoint/images/main/btnSoldOut.gif" alt="품절되었습니다." /></li> -->
        </ul>
        
        
        <!--<div class="orderInfo">전화주문은 <strong>3월7일</strong> 오전10시부터가능합니다</div> -->
        
        <table cellspacing="0" class="pInfoList">
            <tr>
                <th>배송비</th>
                <td>: 무료 (저가상품 장바구니 상품)</td>
            </tr>
            <tr>
                <th>평균배송일</th>
                <td>: 2,3일(2일인 75% 이상 가구/설치/주문제작 <a href="#"><img src="/work/kbpoint/images/main/icoQuestion.gif" alt="도움말" /></a></td>
            </tr>
            <tr>
                <th>배송물가지역</th>
                <td>: 도서지역,제주</td>
            </tr>
            <tr>
                <th>반품/교환</th>
                <td>: 상품확인 후 환불 / 반품 교환 배송비 유료  <a href="#"><img src="/work/kbpoint/images/main/icoQuestion.gif" alt="도움말" /></a></td>
            </tr>
            <tr>
                <th>제조사/제조국 </th>
                <td>: 셰프라인/한국 </td>
            </tr>
            <tr>
                <th>상품코드</th>
                <td>: 2012645975456 <a href="#"><img src="/work/kbpoint/images/main/icoCopy.gif" alt="복사하기" /></a></td>
            </tr>
            <tr>
                <th>상품추천하기</th>
                <td>:
                	 <span class="snsLink"><a href="#"><img src="/work/kbpoint/images/main/icoSns1.gif" alt="페이스북" /></a>
                     <a href="#"><img src="/work/kbpoint/images/main/icoSns2.gif" alt="트위터" /></a>
                     <a href="#"><img src="/work/kbpoint/images/main/icoSns3.gif" alt="미투데이" /></a></span>
                    
            </td>
            </tr>
        </table>
                    

    </div>
    <div class="rightBox" id="rightBox">
    	<p class="prdRbanner"><a href="#"><img src="/work/kbpoint/images/main/previewBanner.gif" alt="15%쿠폰" /></a></p>
        <div class="prdAssBanner">
        	<div class="head">
            	<div class="tit">상품평 <span class="tcGreen size11 bold">(5)</span> 건</div>
                <div class="btn"><a href="#"><img src="/work/kbpoint/images/main/previewMore.gif" alt="더보기" /></a></div>
        	</div>
            <div class="btnWrite"><a href="javascript:viewProductAssWritePopup();"><img src="/work/kbpoint/images/main/previewBtn1.gif" alt="상품평쓰기" /></a></div>
        </div>
        <div class="prdpreText1">
            이 상품은 검증되지 않은 효능이나 
            효과의 노출방지를 위해 상품평 
            및 상품Q&amp;A 서비스가 제공되지 
            않습니다.
        </div>
    </div>
    <script type="text/javascript">
        function rightEaListOn() {
            document.getElementById('rightEaList').style.display='block';
            document.getElementById('rightBox').style.display='none';
			document.getElementById('specTable').style.display='none';
        }
        function rightEaListOff() {
            document.getElementById('rightEaList').style.display='none';
            document.getElementById('rightBox').style.display='block';
			document.getElementById('specTable').style.display='block';
        }
    </script>
    <div class="rightEaList" id="rightEaList">
    	<div class="head">
    	    <div class="tit">수량조회</div>
    	    <div class="btn"><a href="javascript:rightEaListOff();"><img src="/work/kbpoint/images/main/couponUseBtnClose.gif" alt="닫기" /></a></div>
    	</div>
        <div class="ctn">
        	<table cellspacing="0" class="eaList">
                <tr>
                    <th>색상-사이즈</th>
                    <th>재고수량</th>
                </tr>
                <tr>
                    <td>검정/235</td>
                    <td>3개</td>
                </tr>
                <tr>
                    <td>검정/240</td>
                    <td>3개</td>
                </tr>
                <tr>
                    <td>검정/245</td>
                    <td>3개</td>
                </tr>
            </table>
        </div>
        <div class="totalEa">재고수량 합계 : 20개</div>
    </div>
    <div class="clear"></div>
</div>