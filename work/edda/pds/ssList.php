<?
$skal = 3;
?>
<?php include("../_include/_head.php"); ?>		
					
						<div class="headTit">
							<div class="tit"><img src="/work/edda/pds/images/subTit03.gif" alt="스크린샷" /></div>
							<div class="location">Home &gt; 자료실 &gt; 스크린샷</div>
						</div>
						
						<div class="ssImgBig" id="div_img">
							<img id="big_img" src="/work/edda/pds/images/ssImgBig1.jpg" alt="" />
						</div>

						<div class="pssList">
							<div class="btnSsLeft"><a href="javascript:alert('이전 이미지가 없습니다.');"><img src="/work/edda/pds/images/btnSsLeft.gif" alt="이전" /></a></div>
							<div class="listBox">
								<div class="img"><a href="javascript:img_chage('001')"><img src="/work/edda/pds/images/ssImgS001.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('002')"><img src="/work/edda/pds/images/ssImgS002.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('003')"><img src="/work/edda/pds/images/ssImgS003.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('004')"><img src="/work/edda/pds/images/ssImgS004.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('005')"><img src="/work/edda/pds/images/ssImgS005.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('006')"><img src="/work/edda/pds/images/ssImgS006.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('007')"><img src="/work/edda/pds/images/ssImgS007.jpg" alt="" /></a></div>
								<div class="img"><a href="javascript:img_chage('008')"><img src="/work/edda/pds/images/ssImgS008.jpg" alt="" /></a></div>
								<div class="clear"></div>
							</div>
							<div class="btnSsRight"><a href="javascript:alert('다음 이미지가 없습니다.');"><img src="/work/edda/pds/images/btnSsRight.gif" alt="다음" /></a></div>
						</div>
						
<?php include("../_include/_foot.php"); ?>

<script type="text/javascript">
	function img_chage(str){
		document.getElementById('big_img').src="/work/edda/pds/images/ssImgBig"+str+'.jpg'
	}
</script>