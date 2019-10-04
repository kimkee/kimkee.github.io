<?
$skal = 1;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/news/images/subTit01.png" alt="공지사항" class="png24" /></div>
						<div class="location">HOME &gt; 루나소식 &gt; 공지사항</div>
					</div>
					
					<?php include("../_board/list.php"); ?>
					<div class="btnList">
						<div class="left"><a href="noticeList.php"><img src="/work/lunaPlus/_board/images/btnList.gif" alt="목록" /></a></div>
						<div class="right"><a href="noticeWrite.php"><img src="/work/lunaPlus/_board/images/btnWrite.gif" alt="글쓰기" /></a></div>
					</div>	
					<?php include("../_board/paging.php"); ?>	
					<?php include("../_board/search.php"); ?>		
						
<?php include("../_include/_foot.php"); ?>