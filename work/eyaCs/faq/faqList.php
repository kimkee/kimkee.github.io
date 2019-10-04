<?php include("../_include/_head.php"); ?>
			<div class="topVisual"><img src="/work/eyaCs/faq/images/faqTopIMG.gif" alt="도움말센터" width="665" height="90" /></div>
			<?php include("faqSchBox.php"); ?>
			<script type="text/javascript">
				function mDown(K) {
					document.getElementById('downMenuOff').style.display='none';
					document.getElementById('downMenuOn').style.display='none';
					document.getElementById('downMenu'+K).style.display='block';
				}
			</script>
			<div class="tabCate">
				
				<ul class="bbsTab line" style="margin-bottom:10px;">
					<li style="width:127px; background:none">&nbsp;</li>
					<li><a href="#">회원정보</a></li>
					<li><a href="#">캐쉬/충전</a></li>
					<li><a href="#">기타</a></li>
				</ul>
				<div id="downMenuOff" style="position:absolute; top:0; z-index:10" onmouseover="mDown('On');">
					<div class="gameTab"><a href="#">엔젤러브</a></div>
				</div>
				<div id="downMenuOn" style="position:absolute; top:0; z-index:10; display:none" onmouseover="mDown('On');" onmouseout="mDown('Off');">
					<div class="gameTab"><a href="#">엔젤러브</a></div>
					<div class="downMenu">
						<div><a href="#">엔젤러브온라인</a></div>
						<div><a href="#">아이리스</a></div>
						<div><a href="#">에다 온라인</a></div>
					</div>
				</div>
				
				<div class="depth2">
					<ul>
						<li><a href="#">Top 10 </a></li>
						<li class="on">|&nbsp;<a href="#">시스템</a> </li>
						<li>|&nbsp;<a href="#">게임내용</a> </li>
						<li>|&nbsp;<a href="#">운영</a> </li>
						<li>|&nbsp;<a href="#">홈페이지</a> </li>
						<li>|&nbsp;<a href="#">상담/신고</a> </li>
						<li>|&nbsp;<a href="#">기타</a> </li>
					</ul>
				</div>
				<div class="depth3" style="width:500px">
					<div class="left"></div>
					<div class="arr" style="left:90px"></div>
					<ul>
						<li class="on"><a href="#">다운로드</a> </li>
						<li>|&nbsp;<a href="#">설치/삭제</a> </li>
						<li>|&nbsp;<a href="#">게임실행 오류</a> </li>
						<li>|&nbsp;<a href="#">서버접속 오류</a> </li>
						<li>|&nbsp;<a href="#">게임 중 오류</a> </li>
						<li>|&nbsp;<a href="#">기타</a> </li>
					</ul>
					<div class="right"></div>
				</div>
				
			</div>

			
			<div class="faqSchResult" style="margin-top:20px;">
				<div class="msg">엔젤러브 / 시스템 / 다운로드</div> 
				<div class="btnReset"><img src="/work/eyaCs/faq/images/bulSchRe.gif" alt="" /> <a href="#">검색을 초기화 합니다.</a></div>
			</div>
			<table cellspacing="0" border="1" class="faqList">
					<tr>
						<th>문의</th>
						<th>업데이트</th>
						<th>조회수</th>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQOn.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브/시스템]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td colspan="3" class="bTit reply">
							<div class="img"><img src="/work/eyaCs/faq/images/icoAOn.gif" alt="질문" width="14" height="14" /></div>
							<div class="msg">
								님아 좋겠네요.
									<br />
								정 싫으시면 중앙정보 수사국에 의뢰하세요.
								<br />
								그보다 더 확실한 방법은
								<br />
								님의 쌩얼 사진 보내세요.
								<br />
								바로 떨어 집니다.
							</div>
							<div class="clear"></div>
							<div class="comt">
								<div class="info"><img src="/work/eyaCs/faq/images/icoHelp2.gif" alt="" /> 도움이 되셨나요?</div>
								<div class="sel">
									<input name="ss" type="radio" id="s1" /><label for="s1">유용한 도움말이네요</label>
									<input name="ss" type="radio" id="s2" /><label for="s2">괜찮네요</label>
									<input name="ss" type="radio" id="s3" /><label for="s3">뭐 그냥 그렇습니다</label>
									<input name="ss" type="radio" id="s4" /><label for="s4">별 도움은 안되네요</label>
									<input name="ss" type="radio" id="s5" /><label for="s5">동문서답 입니다</label>
								</div>
								<div class="textBox">
									<textarea cols="70" rows="4"></textarea>
									<div class="textNum">최대300자<br />
									현재 <strong>0</strong> 자</div>
									
									<div class="btn"><a href="#"><img src="/work/eyaCs/faq/images/btnComt.gif" alt="확인" /></a></div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브/시스템]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[회원/가입] </strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브/시스템]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[회원/가입] </strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
					<tr>
						<td class="bTit"><img src="/work/eyaCs/faq/images/icoQ.gif" alt="질문" width="14" height="14" /> <a href="#"><strong>[엔젤러브/시스템]</strong> 어떤 남자애가 자꾸 찝쩍 거려요 어쩌면 좋을까요?</a></td>
						<td class="bDate">2009.11.31</td>
						<td class="bHit">4235</td>
					</tr>
			</table>
			
			
			<?php include("/free/home/imgwizard1/html/work/eyaCs/_board/paging.php"); ?>
			<div class="faqHelpMore">
				<div class="msg"><img src="/work/eyaCs/faq/images/icoHelp.gif" alt="!" width="14" height="14" /> 도움말로 해결하지 못하셨나요? 1:1 맞춤 상담을 신청하세요. </div>
				<div class="btn"><a href="#"><img src="/work/eyaCs/faq/images/btnConsul.gif" alt="상담하기" width="69" height="22" /></a></div>
			</div>
<?php include("../_include/_foot.php"); ?>		