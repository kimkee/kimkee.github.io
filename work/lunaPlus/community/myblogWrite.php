<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/community/images/subTit05.png" alt="마이블로그" class="png24" /></div>
						<div class="location">HOME &gt; 커뮤니티 &gt; 마이블로그</div>
					</div>
					<div class="bbsWrite">
						<div class="writeBox">
							<div class="item title"> <strong class="w60">사이트명</strong>
								<input type="text" style="width:500px;" />
							</div>
							<div class="item" style="padding:10px 5px;"> <strong class="w60">이메일주소</strong>
								<input type="text" style="width:100px;" />
							</div>
							<div class="item">
								<div id="ferJoin" style="width:640px;"> <img src="/work/lunaPlus/images/main/blank.gif" style="display:none" onload="javascript:fileIpt_con();" alt="" />
									<div class="fileList"> <strong class="w60">배너이미지</strong>
										<input class="fileInput" id="vlu_in1" type="text" value="업로드할 파일을 선택하세요" />
										<span class="divinputfile">
										<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in1')"  />
										</span>
										<div class="filed"> banner.gif <a href="javascript:;"><img src="/work/lunaPlus/_board/images/btnFileSchDel.gif" alt="삭제" /></a></div>
									</div>
								</div>
								<div class="size11" style="padding-top:3px; padding-left:65px;">
									* <span style="color:#ff7d27">사이즈</span> : 220 * 90 JPG 또는 GIF만 가능합니다. <br />
									* <span style="color:#ff7d27">파일크기</span> : 2MB 미만으로 첨부하여 주세요
								</div>
							</div>
							<div class="item" style="padding:10px 5px;">
								<!--<strong style="vertical-align:top">내용 :</strong> -->
								<textarea cols="5" rows="10" style="width:572px"></textarea>
								<div class="size11 aRight" style="padding-top:10px;">* 사이트소개는 200byte 이하(한글 100자) 로 작성하여 주세요.  </div>
							</div>
							
						</div>
					</div>
					<div class="btnList">
						<div class="right"><a href="myblogList.php"><img src="/work/lunaPlus/_board/images/btnConfirm.gif" alt="" /></a> <a href="myblogList.php"><img src="/work/lunaPlus/_board/images/btnList.gif" alt="목록" /></a></div>
					</div>
<?php include("../_include/_foot.php"); ?>
