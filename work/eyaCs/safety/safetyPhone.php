<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/safety/images/safetyTopIMG1.gif" alt="보안센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/safety/images/safetyHeadIMG3.gif" alt="핸드폰번호 잠금" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:30px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 차단 대상 핸드폰 번호</th>
						<td>
							<select>
								<option>선택</option>
								<option>010</option>
								<option>011</option>
								<option>016</option>
								<option>017</option>
								<option>018</option>
								<option>019</option>
							</select>
							<input type="text" style="width:60px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							-
							<input type="text" style="width:60px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
						</td>
					</tr>
				</table>
				<div style="width:300px; margin:auto; margin-bottom:30px; text-align:center"><span class="button large orange"><a href="/work/eyaCs/safety/safetyPhone2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />핸드폰 번호 잠금 상태를 확인합니다.</a></span></div>
				<div class="size11" style="letter-spacing:-1px; line-height:18px; padding:0 20px">본인 역시 회원가입 시 해당 핸드폰번호를 사용하지 못하오니 해당 핸드폰번호를 사용하길 원할 경우 핸드폰번호 사용 차단을 해지 후 이용 하실 수 있습니다. </div>
			</div>
			<?php include("../_include/_foot.php"); ?>
