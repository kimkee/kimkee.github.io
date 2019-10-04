<div class="itemBuyPop" id="itemBuyPop">
		<div class="head">
			<div class="tit">구매</div>
			<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/edda/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
		</div>		
		<div class="buyCtn">
			<table border="1" cellspacing="0" class="specList">
				<tr>
					<th>개별가격</th>
					<td><span class="bold tGray">20,000</span> <img src="/work/edda/itemMall/images/icoN4.gif" alt="N" /></td>
				</tr>
				<tr>
					<th>구매수량</th>
					<td>
						<select>
							<option>수량</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>쿠폰사용</th>
					<td>
						<select>
							<option>--쿠폰없음--</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>할인율</th>
					<td>2,000  <img src="/work/edda/itemMall/images/icoN5.gif" alt="N" /></td>
				</tr>
				<tr>
					<th>적립포인트</th>
					<td>200  <img src="/work/edda/itemMall/images/icoP5.gif" alt="P" /></td>
				</tr>
				<tr>
					<th class="tGray">최종구매가격</th>
					<td><span class="bold tRed">18,000</span> <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /></td>
				</tr>
				<tr>
					<th>보유캐시</th>
					<td><span class="bold tYellow">20,000</span> <img src="/work/edda/itemMall/images/icoN2.gif" alt="N" /></td>
				</tr>
			</table>
			<div class="dotLine"></div>
			<table border="1" cellspacing="0" class="specList" style="margin-bottom:5px;">
				<tr>
					<th>결재 후 캐시</th>
					<td><span class="bold tGreen">20,000</span> <img src="/work/edda/itemMall/images/icoN3.gif" alt="N" /></td>
				</tr>
			</table>
			
			<table border="1" cellspacing="0" class="selBuy" style="margin-bottom:7px;">
				<tr>
					<th style="width:80px;">구매인</th>
					<td>
						<select>
							<option>1서버</option>
						</select>
						<select>
							<option>빵꾸똥꾸</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>수령인</th>
					<td>
						<select>
							<option>1서버</option>
						</select>
						<select>
							<option>빵꾸똥꾸</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>메시지</th>
					<td><input type="text" value="사랑의 메세지를 입력해보세요." style="width:170px" />
					</td>
				</tr>
			</table>
			<script type="text/javascript">
				function itemBuyCom() {
					document.getElementById('itemBuyCom').style.display='block';
					document.getElementById('itemBuyPop').style.display='none';
				}
			</script>		
			<div class="btnList"><a href="javascript:itemBuyCom();"><img src="/work/edda/itemMall/images/btnBuyCom.gif" alt="구매확정" /></a></div>
		</div>
		<div class="rt"></div>
		<div class="lb"></div>	
		<div class="rb"></div>	
	</div>