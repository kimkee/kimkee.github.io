<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/gameInfo/images/subTit02.gif" alt="게임특징" /></div>
							<div class="location">Home &gt; 게임소개 &gt; 게임특징</div>
						</div>
						<div class="tab"><img src="/work/edda/gameInfo/images/tabSPTab01.gif" alt="" border="0" usemap="#tab" /></div>
						<map name="tab" id="tab">
							<area shape="rect" coords="11,7,128,36" href="/work/edda/gameInfo/graphic.php" alt="그래픽" />
							<area shape="rect" coords="129,7,246,36" href="/work/edda/gameInfo/frigod.php" alt="우호신" />
							<area shape="rect" coords="252,7,369,36" href="/work/edda/gameInfo/halidom.php" alt="성물" />
							<area shape="rect" coords="371,7,488,36" href="/work/edda/gameInfo/qView.php" alt="쿼터뷰" />
							<area shape="rect" coords="489,7,606,36" href="/work/edda/gameInfo/RVR.php" alt="RVR" />
						</map>
						
						<div><img src="/work/edda/gameInfo/images/graphicIMG1.jpg" alt="" /></div>
						
						<div class="ssImgBig" id="div_img">
							<img id="big_img" src="/work/edda/gameInfo/images/grImgBig001.jpg" alt="" />
						</div>

						<div class="pssList">
							<div class="btnSsLeft"><a href="javascript:alert('NextImg');"><img src="/work/edda/pds/images/btnSsLeft.gif" alt="이전" /></a></div>
							<div class="listBox">
								<div class="img"><a href="javascript:img_chage('001')"><img src="/work/edda/gameInfo/images/grImgS001.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('002')"><img src="/work/edda/gameInfo/images/grImgS002.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('003')"><img src="/work/edda/gameInfo/images/grImgS003.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('004')"><img src="/work/edda/gameInfo/images/grImgS004.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('005')"><img src="/work/edda/gameInfo/images/grImgS005.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('006')"><img src="/work/edda/gameInfo/images/grImgS006.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('007')"><img src="/work/edda/gameInfo/images/grImgS007.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('008')"><img src="/work/edda/gameInfo/images/grImgS008.jpg" alt="" /></a></div>
								<div class="clear"></div>
							</div>
							<div class="btnSsRight"><a href="javascript:alert('NextImg');"><img src="/work/edda/pds/images/btnSsRight.gif" alt="다음" /></a></div>
						</div>
						<script type="text/javascript">
							function img_chage(str){
								document.getElementById('big_img').src="/work/edda/gameInfo/images/grImgBig"+str+'.jpg'
							}
						</script>
<?php include("../_include/_foot.php"); ?>

