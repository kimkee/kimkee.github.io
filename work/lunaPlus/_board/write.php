

						
						
						
						<div class="bbsWrite">
							<!--<div class="head">
								<div class="bTit">글쓰기</div>
							</div> -->
							
							<div class="writeBox">
								<div class="item title">
									<strong>제목</strong>
									<input type="text" style="width:500px;" />
								</div>
								<div class="item">
									<strong>글분류</strong>
									<select style="width:80px;">
										<option>공지</option>
									</select>
								</div>
								<div class="item" style="padding:10px 5px;">
									<!--<strong style="vertical-align:top">내용 :</strong> -->
									<textarea cols="5" rows="10" style="width:572px"></textarea>
								</div>
								
								<div class="item">
									
									<div id="ferJoin" style="width:640px;">						
										<img src="/work/lunaPlus/images/main/blank.gif" style="display:none" onload="javascript:fileIpt_con();" alt="" />
										<div class="fileList">
											<strong>첨부파일1</strong> 
											<input class="fileInput" id="vlu_in1" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in1')"  />
											</span>
											<div class="filed"> A양셀카.avi <a href="javascript:;"><img src="/work/lunaPlus/_board/images/btnFileSchDel.gif" alt="삭제" /></a></div>
										</div>
										<div class="fileList">
											<strong>첨부파일2</strong>
											<input class="fileInput" id="vlu_in2" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in2')" />
											</span>
											
										</div>
										<div class="fileList">
											<strong>첨부파일3</strong>
											<input class="fileInput" id="vlu_in3" type="text" value="업로드할 파일을 선택하세요" />
											<span class="divinputfile">
											<input name="filepc[]" type="file" size="1" onchange="inputFileOnChange(this, 'vlu_in3')" />
											</span>
											
										</div>
									</div>
									
								</div>
							</div>
						</div>