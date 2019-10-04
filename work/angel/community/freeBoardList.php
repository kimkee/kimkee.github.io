<?php include("../community/_head.php"); ?>	
					<div class="headTit">
						<h3 class="tit"><img src="/work/angel/community/images/subTit01.png" alt="자유게시판" /></h3>
						<div class="location">HOME &gt; 커뮤니티 &gt; 자유게시판</div>
					</div>
					<div class="ctnBox">
						<div class="top"></div>
						<div class="ctn">
							<!-- 컨텐츠시작 -->
							<div class="bbsCate"><img src="/work/angel/images/board/icoCate.png" alt="분류" width="38" height="15" /> 
							<select>
								<option selected="selected">전체</option>
								<option>게임사진</option>
							</select>
							</div>
							<?php include("../board/list.php"); ?>	
							<div class="btnList" style="margin-bottom:0px"><a href="/work/angel/community/freeBoardWrite.php"><img src="/work/angel/images/board/btnWrite.gif" alt="글쓰기" width="55" height="24" /></a> </div>
							<?php include("../board/paging.php"); ?>	
							<?php include("../board/search.php"); ?>	
							<!-- 컨텐츠끝 //-->
						</div>
						<div class="bot"></div>
					</div>
<?php include("../community/_foot.php"); ?>
