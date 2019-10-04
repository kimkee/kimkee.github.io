<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/certifi/images/certifiTopIMG.gif" alt="인증센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/certifi/images/certifiHeadIMG3.gif" alt="본인인증" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<div style="width:400px; margin:auto; margin-bottom:30px; line-height:18px;"><strong>홍길동</strong> 님은 아직 <strong class="tcOrange">핸드폰인증이 완료되지 않은 상태</strong>입니다.<br />
				핸드폰 인증을 통해서 다양한 이벤트참여 혜택을 부여 받으시기 바랍니다.</div>
				<table border="1" cellspacing="0" class="dTable3" style="margin:auto; margin-bottom:30px;">
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 핸드폰 번호</th>
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
						<span class="button small"><a href="/work/eyaCs/safety/safetyRNN2.php">인증번호 발송</a></span></td>
					</tr>
					<tr>
						<th><img src="/work/eyaCs/images/main/bul03.gif" alt="" width="11" height="10" /> 인증번호 키 입력</th>
						<td>
							<input type="text" style="width:120px;" onblur="javascript:InputBackImg(this,'');" onfocus="javascript:OutputBackImg(this);" />
						<span class="size11 tcOrange">3분 00초 남음</span>						</td>
					</tr>
				</table>
				<div style="width:300px; margin:auto; margin-bottom:30px; text-align:center"><span class="button large orange"><a href="/work/eyaCs/certifi/certifiPhone2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />확인</a></span> <span class="button large"><a href="#">취소</a></span></div>
			</div>
<?php include("../_include/_foot.php"); ?>
