//초보자팝업
function bigPopup(popName) {
  window.open(popName,'bigPopup','scrollbars=no,width=800,height=600,left=100,top=100');
}
// 찾아보기 버튼 스크립트
function fileIpt_con(){ 
var f_ipt = document.getElementById("ferJoin").getElementsByTagName("input"); 
var v_console = document.getElementById('iptValue');

	for(i = 0; i < f_ipt.length; i++) { 
		if(f_ipt[i].type=="file"){
			f_ipt[i].style.opacity = (0/100);
			f_ipt[i].style.MozOpacity = (0/100);
			f_ipt[i].style.KhtmlOpacity = (0/100);
			f_ipt[i].style.filter = "alpha(opacity="+ 0 +")";
			f_ipt[i].style.marginTop = '-3px';
			f_ipt[i].style.marginLeft = '-5px';
			f_ipt[i].style.fontSize = '12px';
			f_ipt[i].style.width = '70px';
			f_ipt[i].style.height = '26px';
		}
	}
	try { document.execCommand('BackgroundImageCache', false, true); }catch(e){}
}

function inputFileOnChange(obj, vluin) {
	var v_console = '';
	v_console = obj.value;
	document.getElementById(vluin).value = v_console;
};

//window.onload = function() { 
//	fileIpt_con(); 
//}
// 찾아보기 버튼 스크립트					


//리플달기 팝업
function popReple() {
  window.open('/community/popReple.php','popReple','scrollbars=no,width=489,height=235,left=100,top=100');
}

//리플달기 팝업
function popFanpageReg() {
  window.open('/community/popFanpageReg.php','popFanpageReg','scrollbars=no,width=569,height=492,left=100,top=100');
}


// 이벤트 아이프레임 높이조절
function ifr_Height() {
    var height = document.getElementById("iframe_id").contentWindow.document.body.scrollHeight;
    document.getElementById("iframe_id").height = height;
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
	"<param name='allowfullscreen' value='true' />"+
	"<param name='quality' value='high' />"+
	"<param name='bgcolor' value='"+bg+"' />"+
	"<param name='menu' value='"+me+"' />"+
	"<embed src='"+url+"' FlashVars='"+vars+"' wmode='"+win+"' menu='"+me+"' loop='true' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='always'  allowfullscreen='true' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
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

function setPng24(obj) { // png 파일 패치
    obj.width=obj.height=1;
    obj.className=obj.className.replace(/\bpng24\b/i,'');
    obj.style.filter =
    "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');"
    obj.src='/images/main/blank.gif';  
    return ''; 
}


//로그인창으로 이동
function not_login(purl){
	var pre_go_url = "<form name='not_login' method='post' action='/etc/login.php'><input type='hidden' name='pre_url' value='"+purl+"'></form><script>document.not_login.submit();</script>";
	document.write(pre_go_url);
}
function logout(){
	location.href='/_include/logout.php';
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

function MM_popupMsg(msg) { //v1.0
  alert(msg);
}






/////////////////

        var stmnLEFT = 0; // 스크롤메뉴의 좌측 위치
        var stmnGAP1 = 3; // 페이지 헤더부분의 여백 (이보다 위로는 올라가지 않음)
        var stmnGAP2 = -600; // 스크롤시 브라우저 상단과 약간 띄움. 필요없으면 0으로 세팅
        var stmnBASE = 80; // 스크롤메뉴 초기 시작위치 (아무렇게나 해도 상관은 없지만 stmnGAP1과 약간 차이를 주는게 보기 좋음)
        var stmnActivateSpeed = 200; // 움직임을 감지하는 속도 (숫자가 클수록 늦게 알아차림)
        var stmnScrollSpeed = 10; // 스크롤되는 속도 (클수록 늦게 움직임)

        var stmnTimer;


        function ReadCookie(name)
        {
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


        function SaveCookie(name, value, expire)
        {
                var eDate = new Date();
                eDate.setDate(eDate.getDate() + expire);
                document.cookie = name + "=" + value + "; expires=" +  eDate.toGMTString()+ "; path=/";
        }


        function RefreshStaticMenu()
        {
                var stmnStartPoint, stmnEndPoint, stmnRefreshTimer;

                stmnStartPoint = parseInt(STATICMENU.style.top, 10);
                stmnEndPoint = document.documentElement.scrollTop + stmnGAP2;
                if (stmnEndPoint < stmnGAP1) stmnEndPoint = stmnGAP1;

                stmnRefreshTimer = stmnActivateSpeed;

                if ( stmnStartPoint != stmnEndPoint ) {
                        stmnScrollAmount = Math.ceil( Math.abs( stmnEndPoint - stmnStartPoint ) / 15 );
                        STATICMENU.style.top = parseInt(STATICMENU.style.top, 10) + ( ( stmnEndPoint<stmnStartPoint ) ? -stmnScrollAmount : stmnScrollAmount );
                        stmnRefreshTimer = stmnScrollSpeed;
                }

                stmnTimer = setTimeout ("RefreshStaticMenu();", stmnRefreshTimer);
        }


        function ToggleAnimate()
        {
                if (ANIMATE.checked) {
                        RefreshStaticMenu();
                        SaveCookie("ANIMATE", "true", 300);
                }
                else {
                        clearTimeout(stmnTimer);
                        STATICMENU.style.top = stmnGAP1;
                        SaveCookie("ANIMATE", "false", 300);
                }
        }


        function InitializeStaticMenu()
        {
                STATICMENU.style.left = stmnLEFT;

					 if (ReadCookie("ANIMATE") == "false") {
                        ANIMATE.checked = false;
                        STATICMENU.style.top = document.documentElement.scrollTop + stmnGAP1;
                }
                else {
                        ANIMATE.checked = true;
                        STATICMENU.style.top = document.documentElement.scrollTop + stmnBASE;
                        RefreshStaticMenu();
                }
        }


//////////////// 위아래이동 스크립트

function totopbottom() {
	if (document.documentElement.scrollTop == 0) {
		window.scrollTo(0,document.documentElement.scrollHeight);
	} else {
		window.scrollTo(0,0);
	}
}


function topbottom() {
	document.documentElement.ondblclick = totopbottom;

}
///////////////

function isNull(s){
	if( s == null ) return true;
	var result = s.replace(/(^\s*)|(\s*$)/g,'');
	if (result)
	{
		return false;
	}else{
		return true;
	}
}
 function actFilter(con,actfilter) {
 con.style.filter=actfilter;
 
}
function IDPASSPOP(){
   var PageUrl = "http://cs.enpang.com/popUp/idFind1.php";
   window.open(PageUrl,'engeldown','scrollbars=no,resizable=no,copyhistory=no,width=413,height=356,left=0,top=0');
}

//설문조사 
function poll0304(){
   var PageUrl = "/event/2010/0226/index.php";
   window.open(PageUrl,'engeldown','scrollbars=no,resizable=no,copyhistory=no,width=500,height=800,left=0,top=0');
}
function poll0310(){
   var PageUrl = "/event/2010/0310/index.php";
   window.open(PageUrl,'engeldown','scrollbars=yes,resizable=no,copyhistory=no,width=538,height=800,left=0,top=0');
}

function EWJ1(){
   var PageUrl = "/event/2010/0318/index.php";
   window.open(PageUrl,'engeldown','scrollbars=yes,resizable=no,copyhistory=no,width=660,height=700,left=0,top=0');
}
function EWJ2(){
   var PageUrl = "/event/2010/0318/index2.php";
   window.open(PageUrl,'engeldown','scrollbars=yes,resizable=no,copyhistory=no,width=660,height=700,left=0,top=0');
}
function EWJ(n){
   if (n == 3)
   {   
	   var PageUrl = "/event/2010/0318/out1.php";
   }else if (n == 4)
   {   
	   var PageUrl = "/event/2010/0318/index3.php";
   }else if (n == 5)
   {   
	   var PageUrl = "/event/2010/0318/index4.php";
   }

   window.open(PageUrl,'engeldown','scrollbars=yes,resizable=no,copyhistory=no,width=660,height=700,left=0,top=0');
}
