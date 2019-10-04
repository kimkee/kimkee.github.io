<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/community/images/subTit03.png" alt="게임공략" class="png24" /></div>
						<div class="location">HOME &gt; 커뮤니티 &gt; 게임공략</div>
					</div>
					
					<div class="bbsWrite">
							<!--<div class="head">
								<div class="bTit">글쓰기</div>
							</div> -->
							
							<div class="writeBox">
								<div class="item title">
									<strong>제목</strong>
									<input type="text" style="width:500px;" />
								</div>
								<div class="item" style="padding:10px 5px;">
									<!--<strong style="vertical-align:top">내용 :</strong> -->
									<textarea cols="5" rows="10" style="width:572px"></textarea>
								</div>
								<div class="item">
									
									<div id="ferJoin" style="width:640px;">						
										<img src="/work/lunaPlus/images/main/blank.gif" style="display:none" onload="javascript:fileIpt_con();" alt="" />
										<div class="fileList">
											<strong>첨부파일</strong> 
											<input class="fileInput" id="vlu_in1" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in1')"  />
											</span>
											<div class="filed"> A양셀카.avi <a href="javascript:;"><img src="/work/lunaPlus/_board/images/btnFileSchDel.gif" alt="삭제" /></a></div>
										</div>
										<div class="fileList">
											<strong>첨부파일</strong>
											<input class="fileInput" id="vlu_in2" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in2')" />
											</span>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>
					
					

					
					<div class="btnList">
						<div class="right"><a href="noticeList.php"><img src="/work/lunaPlus/_board/images/btnConfirm.gif" alt="" /></a> <a href="noticeList.php"><img src="/work/lunaPlus/_board/images/btnList.gif" alt="목록" /></a></div>
					</div>		
						
<?php include("../_include/_foot.php"); ?>