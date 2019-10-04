
<script type="text/javascript">
function prdLayerPopOn(itemCode, sect_id) {
 	document.getElementById('divQuickTop').style.display='block';
	
	
	var topPost = document.documentElement.scrollTop + 50;
	document.getElementById('divQuickTop').style.top = topPost +"px";
	
	
	window.onscroll = function(){
	document.getElementById('divQuickTop').style.display='none';
	}
}	

</script>
<div class="quicktop" id="divQuickTop" style="top:200px;">
	<iframe src="/work/citibank/product/prdIframe.php" frameborder="0" scrolling="no" width="760" height="465"></iframe>   
</div>