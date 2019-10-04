<?php include("../_include/_head.php"); ?>
			<span class="button small"><a href="/work/eyaCs/safety/safetyRNN2.php">인증번호 발송</a></span>
			<div class="topVisual"><img src="/work/eyaCs/certifi/images/certifiTopIMG.gif" alt="인증센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/certifi/images/certifiHeadIMG4.gif" alt="본인인증" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<div style="width:400px; margin:auto; margin-bottom:30px; line-height:18px;"><strong>홍길동</strong> 님은 아직 <strong class="tcOrange">부모님 결제동의가 완료되지 않은 상태</strong>입니다.<br />
					아래 인증수단을 통해서 부모님 동의를 완료해 주십시오.</div>
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:30px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 부모님 이름</th>
						<td>
							<input type="text" style="width:178px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
						</td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 주민등록번호</th>
						<td>
							<input type="text" style="width:80px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							-
							<input type="text" style="width:80px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
						</td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 부모님 연락처</th>
						<td>
							<select name="select">
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
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 부모님 이메일</th>
						<td>
							<input type="text" style="width:80px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							@
							<select name="select2">
								<option selected="selected">선택</option>
								<option>hanmail.net</option>
							</select>
						</td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 결제동의 기간</th>
						<td>
							<label>
							<input name="pA" type="radio" value="" class="nobor" />
							1개월</label>
							<label>
							<input name="pA" type="radio" value="" class="nobor" />
							6개월</label>
							<label>
							<input name="pA" type="radio" value="" class="nobor" />
							1년</label>
							<label>
							<input name="pA" type="radio" value="" class="nobor" />
							3년</label>
							<label>
							<input name="pA" type="radio" value="" class="nobor" />
							5년</label>
						</td>
					</tr>
				</table>
			</div>
						<h3><img src="/work/eyaCs/safety/images/safetyRNN2tit1.gif" alt="본인인증" /></h3>
			<table border="1" cellspacing="0" class="dTable1" style="margin-bottom:30px">
				<tr>
					<td><input name="ce" type="radio" value="" class="nobor" /></td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img4','','/safety/images/safetyRNN2IMG4On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG4.gif" alt="이메일인증" name="img4" width="168" height="85" border="0" id="img4" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT4.gif" alt="" width="371" height="43" />
						<div><input type="text" /> <span class="button small"><a href="#">인증키확인</a></span></div>
					</td>
				</tr>
				<tr>
					<td><input name="ce" type="radio" value="" class="nobor" /></td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img1','','/safety/images/safetyRNN2IMG1On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG1.gif" alt="휴대폰인증" name="img1" width="168" height="85" border="0" id="img1" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT1.gif" alt="" width="400" height="85" /></td>
				</tr>
				<tr>
					<td><input name="ce" type="radio" value="" class="nobor" /></td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img2','','/safety/images/safetyRNN2IMG2On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG2.gif" alt="신용카드인증" name="img2" width="168" height="85" border="0" id="img2" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT2.gif" alt="" width="400" height="85" /></td>
				</tr>
				<tr>
					<td><input name="ce" type="radio" value="" class="nobor" /></td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img3','','/safety/images/safetyRNN2IMG3On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG3.gif" alt="범용공인인증서인증" name="img3" width="168" height="85" border="0" id="img3" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT3.gif" alt="" width="400" height="85" /></td>
				</tr>
			</table>

						
			
			<p class="bul03 size11" style="background-position:0 1px; margin-bottom:30px;">법정 대리인은 만20세 성인이어야 하며 본인과의 최소 나이차이는 7세 이상이어야 합니다.</p>
			
			<div class="btnList"><span class="button large orange"><a href="certifiEmail2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span><span class="button large"><a href="#">취소</a></span></div>
			<?php include("../_include/_foot.php"); ?>
