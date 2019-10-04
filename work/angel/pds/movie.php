<?php include("../pds/_head.php"); ?>	
<%
movieName = Request("movieName")
If movieName = "" Then
	movieName = "promotion01.flv"
End If 

If movieName = "promotion01.flv" Then
	content_line = "프로모션 동영상(1분6초)"
	regdate = "2009.08.20"
ElseIf movieName = "making01.flv" Then
	content_line = "성우더빙 메이킹 필름(3분56초)"
	regdate = "2009.08.20"
End If 
%>
					<div class="headTit">
						<h3 class="tit"><img src="/work/angel/pds/images/subTit03.png" alt="동영상" /></h3>
						<div class="location">HOME &gt; 자료실 &gt; <a href="/work/angel/pds/move.php">동영상</a></div>
					</div>
					<div class="ctnBox">
						<div class="top"></div>
						<div class="ctn">
							<!-- 컨텐츠시작 -->
							
							<div class="mPlayer">
								<div class="movie">
								
								<embed src="/work/angel/swf/player.swf" type="application/x-shockwave-flash" allowfullscreen="true" flashvars="file=/swf/movie/promotion01.flv&amp;image=/pds/images/pbg.gif" width="528" height="368" >								</embed>
								
								</div>
								
								<div class="title">프로모션 동영상(1분6초 <span class="date">등록일 2009.08.20</span></div>
							</div>
							
							
							<div class="mBox">
								<div class="mSS"><a href="/work/angel/pds/movie.php?movieName=promotion01.flv"><img src="/work/angel/pds/images/movieImg.jpg" alt="" width="188" height="119" /></a></div>
								<div class="right">
									<h4><a href="/work/angel/pds/movie.php?movieName=promotion01.flv">프로모션 동영상_V1.</a> </h4>
									<p>엔젤러브 온라인에서 즐길 수 있는 로맨틱한 모험!<br />
										지금 감상해보세요.</p>
									<div class="btn"><a href="/work/angel/swf/movie/promotion01.wmv"><img src="/work/angel/pds/images/btnMovDown.gif" alt="다운로드" width="70" height="18" /></a></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="mBox">
								<div class="mSS"><a href="/work/angel/pds/movie.php?movieName=making01.flv"><img src="/work/angel/pds/images/movieImg.jpg" alt="" width="188" height="119" /></a></div>
								<div class="right">
									<h4><a href="/work/angel/pds/movie.php?movieName=making01.flv">성우더빙 메이킹 필름_V1.</a></h4>
									<p>엔젤러브 온라인 성우더빙현장을 공개합니다!<br />
										게임 속 NPC와 몬스터 목소리의 실제 주인공을 확인해보세요.</p>
									<div class="btn"><a href="/work/angel/swf/movie/making01.wmv"><img src="/work/angel/pds/images/btnMovDown.gif" alt="다운로드" width="70" height="18" /></a></div>
								</div>
								<div class="clear"></div>
							</div>							
							<!-- 컨텐츠끝 //-->
						</div>
						<div class="bot"></div>
					</div>
<?php include("../pds/_foot.php"); ?>
