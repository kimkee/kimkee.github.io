<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/safety/images/safetyTopIMG1.gif" alt="보안센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/safety/images/safetyHeadIMG1.gif" alt="주민번호 잠금" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
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
				</table>
				<div style="width:300px; margin:auto; margin-bottom:30px; text-align:center"><span class="button large orange"><a href="/work/eyaCs/safety/safetyRNN2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />주민번호 잠금상태 확인</a></span></div>
				<div class="tcOrange size11 aCenter">본인 역시 회원가입 또는 아이디 추가가 되지 않으오니 회원가입을 원할 경우 회원가입 차단을 해지 후 회원가입이 가능합니다.</div>
			</div>
			<div>
				<p class="bul03 size11" style="line-height:14px; background-position:0 1px; margin-bottom:3px;">본 페이지에서 실명정보는 조회목적으로 사용되며 저장되지 않습니다.</p>
				<p class="bul03 size11" style="line-height:14px; background-position:0 1px;">본인의 이름과 주민등록번호를 정확히 입력하여도 실명확인이 되지 않는 경우에는 <span class="tcOrange">서울신용평가 실명인증 센터</span>를 방문하셔서 
					실명인증 정보를 입력하여 주시기 바랍니다. </p>
			</div>
			<?php include("../_include/_foot.php"); ?>
