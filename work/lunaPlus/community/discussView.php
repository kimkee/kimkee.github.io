<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/community/images/subTit01.png" alt="커뮤니티" class="png24" /></div>
						<div class="location">HOME &gt; 커뮤니티 &gt; 토론게시판</div>
					</div>

					
					<?php include("../_board/view.php"); ?>
					
					<div class="bbsVote">
						<ul class="btn">
							<li><a href="#"><img src="/work/lunaPlus/community/images/discussUp.png" alt="추천" class="png24" /></a></li>
							<li><a href="#"><img src="/work/lunaPlus/community/images/discussDown.png" alt="반대" class="png24" /></a></li>
						</ul>
					</div>
					
					<?php include("../_personal/profileBoard.php"); ?>
					
					
					<?php include("../_board/linkPage.php"); ?>
					
					<div class="btnList">
						<div class="right"><a href="discussWrite.php"><img src="/work/lunaPlus/_board/images/btnModify.gif" alt="수정" /></a> <a href="discussList.php"><img src="/work/lunaPlus/_board/images/btnDelete.gif" alt="삭제" /></a> <a href="discussList.php"><img src="/work/lunaPlus/_board/images/btnList.gif" alt="목록" /></a></div>
					</div>	
					
					
					<?php include("../_board/coment.php"); ?>
	
						
<?php include("../_include/_foot.php"); ?>