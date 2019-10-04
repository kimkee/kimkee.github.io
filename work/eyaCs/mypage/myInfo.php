<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/mypage/images/mypageTopIMG.gif" alt="My고객센터" width="665" height="90" /></div>
			<h3 class="titCenter1">개인정보변경</h3>
			<table border="1" cellpadding="0" cellspacing="0" class="tableForm" style="margin-bottom:40px; width:665px">
				<tr>
					<th>ID</th>
					<td><strong>kim**</strong></td>
				</tr>
				<tr>
					<th>비밀번호</th>
					<td>
						<input type="text" style="width:150px" />
					</td>
				</tr>
				<tr>
					<th>이름</th>
					<td>김*현</td>
				</tr>
				<tr>
					<th>주민등록번호</th>
					<td>750607-******* </td>
				</tr>
				<tr>
					<th>주소</th>
					<td>
						<div style="margin-bottom:5px;">
							<input type="text" style="width:70px" />
							-
							<input type="text" style="width:70px" />
							<span class="button small"><a href="#">우편번호검색</a></span> </div>
						<div>
							<input type="text" style="width:200px" />
							<input type="text" style="width:200px" />
						</div>
					</td>
				</tr>
				<tr>
					<th>전화번호</th>
					<td>
						<input type="text" style="width:40px" />
						-
						<input type="text" style="width:40px" />
						-
						<input type="text" style="width:40px" />
					</td>
				</tr>
				<tr>
					<th>핸드폰번호</th>
					<td>
						<input type="text" style="width:40px" />
						-
						<input type="text" style="width:40px" />
						-
						<input type="text" style="width:40px" />
						<span class="tcOrange size11">&nbsp; <img src="/work/eyaCs/images/main/bul02.gif" width="12" height="12" alt="" /> 인증된 핸드폰 번호입니다. </span> </td>
				</tr>
				<tr>
					<th>이메일</th>
					<td>
						<input type="text" style="width:100px" />
						@
						<input type="text" style="width:100px" />
						<select>
							<option>직접입력</option>
						</select>
						<div class="tcOrange size11 bul03" style="letter-spacing:-1px; margin-top:5px;">인증되지 않은 메일 주소입니다. 각종 이벤트 혜택을 받으시려면 인증을 통해 본인메일을 확인하세요.</div>
					</td>
				</tr>
				<tr>
					<th>메일링수신</th>
					<td>
						<label style="margin-right:10px;">
						<input name="mail" type="radio" class="nobor" checked="checked" />
						수신</label>
						<label>
						<input name="mail" type="radio" class="nobor" />
						수신거부</label>
					</td>
				</tr>
				<tr>
					<th>SMS 수신</th>
					<td>
						<label style="margin-right:10px;">
						<input name="sms" type="radio" class="nobor" checked="checked" />
						수신</label>
						<label>
						<input name="sms" type="radio" class="nobor" />
						수신거부</label>
					</td>
				</tr>
			</table>
			<div class="btnList"><span class="button large orange"><a href="/work/eyaCs/mypage/myPw.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span> <span class="button large"><a href="#">취소</a></span></div>
			<?php include("../_include/_foot.php"); ?>
