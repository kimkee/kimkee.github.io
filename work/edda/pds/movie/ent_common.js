// JavaScript Document

//투명PNG파일//
function setPng24(obj) {
    obj.width=obj.height=1;
    obj.className=obj.className.replace(/\bpng24\b/i,'');
    obj.style.filter =
    "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');"
    obj.src='';
    return '';
}
// 이벤트 아이프레임 높이조절
function ifr_Height() {
    var height = document.getElementById("iframe_id").contentWindow.document.body.scrollHeight;
    document.getElementById("iframe_id").height = height;
}
// 회원가입팝업
function popJoin() {
  Pop_member();
}
// 스갤 팝업이미지
function funImgView(imgfile, width, height) {
	var img = window.open("SSimgView.php?imgfile="+imgfile,"","top=100,left=100,width="+width+",height="+height);
	img.focus();
}


function shopOpen(URL){
	var windowW = screen.width
	var widnowH = screen.height
	var clientW = document.body.clientWidth
	var clinetH = document.body.clientHeight
	
	MM_openBrWindow(URL,'WinPop','scrollbars=yes,left=0,width=804,height='+widnowH);
}
//로긴박스배경
function OutputBackImg(input_name){
    input_name.style.backgroundColor = "#ffffff";
        input_name.style.backgroundImage = "";
}
function InputBackImg(input_name,img_name){
    if(input_name.value == ""){
        input_name.style.backgroundImage = "url(" + img_name + ")";
        }
}

// 이미지로 팝업띄우기


function showImgWin(img){
	imgWin=window.open("","","width=100, height=100, resizable=yes");
	imgWin.document.write("<html><head></head>");
	imgWin.document.write("<script>");
	imgWin.document.write("function resizeWin() {");
	imgWin.document.write("var obj = document.getElementById('img');");
	imgWin.document.write("var w = obj.width;");
	imgWin.document.write("var h = obj.height;");
	imgWin.document.write("window.resizeTo(w + 10, h + 50);");
	imgWin.document.write("}");
	imgWin.document.write("</script>");
	imgWin.document.write("<body topmargin=0 leftmargin=0 onLoad='resizeWin();'>");
	imgWin.document.write("<img src='"+img+"' onclick='self.close()' style=cursor:pointer id='img'>");
	imgWin.document.close();
}


// 플래쉬 삽입 스크립트 (IE ActivX Patch Virson )
function flashWrite(url,w,h,id,bg,vars,win,me){
	var flashStr=
	"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
	"<param name='allowScriptAccess' value='always' />"+
	"<param name='movie' value='"+url+"' />"+
	"<param name='FlashVars' value='"+vars+"' />"+
	"<param name='wmode' value='"+win+"' />"+
	"<param name='loop' value='true' />"+
	"<param name='quality' value='high' />"+
	"<param name='bgcolor' value='"+bg+"' />"+
	"<param name='menu' value='"+me+"' />"+
	"<embed src='"+url+"' FlashVars='"+vars+"' wmode='"+win+"' menu='"+me+"' loop='true' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
	"</object>";
	document.write(flashStr);
}

//로긴 inputBG
function OutputBackImg(input_name){
        input_name.style.backgroundImage = "";
}
function InputBackImg(input_name,img_name){
    if(input_name.value == ""){
        input_name.style.backgroundImage = "url(" + img_name + ")";
        }
}


// 동영상 삽입(IE ActivX Patch Virson )
function movieWrite(url,w,h,id,bar,start,loop){

	var movieStr=
	"<object id='MediaPlayer1' classid='clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95' codebase='http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701' type='application/x-oleobject' width='"+w+"' height='"+h+"' id='"+id+"' standby='Loading Microsoft Windows Media Player components...'>"+
	"<param name='Filename' value='"+url+"' />"+
	"<param name='showcontrols' value='"+bar+"' />"+
	"<param name='autostart' value='"+start+"' />"+
	"<param name='loop' value='"+loop+"' />"+
	"<embed src='"+url+"' width='"+w+"' height='"+h+"' name='"+id+"' showcontrols='"+bar+"' autostart='"+start+"' loop='"+loop+"' align='middle' type='application/x-mplayer2' pluginspage = 'http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/'>"+
	"</embed>"+
	"</object>";

	document.write(movieStr);

}

// 따라다니는 상단버튼 스크립트
// var stmnLEFT = 790; 
var stmnGAP1 = 300; // 
var stmnGAP2 = 20; //
var stmnBASE = 500; //
var stmnActivateSpeed = 200; //
var stmnScrollSpeed = 5; //

var stmnTimer;

function ReadCookie(name){
		var label = name + "=";
		var labelLen = label.length;
		var cLen = document.cookie.length;
		var i = 0;
		while (i < cLen) {
			var j = i + labelLen;
			if (document.cookie.substring(i, j) == label) {
				var cEnd = document.cookie.indexOf(";", j);
				if (cEnd == -1) cEnd = document.cookie.length;
				return unescape(document.cookie.substring(j, cEnd));
			}
			i++;
		}
		return "";
	}
function SaveCookie(name, value, expire){
	var eDate = new Date();
	eDate.setDate(eDate.getDate() + expire);
	document.cookie = name + "=" + value + "; expires=" +  eDate.toGMTString()+ "; path=/";
}
function RefreshStaticMenu(){
	var stmnStartPoint, stmnEndPoint, stmnRefreshTimer;
	stmnStartPoint = parseInt(document.getElementById("STATICMENU").style.top, 10);
	stmnEndPoint = document.documentElement.scrollTop + stmnGAP2;
	if (stmnEndPoint < stmnGAP1) stmnEndPoint = stmnGAP1;
	stmnRefreshTimer = stmnActivateSpeed;
	if ( stmnStartPoint != stmnEndPoint ) {
		stmnScrollAmount = Math.ceil( Math.abs( stmnEndPoint - stmnStartPoint ) / 15 );
		document.getElementById("STATICMENU").style.top = parseInt(document.getElementById("STATICMENU").style.top, 10) + ( ( stmnEndPoint<stmnStartPoint ) ? -stmnScrollAmount : stmnScrollAmount );
		stmnRefreshTimer = stmnScrollSpeed;
	}
	stmnTimer = setTimeout("RefreshStaticMenu()", stmnRefreshTimer);
}
function ToggleAnimate(){
	if (ANIMATE.checked) {
		RefreshStaticMenu();
		SaveCookie("ANIMATE", "true", 300);
	}
	else {
		clearTimeout(stmnTimer);
		document.getElementById("STATICMENU").style.top = stmnGAP1;
		SaveCookie("ANIMATE", "false", 300);
	}
}
function InitializeStaticMenu(){
 if (ReadCookie("ANIMATE") == "false") {
		document.getElementById("ANIMATE").checked = false;
		document.getElementById("STATICMENU").style.top = document.body.scrollTop + stmnGAP1;
	}
	else {
		document.getElementById("ANIMATE").checked = true;
		document.getElementById("STATICMENU").style.top = document.body.scrollTop + stmnBASE;
		RefreshStaticMenu();
	}
}



function itViewPop() { //v6.0  아이템샵팝업띠우기
  var i,p,v,obj,args=itViewPop.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}





//롤오버,스왑,접프 등등..///////////////////////////////////////////////////////////////

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}




function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

///////////////////////////////////////////////////////////////////////////////////












// Program JavaScript

var imgzips = new Array("jpg", "gif", "jpeg", "bmp", "png", "pcx", "zip", "rar");
//var imgs = new Array("jpg", "gif", "jpeg", "bmp", "png", "pcx");
var imgs = new Array("jpg", "gif", "bmp");

function isImgZip(str) {
	var ext = str.substring(str.lastIndexOf(".") + 1, str.length);
	for (var i = 0; i < imgzips.length; i++) {
		if (ext.toLowerCase() == imgzips[i])
			return true;
	}
	return false;
}

function isImg(str) {
	var ext = str.substring(str.lastIndexOf(".") + 1, str.length);
	for (var i = 0; i < imgs.length; i++) {
		if (ext.toLowerCase() == imgs[i])
			return true;
	}
	return false;
}

function isTxt(str) {
	var ext = str.substring(str.lastIndexOf(".") + 1, str.length);
	if (ext.toLowerCase() == "txt")
		return true;
	else
		return false;
}

function isSpace(chkValue) {
	if (chkValue.length == 0) {
		return true;
	} else {
		for (i = 0; i < chkValue.length; i++) {
			var chk = chkValue.charAt(i);
			if (chk == " ") {
				return true;
				break;
			}
		}
	}
}

function isTXTEmpty(chkValue) {
	var isEmpty = true;
	if (chkValue.length == 0) {
		return isEmpty;
	} else {
		for (i = 0; i < chkValue.length; i++) {
			var chk = chkValue.charAt(i);
			if (chk != " ")
				isEmpty = false;
		}
	}
	return isEmpty;
}

function isCHKEmpty(chkEntity) {
	var isEmpty = true;
	for (i = 0; i < chkEntity.length; i++) {
		if (chkEntity(i).checked)
			isEmpty = false;
	}
	return isEmpty;
}

function isHan(chkValue) {
	schar = new Array('!','@','#','$','%','^','&','*','(',')','-','=','+','\\','|','/',',','?','<','>','.','{','}','[',']','`','~');
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		for (j = 0; j < schar.length; j++) {
			if (schar[j] == c)
				return false;
		}
		if(!((c < '0' || c > '9')&&(c < 'a' || c > 'z')&&(c < 'A' || c > 'Z')))
			return false;
	}
	return true;
}

function isHanAlpha(chkValue) {
	schar = new Array('!','@','#','$','%','^','&','*','(',')','-','=','+','\\','|','/',',','?','<','>','.','{','}','[',']','`','~');
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!isNaN(c))		return false;

		for (j = 0; j < schar.length; j++) {
			if (schar[j] == c)		return false;
		}
	}
	return true;
}

function isAlphaNumber(chkValue) {
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!((c >= '0' && c <= '9') || (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z')))
		   return false;
	}
	return true;
}

function isAlphaNumUnder(chkValue) {
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!((c >= '0' && c <= '9') || (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || c == '_'))
		   return false;
	}
	return true;
}

function isAlphaNumUnderDot(chkValue) {
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!((c >= '0' && c <= '9') || (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || c == '_' || c == '.'))
		   return false;
	}
	return true;
}

function isAlphaUnder(chkValue) {
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || c == '_'))
		   return false;
	}
	return true;
}

function isAlpha(chkValue) {
	for(i = 0; i < chkValue.length; i++) {
		c = chkValue.charAt(i);
		if(!((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z')))
		   return false;
	}
	return true;
}

function isPassword(chkValue) {
	if (isAlpha(chkValue)) {
		return false;
	} else if (!isNaN(chkValue)) {
		return false;
	}

	return true;
}

function isEmail(chkValue) {
	var at = chkValue.indexOf("@");
	var dot = chkValue.indexOf(".");

	if (at < 2)
		return false;
	else {
		for(i = 0; i < chkValue.length; i++) {
			c = chkValue.charAt(i);
			if(!((!isNaN(c)) || (c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z') || c == '_' || c == '-' || c == '@' || c == '.'))
			   return false;
		}
	}
	return true;
}

function txtByte(chkValue) {
	var nbytes = 0;
	for (i=0; i<chkValue.length; i++) {
		var ch = chkValue.charAt(i);
		if(escape(ch).length > 4)					nbytes += 2;
		else if (ch == '\n') {
			if (chkValue.charAt(i-1) != '\r')		nbytes += 1;
		} else if (ch == '<' || ch == '>')			nbytes += 4;
		else										nbytes += 1;
	}
	return nbytes;
}

function isLength(str, len) {
	cnt = txtByte(str);
	if (cnt <= len) {
		return false;
	} else {
		return true;
	}
}

function ampmchange(value, selector) {
	if(value == "am") {
		selector.options[0].text = "00";
	} else {
		selector.options[0].text = "12";
	}
}

function is_yun(yr) {
	if(((yr%4) == 0 && (yr%100) != 0) || (yr%400) == 0)
		return 1;
	else
		return 0;
}

function resetday(yr,mon,selector) {
	if (yr != "default" && mon != "default") {
		monthdays = new Array(12);
		monthdays[0] = 31;
		if(is_yun(eval(yr)))	monthdays[1] = 29;
		else					monthdays[1] = 28;
		monthdays[2] = 31;
		monthdays[3] = 30;
		monthdays[4] = 31;
		monthdays[5] = 30;
		monthdays[6] = 31;
		monthdays[7] = 31;
		monthdays[8] = 30;
		monthdays[9] = 31;
		monthdays[10] = 30;
		monthdays[11] = 31;

		var i=0;
		var	del_idx;
		if(selector.options.length < monthdays[eval(mon)-1]) {
			var NewOpt = Array(3);
			while(selector.options.length < monthdays[eval(mon)-1]) {
				NewOpt[i] = document.createElement('OPTION');
				selector.options.add(NewOpt[i]);
				i++;
			}
		} else if(selector.options.length > monthdays[eval(mon)-1]) {
			while(selector.options.length > monthdays[eval(mon)-1]) {
				del_idx = selector.options.length - 1;
				selector.options.remove(del_idx);
			}
		}
		var	dvalue;
		for(i=1; i<=monthdays[eval(mon)-1]; i++) {
			if(i<10)	dvalue = "0"+i;
			else		dvalue = i;
			selector.options[i-1].value = dvalue;
			selector.options[i-1].text = dvalue;
		}
	}
}


/**
 * SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 *
 * SWFObject is (c) 2007 Geoff Stearns and is released under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 */
if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;

//////////////

