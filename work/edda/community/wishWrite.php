<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit06.gif" alt="에다에게 바란다" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 에다에게 바란다</div>
						</div>
						<%
						board_idx = 11
						idx = Request("idx")

						%>
						<!--#include virtual="/_board/write.php"); ?>	
						
						<div class="btnList aCenter"><a href="/work/edda/community/wishList.php"><img src="/work/edda/images/board/btnCancel.gif" alt="취소" /></a> <img src="/work/edda/images/board/btnReg.gif" alt="등록"  style="cursor:pointer" onclick="write_check();" /></div>
						
				
<?php include("../_include/_foot.php"); ?>					