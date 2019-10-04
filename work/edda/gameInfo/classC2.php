<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>
						<div class="headTit">
							<div class="tit"><img src="/work/edda/gameInfo/images/subTit01_02.gif" alt="게임정보" /></div>
							<div class="location">Home &gt; 게임소개 &gt; 캐릭터</div>
						</div>
						<div class="classHead"><img src="/work/edda/gameInfo/images/classImgF1.gif" alt="워리어" /></div>
						
						
						<div class="classTab">
							<table border="1" cellpadding="0" cellspacing="0" class="list">
								<tr>
									<td colspan="2"><img src="/work/edda/gameInfo/images/classTabA.gif" alt="파이터" /></td>
								</tr>
								<tr>
									<td><a href="/work/edda/gameInfo/classA1.php"><img src="/work/edda/gameInfo/images/classTabAm1.gif" alt="워리어" /></a></td>
									<td><a href="/work/edda/gameInfo/classA2.php"><img src="/work/edda/gameInfo/images/classTabAm2.gif" alt="소드맨" /></a></td>
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
									<td><a href="/work/edda/gameInfo/classB1.php"><img src="/work/edda/gameInfo/images/classTabBm1.gif" alt="어쌔씬" /></a></td>
									<td><a href="/work/edda/gameInfo/classB2.php"><img src="/work/edda/gameInfo/images/classTabBm2.gif" alt="아처" /></a></td>
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
									<td><a href="/work/edda/gameInfo/classC1.php"><img src="/work/edda/gameInfo/images/classTabCm1.gif" alt="클레릭" /></a></td>
									<td><a href="/work/edda/gameInfo/classC2.php"><img src="/work/edda/gameInfo/images/classTabCm2On.gif" alt="위자드" /></a></td>
								</tr>
								<tr>
									<td><img src="/work/edda/gameInfo/images/classTabCm3.gif" alt="프리스트" /></td>
									<td><img src="/work/edda/gameInfo/images/classTabCm4.gif" alt="소서리" /></td>
								</tr>
							</table>
							
							<div class="clear"></div>
						</div>
						
						<div class="cMenu">
							<ul>
								<li><a href="javascript:movie_change('위자드','라이트닝볼트','classImgFm1')"><img id="classImgFm1" src="/work/edda/gameInfo/images/classImgFm1On.gif" alt="라이트닝볼트" /></a></li>
								<li><a href="javascript:movie_change('위자드','윈드블로우','classImgFm2')"><img id="classImgFm2" src="/work/edda/gameInfo/images/classImgFm2.gif" alt="윈드블로우" /></a></li>
								<li><a href="javascript:movie_change('위자드','파이어볼트','classImgFm3')"><img id="classImgFm3" src="/work/edda/gameInfo/images/classImgFm3.gif" alt="파이어볼트" /></a></li>
								<li><a href="javascript:movie_change('위자드','프로즌프로텍트','classImgFm4')"><img id="classImgFm4" src="/work/edda/gameInfo/images/classImgFm4.gif" alt="프로즌프로텍터" /></a></li>
							</ul>
						</div>
                        <script type="text/javascript">
							function movie_change(str1,str2,img){
								document.getElementById('classImgFm1').src="/work/edda/gameInfo/images/classImgFm1.gif";
								document.getElementById('classImgFm2').src="/work/edda/gameInfo/images/classImgFm2.gif";
								document.getElementById('classImgFm3').src="/work/edda/gameInfo/images/classImgFm3.gif";
								document.getElementById('classImgFm4').src="/work/edda/gameInfo/images/classImgFm4.gif";
							
								document.getElementById(img).src="/work/edda/gameInfo/images/" + img + "On.gif";
								document.getElementById('moviePlay2').src="/work/edda/gameInfo/movie_player.php?str1="+str1+"&str2="+str2;
							}
						</script>
						
						<div class="classMovie">
							<!--<script type="text/javascript">flashWrite('/swf/player.swf',616,482,'mainEvent','#ffffff','file=/swf/classMovie/위저드/라이트닝볼트.flv&amp;image=/swf/classMovie/위저드/라이트닝볼트.jpg','transparent','false')</script>-->
                            <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=위자드&str2=라이트닝볼트" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:616px; height:482px"></iframe>
						</div>
						
						
						
						
						
<?php include("../_include/_foot.php"); ?>					