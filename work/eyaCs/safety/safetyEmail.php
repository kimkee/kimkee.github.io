<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/safety/images/safetyTopIMG1.gif" alt="보안센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/safety/images/safetyHeadIMG2.gif" alt="메일주소잠금" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:30px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 차단 대상 이메일 주소</th>
						<td>
							<input type="text" style="width:100px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							@
							<input type="text" style="width:100px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							<select>
								<option>선택</option>
								<option>naver.com</option>
								<option>hanmail.net</option>
							</select>
						</td>
					</tr>
				</table>
				<div style="width:300px; margin:auto; margin-bottom:30px; text-align:center"><span class="button large orange"><a href="/work/eyaCs/safety/safetyEmail2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />메일주소 잠금 상태를 확인합니다.</a></span></div>
				<div class="tcOrange size11 aCenter" style="letter-spacing:-1px;">본인 역시 회원가입 시 해당 이메일을 사용하지 못하오니 해당 이메일을 사용하길 원할 경우 이메일 사용 차단을 해지 후 이용 하실 수 있습니다. <br />
				</div>
			</div>
			<?php include("../_include/_foot.php"); ?>
