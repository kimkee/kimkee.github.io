<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/safety/images/safetyTopIMG1.gif" alt="보안센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/safety/images/safetyHeadIMG2.gif" alt="메일주소잠금" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:50px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 차단 대상 이메일 주소</th>
						<td><span style="color: #CCCCCC; margin-right:10px;">|</span> <span class="bold">moon102@naver.com</span> <span class="button small"><a href="/work/eyaCs/safety/safetyRNN2.php">인증번호 발송</a></span></td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 주민등록번호</th>
						<td><span style="color: #CCCCCC; margin-right:10px;">|</span>
							<input type="text" style="width:100px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
							<span class="size11 tcOrange">3분 00초 남음</span> </td>
					</tr>
				</table>
				<div class="size11 aCenter" style="letter-spacing:-1px;">본인 역시 회원가입 또는 아이디 추가가 되지 않으오니 회원가입을 원할 경우 회원가입 차단을 해지 후 회원가입이 가능합니다. </div>
			</div>
			<div class="size11 aCenter tcOrange" style="letter-spacing:-1px; padding:30px 0">위 이메일주소는  현재 <strong>잠금으로 설정</strong>되어 있습니다. <strong>잠금을 해제</strong> 하시겠습니까?<br />
			</div>
			<div class="btnList"><span class="button large orange"><a href="/work/eyaCs/safety/safetyEmail4.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />인증 후 해제</a></span> <span class="button large"><a href="/work/eyaCs/safety/safetyRNN2.php">취소</a></span> </div>
			<?php include("../_include/_foot.php"); ?>
