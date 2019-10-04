<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>
<script type="text/javascript">
function pBoxToggle(K) {
	if (document.getElementById('p'+K).style.display=='block')
	{
		document.getElementById('p'+K).style.display='none';
	}else{
		for (i = 1; i <= 10 ; i++){
			document.getElementById('p'+i).style.display='none';
		}
		document.getElementById('p'+K).style.display='block';
	}
}
</script>

						<div class="headTit">
							<div class="tit"><img src="/work/lunaPlus/guide/images/subTit01.png" alt="게임정보" class="png24" /></div>
							<div class="location">HOME &gt; 게임소개 &gt; 게임정보</div>
						</div>
						<div class="ctnBox">
							<div class="sysBox">
								<div class="top"></div>
								<div class="ctn">
									<ul class="menu">
										<li><img src="/work/lunaPlus/guide/images/systemMenu000.gif" alt="COMMING SOON" /></li>	
										
										<li><a href="javascript:pBoxToggle(10);"><img src="/work/lunaPlus/guide/images/systemMenu010.gif" onmouseover="this.src='images/systemMenu010On.gif'" onmouseout="this.src='images/systemMenu010.gif'" alt="파티매칭" /></a></li>
										<li class="plusInfo" id="p10">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG010.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
																				
										<li><a href="javascript:pBoxToggle(9);"><img src="/work/lunaPlus/guide/images/systemMenu009.gif" onmouseover="this.src='images/systemMenu009On.gif'" onmouseout="this.src='images/systemMenu009.gif'" alt="수정제국" /></a></li>
										<li class="plusInfo" id="p9">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG009.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
																				
										<li><a href="javascript:pBoxToggle(8);"><img src="/work/lunaPlus/guide/images/systemMenu008.gif" onmouseover="this.src='images/systemMenu008On.gif'" onmouseout="this.src='images/systemMenu008.gif'" alt="판매대행" /></a></li>
										<li class="plusInfo" id="p8">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG008.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
																				
										<li><a href="javascript:pBoxToggle(7);"><img src="/work/lunaPlus/guide/images/systemMenu007.gif" onmouseover="this.src='images/systemMenu007On.gif'" onmouseout="this.src='images/systemMenu007.gif'" alt="마력의탑" /></a></li>
										<li class="plusInfo" id="p7">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG007.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										
										<li><a href="javascript:pBoxToggle(6);"><img src="/work/lunaPlus/guide/images/systemMenu006.gif" onmouseover="this.src='images/systemMenu006On.gif'" onmouseout="this.src='images/systemMenu006.gif'" alt="데이트매칭" /></a></li>
										<li class="plusInfo" id="p6">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG006.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										<li><a href="javascript:pBoxToggle(5);"><img src="/work/lunaPlus/guide/images/systemMenu005.gif" onmouseover="this.src='images/systemMenu005On.gif'" onmouseout="this.src='images/systemMenu005.gif'" alt="하우징" /></a></li>
										<li class="plusInfo" id="p5">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG005.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										<li><a href="javascript:pBoxToggle(4);"><img src="/work/lunaPlus/guide/images/systemMenu004.gif" onmouseover="this.src='images/systemMenu004On.gif'" onmouseout="this.src='images/systemMenu004.gif'" alt="마족" /></a></li>
										<li class="plusInfo" id="p4">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG004.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										<li><a href="javascript:pBoxToggle(3);"><img src="/work/lunaPlus/guide/images/systemMenu003.gif" onmouseover="this.src='images/systemMenu003On.gif'" onmouseout="this.src='images/systemMenu003.gif'" alt="놀이기구+탈걸" /></a></li>
										<li class="plusInfo" id="p3">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG003.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										<a name="goCook"></a>
										<li><a href="javascript:pBoxToggle(2);"><img src="/work/lunaPlus/guide/images/systemMenu002.gif" onmouseover="this.src='images/systemMenu002On.gif'" onmouseout="this.src='images/systemMenu002.gif'" alt="요리" /></a></li>
										<li class="plusInfo" id="p2">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG002.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
										<li><a href="javascript:pBoxToggle(1);"><img src="/work/lunaPlus/guide/images/systemMenu001.gif" onmouseover="this.src='images/systemMenu001On.gif'" onmouseout="this.src='images/systemMenu001.gif'" alt="인스턴스던전" /></a></li>
										<li class="plusInfo" id="p1">
											<div class="top"></div>
											<div class="ctn">
												<div class="pBox"><img src="/work/lunaPlus/guide/images/systemIMG001.jpg" alt="" /></div>
											</div>
											<div class="bot"></div>
										</li>
									</ul>
								</div>
								<div class="bot"></div>
							</div>
						</div>
<?php include("../_include/_foot.php"); ?>