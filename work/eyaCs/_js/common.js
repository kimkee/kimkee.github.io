
// 아이디첵크팝업
function idPop() { 
  window.open('/member/idCheck1.php','idPop','scrollbars=no,width=480,height=330');
}
// 우편번호찾기팝업
function zipPop() {
  window.open('/member/zipSch.php','zipSch','scrollbars=no,width=480,height=330');
}

// 아이디찾기
function lostIdPop() {
  window.open('/member/lostId1.php','lostId','scrollbars=no,width=480,height=330');
}








// 이벤트 아이프레임 높이조절
function ifr_Height() {
    var height = document.getElementById("iframe_id").contentWindow.document.body.scrollHeight;
    document.getElementById("iframe_id").height = height;
}
// 아이디첵크플레이어팝업
function popAodPlayer() {
  window.open('/news/aodPlayer.jsp','aodPlayer','scrollbars=no,width=500,height=350,left=100,top=100');
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
		input_name.style.borderColor = "#f52e06";
}
function InputBackImg(input_name,img_name){
   // if(input_name.value == ""){
        input_name.style.backgroundImage = "url(" + img_name + ")";
		input_name.style.borderColor = "#dcdcdc";
     //   }
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

function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
