<?
$skal = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="imagetoolbar" content="no" />
<?php include("_include/title.php"); ?>
<link rel="icon" href="/work/lunaPlus/images/main/fav.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/work/lunaPlus/images/main/fav.ico" type="image/x-icon" />
<link rel="icon" href="/work/lunaPlus/images/main/fav.gif" type="image/gif" />
<link href="/work/lunaPlus/_css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/work/lunaPlus/_js/common.js"></script>
<script type="text/javascript" src="/work/lunaPlus/_js/default.js"></script>
</head>
<body id="indexBody">
<?php include("globalTop/globalTop.php"); ?>
<div id="indexWrap">
	<div class="mainCenter">
		<?php include("_include/mainTop.php"); ?>
		<div class="mainArea">
			<div class="leftArea">
				<?php include("_include/loginBox.php"); ?>
				<?php include("_include/mainBannerLeft.php"); ?>
			</div>
			<div class="centerArea">
				<?php include("_include/scrollNotice.php"); ?>
				
				<?php include("_include/mainNotice.php"); ?>
				
				<?php include("_include/mainDisc.php"); ?>
				
				<?php include("_include/mainItemMall.php"); ?>
				
				<?php include("_include/mainMovie.php"); ?>
				
				<?php include("_include/mainSS.php"); ?>
				
				<?php include("_include/mainBannerRight.php"); ?>

			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php include("_include/footer.php"); ?>
</div>
</body>
</html>
