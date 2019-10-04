<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit05.gif" alt="팬사이트" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 팬 사이트</div>
						</div>
						
						<div class="bbsWrite">
							<div class="head">
								<div class="bTit">등록</div>
							</div>
							<form name="frm" method="post" action="/community/fansiteWrite_ok.php" enctype="multipart/form-data">
                            <input type="hidden" id="board_idx" name="board_idx" value="9" />
                            <input type="hidden" id="wType" name="wType" value="W" />
							<div class="writeBox">
								<div class="item">
									<strong class="w70">사이트이름 :</strong>
									<input type="text" id="fansiteName" name="fansiteName" style="width:510px;" />
								</div>
								<div class="item">
									<strong class="w70">사이트URL :</strong>
									<input type="text" id="fansiteURL" name="fansiteURL" style="width:510px;" value="http://" />
								</div>
								<div class="item" style="padding:10px 5px;">
									<strong style="vertical-align:top" class="w70">사이트소개 :</strong>
									<textarea cols="5" id="fansiteDiscrit" name="fansiteDiscrit" rows="10" style="width:510px; height:200px;"></textarea>
								</div>
								
								<div class="item">
									
									<div id="ferJoin" style="width:640px;">						
										<img src="/work/edda/images/main/blank.gif" style="display:none" onload="javascript:fileIpt_con();" alt="" />
										<div class="fileList">
											<strong class="w70">배너첨부 :</strong> 
											<input class="fileInput" style="width:440px;" id="vlu_in1" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input id="file1" name="file1" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in1')"  />
											</span>
											<!--<div class="filed" style="padding-left:83px;"> A양셀카.avi <a href="javascript:;"><img src="/work/edda/images/board/btnFileSchDel.gif" alt="삭제" /></a></div>-->
										</div>
									</div>
									
								</div>
							</div>
                            </form>
                            
                            <script type="text/javascript">
								function write_check(){
									if(document.getElementById('fansiteName').value == ""){
										alert("사이트 이름을 입력해 주세요.");
										document.getElementById('fansiteName').focus();
										return false;
									}
									
									if(document.getElementById('fansiteURL').value == ""){
										alert("사이트 URL를 입력해 주세요.");
										document.getElementById('fansiteURL').focus();
										return false;
									}
									
									if(document.getElementById('fansiteDiscrit').value == ""){
										alert("사이트 소개를 입력해 주세요.");
										document.getElementById('fansiteDiscrit').focus();
										return false;
									}
									
									if(document.getElementById('fansiteDiscrit').value.length < 10){
										alert("사이트 소개는 최소 10자 이상 입력해 주세요.");
										document.getElementById('fansiteDiscrit').focus();
										return false;
									}
									
									if(document.getElementById('file1').value == ""){
										alert("사이트 소개 배너 이미지를 입력해 주세요.");
										document.getElementById('file1').focus();
										return false;
									}
									
									document.frm.submit();
								}
							</script>
						</div>
						
						<div class="btnList aCenter"><a href="/work/edda/community/fansiteList.php"><img src="/work/edda/images/board/btnCancel.gif" alt="취소" /></a> <a href="javascript:;" onclick="write_check();"><img src="/work/edda/images/board/btnReg.gif" alt="등록" /></a></div>
						





						
<?php include("../_include/_foot.php"); ?>					