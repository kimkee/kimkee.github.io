<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit03.gif" alt="GameTip" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; GameTip</div>
						</div>
						
						<%
						board_idx = 7
						
						idx = Request("idx")
						%>
						<!--#include virtual="/_board/write.php"); ?>	
						
						<div class="btnList aCenter"><a href="/work/edda/community/gameTip.php"><img src="/work/edda/images/board/btnCancel.gif" alt="취소" /></a> <a href="javascript:;" onclick="write_check();"><img src="/work/edda/images/board/btnReg.gif" alt="등록" /></a></div>
				
<?php include("../_include/_foot.php"); ?>					