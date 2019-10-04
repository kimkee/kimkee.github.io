<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>엔젤러브온라인</title>
<link rel="icon" href="/work/angel/images/main/fav.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/work/angel/images/main/fav.ico" type="image/x-icon" />
<link rel="icon" href="/work/angel/images/main/fav.gif" type="image/gif" />
<link href="/work/angel/_css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"	 src="/work/angel/_js/common.js"></script>
<script language="javascript" type="text/javascript">
function nTabA(num) { // 엔젤러브 새소색 탭메뉴 스크립트
    var nTabAs = "nTabA"+num;
    for(i=1;i<5;i++){
        var nTabAnum = "nTabA"+i;
        document.getElementById(nTabAnum).style.display="none";
    }
    document.getElementById(nTabAs).style.display="block";
}
window.onload = function(){ // 랭킹 탭메뉴 스크립트
	tab('tab1','tab_content1',0);
}
function tab(tab,tab_content,a) {
	var tab = document.getElementById(tab).getElementsByTagName('a');
	var tab_content = document.getElementById(tab_content).getElementsByTagName('div');
	for(i = 0 ; i < tab.length ; ++i){
		tab[i].parentNode.className = "";
	}
	for(i = 0 ; i < tab_content.length ; ++i){
		tab_content[i].style.display = "none";
	}
	tab[a].parentNode.className = "on";
	tab_content[a].style.display = "block";
}
</script>
</head>
<body>
<?php include("_include/globalTop.php"); ?>	
<div id="indexWrap">
	<div id="indexBg">
		<div id="index">
			<?php include("_include/mainTop.php"); ?>	
			<div id="center">
				<div class="left">
					<div class="loginTop"></div>
					<?php include("_include/loginBox.php"); ?>	
					<?php include("_include/bannerMain.php"); ?>	
				</div>
				<div class="ctn">
					<?php include("_include/mainFlashBanner.php"); ?>	
					<?php include("_include/mainNotice.php"); ?>	
					<?php include("_include/mainSS.php"); ?>	
				</div>
				<div class="right">
					<?php include("_include/mainFlashMov.php"); ?>	
					<?php include("_include/mainTopic.php"); ?>	
					<?php include("_include/mainRanking.php"); ?>	
					<?php include("_include/mainGamemeca.php"); ?>	
				</div>
				<div class="clear"></div>
			</div>
			<?php include("_include/footer.php"); ?>	
		</div>
	</div>
</div>
</body>
</html>
