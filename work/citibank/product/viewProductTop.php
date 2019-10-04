
<div class="prdInfo">
    <div class="prdImgBox">
        <div class="prdBig">
            <img src="/work/citibank/images/main/prdImgBig.gif" alt="제품이미지" />
        </div>
        <div class="btnArea">
            <div class="viewLarge"><a href="javascript:viewProductPopup();"><img src="/work/citibank/images/main/btnLargeView.gif" alt="크게보기" /></a></div>
            
        </div>
        <div class="thumList">
            <ul>
                <li><a href="javascript:;"><img src="/work/citibank/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/citibank/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/citibank/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/citibank/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
                <li><a href="javascript:;"><img src="/work/citibank/images/main/prdImgSmall.gif" alt="제품상세이미지" /></a></li>
            </ul>
        </div>
    </div>

    <div class="prdSpecBox">
		<h3 class="productName">퀸센스 실속 다이아몬드 후라이팬 5종(20cm,28cm,30cm,궁중28cm,뚜껑28cm)  </h3>
        <table cellspacing="0" class="pInfoList priceOpt">
            <tr>
                <th>판매가</th>
                <td>: <span class="pNum through">65,000원</span>  <span class="pNum">65,000원</span> 
                <a href="javascript:preCalcPopup();"><img src="/work/citibank/images/main/btnCalc.gif" alt="미리계산" /></a>
                <a href="javascript:couponPackOn();"><img src="/work/citibank/images/main/btnCouponView.gif" alt="사용가능한쿠폰보기" /></a></td>
            </tr>
            
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; <span class="pNum">65,000원</span> </td>
            </tr>
            
            <tr>
                <th>혜택모음가</th>
                <td>: <span class="pTxt">48,000원</span></td>
            </tr>
            <tr>
                <th>깜짝할인쿠폰</th>
                <td>: 594원(6일 2시간 38분 32초 남았습니다.)</td>
            </tr>
            <tr>
                <th>할인쿠폰 </th>
                <td>: <span class="icoCoupon"><strong>5%쿠폰</strong></span></td>
            </tr>
        </table>
        
		<?php include("../product/couponPack.php"); ?>
		
        
        <div class="specOption">
            <table class="list" cellspacing="0" id="specTable">
                <tr>
                    <th>색상/종류</th>
                    <td>
                    	    <div class="select" style="width:150px; z-index:0;">
                                <span class="ctrl"><span class="arrow">.</span></span>
                                <button type="button" class="selected">선택사항없음</button>
                            <ul>
                                <li><a href="#">선택사항없음1</a></li>
                                <li><a href="#">선택사항없음2</a></li>
                                <li><a href="#">선택사항없음3</a></li>
                                <li><a href="#">선택사항없음4</a></li>
                                </ul>
                            </div>

                    	
                    	<!-- 
                        <select class="optSel" id="prdOptSelet">
                        	<option>선택사항없음</option>
                    	</select>
                        -->
                    </td>
                </tr>
                <tr>
                    <th>수량</th>
                    <td>
                        <div class="btnNum">
                            <input type="text" class="inputPnum" value="1" />
                            <div class="btnArrow">
                                <span><a href="#"><img src="/work/citibank/images/main/btnNumUp.gif" alt="UP" /></a></span>
                                <span><a href="#"><img src="/work/citibank/images/main/btnNumDown.gif" alt="Down" /></a> </span>
                            </div> 
                        </div>
                        <span class="btnNumEa"><a href="javascript:rightEaListOn();"><img alt="수량조회" src="/work/citibank/images/main/btnNumEa.gif" /></a></span>
                    </td>
                </tr>
            </table>
        </div>
        <ul class="btn">
            <li class="prdBtn"><a href="viewProduct.php" target="_top"><img src="/work/citibank/images/main/btnPrdView.gif" alt="상품상세" /></a></li>
            <li><a href="orderList.php" target="_top"><img src="/work/citibank/images/main/btnBuy.gif" alt="바로구매" /></a></li>
            <li><a href="basketList.php" target="_top"><img src="/work/citibank/images/main/btnBasket.gif" alt="장바구니" /></a></li>
            <li><a href="javascript:history.back();"><img src="/work/citibank/images/main/btnList.gif" alt="목록보기" /></a></li>
            <!--<li><a href="javascript:zzimBoxMsg();"><img src="/work/citibank/images/main/btnWish.gif" alt="찜" /></a></li>
            <li><a href="javascript:history.back();"><img src="/work/citibank/images/main/btnSoldOut.gif" alt="품절입니다." /></a></li> -->
        </ul>
        
        
        <table cellspacing="0" class="pInfoList">
            <tr>
                <th>제조사/제조국</th>
                <td>: &nbsp; 실리콘/독일</td>
            </tr>
            <tr>
                <th>상품코드</th>
                <td>: &nbsp; 2010123450<a href="#"></a></td>
            </tr>
            <tr>
                <th>소셜서비스</th>
                <td>: &nbsp; 
                	<span class="snsLink">
                        <a href="#"><img src="/work/citibank/images/main/icoSns1.gif" alt="페이스북" /></a>
                        <a href="#"><img src="/work/citibank/images/main/icoSns2.gif" alt="트위터" /></a>
                        <a href="#"><img src="/work/citibank/images/main/icoSns3.gif" alt="미투데이" /></a>
           			</span>
            	</td>
            </tr>
        </table>

    </div>
    
    <!-- 수량조회 -->
    <script type="text/javascript">
        function rightEaListOn() {
            document.getElementById('rightEaList').style.display='block';
        }
        function rightEaListOff() {
            document.getElementById('rightEaList').style.display='none';
        }
    </script>
    <div class="rightEaList" id="rightEaList">
    	<div class="top"></div>
    	<div class="ctnBg">
    	    <div class="head">
    	        <div class="tit">수량조회</div>
    	       
    	    </div>
    	    <div class="ctn">
    	        <table cellspacing="0" class="eaList eaListTop">
    	            <tr>
    	                <th class="sp1">색상-사이즈</th>
                        <th class="sp2">수량</th>
                    </tr>
   	            </table>
    	        <div class="scrollBox">
    	            <table cellspacing="0" class="eaList eaListCtn">
    	                <tr>
    	                    <td class="sp1">검정/235</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/240</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
    	                <tr>
    	                    <td class="sp1">검정/245</td>
                            <td class="sp2">3개</td>
                        </tr>
   	                </table>
	            </div>
    	        <table cellspacing="0" class="eaList eaListBot">
    	            <tr>
    	                <td class="sp1 bg1"><strong>재고수량합계</strong></td>
                        <td class="sp2 bg1"><strong>12</strong>개</td>
                    </tr>
   	            </table>
            </div>
             <div class="btn"><a href="javascript:rightEaListOff();"><img src="/work/citibank/images/main/btnCloseLayer.gif" alt="닫기" /></a></div>
	    </div>
    	<div class="bot"></div>
    </div>
   <!-- 수량조회 // -->
    
    <div class="clear"></div>

</div>