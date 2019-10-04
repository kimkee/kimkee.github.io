<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>
<script type="text/javascript" src="paging.js"></script><%'페이징%>

						<div class="headTit">
							<div class="tit"><img src="/work/edda/guide/images/subTit02.gif" alt="몬스터" /></div>
							<div class="location">Home &gt; 게임가이드 &gt; 몬스터</div>
						</div>
						
							
				
						<div class="schMosnter">
							<div class="sch">
							<form method="post" action="monster.php" name="schfrm">
								<select name="s1" style="width: 150px;">
									<option value="">--선택안함--</option>
									<option value="1">가이얀 평원</option>
									<option value="2">황금 광산</option>
									<option value="3">서릿바람 계곡</option>
									<option value="4">얼음 신전</option>
									<option value="5">시련의 입구</option>
									<option value="6">설룡의 산</option>
									<option value="7">퀘벨레 정원</option>
									<option value="8">비룡 성채</option>
								</select>
								<select name="s2" style="width: 100px;">
									<option value="">--선택안함--</option>
									<option value="1">1 ~ 10 Lv</option>
									<option value="2">11 ~ 20 Lv</option>
									<option value="3">21 ~ 30 Lv</option>
									<option value="4">31 ~ 40 Lv</option>
								</select>
								<select name="s3" style="width: 100px;">
									<option value="">--선택안함--</option>
									<option value="1">선공</option>
									<option value="2">비선공</option>
								</select>
<!-- 								<input type="text" style="width:150px;" />
 -->								<img style="cursor: pointer;" onclick="document.schfrm.submit()" alt="검색" src="/work/edda/images/board/btnSch.gif" />
							</form>
							</div>
						</div>
						
						
						<div class="monsterBox">
							<div class="left">
								<div class="img"><img alt="몬스터" src="/work/edda/guide/images/monsterIMG.gif" /></div>
							</div>
							<div class="right">
								<div class="name">들쥐 <span class="info"> : 일반 몬스터</span></div>
								<table cellspacing="0" border="1" class="list">
									<tbody><tr>
										<th>레벨</th>
										<th>선공여부</th>
										<th>출현지역</th>
									</tr>
									<tr>
										<td>1</td>
										<td>비선공</td>
										<td>가이얀 평원</td>
									</tr>
								</tbody></table>
								
							</div>
						</div>
						<div class="monsterBox">
							<div class="left">
								<div class="img"><img alt="몬스터" src="/work/edda/guide/images/monsterIMG.gif" /></div>
							</div>
							<div class="right">
								<div class="name">들쥐 <span class="info"> : 일반 몬스터</span></div>
								<table cellspacing="0" border="1" class="list">
									<tbody><tr>
										<th>레벨</th>
										<th>선공여부</th>
										<th>출현지역</th>
									</tr>
									<tr>
										<td>1</td>
										<td>비선공</td>
										<td>가이얀 평원</td>
									</tr>
								</tbody></table>
								
							</div>
						</div>
						<div class="monsterBox">
							<div class="left">
								<div class="img"><img alt="몬스터" src="/work/edda/guide/images/monsterIMG.gif" /></div>
							</div>
							<div class="right">
								<div class="name">들쥐 <span class="info"> : 일반 몬스터</span></div>
								<table cellspacing="0" border="1" class="list">
									<tbody><tr>
										<th>레벨</th>
										<th>선공여부</th>
										<th>출현지역</th>
									</tr>
									<tr>
										<td>1</td>
										<td>비선공</td>
										<td>가이얀 평원</td>
									</tr>
								</tbody></table>
								
							</div>
						</div>
						<div class="monsterBox">
							<div class="left">
								<div class="img"><img alt="몬스터" src="/work/edda/guide/images/monsterIMG.gif" /></div>
							</div>
							<div class="right">
								<div class="name">들쥐 <span class="info"> : 일반 몬스터</span></div>
								<table cellspacing="0" border="1" class="list">
									<tbody><tr>
										<th>레벨</th>
										<th>선공여부</th>
										<th>출현지역</th>
									</tr>
									<tr>
										<td>1</td>
										<td>비선공</td>
										<td>가이얀 평원</td>
									</tr>
								</tbody></table>
								
							</div>
						</div>
						<div class="monsterBox">
							<div class="left">
								<div class="img"><img alt="몬스터" src="/work/edda/guide/images/monsterIMG.gif" /></div>
							</div>
							<div class="right">
								<div class="name">들쥐 <span class="info"> : 일반 몬스터</span></div>
								<table cellspacing="0" border="1" class="list">
									<tbody><tr>
										<th>레벨</th>
										<th>선공여부</th>
										<th>출현지역</th>
									</tr>
									<tr>
										<td>1</td>
										<td>비선공</td>
										<td>가이얀 평원</td>
									</tr>
								</tbody></table>
								
							</div>
						</div>
						
						<?php include("../_board/paging.php"); ?>
						
						
<?php include("../_include/_foot.php"); ?>
