<?
$skal = 1;
?>
<?php include("/free/home/imgwizard1/html/work/eyaPc/_include/_head.php"); ?>
				<script type="text/javascript">
// 아이디첵크팝업
function idPop() {
  window.open('/member/idCheck1.php','idPop','scrollbars=no,width=480,height=330');
}
function zipPop() {
  window.open('/member/zipSch.php','zipSch','scrollbars=no,width=480,height=330');
}
</script>
				<div class="headTit line">
					<h3 class="tit"><img src="/work/eyaPc/member/images/subTit01.gif" alt="엔젤러브의특징" /></h3>
					<div class="location">이야PC방 &gt; 소개&amp;가입 &gt; PC방가입</div>
				</div>
				<h4 class="joinStepTit"><img src="/work/eyaPc/member/images/memDisTit1.gif" alt="정보필수입력" width="256" height="32" /></h4>
				<table cellspacing="0" class="joinForm">
					<tr>
						<th>아이디(ID)</th>
						<td>
							<input type="text" style="width:200px" />
						</td>
					</tr>
					<tr>
						<th>비밀번호</th>
						<td>
							<input type="password" style="width:200px" />
						</td>
					</tr>
					<tr>
						<th>PC방 상호</th>
						<td>
							<input type="text" style="width:100px" />
							-
							<input type="password" style="width:100px" />
						</td>
					</tr>
					<tr>
						<th>사업자번호</th>
						<td>
							<input type="text" style="width:80px" />
							-
							<input type="text" style="width:80px" />
							-
							<input type="text" style="width:80px" />
						</td>
					</tr>
					<tr>
						<th>업태</th>
						<td>
							<select>
								<option>탈퇴사유를 선택해주세요</option>
							</select>
						</td>
					</tr>
				</table>
				<div class="btnList" style="margin-bottom:30px;">
					<span class="button"><a href="/work/eyaPc/member/memDisCom.php">탈퇴하기</a></span>
					<span class="button"><a href="/">취소</a></span>
				</div>
				<div class="regDesc">
					<div style="margin-bottom:10px;"><img src="/work/eyaPc/member/images/memDisWarrig.gif" alt="주의사항" /></div>
					<ul>
						<li>이야 PC방 탈퇴는 <strong>이용하시는 서비스가 해지 되지 않으면</strong> 탈퇴 하실 수 없습니다.</li>
						<li>이용 서비스의 해지는 <strong>이야 코인이 소진되거나 기간이 만료되면 자동으로 해지</strong>되거나, 자동해지와 남아 있는 이야 코인 및 <br />
						기간을 금액으로 환산 하여 환불처리를 완료 하시면 해지가 완료됩니다.</li>
						<li>자세한 해지/탈퇴 문의는 고객센터로 문의해 주시기 바랍니다. (Tel : 1588-1588)</li>
					</ul>
				</div>
				<?php include("/free/home/imgwizard1/html/work/eyaPc/_include/_foot.php"); ?>
