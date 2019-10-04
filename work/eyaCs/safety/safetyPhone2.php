<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/safety/images/safetyTopIMG1.gif" alt="보안센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/safety/images/safetyHeadIMG3.gif" alt="핸드폰번호 잠금" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:50px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 차단 대상 핸드폰 번호</th>
						<td><span style="color: #CCCCCC; margin-right:10px;">|</span> <span class="bold">010-1234-5678</span> <span class="button small"><a href="/work/eyaCs/safety/safetyRNN2.php">인증번호 발송</a></span></td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 인증번호 키 입력</th>
						<td><span style="color: #CCCCCC; margin-right:10px;">|</span>
							<input type="text" style="width:100px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							<span class="size11 tcOrange">3분 00초 남음</span> </td>
					</tr>
				</table>
				<div class="size11" style="letter-spacing:-1px; line-height:18px; padding:0 20px">본인 역시 회원가입 시 해당 핸드폰번호를 사용하지 못하오니 해당 핸드폰번호를 사용하길 원할 경우 핸드폰번호 사용 차단을 해지 후 이용 <br />
					하실 수 있습니다. <br />
				</div>
			</div>
			<div class="size11 aCenter tcOrange" style="letter-spacing:-1px; padding:30px 0">위 핸드폰번호가 등록되는 것을 <strong>차단합니다.</strong></div>
			
			<div class="btnList"><span class="button large orange"><a href="/work/eyaCs/safety/safetyPhone3.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />인증 후 차단</a></span>
			<span class="button large"><a href="/work/eyaCs/safety/safetyRNN2.php">취소</a></span>			</div>
		<?php include("../_include/_foot.php"); ?>
 