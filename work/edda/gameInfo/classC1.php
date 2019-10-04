<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>
						<div class="headTit">
							<div class="tit"><img src="/work/edda/gameInfo/images/subTit01_02.gif" alt="게임정보" /></div>
							<div class="location">Home &gt; 게임소개 &gt; 캐릭터</div>
						</div>
						<div class="classHead"><img src="/work/edda/gameInfo/images/classImgE1.gif" alt="워리어" /></div>
						
						
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
									<td><a href="/work/edda/gameInfo/classC1.php"><img src="/work/edda/gameInfo/images/classTabCm1On.gif" alt="클레릭" /></a></td>
									<td><a href="/work/edda/gameInfo/classC2.php"><img src="/work/edda/gameInfo/images/classTabCm2.gif" alt="위자드" /></a></td>
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
								<li><a href="javascript:movie_change('클레릭','힐링','classImgEm1')"><img id="classImgEm1" src="/work/edda/gameInfo/images/classImgEm1On.gif" alt="힐링" /></a></li>
								<li><a href="javascript:movie_change('클레릭','어드밴스바디','classImgEm2')"><img id="classImgEm2" src="/work/edda/gameInfo/images/classImgEm2.gif" alt="어드밴스바디" /></a></li>
								<li><a href="javascript:movie_change('클레릭','스트록게쉬','classImgEm3')"><img id="classImgEm3" src="/work/edda/gameInfo/images/classImgEm3.gif" alt="스트록게쉬" /></a></li>
								<li><a href="javascript:movie_change('클레릭','일렉트릭쇼크','classImgEm4')"><img id="classImgEm4" src="/work/edda/gameInfo/images/classImgEm4.gif" alt="일렉트릭쇼크" /></a></li>
							</ul>
						</div>
                        <script type="text/javascript">
							function movie_change(str1,str2,img){
								document.getElementById('classImgEm1').src="/work/edda/gameInfo/images/classImgEm1.gif";
								document.getElementById('classImgEm2').src="/work/edda/gameInfo/images/classImgEm2.gif";
								document.getElementById('classImgEm3').src="/work/edda/gameInfo/images/classImgEm3.gif";
								document.getElementById('classImgEm4').src="/work/edda/gameInfo/images/classImgEm4.gif";
							
								document.getElementById(img).src="/work/edda/gameInfo/images/" + img + "On.gif";
								document.getElementById('moviePlay2').src="/work/edda/gameInfo/movie_player.php?str1="+str1+"&str2="+str2;
							}
						</script>
						
						<div class="classMovie">
							<!--<script type="text/javascript">flashWrite('/swf/player.swf',616,482,'mainEvent','#ffffff','file=/swf/classMovie/클레릭/힐링.flv&amp;image=/swf/classMovie/클레릭/힐링.jpg','transparent','false')</script>-->
                            <iframe id="moviePlay2" name="moviePlay2" src="/work/edda/gameInfo/movie_player.php?str1=클레릭&str2=힐링" frameborder="0" allowtransparency="true" style=" background-color:transparent; overflow:hidden; width:616px; height:482px"></iframe>
						</div>
						
						
						
						
						
<?php include("../_include/_foot.php"); ?>					