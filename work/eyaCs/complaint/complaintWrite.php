<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/consult/images/consultTopIMG.gif" alt="상담센터" width="665" height="90" /></div>
			<div style="margin-bottom:10px;"><img src="/work/eyaCs/complaint/images/complaintHeadIMG1.gif" alt="불량행위신고" width="665" height="99" /></div>
			<table border="1" cellspacing="0" class="tableForm">
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 신고 분야</th>
					<td>
						<select>
							<option>게임선택</option>
						</select>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 본인캐릭터</th>
					<td>
						<select>
							<option>게임선택</option>
						</select>
						<select>
							<option>서버선택</option>
						</select>
						<select>
							<option>캐릭터선택</option>
						</select>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 가해캐릭터</th>
					<td>
						<select>
							<option>게임선택</option>
						</select>
						<select>
							<option>서버선택</option>
						</select>
						<select>
							<option>캐릭터선택</option>
						</select>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 피해 일시</th>
					<td>
						<input type="text" style="width:100px" />
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 신고내용</th>
					<td>
						<input type="text" style="width:520px" />
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 상세내역</th>
					<td>
						<textarea style="width:520px; height:100px;"></textarea>
					</td>
				</tr>
				<tr>
					<th>파일첨부</th>
					<td>
						<div class="tLi">
							<input type="text" style="width:390px" />
							<span class="button small"><a href="#">파일찾기</a></span><span class="button small"><a href="#">파일첨부</a></span> </div>
						<div class="tLi">
							<select name="select" size="3" multiple="multiple" class="fileList" style="width:395px;">
								<option>kimkee.jpg</option>
							</select>
							<span class="button small" style="vertical-align:top"><a href="#">파일삭제</a></span> </div>
						<p class="bul03"> 파일첨부는 총 5MB를 넘을 수 없으며, 최대 3개까지만 가능합니다.<br />
							첨부파일 형식은 이미지파일 및 한글,워드만 가능합니다. </p>
					</td>
				</tr>
				<tr>
					<th>내정보</th>
					<td><img src="/work/eyaCs/images/main/bul04.gif" width="2" height="2" /> 고객명 : 홍길동 <img src="/work/eyaCs/images/main/bul04.gif" width="2" height="2" /> ID : hong** <img src="/work/eyaCs/images/main/bul04.gif" width="2" height="2" /> 닉네임 : 홍길동<br />
						<img src="/work/eyaCs/images/main/bul04.gif" width="2" height="2" /> 휴대폰 : SKT 01099998888
						<label>
						<input type="checkbox" class="nobor" />
						답변 받기 </label>
						<img src="/work/eyaCs/images/main/bul04.gif" width="2" height="2" /> 이메일 : hong@hong.com
						<label>
						<input type="checkbox" class="nobor" />
						답변 받기 </label>
						<div style="padding:5px 0 0 0"><span class="button small"><a href="#">연락처수정</a></span> &nbsp; &nbsp; &nbsp; <img src="/work/eyaCs/images/main/bul02.gif" alt="" /> 답변 받기를 체크하시면 해당 연락처로 답변 안내를 받아 보실 수 있습니다.</div>
					</td>
				</tr>
			</table>
			<div style="text-align:center; margin-bottom:30px;">
				<label style="color:#f0441b; font-size:11px;">
				<input type="checkbox" />
				추후 사실이 아님이 밝혀질 경우 계정에 대한 제재 조치에 동의합니다.</label>
			</div>
			<div class="btnList"><span class="button large orange"><a href="complaintCom.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span> <span class="button large"><a href="#">취소</a></span></div>
			<?php include("../_include/_foot.php"); ?>
