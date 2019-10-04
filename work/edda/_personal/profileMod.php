<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="imagetoolbar" content="no" />
<title>포토맛농약 프로필수정</title>
<link rel="icon" href="/work/edda/images/main/fav.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/work/edda/images/main/fav.ico" type="image/x-icon" />
<link rel="icon" href="/work/edda/images/main/fav.gif" type="image/gif" />
<link href="/work/edda/_css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/work/edda/_js/common.js"></script>
<script type="text/javascript" src="/work/edda/_js/default.js"></script>

</head>

<body class="psnBody">

<div class="psnWrap" id="profileMod" style="width:370px;">
	<!--<div class="headTit">
		<div class="tit"><span class="name">포토맛농약</span> 프로필 수정</div>
		<div class="btn"><a href="#"><img src="/work/edda/_personal/images/btnClose.gif" alt="닫기" /></a></div>
	</div> -->
	
	<div class="pWrap" style=" width:350px;">
		<div class="topArea">
			<div class="tit"><span class="name">포토맛농약</span></div>
			<div class="pw">비밀번호 <input  type="text" class="inText w60" /></div>
		</div>
		<div class="left">
			<script type="text/javascript">
				function profilePhoto() {
				  window.open('/_personal/profilePhoto.php','profilePhoto','scrollbars=no,width=390,height=220');
				}
			</script>
			
			<div class="profileIMG">
				<div class="btn"><a href="javascript:profilePhoto();"><img src="/work/edda/_personal/images/btnProMod.gif" alt="" /></a></div>
				<div class="img"><img src="/work/edda/_personal/images/loginPhoto.gif" alt="" /></div>
			</div>
		</div>
		<div class="right" style="width:278px; position:relative;">
			<div class="pBox" style="height:52px;">
			농약은 포도 맛이 일품이죠. 레알 맛 있답니다.<br />
			언제 함께 한잔해요. 본인 소개 입니다.
			</div>
			
			<div class="aRight" style=" position:absolute; right:2px; top:68px;">200/<span style="color:#FFFFFF">18</span></div>
		</div>
	</div>
	
	<div class="pWrap1">
		<script type="text/javascript">
					function proSTab(K) {
						for (i = 0; i <= 3 ; i++){
							document.getElementById('proSTabBox'+i).style.display='none';
						}
						document.getElementById('proSTabBox'+K).style.display='block';
					}
		</script>
	
		<div id="proSTabBox0">
			<ul class="gTab">
				<li class="on"><a href="javascript:proSTab(0)">아이리스</a></li>
				<li><a href="javascript:proSTab(1)">엔젤러브</a></li>
				<li><a href="javascript:proSTab(2)">에다전설</a></li>
				<li><a href="javascript:proSTab(3)">루나플러스</a></li>
			</ul>
			<div class="iBox">
				<select class="w80">
					<option>서버</option>
				</select>
				<select class="w80">
					<option>캐릭터</option>
				</select>
				<input  type="text" class="inText w70" />
				<input  type="text" class="inText w70" />
			</div>
		</div>
	
		<div id="proSTabBox1" style="display:none">
			<ul class="gTab">
				<li><a href="javascript:proSTab(0)">아이리스</a></li>
				<li class="on"><a href="javascript:proSTab(1)">엔젤러브</a></li>
				<li><a href="javascript:proSTab(2)">에다전설</a></li>
				<li><a href="javascript:proSTab(3)">루나플러스</a></li>
			</ul>
			<div class="iBox">
				<select class="w80">
					<option>서버</option>
				</select>
				<select class="w80">
					<option>캐릭터</option>
				</select>
				<input  type="text" class="inText w70" />
				<input  type="text" class="inText w70" />
			</div>
		</div>
	
		<div id="proSTabBox2" style="display:none">
			<ul class="gTab">
				<li><a href="javascript:proSTab(0)">아이리스</a></li>
				<li><a href="javascript:proSTab(1)">엔젤러브</a></li>
				<li class="on"><a href="javascript:proSTab(2)">에다전설</a></li>
				<li><a href="javascript:proSTab(3)">루나플러스</a></li>
			</ul>
			<div class="iBox">
				<select class="w80">
					<option>서버</option>
				</select>
				<select class="w80">
					<option>캐릭터</option>
				</select>
				<input  type="text" class="inText w70" />
				<input  type="text" class="inText w70" />
			</div>
		</div>
		
	
		<div id="proSTabBox3" style="display:none">
			<ul class="gTab">
				<li><a href="javascript:proSTab(0)">아이리스</a></li>
				<li><a href="javascript:proSTab(1)">엔젤러브</a></li>
				<li><a href="javascript:proSTab(2)">에다전설</a></li>
				<li class="on"><a href="javascript:proSTab(3)">루나플러스</a></li>
			</ul>
			<div class="iBox">
				<select class="w80">
					<option>서버</option>
				</select>
				<select class="w80">
					<option>캐릭터</option>
				</select>
				<input  type="text" class="inText w70" />
				<input  type="text" class="inText w70" />
			</div>
		</div>
		
		
		
	</div>
	
	<div class="btnList" style="padding:0 10px 10px; width:350px">
		<div class="left tc1">대표캐릭터 선정을 해 주세요.</div>
		<div class="right aRight"><a href="#"><img src="/work/edda/_personal/images/btnCancel.gif" alt="취소" /></a> <a href="#"><img src="/work/edda/_personal/images/btnApp.gif" alt="적용" /></a></div>
	</div>
</div>
</body>
</html>
