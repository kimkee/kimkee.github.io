<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
						<div class="headTit">
							<div class="tit"><img src="/work/edda/guide/images/subTit03.gif" alt="스토리" /></div>
							<div class="location">Home &gt; 게임정보 &gt; 스킬</div>
						</div>
						<!--<div class="tab"><img src="/work/edda/gameInfo/images/guideTab04.gif" alt="" border="0" usemap="#tab" /></div>
						<map name="tab" id="tab">
							<area shape="rect" coords="514,4,616,35" href="/work/edda/gameInfo/quest.php" alt="퀘스트" />
							<area shape="rect" coords="412,4,514,35" href="/work/edda/gameInfo/party.php" alt="파티" />
							<area shape="rect" coords="309,4,411,35" href="/work/edda/gameInfo/skillA1.php" alt="스킬" />
							<area shape="rect" coords="207,4,308,35" href="/work/edda/gameInfo/interface.php" alt="인터페이스" />
							<area shape="rect" coords="103,3,206,36" href="/work/edda/gameInfo/mkCharactor.php" alt="캐릭터생성" />
							<area shape="rect" coords="8,3,102,36" href="/work/edda/gameInfo/control.php" alt="조작법" />
						</map> -->
                        <script type="text/javascript">
							function movie_change(str1,str2){
								document.getElementById('moviePlay2').src="/work/edda/gameInfo/movie_player.php?str1="+str1+"&str2="+str2+"&type=skill";
							}
						</script>

						<div class="classTab">
							<table border="1" cellpadding="0" cellspacing="0" class="list">
								<tr>
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabA.gif" alt="파이터" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/guide/skillA1.php"><img src="/work/edda/gameInfo/images/classTabAm1.gif" alt="워리어" /></a></td>
									<td><a href="/work/edda/guide/skillA2.php"><img src="/work/edda/gameInfo/images/classTabAm2.gif" alt="소드맨" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabAm3.gif" alt="디펜더" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabAm4.gif" alt="글라디에이터" /></td>
								</tr>
							</table>
							<table border="1" cellpadding="0" cellspacing="0" class="list">
								<tr>
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabB.gif" alt="로브" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/guide/skillB1.php"><img src="/work/edda/gameInfo/images/classTabBm1.gif" alt="어쌔씬" /></a></td>
									<td><a href="/work/edda/guide/skillB2.php"><img src="/work/edda/gameInfo/images/classTabBm2.gif" alt="아처" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabBm3.gif" alt="다크워커" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabBm4.gif" alt="체이서" /></td>
								</tr>
							</table>
							<table border="1" cellspacing="0" class="list">
								<tr>
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabCOn.gif" alt="메이지" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/guide/skillC1.php"><img src="/work/edda/gameInfo/images/classTabCm1On.gif" alt="클레릭" /></a></td>
									<td><a href="/work/edda/guide/skillC2.php"><img src="/work/edda/gameInfo/images/classTabCm2.gif" alt="위자드" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabCm3.gif" alt="프리스트" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabCm4.gif" alt="소서리" /></td>
								</tr>
							</table>
							<div class="clear"></div>
						</div>
						<div class="skillTit"><img src="/work/edda/gameInfo/images/skillC1Tit.gif" alt="" /></div>
						<div class="skillWrap">
							 
								
							<div class="left">
								<div id="STATICMENU" style="z-index:100; left:0px; position: absolute; top:0px;"> 		
								<div class="movie" id="skillMovie">
								<!--<script type="text/javascript">flashWrite('/swf/player.swf',200,170,'skillMovie','#ffffff','file=/swf/classMovie/워리어/대쉬.flv&image=/swf/classMovie/워리어/대쉬.jpg','transparent','false')</script>-->
                                <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=클레릭&str2=디바인프로텍션&type=skill" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:200px; height:170px"></iframe>
                                </div>
								<div class="cImg"><img src="/work/edda/gameInfo/images/skillC01charIMG.png" class="png24" alt="" /></div>
								</div>
								<input checked="checked" name="checkbox" id="ANIMATE" onclick="ToggleAnimate();" type="hidden" />
								<script type="text/javascript">InitializeStaticMenu();</script> 
								
							</div>
							
							<div class="right">
							
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','디바인프로텍션')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item01.gif" class="img" alt="" /></a></div>
										<div class="name">디바인 프로텍션 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>29</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>843</dd>
										</dl>
									</div>
									<div class="txt"> 선택한 대상의 HP를 8%만큼 회복시킵니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item02.gif" class="img" alt="" /></a></div>
										<div class="name">마나 부스터<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>3</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 오브 착용 시 MP의 회복력이 16만큼 증가됩니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','부활')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item03.gif" class="img" alt="" /></a></div>
										<div class="name">부활 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>21</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1000</dd>
										</dl>
									</div>
									<div class="txt"> 체력과 마나를 사용하여 파티원을 부활 시킵니다. 부활시 죽음으로 인한 경험치 손실의 10%를 보전합니다. 1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item04.gif" class="img" alt="" /></a></div>
										<div class="name">쉴드 디펜시브 업<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>34</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 방패 착용 시 방패 방어력외에 추가로 10만큼의 방어력 상승 효과가 지속됩니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','스트록게쉬')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item05.gif" class="img" alt="" /></a></div>
										<div class="name">스트록 게쉬 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>17</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1600</dd>
										</dl>
									</div>
									<div class="txt"> 선택한 대상의 HP가 자연회복을 할 때마다 10만큼 추가적으로 채워줍니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','아이스볼')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item06.gif" class="img" alt="" /></a></div>
										<div class="name">아이스 볼 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>1</dd>
											<dt>속성</dt>
											<dd>얼음</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1530</dd>
										</dl>
									</div>
									<div class="txt"> 주위의 마나를 끌어모아 적에게 12의 고통을 주고 30%의 확률로 잠시동안 상대의 물리공격력을 -1만큼 감소시킵니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','어드밴스바디')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item07.gif" class="img" alt="" /></a></div>
										<div class="name">어드밴스 바디 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>25</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1000</dd>
										</dl>
									</div>
									<div class="txt"> 자신 혹은 대상의 육체능력을 활성화시켜 최대 HP량을 23만큼 증가 시켜줍니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','일렉트릭쇼크')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item08.gif" class="img" alt="" /></a></div>
										<div class="name">일렉트릭 쇼크 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>9</dd>
											<dt>속성</dt>
											<dd>번개</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1570</dd>
										</dl>
									</div>
									<div class="txt"> 전기의 힘을 이용해 대상에게 30의 충격을 줍니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','컨트롤마인드')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item09.gif" class="img" alt="" /></a></div>
										<div class="name">컨트롤 마인드 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>13</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>986</dd>
										</dl>
									</div>
									<div class="txt"> 자신 혹은 대상의 마나 회복력을 일정시간동안 20만큼 증가시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','텔레포트')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item10.gif" class="img" alt="" /></a></div>
										<div class="name">텔레포트 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>17</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>3000</dd>
										</dl>
									</div>
									<div class="txt"> 면내에 원하는 곳으로 텔레포트를 합니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item11.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 라이트아머<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>6</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 천 방어구(가슴,장갑,신발) 착용 시 추가로  방어력이 8만큼 증가합니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item12.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 오브 <img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>2</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 오브 착용 시 숙련도를 올려 마법공격력을 6만큼 상승시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('클레릭','힐링')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item13.gif" class="img" alt="" /></a></div>
										<div class="name">힐링 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>5</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1600</dd>
										</dl>
									</div>
									<div class="txt"> 선택한 대상의 HP를 81만큼 채워줍니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC1Item14.gif" class="img" alt="" /></a></div>
										<div class="name">초급 타기 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>20</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 초급 탈 것을 탈 수 있습니다.</div>
								</div>
								
								
						
								
							</div>
							<div class="clear"></div>
						</div>
						<?php include("../_include/_foot.php"); ?>
