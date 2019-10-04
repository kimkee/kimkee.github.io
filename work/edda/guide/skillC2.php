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
									<td><a href="/work/edda/guide/skillC1.php"><img src="/work/edda/gameInfo/images/classTabCm1.gif" alt="클레릭" /></a></td>
									<td><a href="/work/edda/guide/skillC2.php"><img src="/work/edda/gameInfo/images/classTabCm2On.gif" alt="위자드" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabCm3.gif" alt="프리스트" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabCm4.gif" alt="소서리" /></td>
								</tr>
							</table>
							<div class="clear"></div>
						</div>
						<div class="skillTit"><img src="/work/edda/gameInfo/images/skillC2Tit.gif" alt="" /></div>
						<div class="skillWrap">
							 
								
							<div class="left">
								<div id="STATICMENU" style="z-index:100; left:0px; position: absolute; top:0px;"> 		
								<div class="movie" id="skillMovie">
								<!--<script type="text/javascript">flashWrite('/swf/player.swf',200,170,'skillMovie','#ffffff','file=/swf/classMovie/워리어/대쉬.flv&image=/swf/classMovie/워리어/대쉬.jpg','transparent','false')</script>-->
                                <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=위자드&str2=라이트닝볼트&type=skill" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:200px; height:170px"></iframe>
                                </div>
								<div class="cImg"><img src="/work/edda/gameInfo/images/skillC02charIMG.png" class="png24" alt="" /></div>
								</div>
								<input checked="checked" name="checkbox" id="ANIMATE" onclick="ToggleAnimate();" type="hidden" />
								<script type="text/javascript">InitializeStaticMenu();</script> 
								
							</div>
							
							<div class="right">
							
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item01.gif" class="img" alt="" /></a></div>
										<div class="name">공중부양 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 공중부양을 하여 6%만큼 이동속도 상승효과를 얻습니다. 전투시엔 사용 할 수 없으며 지속적으로 MP를 소모하는 스킬입니다.  1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item02.gif" class="img" alt="" /></a></div>
										<div class="name">데미지 블로킹<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 스태프 착용 시 물리방어력이 18만큼 증가됩니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','라이트닝볼트')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item03.gif" class="img" alt="" /></a></div>
										<div class="name">라이트닝 볼트 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>13</dd>
											<dt>속성</dt>
											<dd>번개</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1550</dd>
										</dl>
									</div>
									<div class="txt"> 번개의 기운이 실린 덩어리를 날려 74의 데미지를 줍니다.<br /> 
									1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item04.gif" class="img" alt="" /></a></div>
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
									<div class="txt"> 스태프 착용 시 MP의 회복력이 17만큼 증가됩니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','아이스대거')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item05.gif" class="img" alt="" /></a></div>
										<div class="name">아이스 대거 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>25</dd>
											<dt>속성</dt>
											<dd>얼음</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1650</dd>
										</dl>
									</div>
									<div class="txt"> 얼음으로 만들어진 대거를 소환하여 적에게 96의 충격을 줍니다. <br />
									1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','아이스니들')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item06.gif" class="img" alt="" /></a></div>
										<div class="name">아이스 니들 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>21</dd>
											<dt>속성</dt>
											<dd>얼음</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1650</dd>
										</dl>
									</div>
									<div class="txt"> 음으로 만들어진 바늘을 날려 85의 고통을 줍니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item07.gif" class="img" alt="" /></a></div>
										<div class="name">어드밴스 마인드 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>9</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1000</dd>
										</dl>
									</div>
									<div class="txt"> 자신 혹은 대상의 정신력을 증가시켜 최대 MP량을 36만큼 증가 시켜줍니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','윈드블로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item08.gif" class="img" alt="" /></a></div>
										<div class="name">윈드 블로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>5</dd>
											<dt>속성</dt>
											<dd>번개</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1600</dd>
										</dl>
									</div>
									<div class="txt"> 바람의 기운을 모아 대상과 그 주변의 모든 대상에게 19의 데미지를 입힙니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item09.gif" class="img" alt="" /></a></div>
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
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item10.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 스태프<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 스태프 착용 시 숙련도를 올려 마법공격력을 8만큼 상승시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','파이어볼트')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item11.gif" class="img" alt="" /></a></div>
										<div class="name">파이어 볼트 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>1</dd>
											<dt>속성</dt>
											<dd>불</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1600</dd>
										</dl>
									</div>
									<div class="txt"> 작은 불덩이를 날려 19의 데미지를 줍니다. 40%의 확률로 지속시간 동안 초당<br /> 
									-1의 화염피해를 줍니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item12.gif" class="img" alt="" /></a></div>
										<div class="name">풋 체인 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 선택한 대상의 이동속도를 20초 동안 -20%만큼 느리게 합니다. <br />
									1~2개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('위자드','프로즌프로텍트')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item13.gif" class="img" alt="" /></a></div>
										<div class="name">프로즌 프로텍트 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>29</dd>
											<dt>속성</dt>
											<dd>얼음</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 얼음으로 보호되는 방어막을 형성하여 150의 데미지를 흡수합니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillC2Item14.gif" class="img" alt="" /></a></div>
										<div class="name">초급 타기<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
