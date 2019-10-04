<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		

<%
Session("ReturnURL") = Request.ServerVariables("PATH_INFO") & "?" & Request.ServerVariables("QUERY_STRING")
%>					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit01.gif" alt="영웅들의 이야기" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 영웅들의 이야기</div>
						</div>
                        <%
						board_idx = Request("board_idx")
						article_idx = Request("idx")
						page = Request("page")
						
						IF Login_ID = "" THEN
							Login_ID = ""
						END IF
						
                        RedirectURL = "/community/freeboardList.php"
						%>
						<!--#include virtual="/_board/view.php"); ?>	
						
						<!--#include virtual="/_board/linkPage.php"); ?>	
						<div class="btnList aRight"><%IF Login_ID = writer_ID THEN%><a href="/work/edda/community/freeboardWrite.php?board_idx=<%=board_idx%>&idx=<%=article_idx%>"><img src="/work/edda/images/board/btnModify.gif" alt="수정하기" /></a> <img src="/work/edda/images/board/btnDelete.gif" alt="삭제하기" style="cursor:pointer" onclick="go_del();" /><%END IF%> <a href="/work/edda/community/freeboardList.php"><img src="/work/edda/images/board/btnList.gif" alt="목록보기" /></a></div>
						
						<!--#include virtual="/_board/coment.php"); ?>
                        <form name="frmlist" method="post">
                        <input type="hidden" name="board_idx" value="<%=board_idx%>" />
                        <input type="hidden" name="article_idx" value="<%=article_idx%>" />
                        <input type="hidden" name="boardType" />
                        <input type="hidden" name="ReturnURL" value="/community/freeboardList.php" />
                        <input type="hidden" name="page" value="<%=page%>" />
                        </form>	
						<script type="text/javascript">
							function go_del(){
								document.frmlist.action = "/_board/board_delete_ok.php";
							
								if(confirm("삭제 하시겠습니까?")){
									document.frmlist.boardType.value = "D";
									document.frmlist.submit();
								}	
							}
							
							// 이미지 사이즈 고정
							function resizeImgSub(img) {
								var imgTemp = new Image();
								imgTemp.src = img.src; 
								
								if ( imgTemp.width > 600 || imgTemp.height > 1000 ){
									if ( (img.width / 600) > (img.height / 1000) )
										img.visibleImgObj.height = Math.round(img.height * (600 / img.width));
									else
										img.visibleImgObj.width = Math.round(img.width * (1000 / img.height));
								} else {
									img.visibleImgObj.width = imgTemp.width;
									img.visibleImgObj.height = imgTemp.height;
								}
							}
							
							function resizeImg(imgObj) {
								var imgOriginal = new Image();
								imgOriginal.visibleImgObj = imgObj;
								imgOriginal.onload = function() { resizeImgSub(this); }  
								imgOriginal.src = imgObj.src;
							}
							
							function PopUpImg(filename) {
								var PageUrl = "/_board/PhotoPopup.php?FileName=" + filename + "&board_idx=<%=board_idx%>";
								window.open(PageUrl,'BigImgPopup','scrollbars=yes,resizable=yes,copyhistory=no,width=520,height=450,left=0,top=0');
							}
						</script>
						
<?php include("../_include/_foot.php"); ?>					