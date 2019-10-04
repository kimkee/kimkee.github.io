<?
$skal = 1;
?>
<?php include("../_include/_head.php"); ?>		

						<div class="headTit">
							<div class="tit"><img src="/work/edda/news/images/subTit02.gif" alt="업데이트" /></div>
							<div class="location">Home &gt; 에다소식 &gt; 업데이트 </div>
						</div>
						<%
						board_idx = 1
						article_idx = Request("idx")
						page = Request("page")
						
						IF Login_ID = "" THEN
							Login_ID = ""
						END IF
						
						if article_idx = "" or isnumeric(article_idx) = false then 
							response.redirect "/news/updateList.php"
						end if 

						RedirectURL = "/news/updateList.php"
						%>
						<!--#include virtual="/_board/view.php"); ?>	
						
						<!--#include virtual="/_board/linkPage.php"); ?>	
						<div class="btnList aRight"><a href="/work/edda/news/updateList.php"><img src="/work/edda/images/board/btnList.gif" alt="목록보기" /></a></div>
						
                        <%IF board_idx <> "1" THEN%>
						<!--#include virtual="/_board/coment.php"); ?>	
						<%END IF%>
                        
<?php include("../_include/_foot.php"); ?>					