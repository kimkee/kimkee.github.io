<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
<%

if Login_ID <> "" then 
	memDBConnect()	
	sql = "select Count(*) from EWJ_Member where Login_ID = '"& Login_ID &"'"
	set Rs = memDB.execute(sql)
	e_count = Rs(0)
	if Cint(e_count) = 0 then 
		response.write "<script>alert('해당 게시판은 에웅전 테스터들만이 작성 가능합니다.');history.back();</script>"
		response.end 
	end if 
else 
	response.write "<script>alert('로그인이 필요합니다.');history.back();</script>"
	response.end 
end if 

%>				
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit07.gif" alt="에다 영웅들의 전설" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 에다 영웅들의 전설</div>
						</div>
						<%
						board_idx = 14
						idx = Request("idx")

						%>



						<!--#include virtual="/_board/write.php"); ?>	
						
						<div class="btnList aCenter"><a href="/work/edda/community/EwjList.php"><img src="/work/edda/images/board/btnCancel.gif" alt="취소" /></a> <img src="/work/edda/images/board/btnReg.gif" alt="등록"  style="cursor:pointer" onclick="write_check();" /></div>
						
				
<?php include("../_include/_foot.php"); ?>					