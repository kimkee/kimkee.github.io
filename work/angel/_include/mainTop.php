<div id="top" style="position:relative">
	<script type="text/javascript">flashWrite('/work/angel/swf/mainTop/main.swf',940,502,'menu','#ffffff','v1=1','transparent','false')</script>
	<div id="divangelpop" style="position:absolute;right:30px;top:120px;z-index:1000; width:276px; background:#CCCCCC">
	<form name="pop_frm" action="">
		<div><img src="/work/angel/images/main/pop_01.jpg" alt="" width="276" height="293" /></div>
		<div style="background:url(/work/angel/images/main/pop_02.jpg) no-repeat; height:32px; position:relative">
			<input type="checkbox" id="toDone" name="toDone" onclick="algelPopClose();" style="position:absolute; left:10px; top:7px;" />
			<a href="javascript:closeWin();"><img src="/work/angel/images/main/pop_03.jpg" alt="" width="55" height="32" style="float:right" /></a>
		</div>
	</form>
	<script type="text/javascript">
	cookiedata = document.cookie;    
		if ( cookiedata.indexOf("maindiv=done") < 0 ){      
			document.getElementById('divangelpop').style.visibility = "visible"; 
		} 
		else { 
			document.getElementById('divangelpop').style.visibility = "hidden"; 
		} 
	function setCookie( name, value, expiredays ) { 
		var todayDate = new Date(); 
					todayDate.setDate( todayDate.getDate() + expiredays ); 
					document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
			}
	
	function algelPopClose(){
		if ( document.pop_frm.toDone.checked ){
		setCookie( "maindiv", "done" , 1 );
		}
		document.getElementById('divangelpop').style.visibility = "hidden";
	}
	
	function closeWin(){
		document.getElementById('divangelpop').style.visibility = "hidden";
	}
	
	</script>
</div>
</div>
