<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/mypage/images/mypageTopIMG.gif" alt="My고객센터" width="665" height="90" /></div>
			<h3 class="titCenter1">회원탈퇴</h3>
			<p style="padding:0 0 0 10px; line-height:18px; margin-bottom:20px;">회원탈퇴 신청이 접수되면 탈퇴취소 신청이 없을 경우 신청 15일 후 계정 및 게임정보가 자동 삭제됩니다. <br />
				또한 신청 즉시 게임접속과 홈페이지 접속이 차단됨으로 신중한 선택을 해 주시기 바랍니다. <br />
				잔여 캐시가 존재하는 경우 캐시환불 처리를 마치셔야 회원탈퇴가 가능합니다.</p>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<div style="width:400px; margin:auto; margin-bottom:30px; line-height:18px; text-align:center"><strong class="tcOrange">XXXX 계정 탈퇴를 진행합니다.</strong></div>
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:30px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 이름</th>
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
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 비밀번호</th>
						<td>
							<input type="text" style="width:178px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
						</td>
					</tr>
				</table>
			</div>
			<h3><img src="/work/eyaCs/safety/images/safetyRNN2tit1.gif" alt="본인인증" /></h3>
			<table border="1" cellspacing="0" class="dTable1" style="margin-bottom:30px">
				<tr>
					<td>
						<input name="ce" type="radio" value="" class="nobor" />
					</td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img1','','/safety/images/safetyRNN2IMG1On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG1.gif" alt="휴대폰인증" name="img1" width="168" height="85" border="0" id="img1" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT1.gif" alt="" width="400" height="85" /></td>
				</tr>
				<tr>
					<td>
						<input name="ce" type="radio" value="" class="nobor" />
					</td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img2','','/safety/images/safetyRNN2IMG2On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG2.gif" alt="신용카드인증" name="img2" width="168" height="85" border="0" id="img2" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT2.gif" alt="" width="400" height="85" /></td>
				</tr>
				<tr>
					<td>
						<input name="ce" type="radio" value="" class="nobor" />
					</td>
					<th><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('img3','','/safety/images/safetyRNN2IMG3On.gif',0)"><img src="/work/eyaCs/safety/images/safetyRNN2IMG3.gif" alt="범용공인인증서인증" name="img3" width="168" height="85" border="0" id="img3" /></a></th>
					<td><img src="/work/eyaCs/safety/images/safetyRNN2IMGT3.gif" alt="" width="400" height="85" /></td>
				</tr>
			</table>
			<div class="btnList"><span class="button large orange"><a href="#"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span><span class="button large"><a href="#">취소</a></span></div>
			<?php include("../_include/_foot.php"); ?>
