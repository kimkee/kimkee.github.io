<script type="text/javascript">
function SizeCal(img,val){
	var Width = img.width;
	var Height = img.height;
	var PerHeight = (54/Height)*100;

	if(Width >= 120){
		Width = (Width/100)*PerHeight;
	}
	if(Height >= 54){
		Height = 54;
	}

	document.getElementById("imgarea"+val).style.width = Width+"px";
	document.getElementById("imgarea"+val).style.height = Height+"px";
}
</script>

<div class="mainSS">
	<h4 class="head"><a href="/work/edda/community/userSSList.php"><img src="/work/edda/images/main/mainSStit.gif" alt="스크린샷" /></a></h4>
	<div class="box">
		<div class="img"><a href="/work/edda/community/userSSView.php"><img src="/work/edda/images/main/mainSSImg1.jpg" alt="스크린샷"  /></a> <!-- onload="SizeCal(this,<%=i%>);"  --></div>
		<div class="tit"><a href="/work/edda/community/userSSView.php">오늘 대박났어요~!</a></div>
		<div class="name">(김선생)(에다전설123)</div>
	</div>
	<div class="box">
		<div class="img"><a href="#"><img src="/work/edda/images/main/mainSSImg2.jpg" alt="스크린샷" width="120" height="54" /></a></div>
		<div class="tit"><a href="#">오늘 대박났어요~!</a></div>
		<div class="name">(에다전설123)</div>
	</div>
	<div class="box">
		<div class="img"><a href="#"><img src="/work/edda/images/main/mainSSImg3.jpg" alt="스크린샷" width="120" height="54" /></a></div>
		<div class="tit"><a href="#">오늘 대박났어요~!</a></div>
		<div class="name">(에다전설123)</div>
	</div>
</div>
