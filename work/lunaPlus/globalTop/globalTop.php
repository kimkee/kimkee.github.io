
<script type="text/javascript">  
	function faLink(fLinkVar) {
		document.getElementById('familyLinkOff').style.display='none';
		document.getElementById('familyLinkOn').style.display='none';
		document.getElementById('familyLink'+fLinkVar).style.display='block';
	}
	  
	function faBan(fBanVar) {
		faBanOff();
		document.getElementById('faBanner'+fBanVar).style.display='block';
	}
	
	function faBanOff() {
		document.getElementById('faBanner1').style.display='none';
		document.getElementById('faBanner2').style.display='none';
		document.getElementById('faBanner3').style.display='none';
		document.getElementById('faBanner4').style.display='none';
		document.getElementById('faBanner5').style.display='none';
	}
	
</script>
<script type="text/javascript">  
function g_check1(){
	document.all.gamely1.style.display='block';
}
function u_check1(){
	document.all.gamely1.style.display='none';
}
function g_check2(){
	document.all.gamely2.style.display='block';
}
function u_check2(){
	document.all.gamely2.style.display='none';
}
function g_check3(){
	document.all.gamely3.style.display='block';
}
function u_check3(){
	document.all.gamely3.style.display='none';
}

function g_ct_check(){
	if (document.all.apDivct.style.display=='none')
	{
	document.all.apDivct.style.display='block';
	}else if (document.all.apDivct.style.display=='block'){
	document.all.apDivct.style.display='none';
	}
}
function cat_open(dn){
	if (dn == '1')
	{
		window.open('http://www.murimstory.co.kr/index.php?banner_cp=42','','');
	}
}

function web_go(GK){
		document.topbar.GameKey.value = GK;
		if ( GK == "1" )
		{
			document.topbar.action = "http://iris.enpang.com/";
		} else if ( GK == "2" )
		{
			document.topbar.action = "http://angel.enpang.com/";
		} else if ( GK == "3" )
		{
			document.topbar.action = "http://edda.enpang.com/";
		} else if ( GK == "4" )
		{
			document.topbar.action = "http://projecte.enpang.com/";
		} else if ( GK == "5" )
		{
			document.topbar.action = "http://lunaplus.enpang.com/";
		}
		document.topbar.submit();
}
</script>



<div class="globalTopWrap">
	<div class="globalTop">
		<ul class="gamelink">
			<li><a href="javascript:web_go('1');" onmouseover="faBan('2');" onmouseout="faBanOff();"><img src="/work/lunaPlus/images/globalTop/globalTopLink2.gif" alt="아이리스온라인" /></a></li>
			<li><a href="javascript:web_go('3');" onmouseover="faBan('3');" onmouseout="faBanOff();"><img src="/work/lunaPlus/images/globalTop/globalTopLink3.gif" alt="에다전설" /></a></li>
			<li><a href="javascript:web_go('2');" onmouseover="faBan('1');" onmouseout="faBanOff();"><img src="/work/lunaPlus/images/globalTop/globalTopLink1.gif" alt="엔젤러브" /></a></li>
			<li><a href="javascript:web_go('5');" onmouseover="faBan('5');" onmouseout="faBanOff();"><img src="/work/lunaPlus/images/globalTop/globalTopLink5.gif" alt="루나플러스" /></a></li>
		</ul>
		
		<div class="bannerBox" id="faBanner1" style="display:none; left:80px;" onmouseover="faBan('1');" onmouseout="faBanOff();">
			<div class="arrow" style="left:110px;"></div>
			<div class="top"></div>
			<div class="ctn">
				<div class="img"><a href="javascript:web_go('2');"><img src="/work/lunaPlus/images/globalTop/globalTopBan1.jpg" alt="엔젤러브온라인" /></a></div>
				<div class="txt">EPISODE 2 비밀의 섬! OPEN</div>
			</div>
			<div class="bot"></div>
		</div>
		<div class="bannerBox" id="faBanner2" style="display:none" onmouseover="faBan('2');" onmouseout="faBanOff();">
			<div class="arrow" style="left:30px;"></div>
			<div class="top"></div>
			<div class="ctn">
				<div class="img"><a href="javascript:web_go('1');"><img src="/work/lunaPlus/images/globalTop/globalTopBan2.jpg" alt="아이리스온라인" /></a></div>
				<div class="txt">대규모 업데이트 전격 실시!</div>
			</div>
			<div class="bot"></div>
		</div>
		<div class="bannerBox" id="faBanner3" style="display:none; left:5px;" onmouseover="faBan('3');" onmouseout="faBanOff();">
			<div class="arrow" style="left:100px;"></div>
			<div class="top"></div>
			<div class="ctn">
				<div class="img"><a href="javascript:web_go('3');"><img src="/work/lunaPlus/images/globalTop/globalTopBan3.jpg" alt="에다전설" /></a></div>
				<div class="txt">2010년 5월 13일 그랜드 오픈 실시!</div>
			</div>
			<div class="bot"></div>
		</div>
		<div class="bannerBox" id="faBanner4" style="display:none; left:80px;" onmouseover="faBan('4');" onmouseout="faBanOff();">
			<div class="arrow" style="left:170px;"></div>
			<div class="top"></div>
			<div class="ctn">
				<div class="img"><a href="javascript:web_go('4');"><img src="/work/lunaPlus/images/globalTop/globalTopBan4.jpg" alt="프로젝트E" /></a></div>
				<div class="txt">다음 테스트를 기대해 주세요!</div>
			</div>
			<div class="bot"></div>
		</div>
		<div class="bannerBox" id="faBanner5" style="display:none; left:80px;" onmouseover="faBan('5');" onmouseout="faBanOff();">
			<div class="arrow" style="left:170px;"></div>
			<div class="top"></div>
			<div class="ctn">
				<div class="img"><a href="javascript:web_go('5');"><img src="/work/lunaPlus/images/globalTop/globalTopBan5.jpg" alt="루나플러스" /></a></div>
				<div class="txt">다음 테스트를 기대해 주세요!</div>
			</div>
			<div class="bot"></div>
		</div>
		
		
	<div class="family">
		<div class="familyLink" id="familyLinkOff" onmouseover="faLink('On');">
			<div class="sel"><a href="javascript:;" style="color:#ef431a">패밀리게임</a></div>
			</div>
			<div class="familyLink" id="familyLinkOn" onmouseover="faLink('On');" onmouseout="faLink('Off');" style="display:none;">
				<div class="sel"><a href="javascript:;" style="color:#ef431a">패밀리게임</a></div>
				<div class="list">
					<ul>
						<li><a href="http://www.murimstory.co.kr/" target="_blank">무림외전</a></li>
						<li><a href="http://projecte.enpang.com/" target="_top">프로젝트E</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="banner"><a href="http://edda.enpang.com/"><img src="/work/lunaPlus/images/globalTop/banner_22.jpg" alt="에다전설" /></a></div>

		
		
		
	<div class="logInfo" style="width:220px">
		<div class="left"></div>
		<div class="ctn"><a href="javascript:not_login();">로그인</a> | <a href="http://join.enpang.com/member/?gameKey=5">회원가입</a> | 

				<a href="javascript:;" onclick="bill_pop('http://cs.enpang.com/popUpBill/cashAgreeCheck.php');">엔팡캐시</a> 

			| <a href="http://cs.enpang.com?GameKey=5"  style="color:#ef431a;" onmouseover="javascrpt:custPopOn();" onmouseout="javascrpt:custPopOff();">고객센터</a>
		</div>
		<div class="right"></div>
		<script type="text/javascript">
			function custPopOn() {
				document.getElementById('custPop').style.display='block';
			}
			function custPopOff() {
				document.getElementById('custPop').style.display='none';
			}
		</script>
		<form name="top_login" method="post" action="http://cs.enpang.com/etc/login2.php">

		</form>
		<script type="text/javascript">
			function not_login(){
				document.top_login.submit();
			}
		</script>
		<div class="custPopWrap" id="custPop" onmouseover="javascrpt:custPopOn();" onmouseout="javascrpt:custPopOff();" style="display:none;">
			<div class="custPop">
				<div class="arrow"></div>
					<table border="0" class="custList">
						<tr>
							<th><strong><a href="http://cs.enpang.com/faq/faqList.php?cidx=1&amp;GameKey=5">도움말센터</a></strong></th>
							<td>빠르고 명쾌한 답변 제공</td>
						</tr>
						<tr>
							<th><strong><a href="http://cs.enpang.com/consult/consultList.php?cidx=2&amp;GameKey=5">상담센터</a></strong></th>
							<td>1:1 맞춤 답변 </td>
						</tr>
						<tr>
							<th><strong><a href="http://cs.enpang.com/complaint/complaintList.php?cidx=3&amp;GameKey=5">신고센터</a></strong></th>
							<td>불량행위, <span class="txtColor1">버그오류</span> 접수</td>
						</tr>
						<tr>
							<th><strong><a href="http://cs.enpang.com/mypage/myQaList.php?GameKey=5">MY고객센터</a></strong></th>
							<td><span class="txtColor1">개인정보 수정</span> 및 답변</td>
						</tr>
						<tr>
							<th class="noDot"><strong><a href="http://cs.enpang.com/certifi/certifiList.php?cidx=5&amp;GameKey=5">인증센터</a></strong></th>
							<td class="noDot">본인인증, <span class="txtColor1">부모동의</span> 진행</td>
						</tr>
					</table>
			</div>
		</div>
	</div>
		
		
	</div>

</div>

