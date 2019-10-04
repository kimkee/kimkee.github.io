<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit06.gif" alt="에다에게 바란다" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 에다전설에 바란다</div>
						</div>
						<%
						board_idx = 11
						RedirectURL = "/community/wishView.php"
						%>
						<!--#include virtual="/_board/list.php"); ?>
						<div class="btnList aRight"><a href="<%IF Login_ID = "" THEN%>javascript:alert('로그인 후 이용하세요.');location.href='/etc/login.php';<%ELSE%>/community/wishWrite.php<%END IF%>"><img src="/work/edda/images/board/btnWrite.gif" alt="쓰기" /></a></div>
						<!--#include virtual="/_board/paging.php"); ?>
						<!--#include virtual="/_board/search.php"); ?>
						
<?php include("../_include/_foot.php"); ?>					