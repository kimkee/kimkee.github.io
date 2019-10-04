<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/community/images/subTit01.png" alt="커뮤니티" class="png24" /></div>
						<div class="location">HOME &gt; 커뮤니티 &gt; 토론게시판</div>
					</div>
					
					
					
					<div class="discussTit">
						<div class="tit"><img src="/work/lunaPlus/community/images/discussTit.gif" alt="이글은 핫이슈" /></div>
						<div class="btn"><a href="javascript:discussPolicy();"><img src="/work/lunaPlus/community/images/discussBtn.gif" alt="게시판 운영정책" /></a></div>
					</div>
					
					
					
					<div class="discussBox">
						<div class="top"></div>
						<div class="ctn">
							<table border="1" cellspacing="0" class="discussHot">
								<tr>
									<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco1.png" alt="진행중" class="png24" /></td>
									<td class="bTit"><a href="discussView.php">공지사항 리스트 입니다.</a></td>
									<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
									<td class="bDate">2010.06.01</td>
								</tr>
								<tr>
									<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco2.png" alt="종료" class="png24" /></td>
									<td class="bTit"><a href="discussView.php">공지사항 리스트 입니다.</a></td>
									<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
									<td class="bDate">2010.06.01</td>
								</tr>
								<tr>
									<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco1.png" alt="진행중" class="png24" /></td>
									<td class="bTit"><a href="discussView.php">공지사항 리스트 입니다.</a></td>
									<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
									<td class="bDate">2010.06.01</td>
								</tr>
								<tr>
									<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco1.png" alt="진행중" class="png24" /></td>
									<td class="bTit"><a href="discussView.php">공지사항 리스트 입니다.</a></td>
									<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
									<td class="bDate">2010.06.01</td>
								</tr>
								<tr>
									<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco1.png" alt="진행중" class="png24" /></td>
									<td class="bTit"><a href="discussView.php">공지사항 리스트 입니다.</a></td>
									<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
									<td class="bDate">2010.06.01</td>
								</tr>
							</table>

						</div>
						<div class="bot"></div>
					</div>
					
					
					
					<table cellspacing="0" border="1" class="bbsList">
						<thead>
							<tr>
								<th class="left"><img src="/work/lunaPlus/_board/images/hImgNum.gif" alt="No" /></th>
								<th><img src="/work/lunaPlus/_board/images/hImgTitle.gif" alt="제목" /></th>
								<th><img src="/work/lunaPlus/_board/images/hImgWriter.gif" alt="작성자" /></th>
								<th><img src="/work/lunaPlus/_board/images/hImgDate.gif" alt="작성일" /></th>
								<th><img src="/work/lunaPlus/_board/images/hImgHit.gif" alt="조회" /></th>
								<th class="right"><img src="/work/lunaPlus/_board/images/hImgVote.gif" alt="조회" /></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco1.png" alt="진행중" class="png24" /></td>
								<td class="bTit"><strong><a href="noticeView.php">공지사항 보기  입니다.</a></strong></td>
								<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
								<td class="bDate">2009.12.25</td>
								<td class="bHit">815</td>
								<td class="bHit">3</td>
							</tr>
							<tr>
								<td class="bIco"><img src="/work/lunaPlus/community/images/discussIco2.png" alt="종료" class="png24" /></td>
								<td class="bTit"><a href="updateView.php">업데이트 보기 입니다.</a></td>
								<td class="bName"><img src="/work/lunaPlus/community/images/discussIco9.gif" alt="" /> 안다리엘</td>
								<td class="bDate">2009.12.25</td>
								<td class="bHit">815</td>
								<td class="bHit">4</td>
							</tr>
						</tbody>
					</table>
										
					
					
					<div class="btnList">
						<div class="left"><a href="discussList.php"><img src="/work/lunaPlus/_board/images/btnList.gif" alt="목록" /></a></div>
						<div class="right"><a href="discussWrite.php"><img src="/work/lunaPlus/_board/images/btnWrite.gif" alt="글쓰기" /></a></div>
					</div>	
					<?php include("../_board/paging.php"); ?>	
					<?php include("../_board/search.php"); ?>		
						
<?php include("../_include/_foot.php"); ?>