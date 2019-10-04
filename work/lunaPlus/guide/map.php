<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/guide/images/subTit01.png" alt="게임정보" class="png24" /></div>
						<div class="location">HOME &gt; 게임소개 &gt; 게임정보</div>
					</div>
					<div><img src="/work/lunaPlus/guide/images/mapTit.gif" alt="지역정보" /></div>
					<div class="mapWrap">
						<div><img src="/work/lunaPlus/guide/images/mapTit1.gif" alt="월드맵" /></div>
						<div class="worldMap" style="margin-bottom:30px;">
							<script type="text/javascript">
								flashWrite('/work/lunaPlus/swf/worldMap/worldMap.swf',552,307,'worldMap','#ffffff','skal=<%=menuTop%>','transparent','false')
							</script>
						</div>
						<div><img src="/work/lunaPlus/guide/images/mapTit2.gif" alt="지역구만" /></div>
						
						
						
						<table border="1" cellspacing="0" class="mapTable">
							<tr>
								<th class="w80">지역구분</th>
								<th>세부지역명</th>
							</tr>
							<tr>
								<td class="tcPuple aCenter bold">마을</td>
								<td>
									<ul>
										<li><a href="#">알케르 항구</a></li>
										<li><a href="#">네라성 마을</a></li>
										<li><a href="#">알케르(네라)농장</a></li>
										<li><a href="#">적막한 협곡</a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td class="tcPuple aCenter bold">사냥터</td>
								<td>
									<ul>
										<li><a href="#">알케르 평원입구</a></li>
										<li><a href="#">창공의 탑</a></li>
										<li><a href="#">자칸디아 전초기지</a></li>
										<li><a href="#">자칸디아</a></li>
										<li><a href="#">타린투스</a></li>
										<li><a href="#">무릎나무숲 입구</a></li>
										<li><a href="#">무릎나무 숲 벌목지</a></li>
										<li><a href="#">붉은머리 오크 전진기지</a></li>
										<li><a href="#">바람소리 협곡 입구</a></li>
										<li><a href="#">바람소리협곡</a></li>
										<li><a href="#">몽블랑 선착장</a></li>
										<li><a href="#">메마른 가젤 폭포</a></li>
										<li><a href="#">다크 포탈</a></li>
										<li><a href="#">유령나무 늪</a></li>
										<li><a href="#">키에라의 늪</a></li>
										<li><a href="#">페어리 계곡</a></li>
										<li><a href="#">거대한 정원</a></li>
										<li><a href="#">기사단의 묘지</a></li>
									</ul>
									<ul>
										<li><a href="#" class="tcPuple">네라 항구</a></li>
										<li><a href="#" class="tcPuple">사헬지대</a></li>
										<li><a href="#" class="tcPuple">파라수스의 오아시스</a></li>
										<li><a href="#" class="tcPuple">에르피스인의 유적지</a></li>
										<li><a href="#" class="tcPuple">일그러진 균열</a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td class="tcPuple aCenter bold">던젼</td>
								<td>
									<ul>
										<li><a href="#" class="tcPuple">철광석 광산 1층</a></li>
										<li><a href="#" class="tcPuple">철광석 광산 2층</a></li>
										<li><a href="#" class="tcPuple">바람소리 동굴 1층</a></li>
										<li><a href="#" class="tcPuple">바람소리 동굴 2층</a></li>
										<li><a href="#" class="tcPuple">드래고니언 신전 1층</a></li>
										<li><a href="#" class="tcPuple">드래고니언 신전 2층</a></li>
										<li><a href="#" class="tcPuple">데이트매칭 던전</a></li>
										<li><a href="#" class="tcPuple">탐욕의 사원</a></li>
										<li><a href="#" class="tcPuple">난파선</a></li>
										<li><a href="#" class="tcPuple">마력의 탑</a></li>
									</ul>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							function mapPop() {
							  window.open('mapPop.php','mapPop','scrollbars=no,width=545,height=630,top=150');
							}
						</script>
						
						<div class="mapList">
							<div class="map"><a href="javascript:mapPop();"><img src="/work/lunaPlus/guide/images/A_001.jpg" alt="" /></a></div>
							<div class="map"><a href="javascript:mapPop();"><img src="/work/lunaPlus/guide/images/C_010.jpg" alt="" /></a></div>
						</div>
					</div>
				<?php include("../_include/_foot.php"); ?>
