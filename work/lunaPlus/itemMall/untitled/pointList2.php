<%        
dim menuTop        
menuTop=8
%>
<?php include("../_include/_head.php"); ?>
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/itemMall/images/subTit01.png" alt="아이템몰" class="png24" /></div>
						<div class="location">Home &gt; 아이템몰 </div>
					</div>
					<%
					' //////// 포인트몰 오픈될때까지는 우선 막자!! ////////
					Response.Write "<script>alert('coming soon');history.back();</script>"
					Response.END
					%>
					<div class="ctnBox itemMall">
					
						<?php include("../itemMall/itBoardTop.php"); ?>
												
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
