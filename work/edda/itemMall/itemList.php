<div class="itemList">

	
	<script type="text/javascript">
			function itemPopOn() { //아이템정보 팝업 6개
				document.getElementById('itemPop1').style.display='block';
				
			}
			function itemBuyPop() { // 구매 팝업열기
				document.getElementById('itemBuyPop').style.display='block';
				document.getElementById('itemScreen').style.display='block';
			}
			function itemPopClose() { // 모두 닫기
				document.getElementById('itemPop1').style.display='none';
				document.getElementById('itemBuyPop').style.display='none';
				document.getElementById('itemBuyCom').style.display='none';	
				document.getElementById('itemSpecPop').style.display='none';
				document.getElementById('itemScreen').style.display='none';				
			}
			function itemSpecPop() { // 상세스팩열기
				document.getElementById('itemSpecPop').style.display='block';
			}
			function itemSSPop() { // 스샷열기
				document.getElementById('itemSSBig').style.display='block';
				document.getElementById('ssScreen').style.display='block';
			}
			function itemSSClose() { // 스샷닫기
				document.getElementById('itemSSBig').style.display='none';
				document.getElementById('ssScreen').style.display='none';
			}
	</script>
	
	<div class="itemScreen" id="itemScreen"></div>  <!-- 배경 가리기 -->
	
	<?php include("../itemMall/itemPop.php"); ?>      <!-- 아이템정보 -->
	
	<?php include("../itemMall/itemSpecPop.php"); ?>  <!-- 상세스펙 -->
	
	<?php include("../itemMall/itemBuyPop.php"); ?>   <!-- 구매 & 선물팝업 -->
	
	<?php include("../itemMall/itemBuyCom.php"); ?>   <!-- 결제완료 & 구매완료 팝업 -->

	<!-- 아이템리스트 6개 -->
	<ul>
		<li class="itBox">
			<div class="item">
				<div class="flag"><img src="/work/edda/itemMall/images/flagHot.png" alt="HOT" class="png24" /></div>
				<div class="img"><a href="javascript:itemPopOn();"><img src="/work/edda/itemMall/images/icoItem1.gif" alt="" /></a></div>
				<div class="btn"><a href="javascript:itemBuyPop();"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="javascript:itemBuyPop();"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="javascript:itemPopOn();">호박유령</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ctLine">20,000</span> → <span class="ct red">18,000</span> <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /> <img src="/work/edda/itemMall/images/ico10Down.gif" alt="10%할인" /></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. 
				</p>
			</div>	
		</li>
		<li class="itBox">
			<div class="item">
				<div class="flag"><img src="/work/edda/itemMall/images/flagBest.png" alt="BEST" class="png24" /></div>
				<div class="img"><a href="#"><img src="/work/edda/itemMall/images/icoItem2.gif" alt="" /></a></div>
				<div class="btn"><a href="#"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="#"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="#">크리스마스에 눈이오면</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ct">18,000 <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /></span></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. </p>
			</div>
		</li>
		<li class="itBox">
			<div class="item">
				<div class="img"><a href="#"><img src="/work/edda/itemMall/images/icoItem1.gif" alt="" /></a></div>
				<div class="btn"><a href="#"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="#"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="#">호박유령</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ctLine">20,000</span> → <span class="ct red">18,000</span> <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /> <img src="/work/edda/itemMall/images/ico10Down.gif" alt="10%할인" /></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. </p>
			</div>
		</li>
		<li class="itBox">
			<div class="item">
				<div class="img"><a href="#"><img src="/work/edda/itemMall/images/icoItem2.gif" alt="" /></a></div>
				<div class="btn"><a href="#"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="#"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="#">크리스마스에 눈이오면</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ct">18,000 <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /></span></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. </p>
			</div>
		</li>
		<li class="itBox">
			<div class="item">
				<div class="img"><a href="#"><img src="/work/edda/itemMall/images/icoItem1.gif" alt="" /></a></div>
				<div class="btn"><a href="#"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="#"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="#">호박유령</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ctLine">20,000</span> → <span class="ct red">18,000</span> <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /> <img src="/work/edda/itemMall/images/ico10Down.gif" alt="10%할인" /></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. </p>
			</div>
		</li>
		<li class="itBox">
			<div class="item">
				<div class="img"><a href="#"><img src="/work/edda/itemMall/images/icoItem2.gif" alt="" /></a></div>
				<div class="btn"><a href="#"><img src="/work/edda/itemMall/images/btnBuy.gif" alt="구매" /></a> <a href="#"><img src="/work/edda/itemMall/images/btnGift.gif" alt="선물" /></a></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="#">크리스마스에 눈이오면</a></h4>
					<div class="ico"><img src="/work/edda/itemMall/images/icoPack.gif" alt="패키지" /></div>
				</div>
				<div class="cash"><img src="/work/edda/itemMall/images/icoCoin.gif" alt="" /> <span class="ct">18,000 <img src="/work/edda/itemMall/images/icoN.gif" alt="N" /></span></div>
				<p class="memo">호박 유령 펫은 할로윈데이를 맞아 <br />
					공동묘지에 새롭게 등장한 친구입니다. </p>
			</div>
		</li>
	</ul>
	<div class="clear"></div>
</div>
