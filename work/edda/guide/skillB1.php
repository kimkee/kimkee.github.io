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
									<td><a href="/work/edda/guide/skillB1.php"><img src="/work/edda/gameInfo/images/classTabBm1On.gif" alt="어쌔씬" /></a></td>
									<td><a href="/work/edda/guide/skillB2.php"><img src="/work/edda/gameInfo/images/classTabBm2.gif" alt="아처" /></a></td>
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
						<div class="skillTit"><img src="/work/edda/gameInfo/images/skillB1Tit.gif" alt="" /></div>
						<div class="skillWrap">
							 
								
							<div class="left">
								<div id="STATICMENU" style="z-index:100; left:0px; position: absolute; top:0px;"> 		
								<div class="movie" id="skillMovie">
								<!--<script type="text/javascript">flashWrite('/swf/player.swf',200,170,'skillMovie','#ffffff','file=/swf/classMovie/워리어/대쉬.flv&image=/swf/classMovie/워리어/대쉬.jpg','transparent','false')</script>-->
                                <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=어쌔신&str2=라피드피어스&type=skill" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:200px; height:170px"></iframe>
                                </div>
								<div class="cImg"><img src="/work/edda/gameInfo/images/skillB01charIMG.png" class="png24" alt="" /></div>
								</div>
								<input checked="checked" name="checkbox" id="ANIMATE" onclick="ToggleAnimate();" type="hidden" />
								<script type="text/javascript">InitializeStaticMenu();</script> 
								
							</div>
							
							<div class="right">
							
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','라피드피어스')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item01.gif" class="img" alt="" /></a></div>
										<div class="name">라피드 피어스 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>0</dd>
											<dt>속성</dt>
											<dd>독</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>250</dd>
										</dl>
									</div>
									<div class="txt"> 빠른속도로 적에게 다가가 일격에 꿰뚫는 공격을 펼쳐 81의 데미지를 줍니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','배틀팽')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item02.gif" class="img" alt="" /></a></div>
										<div class="name">배틀 팽 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>13</dd>
											<dt>속성</dt>
											<dd>독</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>350</dd>
										</dl>
									</div>
									<div class="txt"> 독을 바른 무기로 깊은 상처를 내어 37의 피해를 주고 35%의 확률로 -10%만큼 이동속도를 감소시킵니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','블러드액션')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item03.gif" class="img" alt="" /></a></div>
										<div class="name">블러드액션 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>0</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> HP와 MP를 소진하여 지속시간동안 자신의 일반공격속도를 10%만큼 높입니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','스마트액션')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item04.gif" class="img" alt="" /></a></div>
										<div class="name">스마트 액션 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>1</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 지형의 영향을 받지 않고 순간적으로 적에게 다가가 25의 피해를 줍니다. 1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','스피드블로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item05.gif" class="img" alt="" /></a></div>
										<div class="name">스피드블로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
											<dd>250</dd>
										</dl>
									</div>
									<div class="txt"> 적에게 깊고 빠르게 찌르기 공격을 하여 13의 데미지를 줍니다.<br /> 
									1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item06.gif" class="img" alt="" /></a></div>
										<div class="name">어쌔신 큐어 <img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/> </div>
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
									<div class="txt"> 카타르 사용 시 해독능력을 높여 독 저항을 2만큼 상승시킵니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','윌파워인핸스')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item07.gif" class="img" alt="" /></a></div>
										<div class="name">윌파워 인핸스 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 순간적으로 의지력을 높여 자신의 공격력을 6만큼 상향시킵니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','은신')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item08.gif" class="img" alt="" /></a></div>
										<div class="name">은신 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>1</dd>
											<dt>속성</dt>
											<dd>무속성</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>0</dd>
										</dl>
									</div>
									<div class="txt"> 1레벨 은신을 시전 할 수 있습니다. 전투중엔 은신을 할 수가 없으며, 전투상태가 되면 은신이 해제됩니다. 1개의 CP를 충전하는 스킬입니다.</div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:movie_change('어쌔신','클러블로우')"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item09.gif" class="img" alt="" /></a></div>
										<div class="name">클러 블로우 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
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
											<dd>250</dd>
										</dl>
									</div>
									<div class="txt"> 두 손 무기의 장점을 살려 23의 데미지를 주고 32%의 확률로 상대방을 기절 시킵니다. 1~3개의 CP를 소모하여 더 강력한 효과를 입힐 수 있는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item10.gif" class="img" alt="" /></a></div>
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
									<div class="txt">가죽 방어구(가슴,장갑,신발) 착용 시 추가로  방어력이 8만큼 증가합니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item11.gif" class="img" alt="" /></a></div>
										<div class="name">트레이닝 카타르<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt">카타르 착용 시 숙련도를 올려 물리공격력을 2만큼 상승시킵니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item12.gif" class="img" alt="" /></a></div>
										<div class="name">프로브빌리티 업<img src="/work/edda/gameInfo/images/icoPassive.gif" alt="패시브"/></div>
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
									<div class="txt"> 카타르 착용 시 민첩을 4만큼 상승시킵니다.  </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item13.gif" class="img" alt="" /></a></div>
										<div class="name">화이트 팽 <img src="/work/edda/gameInfo/images/icoActive.gif" alt="액티브"/> </div>
									</div>
									<div class="info">
										<dl>
											<dt>습득레벨</dt>
											<dd>29</dd>
											<dt>속성</dt>
											<dd>번개</dd>
											<dt>요구SP</dt>
											<dd>1</dd>
											<dt>사거리</dt>
											<dd>250</dd>
										</dl>
									</div>
									<div class="txt">빛 처럼 빠른 공격으로 적에게 88의 피해를 입힙니다.<br /> 
									1개의 CP를 충전하는 스킬입니다. </div>
								</div>
								<div class="box">
									<div class="head">
										<div class="item"><a href="javascript:;"><img src="/work/edda/gameInfo/images/itemFrame.gif" class="frame" alt="" /><img src="/work/edda/gameInfo/images/skillB1Item14.gif" class="img" alt="" /></a></div>
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
