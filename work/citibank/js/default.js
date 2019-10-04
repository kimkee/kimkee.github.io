// JavaScript Document

function optChangePop() {//옵션수정 팝업
  window.open('optChange.php','optChangePop','scrollbars=no,width=415,height=375,left=300,top=300');
}

function viewProductPopup() { //제품상세 팝업
  window.open('viewProductPopup.php','viewProductPopup','scrollbars=no,width=780,height=715,left=100,top=100');
}

function preCalcPopup() { //미리계산 팝업
  window.open('preCalc.php','preCalcPopup','scrollbars=no,width=615,height=502,left=300,top=300');
}

function calendarPop() {//달력 팝업
  window.open('calendarPop.php','calendarPop','scrollbars=no,width=198,height=187,left=300,top=300');
}

function zipcodePop(){ //우편번호찾기 팝업 (가운데 띄우기)

   window.open('zipcodePop.php','zipcodePop','scrollbars=yes,width=480,height=330,left=300,top=300');
}
                    

function viewProductAssWritePopup() { // 상품평 팝업
  window.open('/b2e/jsp/CT/product/viewProductAssPopWrite.php','viewProductPopup','scrollbars=no,width=740,height=780,left=100,top=100');
}


function zzimBoxMsg(){ // 찜 메시지
    alert('찜리스트에 추가되었습니다.');
}


function orderMemoPop(){ //배송주소리스트 팝업 (가운데 띄우기)
   var width = 415; //팝업창 넓이
   var height = 280; //팝업창 높이
   var left = (screen.width - width) / 2 ; //왼쪽 좌표
   var top = (screen.height - height) / 2 ; //왼쪽 좌표
   popWin = window.open('orderMemo.php', 'orderMemoPop', 'width='+width+', height='+height+', left='+left+', top='+top );
   popWin.focus();
}


function adsListSelPop(){ //배송주소선택 팝업 (가운데 띄우기)
   var width = 572; //팝업창 넓이
   var height = 320; //팝업창 높이
   var left = (screen.width - width) / 2 ; //왼쪽 좌표
   var top = (screen.height - height) / 2 ; //왼쪽 좌표
   popWin = window.open('adsListSelPop.php', 'adsListSelPop', 'width='+width+', height='+height+', left='+left+', top='+top );
   popWin.focus();
}
function adsListPop(){ //배송주소리스트 팝업 (가운데 띄우기)
   var width = 572; //팝업창 넓이
   var height = 320; //팝업창 높이
   var left = (screen.width - width) / 2 ; //왼쪽 좌표
   var top = (screen.height - height) / 2 ; //왼쪽 좌표
   popWin = window.open('adsListPop.php', 'adsListPop', 'width='+width+', height='+height+', left='+left+', top='+top );
   popWin.focus();
}
function adsNewPop(){ //새 배송주소팝업 (가운데 띄우기)
   var width = 572; //팝업창 넓이
   var height = 280; //팝업창 높이
   var left = (screen.width - width) / 2 ; //왼쪽 좌표
   var top = (screen.height - height) / 2 ; //왼쪽 좌표
   popWin = window.open('adsNewPop.php', 'adsNewPop', 'width='+width+', height='+height+', left='+left+', top='+top );
   popWin.focus();
}

function prdLayerPopOff() {
	parent.document.getElementById('divQuickTop').style.display='none';
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
//스크롤 탑버튼
function scrollTop(){
	window.scrollTo(0, 0)	;
}

function inputFileOnChange(obj, vluin) {
	var v_console = '';
	v_console = obj.value;
	document.getElementById(vluin).value = v_console;
};


//리플달기 팝업
function popReple() {
  window.open('/community/popReple.asp','popReple','scrollbars=no,width=489,height=235,left=100,top=100');
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
	imgWin.document.write("<body topmargin=0 leftmargin=0 onload='resizeWin();'>");
	imgWin.document.write("<img src='/_js/"+img+"' onclick='self.close()' style=cursor:pointer id='img'>");
	imgWin.document.close();
}


// 플래쉬 삽입 스크립트 (IE ActivX Patch Virson )
function flashWrite(url,w,h,id,bg,vars,win,me){
	var flashStr=
	"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
	"<param name='allowScriptAccess' value='always' />"+
	"<param name='movie' value='/_js/"+url+"' />"+
	"<param name='FlashVars' value='"+vars+"' />"+
	"<param name='wmode' value='"+win+"' />"+
	"<param name='loop' value='true' />"+
	"<param name='allowfullscreen' value='true' />"+
	"<param name='quality' value='high' />"+
	"<param name='bgcolor' value='"+bg+"' />"+
	"<param name='menu' value='"+me+"' />"+
	"<embed src='/_js/"+url+"' FlashVars='"+vars+"' wmode='"+win+"' menu='"+me+"' loop='true' quality='high' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='always'  allowfullscreen='true' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
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
	"<embed src='/_js/"+url+"' width='"+w+"' height='"+h+"' name='"+id+"' showcontrols='"+bar+"' autostart='"+start+"' loop='"+loop+"' align='middle' type='application/x-mplayer2' pluginspage = 'http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/'>"+
	"</embed>"+
	"</object>";

	document.write(movieStr);

}

function setPng24(obj) { // png 파일 패치
    obj.width=obj.height=1;
    obj.className=obj.className.replace(/\bpng24\b/i,'');
    obj.style.filter =
    "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ obj.src +"',sizingMethod='image');"
    obj.src='/work/citibank/images/main/blank.gif';  
    return ''; 
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

// scrolling layer
function initMoving(target, position, topLimit, btmLimit) {
    if (!target)
        return false;

    var obj = target;
    obj.initTop = position;
    obj.topLimit = topLimit;
    obj.bottomLimit = document.documentElement.scrollHeight - btmLimit;

    obj.style.position = "absolute";
    obj.top = obj.initTop;
    obj.left = obj.initLeft;

    if (typeof(window.pageYOffset) == "number") {
        obj.getTop = function() {
            return window.pageYOffset;
        }
    } else if (typeof(document.documentElement.scrollTop) == "number") {
        obj.getTop = function() {
            return document.documentElement.scrollTop;
        }
    } else {
        obj.getTop = function() {
            return 0;
        }
    }

    if (self.innerHeight) {
        obj.getHeight = function() {
            return self.innerHeight;
        }
    } else if(document.documentElement.clientHeight) {
        obj.getHeight = function() {
            return document.documentElement.clientHeight;
        }
    } else {
        obj.getHeight = function() {
            return 500;
        }
    }

    obj.move = setInterval(function() {
        if (obj.initTop > 0) {
            pos = obj.getTop() + obj.initTop;
        } else {
            pos = obj.getTop() + obj.getHeight() + obj.initTop;
            //pos = obj.getTop() + obj.getHeight() / 2 - 15;
        }

        if (pos > obj.bottomLimit)
            pos = obj.bottomLimit;
        if (pos < obj.topLimit)
            pos = obj.topLimit;

        interval = obj.top - pos;
        obj.top = obj.top - interval / 3;
        obj.style.top = obj.top + "px";
    }, 30)
}





//제품미리보기 팝위치
var inter = null;
var tempo = 0;
var QuicknewPos = 0;
window.onscroll = function(){
    if(document.getElementById("divQuickTop") != null){
        if(inter!=null){
            clearInterval(inter);
        }
        var scrollTop = document.documentElement.scrollTop;
       

        if (scrollTop == 0)
        {
            QuicknewPos = 120 + document.body.scrollTop;
        }
        else{
            QuicknewPos = scrollTop + 120;
        }

        if((parseInt((document.getElementById("divQuickTop").style.top).replace("px","")) - QuicknewPos)>0){
            tempo = -100;
        }
        else{
            tempo = 100;
        }
        inter = setInterval("BeQuickTop()",1);
    }
}

function BeQuickTop(){
    var cpos = parseInt((document.getElementById("divQuickTop").style.top).replace("px",""));
    document.getElementById("divQuickTop").style.top = cpos + tempo + "px";
   
    if(tempo>0 &&tempo<100){
        tempo=100;
    }
    else if(tempo<0 &&tempo>-100){
        tempo = -100;
    }
    else{
        tempo = tempo/2;
    }
    if(( tempo>0 && cpos>QuicknewPos) || ( tempo<0 && cpos<QuicknewPos)){
        document.getElementById("divQuickTop").style.top = QuicknewPos + "px";
        clearInterval(inter);
    }
}

function CheckNumber()
{
	if((event.keyCode<48)||(event.keyCode>57))	event.returnValue=false;	 	
}