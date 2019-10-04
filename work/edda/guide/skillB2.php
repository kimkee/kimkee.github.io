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
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabBOn.gif" alt="로브" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/guide/skillB1.php"><img src="/work/edda/gameInfo/images/classTabBm1.gif" alt="어쌔씬" /></a></td>
									<td><a href="/work/edda/guide/skillB2.php"><img src="/work/edda/gameInfo/images/classTabBm2On.gif" alt="아처" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabBm3.gif" alt="다크워커" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabBm4.gif" alt="체이서" /></td>
								</tr>
							</table>
							<table border="1" cellspacing="0" class="list">
								<tr>
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabC.gif" alt="메이지" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/guide/skillC1.php"><img src="/work/edda/gameInfo/images/classTabCm1.gif" alt="클레릭" /></a></td>
									<td><a href="/work/edda/guide/skillC2.php"><img src="/work/edda/gameInfo/images/classTabCm2.gif" alt="위자드" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabCm3.gif" alt="프리스트" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabCm4.gif" alt="소서리" /></td>
								</tr>
							</table>
							<div class="clear"></div>
						</div>
						<div class="skillTit"><img src="/work/edda/gameInfo/images/skillB2Tit.gif" alt="" /></div>
						<div class="skillWrap">
							 
								
							<div class="left">
								<div id="STATICMENU" style="z-index:100; left:0px; position: absolute; top:0px;"> 		
								<div class="movie" id="skillMovie">
								<!--<script type="text/javascript">flashWrite('/swf/player.swf',200,170,'skillMovie','#ffffff','file=/swf/classMovie/워리어/대쉬.flv&image=/swf/classMovie/워리어/대쉬.jpg','transparent','false')</script>-->
                                <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=아처&str2=게일샷&type=skill" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:200px; height:170px"></iframe>
                                </div>
								<div class="cImg"><img src="/work/edda/gameInfo/images/skillB02charIMG.png" class="png24" alt="" /></div>
								</div>
								<input checked="checked" name="checkbox" id="ANIMATE" onclick="ToggleAnimate();" type="hidden" />
								<script type="text/javascript">InitializeStaticMenu();</script> 
								
							</div>
							
							<div class="right">
							
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','게일샷')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item01.gif" class="img" alt="" /></a></div>
										<div class="name">게일 샷 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>9</dd>
											<dt>속성</dt>
											<dd>독</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 질풍과 같은 위력으로 32의 데미지를 줍니다. 1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','마이티애로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item02.gif" class="img" alt="" /></a></div>
										<div class="name">마이티 애로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>1</dd>
											<dt>속성</dt>
											<dd>번개</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 강력한 화살을 날려 14의 데미지를 주고 40%의 확률로 -1만큼의 힘 수치를 감소시킵니다. 타격이 되는 대상을 뒤로 밀어냅니다.  1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','배틀애로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item03.gif" class="img" alt="" /></a></div>
										<div class="name">배틀 애로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>17</dd>
											<dt>속성</dt>
											<dd>독</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 날카로운 화살로 상대방과 그 주변의 모든 적에게 47만큼의 쓰라린 고통을 줍니다.  1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','백스텝')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item04.gif" class="img" alt="" /></a></div>
										<div class="name">백스텝 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
									<div class="txt"> 뒤로 점프하여 순식간에 거리를 넓힙니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item05.gif" class="img" alt="" /></a></div>
										<div class="name">어큐러시 업<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 활 착용 시 명중 수치가 86만큼 상승합니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item06.gif" class="img" alt="" /></a></div>
										<div class="name">크리티컬 라이즈<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 활 착용 시 물리 공격의 크리티컬 데미지를 6만큼 상승시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','타겟팅')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item07.gif" class="img" alt="" /></a></div>
										<div class="name">타겟팅 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>13</dd>
											<dt>속성</dt>
											<dd>불</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>2000</dd>
										</dl>
									</div>
									<div class="txt"> 상대방의 물리공격력이 -20만큼 감소합니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item08.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 레더아머<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 가죽 방어구(가슴,장갑,신발) 착용 시 추가로  방어력이 8만큼 증가합니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item09.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 보우<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 활 착용 시 숙련도를 올려 물리공격력을 4만큼 상승시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','트리플애로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item10.gif" class="img" alt="" /></a></div>
										<div class="name">트리플 애로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>29</dd>
											<dt>속성</dt>
											<dd>불</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1800</dd>
										</dl>
									</div>
									<div class="txt"> 순간적인 움직임으로 세 발의 화살을 날려 총 95의 데미지를 줍니다.  1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','파워샷')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item11.gif" class="img" alt="" /></a></div>
										<div class="name">파워 샷 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>5</dd>
											<dt>속성</dt>
											<dd>얼음</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 보통의 화살보다 크고 무거운 화살을 날려 25의 고통을 줍니다.  1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('아처','파이어캔버지')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item12.gif" class="img" alt="" /></a></div>
										<div class="name">파이어 캔버지 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>25</dd>
											<dt>속성</dt>
											<dd>불</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 타오르는 불꽃을 한 곳에 모아 87의 데미지를 주고 40%확률로 -6만큼의 화염피해를 입힙니다.  1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item13.gif" class="img" alt="" /></a></div>
										<div class="name">포이즌 샷 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>21</dd>
											<dt>속성</dt>
											<dd>독</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>1900</dd>
										</dl>
									</div>
									<div class="txt"> 독이 발라진 활을 사용하여 상대방에게 54만큼의 물리공격을 입히고 38%확률로 -10%만큼 이동속도를 감소시킵니다. 1개의 CP를 충전하는 스킬입니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB2Item14.gif" class="img" alt="" /></a></div>
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
