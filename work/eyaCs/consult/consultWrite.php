<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/consult/images/consultTopIMG.gif" alt="상담센터" width="665" height="90" /></div>
			<table border="1" cellpadding="0" cellspacing="0" class="tableForm" style=" width:665px">
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 게임선택</th>
					<td>
						<select name="select9">
							<option>게임선택</option>
						</select>
						<select name="select10">
							<option>서버선택</option>
						</select>
						<select name="select11">
							<option>캐릭터선택</option>
						</select>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 상담선택</th>
					<td>
						<select name="select12">
							<option>상담분야</option>
						</select>
						<select name="select13">
							<option>상담분야</option>
						</select>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 관련 도움말</th>
					<td>
						<div class="helpList">
							<div class="clear"></div>
							<div class="it"><a href="#">1.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="it"><a href="#">2.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="it"><a href="#">3.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="it"><a href="#">4.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="it"><a href="#">5.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="it"><a href="#">6.어떤 남자애가 자꾸 찝적거려요</a></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 상담제목</th>
					<td>
						<input type="text" style="width:520px" />
					</td>
				</tr>
				<tr>
					<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" /> 상담내용</th>
					<td>
						<textarea cols="100" rows="5" style="width:520px; height:100px;"></textarea>
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
					<td><img src="/work/eyaCs/images/main/bul04.gif" alt="" /> 고객명 : 홍길동 <img src="/work/eyaCs/images/main/bul04.gif" alt="" /> ID : hong** <img src="/work/eyaCs/images/main/bul04.gif" alt="" /> 닉네임 : 홍길동<br />
						<img src="/work/eyaCs/images/main/bul04.gif" alt="" /> 휴대폰 : SKT 01099998888
						<label>
						<input type="checkbox" class="nobor" />
						답변 받기 </label>
						<img src="/work/eyaCs/images/main/bul04.gif" alt="" /> 이메일 : hong@hong.com
						<label>
						<input type="checkbox" class="nobor" />
						답변 받기 </label>
						<div style="padding:5px 0 0 0"><span class="button small"><a href="#">연락처수정</a></span> &nbsp; &nbsp; &nbsp; <img src="/work/eyaCs/images/main/bul02.gif" alt="" /> 답변 받기를 체크하시면 해당 연락처로 답변 안내를 받아 보실 수 있습니다.</div>
					</td>
				</tr>
				<tr>
					<th>내 PC</th>
					<td>
						<p class="bul03" style="margin-bottom:20px;">빠르고 정확한 상담을 위해 고객님의 PC사양을 체크합니다.
							본 자료는 상담을 위한 자료로 사용될 뿐 다른 용도로는 절대 사용되지 않습니다.</p>
						<span class="button small"><a href="#">PC 사양정보를 제공합니다.</a></span> </td>
				</tr>
			</table>
			<div class="btnList"><span class="button large orange"><a href="/work/eyaCs/consult/consultCom.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span> <span class="button large"><a href="#">취소</a></span></div>
			<?php include("../_include/_foot.php"); ?>
