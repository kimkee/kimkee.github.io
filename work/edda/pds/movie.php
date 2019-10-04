<?
$skal = 4;
?>
<?php include("../_include/_head.php"); ?>

<script type="text/javascript">
	function flashMovie_Next(num) {
		document.getElementById('moviePlay2').src="/work/edda/pds/movie_player.php?idx="+num;
	}
</script>	
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/pds/images/subTit04.gif" alt="동영상" /></div>
							<div class="location">Home &gt; 자료실 &gt; 동영상</div>
						</div>
						
						<div class="movieHead">
							<div class="tit">2차 CBT 플레이 동영상</div>
							<div class="date">2009.12.31</div>
						</div>
						

						<div class="moviePlayer">
							<script type="text/javascript">flashWrite('/work/edda/swf/player_mini.swf',600,340,'mainEvent','#ffffff','file=/work/edda/swf/classMovie/warrior/dash.flv&image=/work/edda/swf/classMovie/warrior/dash.jpg','transparent','false')</script>
                            <input type="hidden" id="downURL" name="downURL" />

                            <script type="text/javascript">
								function movie_down(){
									document.location.href = "http://edda.enpang.com"+document.getElementById('downURL').value;
								}
							</script>
						</div>
						
						
						<div class="btnList aCenter"><a href="javascript:;"><img src="/work/edda/pds/images/btnMovieDown.gif" onclick="javascript:movie_down();" alt="다운로드" /></a> <a href="#"><img src="/work/edda/pds/images/btnMovieScrap.gif" alt="다운로드" /></a></div>
						
						<div class="movieList">
						<div class="box">
								<div class="img"><a href="javascript:;"><img src="/work/edda/pds/movie/100305_thumbnail.jpg" alt="" width="129" height="89" onClick="flashMovie_Next(3)" /></a></div>
							  <div class="tit"><a href="javascript:flashMovie_Next(3);">에다전설 2차 CBT 동영상</a></div>
								<div class="txt">에다전설의 플레이 동영상입니다.</div>
							</div>
							<div class="box">
								<div class="img"><a href="javascript:;"><img src="/work/edda/pds/movie/movie_samll_img.jpg" width="129" height="89" style="cursor:pointer" onClick="flashMovie_Next(2)" /></a></div><!--<img src="/work/edda/pds/images/movieThumb.jpg" alt="" />-->
								<div class="tit"><a href="javascript:flashMovie_Next(2);">에다전설 플레이 동영상(2분)</a></div>
								<div class="txt">에다전설의 플레이 동영상입니다.</div>
							</div>
							<div class="box">
								<div class="img"><a href="javascript:;"><img src="/work/edda/pds/movie/movie_samll2_img.jpg" alt="" width="129" height="89" onClick="flashMovie_Next(1)" /></a></div>
							  <div class="tit"><a href="javascript:flashMovie_Next(1);">에다전설 홍보 동영상(30초)</a></div>
								<div class="txt">에다전설의 홍보 동영상입니다.</div>
							</div>
							
							<div class="box">
								<div class="img"><a href="javascript:;"><img src="/work/edda/pds/images/movieThumbNone.jpg" alt="" /></a></div>
								<div class="tit"><a href="javascript:;">동영상 준비중</a></div>
								<div class="txt"></div>
							</div>
							<div class="clear"></div>
						</div>
						<?php include("../_board/paging.php"); ?>	
						
<?php include("../_include/_foot.php"); ?>					