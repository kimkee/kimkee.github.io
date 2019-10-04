<%        
dim menuTop        
menuTop=8
%>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/itemMall/images/subTit01.png" alt="아이템몰" class="png24" /></div>
						<div class="location">Home &gt; 아이템몰 </div>
					</div>
					<div class="ctnBox itemMall">
						<script type="text/javascript">
							function itemPopClose() { // 모두 닫기
								document.getElementById('itemBuyCom').style.display='none';	
							}
						</script>
					
						<?php include("../itemMall/itBoardTop.php"); ?>
						
						<div style="position:relative;">
							<div class="itemBuyCom" id="itemBuyCom" style="display:block">
								<div class="head">
									<div class="tit">안내</div>
									<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
								</div>		
								
							<div class="buyComCtn">
								<table border="1" cellspacing="0" class="selBuy" style="margin-bottom:15px;">
									<tr>
										<td>
											<div style="text-align:center; padding:30px 0">
												<div class="tit"><span class="tGray bold size12">인증에 실패 하였습니다.</span></div>
													<div class="memo">본 현상이 지속될 경우 <span class="tRed">고객센터</span>(1688-5539)로<br />문의해 주시기 바랍니다.</div>
												</div>
											</td>
										</tr>
									</table>
									<!--<div class="aCenter" style="padding:10px 0; line-height:18px;">아이리스 아이템 몰을 이용해 주셔서<br />감사합니다.</div> -->
									<div class="btnList"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnReStart.gif" alt="닫기" /></a></div>
								</div>
								<div class="rt"></div>
								<div class="lb"></div>	
								<div class="rb"></div>	
							</div>
						</div>
						<div class="itemTab">
							<ul>
								<li><a href="/work/lunaPlus/itemMall/pointList1.php">지급내역</a></li>
								<li class="on"><a href="/work/lunaPlus/itemMall/pointList2.php">사용내역</a></li>
							</ul>
						</div>
						
						
						<div class="itBbsHead aRight"> 월간보기 
							<select style="width:60px;">
								<option>2009</option>
							</select> 
							<select style="width:40px;">
								<option>09</option>
							</select> 
							<a href="#"><img src="/work/lunaPlus/itemMall/images/btnSch.gif" alt="검색" /></a>
						</div>
						
						<table border="1" cellspacing="0" class="itBbsList">
							<tr>
								<th>포인트종류</th>
								<th>사용내역</th>
								<th>사용 포인트</th>
								<th>처리상태</th>
								<th>사용일</th>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>기부</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
							<tr>
								<td>i-Point</td>
								<td>아이템구매</td>
								<td>11,000 <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
								<td><span class="tGray">정상</span></td>
								<td>09.12.25 12:30</td>
							</tr>
						</table>
						<?php include("../itemMall/paging.php"); ?>
						
						
						
						
						
					</div>
<?php include("../_include/_foot.php"); ?>
