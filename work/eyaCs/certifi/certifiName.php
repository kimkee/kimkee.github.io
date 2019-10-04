<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/certifi/images/certifiTopIMG.gif" alt="인증센터" width="665" height="90" /></div>
			<div style="margin-bottom:35px;"><img src="/work/eyaCs/certifi/images/certifiHeadIMG1.gif" alt="실명인증" width="665" height="99" /></div>
			<div class="safBox" style="padding-bottom:20px; margin-bottom:20px;">
				<div style="width:350px; margin:auto; margin-bottom:30px; line-height:18px;"><strong>홍길동</strong> 님은 아직 <strong class="tcOrange">실명인증이 완료되지 않은 상태</strong>입니다.<br />
					아래 입력란에 실명정보를 입력하신 후 인증을 완료해 주십시오.</div>
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
				<div style="width:300px; margin:auto; margin-bottom:30px; text-align:center"><span class="button large orange"><a href="/work/eyaCs/certifi/certifiName2.php"><img src="/work/eyaCs/images/board/btnCheck.png" alt="" />인증 확인</a></span> <span class="button large"><a href="#">취소</a></span></div>
				
			</div><p class="bul03 size11" style="margin:20px 20px;">본인의 이름과 주민등록번호를 정확히 입력하여도 실명확인이 되지 않는 경우에는 <span class="tcOrange size11"><a href="#">서울신용평가 실명인증 센터</a></span>를 방문하셔서 
실명인증 정보를 입력하여 주시기 바랍니다.</p>
			<?php include("../_include/_foot.php"); ?>
