<?
$skal = 1;
?>
<?php include("/free/home/imgwizard1/html/work/eyaPc/_include/_head.php"); ?>

	<div class="headTit">
		<h3 class="tit"><img src="/work/eyaPc/member/images/subTit02.gif" alt="엔젤러브의특징" /></h3>
		<div class="location">이야PC방 &gt; 소개&amp;가입 &gt; PC방가입</div>
	</div>
	<div class="stepTab"><img src="/work/eyaPc/member/images/stepTab02.gif" alt="" width="688" height="32" /></div>
	<div class="stepStat1"><img src="/work/eyaPc/member/images/stepStat2.gif" alt="" width="688" height="107" /></div>
	<h4 class="joinStepTit"><img src="/work/eyaPc/member/images/joinStep2Tit1.gif" alt="정보필수입력" width="688" height="32" /></h4>
	<table cellspacing="0" class="joinForm">
		<tr>
			<th>아이디(ID)</th>
			<td>
				<input type="text" style="width:126px" /><span class="button small"><a href="javascript:idPop();">중복확인</a></span></td>
		</tr>
		<tr>
			<th>비밀번호</th>
			<td>
				<input type="password" style="width:126px" />
				비밀번호확인
				<input type="password" style="width:126px" />
			</td>
		</tr>
		<tr>
			<th>PC방 상호</th>
			<td>
				<input type="text" style="width:295px" />
			</td>
		</tr>
		<tr>
			<th>사업자번호</th>
			<td>
				<input type="text" style="width:89px" />
				-
				<input type="text" style="width:66px" />
				-
				<input type="text" style="width:89px" />
			</td>
		</tr>
		<tr>
			<th>업태</th>
			<td>
				<select>
					<option>업태 선택</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>종목</th>
			<td>
				<select name="select">
					<option>종목 선택</option>
				</select>
			</td>
		</tr>
		<tr>
			<th>PC방 대표자이름</th>
			<td><span class="textB">이정호</span></td>
		</tr>
		<tr>
			<th>주민등록 번호</th>
			<td><span class="textB">770127 - ******</span></td>
		</tr>
		<tr>
			<th>PC방 주소</th>
			<td>
				<div class="tLi">
					<input type="text" style="width:78px" />
					-
					<input type="text" style="width:78px" />
					<span class="button small"><a href="javascript:zipPop();">우편번호찾기</a></span>
				</div>
				<div class="tLi">
					<input type="text" style="width:480px" />
				</div>
				<div class="tLi">정보는 이야게임즈의 홍보물(포스터,게임CD,쿠폰 등등)발송&amp;이벤트 당첨 시 경품 배송주소로 사용됩니다.<br />
					다양한 혜택을 제공 받으시려면 정확한 주소를 꼭 입력해 주시기 바랍니다.</div>
			</td>
		</tr>
		<tr>
			<th>PC방 대표전화</th>
			<td>
				<select name="select2">
					<option>선택</option>
				</select>
				-
				<input type="text" style="width:60px" />
				-
				<input type="text" style="width:60px" />
				<input type="checkbox" id="phoneAgr" class="nobor" />
				<label for="phoneAgr">전화 수신동의</label>
			</td>
		</tr>
		<tr>
			<th>핸드폰</th>
			<td>
				<select name="select3">
					<option>SKT</option>
				</select>
				<select name="select4">
					<option>선택</option>
					<option>010</option>
					<option>011</option>
					<option>016</option>
					<option>017</option>
					<option>018</option>
					<option>019</option>
				</select>
				- <a href="#">
				<input type="text" style="width:60px" />
				</a>-<a href="#">
				<input type="text" style="width:60px" />
				</a>
				<input type="checkbox" id="smsAgr" class="nobor" />
				<label for="smsAgr">SMS 수신동의</label>
			</td>
		</tr>
		<tr>
			<th>Email 주소</th>
			<td><a href="#">
				<input type="text" style="width:80px" />
				@
				<input type="text" style="width:80px" />
				</a>
				<select name="select5">
					<option>---- 선택 ----</option>
				</select>
				<input type="checkbox" id="emailAgr" class="nobor" />
				<label for="emailAgr">Email 수신동의</label>
			</td>
		</tr>
		<tr>
			<th>보유PC수량</th>
			<td><a href="#">
				<input type="text" style="width:80px" />
				</a>대 PC보유</td>
		</tr>
		<tr>
			<th>전용선</th>
			<td>
				<select name="select6">
					<option>---- 선택 ----</option>
				</select>
			</td>
		</tr>
		<tr>
			<th style="border:none">회선속도</th>
			<td style="border:none">

					<select name="select7">
						<option>---- 선택 ----</option>
					</select>

			</td>
		</tr>
		<tr>
			<th style="font-weight:normal; font-size:11px; vertical-align:top; padding-top:0px;">IP대역폭 등록</th>
			<td style="padding-top:0px;">
				<div class="tLi">
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					~
	<input type="text" style="width:50px" />
	<span class="button small"><a href="#">입력</a></span><span class="button small"><a href="#">중복확인</a></span></div>
				<div class="tLi">
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					~
	<input type="text" style="width:50px" />
				</div>
				<div class="tLi">
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					<img src="/work/eyaPc/member/images/joinStep2Ip.gif" alt="" width="2" height="19" />
					<input type="text" style="width:50px" />
					~
	<input type="text" style="width:50px" />
				</div>
				<div class="tLi">IP를 입력하신 후 반드시 중복확인을 해주시기 바랍니다.</div>
				<div class="tLi" style="position:relative">
					<select name="select8" size="5" multiple="multiple" class="ipSelect">
						<option selected="selected">192.168.123.110</option>
						<option>192.168.123.111</option>
						<option>192.168.123.112</option>
						<option>192.168.123.113</option>
						<option>192.168.123.114</option>
						<option>192.168.123.115</option>
						<option>192.168.123.116</option>
						<option>192.168.123.117</option>
						<option>192.168.123.118</option>
						<option>192.168.123.119</option>
						<option>192.168.123.120</option>
						<option>192.168.123.121</option>
						<option>192.168.123.122</option>
						<option>192.168.123.123</option>
						<option>192.168.123.124</option>
					</select>
					<div class="btn" style="position:absolute; right:90px; top:2px;"><span class="button small"><a href="#">전체선택</a></span></div>
					<div class="btn" style="position:absolute; right:90px; top:26px;"><span class="button small"><a href="#">선택삭제</a></span></div>
				</div>
				<div class="tLi">등록 아이피 갯수 : 1개 수</div>
			</td>
		</tr>
	</table>
	<h4 class="joinStepTit"><img src="/work/eyaPc/member/images/joinStep2Tit2.gif" alt="정보선택입력" width="688" height="32" /></h4>
	<table cellspacing="0" class="joinForm">
		<tr>
			<th>PC방 홍보</th>
			<td>
				<textarea cols="100" rows="8" style="width:492px; height:71px"></textarea>
			</td>
		</tr>
		<tr>
			<th>PC방 상세위치</th>
			<td>
				<div class="tLi">
					<textarea cols="100" rows="8" style="width:492px; height:71px"></textarea>
				</div>
				
				<div class="tLi">PC방 자랑하기 및 상세 위치 설명은 각각 공백포함 한글 500자, 영문 1000자까지 입력하실 수 있습니다.</div>
			</td>
		</tr>
		<tr>
			<th>담당 영업사원</th>
			<td>
				<input type="text" style="width:128px" />
			</td>
		</tr>
		<tr>
			<th style="background:#f2f2f2">추가 PC방 입력</th>
			<td style="background:#f2f2f2">
				<div class="tLi"><input type="checkbox" id="pcAdd" class="nobor" />
				<label for="pcAdd">동일한 사업자가 다른 사업자번호로 여러 개의 PC방을 운영 할 경우 체크해 주십시오.</label></div>
				<div class="tLi"><span class="textRed">(현재 <strong>이정호님</strong> 이름으로 <strong>1개</strong>의 PC방이 등록되어 있습니다.)</span></div>
			</td>
		</tr>
	</table>
	<div class="btnList"><span class="button orange"><a href="/work/eyaPc/introduction/joinStep3.php">다음단계</a></span> <span class="button"><a href="#">취소</a></span></div>
	<?php include("/free/home/imgwizard1/html/work/eyaPc/_include/_foot.php"); ?>
