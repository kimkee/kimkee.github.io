// 모바일 체크시 
/*
var agent = navigator.userAgent;
if (agent.match(/iPhone/) || agent.match(/iPad/) || agent.match(/Android/) || agent.match(/Windows Phone/)) {
	location.href = "http://m.hmall.com";
}
*/
/* JWI 모바일 체크 해제
var mobileKeyWords = new Array('iPhone', 'iPod', 'iPad', 'BlackBerry', 'Windows Phone', 'Android', 'Mobi', 'Mobile', 'SymbOS', 'SymbianOS', 'Mini', 'Bada', 'webOS');
for (var word in mobileKeyWords){
    if (navigator.userAgent.match(mobileKeyWords[word]) != null){
		location.href = "http://m.hmall.com";
        break;
    }
}


var writeCode;
writeCode = window.navigator.appName;

var EHReferCode = getCookie("EHReferCode");
var EHCustGroup = getCookie("EHCustGroup");
var EHB2EData  = getCookie("EHB2EData");
var domain      = document.domain;

var HM_DEFAULT_TITLE = "현대백화점 Hmall";
var HM_TITLE;
var HM_BUFF = "";
*/

// 복지몰 임시 헤더 - 1101015 <-> utils.js
/*
if(EHReferCode == "712") {
	if(document.URL.indexOf("csLoginF.do") < 0){
		document.write('<LINK REL="stylesheet" HREF="http://bokjimall.net/skin_combi1/css/style_asp.css" TYPE="TEXT/CSS">');
		document.write('<script language="javascript" src="http://bokjimall.net/skin_combi1/css/aspjs.js"></script>');
		document.write('<script language="javascript" src="http://bokjimall.net/skin_combi1/asp_js.js"></script>');
	}
}
*/
var EHB2EData  = getCookie("EHB2EData");

if(EHB2EData != null){
 	var TmpB2E		= EHB2EData.split("|");
 	var B2ESave	= TmpB2E[3];
	var targetB2E = ["1000602619","1000620001","1000620085","1000630001","1000650001","1000740001","1000900001","2000000604","2000001458","2100001664","2100002682","2100002880","2100002930","2100002931","2100003891","2100004423","2100004749","2100026791"]
	if(document.URL.indexOf("Home.html") >= 0){
		for(i=0; i<targetB2E.length; i++){
			if(targetB2E[i] == B2ESave){
				if(getCookie("cust_pop") != "checked"){
					window.open('http://www.hmall.com/static/html/popup/CustNameZZ.html','Cust_POP','width=450, height=467, top=150 , left=290 ,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no');
				}
			}
		}
	}
}

// 배경 깜빡임 해결
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}

if(document.domain.indexOf("dev") >= 0){
	var HM_TARGET_DOMAIN 	= "http://dev2.hmall.com";
	var HM_IMAGE_DOMAIN 	= "http://imagedev.hmall.com";
	var HM_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else if(document.domain.indexOf("stg") >= 0){
	var HM_TARGET_DOMAIN 	= "http://stg2.hmall.com";
	var HM_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var HM_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else if(document.domain.indexOf("localhost") >= 0){		// JEON_TEMP local에서 테스트위해서 임시로...
	var HM_TARGET_DOMAIN 	= "http://dev2.hmall.com";
	var HM_IMAGE_DOMAIN 	= "http://imagedev.hmall.com";
	var HM_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else {
	var HM_TARGET_DOMAIN 	= "http://www.hmall.com";
	var HM_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var HM_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
}

var HM_MAIL_DOMAIN 	= "http://webmail2.hmall.com";
var HM_IMAGE_IT_ROOT= HM_IMAGE_DOMAIN  + "/static/image";	// 상품이미지
var HM_IMAGE_ROOT 	= HM_IMAGE_DOMAIN  + "/static/2008img";
var HM_IMAGE_JS_ROOT= HM_IMAGE_DOMAIN  + "/static/2008web/js";
var HM_IMAGE_ORG_JS_ROOT= HM_IMAGE_DOMAIN  + "/static/js";
var HM_JS_ROOT 		= HM_TARGET_DOMAIN + "/static/2008web/js";
var HM_HTML_ROOT 	= HM_TARGET_DOMAIN + "/static/2008web/html";
var HM_XML_ROOT 	= HM_TARGET_DOMAIN + "/static/2008web/xml";
var HM_CONTEXT_ROOT	= HM_TARGET_DOMAIN + "/front";

if(document.domain.indexOf("dev") >= 0){
	var KB_TARGET_DOMAIN 	= "http://dev.kbpointreemall.co.kr/B2E";
//	var KB_IMAGE_DOMAIN 	= "http://imagedev.hmall.com";
	var KB_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var KB_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else if(document.domain.indexOf("b2estg") >= 0){
	var KB_TARGET_DOMAIN 	= "http://b2estg.kbpointreemall.com/B2E";
	var KB_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var KB_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else if(document.domain.indexOf("local") >= 0){		// JEON_TEMP local에서 테스트위해서 임시로...
//	var KB_TARGET_DOMAIN 	= "http://local.hmall.com:8080";

	var KB_TARGET_DOMAIN 	= "http://local.hmall.com";
	//var KB_IMAGE_DOMAIN 	= "http://imagedev.hmall.com";
	var KB_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var KB_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
} else {
	var KB_TARGET_DOMAIN 	= "http://com.kbpointreemall.com/B2E";
	var KB_IMAGE_DOMAIN 	= "http://image.hmall.com";
	var KB_HOME_PAGE 		= HM_TARGET_DOMAIN + "";
}

var KB_IMAGE_IT_ROOT= KB_IMAGE_DOMAIN  + "/static/image";	// 상품이미지

// Skyscraper Modify 20100311
var none_space = 0;

// 20100325 Skyscraper 초기 위치용 스타일시트 ( common.css에서 옮김 )
var default_top;	// gnb 상단 여백 조절
var default_old = 0;	// Top.js 상단 여백 조절
var default_hiddenbanner = 10;	// Top.js 숨김 배너용

CSS_BUFF = "";
CSS_BUFF += "<style type='text/css'>";
CSS_BUFF += "#skyscraper { position:fixed; _position:absolute; padding:0 10px 10px 10px; top:"+default_top+"px; _top:expression(eval(document.body.scrollTop)+ default_top - default_old); z-index:88888; }";
//CSS_BUFF += ".skyscraper_test { position:fixed; position:expression(\"absolute\"); padding:0 10px 10px 10px; top:expression(eval(document.body.scrollTop)+ default_top - default_old); z-index:88888; }";
CSS_BUFF += "</style>";
document.write(CSS_BUFF);

function RefreshStaticMenu(sub){
	var mode = document.compatMode;
	var obj = document.getElementById('skyscraper');

	if( sub == 'category_01' || sub == 'category_02' || sub == 'store_02' || sub == 'template_01' ||
		sub == 'lexury_store' || sub == 'juicy_store' || sub == 'main' || sub == 'old'){
		(document.body.scrollTop != null) ? default_top = 110 : obj.style.top = 110;
	} else if(sub == 'search_tab'){	// 검색
		(document.body.scrollTop != null) ? default_top = 175 : obj.style.top = 175;
	} else if(sub == 'tv_01' || sub == 'store_01'){	// 현대홈쇼핑 & 현대백화점
		(document.body.scrollTop != null) ? default_top = 118 : obj.style.top = 118;
	} else {
		(document.body.scrollTop != null) ? default_top = 110 : obj.style.top = 110;
	}

	// 네이버 레퍼코드 체크 후 Skyscraper 상단 여백 조절
	if(EHReferCookieValue == "178"){	//교원
		(document.body.scrollTop != null) ? default_top = 120 : obj.style.top = 120;
	}
	
	// 조인스닷컴 - 20100907 & 신한카드 올댓쇼핑 - 20100903 & ABOUT
	if(EHReferCookieValue == "818" || EHReferCookieValue == "829" || EHReferCookieValue == "535" || EHReferCookieValue == "255") {
		(document.body.scrollTop != null) ? default_top = 174 : obj.style.top = 174;
	}
	
	// 현대 & 기아 & enterspartner 체크
	if(EHB2EData != null){
	 	var TmpB2E		= EHB2EData.split("|");
	 	var B2ESave	= TmpB2E[3];
		if(B2ESave == 1000620001 || B2ESave == 1000650001){
			(document.body.scrollTop != null) ? default_top = 142 : obj.style.top = 142;
		} else if(B2ESave == 1000090002){
			(document.body.scrollTop != null) ? default_top = 164 : obj.style.top = 164;	// enterspartner
		}
	}
	
	// 스크롤 UP/DOWN시 Skyscraper 위치 이동
	onscroll = function() {
		if(obj){
			if ( document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 ) {
				if(mode == 'CSS1Compat'){
					if(navigator.appName.indexOf("Microsoft") > -1) {
						obj.style.top = 0;
					} else {
						obj.style.top = '0px';
					}
				} else if(mode == 'BackCompat'){
					if(navigator.appName.indexOf("Microsoft") > -1) {
						default_top = 0;
					} else {
						default_top = '0px';
					}
				}
			} else if ( document.body.scrollTop < 130 || document.documentElement.scrollTop < 130 ) {
				if(sub == 'tv_01' || sub == 'store_01'){	// 현대홈쇼핑 & 현대백화점
					if(mode == 'CSS1Compat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							obj.style.top = 118;
						} else {	// Safari, Chrome, Firefox
							obj.style.top = '118px';
						}
					} else if(mode == 'BackCompat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							default_top = 118;
						} else {	// Safari, Chrome, Firefox
							default_top = '118px';
						}
					}
				} else if(sub == 'search_tab'){	// 검색
					if(mode == 'CSS1Compat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							obj.style.top = 175;
						} else {	// Safari, Chrome, Firefox
							obj.style.top = '175px';
						}
					} else if(mode == 'BackCompat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							default_top = 175;
						} else {	// Safari, Chrome, Firefox
							default_top = '175px';
						}
					}
				} else {
					if(mode == 'CSS1Compat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							obj.style.top = 110;
						} else {	// Safari, Chrome, Firefox
							obj.style.top = '110px';
						}
					} else if(mode == 'BackCompat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							default_top = 110;
						} else {	// Safari, Chrome, Firefox
							default_top = '110px';
						}
					}
				}
		
				// 조인스닷컴 - 20100907 & 신한카드 올댓쇼핑 - 20100903 & ABOUT
				if(EHReferCookieValue == "818" || EHReferCookieValue == "829" || EHReferCookieValue == "535" || EHReferCookieValue == "255") {
					if(mode == 'CSS1Compat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							obj.style.top = 174;
						} else {	// Safari, Chrome, Firefox
							obj.style.top = '174px';
						}
					} else if(mode == 'BackCompat'){
						if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
							default_top = 174;
						} else {	// Safari, Chrome, Firefox
							default_top = '174px';
						}
					}
				}
		
				// 현대 & 기아 & enterspartner 계열사 접근별 여백 처리
				if(EHB2EData != null){
				 	var TmpB2E		= EHB2EData.split("|");
				 	var B2ESave	= TmpB2E[3];
					if(B2ESave == 1000620001 || B2ESave == 1000650001){
						if(mode == 'CSS1Compat'){
							if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
								obj.style.top = 142;
							} else {	// Safari, Chrome, Firefox
								obj.style.top = '142px';
							}
						} else if(mode == 'BackCompat'){
							if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
								default_top = 142;
							} else {	// Safari, Chrome, Firefox
								default_top = '142px';
							}
						}
					} else if(B2ESave == 1000090002){
						if(mode == 'CSS1Compat'){
							if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
								obj.style.top = 164;
							} else {	// Safari, Chrome, Firefox
								obj.style.top = '164px';
							}
						} else if(mode == 'BackCompat'){
							if(navigator.appName.indexOf("Microsoft") > -1) {	// IE
								default_top = 164;
							} else {	// Safari, Chrome, Firefox
								default_top = '164px';
							}
						}
					}
				}
			}
		}
	}
}

function InitializeStaticMenu(sub){
	RefreshStaticMenu(sub);
	checkCartMenu();
}

// Top.js
function InitializeStaticMenu_old(sub){
	RefreshStaticMenu(sub);
}

function InitializeStaticMenu_stop(sub){
	skyscraper.style.top = document.body.scrollTop + stmnBASE;
	RefreshStaticMenu(sub,stmnStop);
}
// Skyscraper Modify 20100311

function sview_div(num){
	try
	{
		if( num == 2 )
		{
			rec_contents.style.display='none';
			tod_contents.style.display='block';
		}
		else
		{
			rec_contents.style.display='block';
			tod_contents.style.display='none';
		}
	}
	catch (e)
	{
	}
	
}

function sview_div1(){

		rec_contents.style.display='none';
		tod_contents.style.display='none';
		button_rec.src=HM_IMAGE_ROOT + '/common/skyscraper/rec.gif';
		tod.style.backgroundImage='url(' + HM_IMAGE_ROOT + '/common/skyscraper/tod.gif)';
		tod_num.style.color='#777777';
}

/*text 광고 보기*/
function view_div(over_img,img_name,div_name){

	if(div_name.style.display=='block')
	{
		div_name.style.display='none';
		over_img.src=HM_IMAGE_ROOT + "/common/layout/"+img_name+".gif";
	}
	else
	{
		div_name.style.display='block';
		over_img.src=HM_IMAGE_ROOT + "/common/layout/"+img_name+"_on.gif";
	}
}

//카테고리에서 카테고리 영역 벗어나면 안보이게 함.
function categoryNoDisplay(over_img,img_name,div_name){
                div_name.style.display='none';
                over_img.src=HM_IMAGE_ROOT + "/common/layout/"+img_name+".gif";
}


/*이미지 롤오버*/
function img_over(img1,name,dir,over){

	if(over=='over')
	{
		img1.src=dir+name+'_on.gif';
	}
	else if(over=='off')
	{
		img1.src=dir+name+'_off.gif';
	}
	else
	{
		img1.src=dir+name+'.gif';
	}
}

/*이미지 롤오버*/
function img_over1(img1,name,dir,over){

	if(over=='over')
	{
		img1.src=dir+name+'on.gif';
	}
	else if(over=='off')
	{
		img1.src=dir+name+'.gif';
	}
	else
	{
		img1.src=dir+name+'.gif';
	}
}

/*플래시*/
/* 20080909 FF & Crom 브라우저 플래시 투명 처리 */
function flash(flashfilename, flashwidth, flashheight, flashvars)
{
	document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ flashwidth +'" height="'+ flashheight +'">');
	document.write('<param name="movie" value="'+ flashfilename +'">');
	document.write('<param name="flashVars" value="'+ flashvars +'">');
	document.write('<param name="wmode" value="transparent">');
	document.write('<param name="allowScriptAccess" value="always" />');

	if(flashvars) document.write('<param name="flashVars" value="'+ flashvars +'">');
	document.write('<embed');
	if(flashvars) document.write(' flashVars="'+ flashvars +'" ');
	document.write(' src="'+ flashfilename +'" wmode="transparent" allowScriptAccess="always" width="'+ flashwidth +'" height="'+ flashheight +'" ');
	document.write(' quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent">');
	document.write('</embed>');
	document.write('</object>');
}

//20100504 - id 추가
function flash1(flashfilename, flashwidth, flashheight, flashvars, id)
{
	document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ flashwidth +'" height="'+ flashheight +'" id="'+ id +'">');
	document.write('<param name="movie" value="'+ flashfilename +'">');
	document.write('<param name="flashVars" value="'+ flashvars +'">');
	document.write('<param name="wmode" value="transparent">');
	document.write('<param name="allowScriptAccess" value="always" />');

	if(flashvars) document.write('<param name="flashVars" value="'+ flashvars +'">');
	document.write('<embed');
	if(flashvars) document.write(' flashVars="'+ flashvars +'" ');
	document.write(' src="'+ flashfilename +'" wmode="transparent" allowScriptAccess="always" width="'+ flashwidth +'" height="'+ flashheight +'" ');
	document.write(' quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent">');
	document.write('</embed>');
	document.write('</object>');
}

/* 플래시(가격) */
function flashMoney(flashfilename, flashwidth, flashheight, flashvars, divId)
{
	var flashDiv = document.getElementById(divId);
	var innerHtml = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ flashwidth +'" height="'+ flashheight +'">'
			+ '<param name="movie" value="'+ flashfilename +'">'
			+ '<param name="flashVars" value="'+ flashvars +'">'
			+ '<param name="wmode" value="transparent">'
			+ '<param name="allowScriptAccess" value="always" />'
			+ '<embed flashVars="'+ flashvars +'" src="'+ flashfilename +'" width="'+ flashwidth +'" height="'+ flashheight +'" '
			+ ' quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" >'
			+ '</embed>'
			+ '</object>';
	flashDiv.innerHTML = innerHtml;
}

/* 플래시(가격) */
function flashMoneyText(flashfilename, flashwidth, flashheight, flashvars)
{
	var innerHtml = '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="'+ flashwidth +'" height="'+ flashheight +'">'
			+ '<param name="movie" value="'+ flashfilename +'">'
			+ '<param name="flashVars" value="'+ flashvars +'">'
			+ '<param name="wmode" value="transparent">'
			+ '<param name="allowScriptAccess" value="always" />'
			+ '<embed flashVars="'+ flashvars +'" src="'+ flashfilename +'" width="'+ flashwidth +'" height="'+ flashheight +'" '
			+ ' quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" >'
			+ '</embed>'
			+ '</object>';
	return innerHtml;
}

/*팝업 쿠폰할인*/
function calculation_coupon(check){

	useful_coupon.style.display=check;
}
function calculation_no(num,check){

	var div_num = new Array("","calculation_no_01","calculation_no_02");

	if(check=='over')
	{
		document.getElementById(div_num[num]).style.display="block";
	}
	else
	{
		document.getElementById(div_num[num]).style.display="none";
	}
}

/*사용가능한 쿠폰보기*/
function view_div_view(div,view){

	if(view=='ok')
	{
		div.style.display='block';
	}
	else
	{
		div.style.display='none';
	}
}
function view_div_view1(div){
	if (div){
		if (div.style){
			if(div.style.display=='block')
			{
				div.style.display='none';
			}
			else
			{
				div.style.display='block';
			}
		}
	}
}
/*재고조회*/
function stock_view(div){
	if (div){
		if (div.style){
			if(div.style.display=='block')
			{
				div.style.display='none';
				stockAjaxDiv.style.display='none';
				spt_02.style.display='block';
				
				stock_01.style.display='none';
				stock_02.style.display='none';
				stock_03.style.display='none';
			}
			else
			{
				getStockAjax('','');
				//stockAjaxDiv.innerHTML = "bbb";
				stockAjaxDiv.style.display='block';
				div.style.display='block';
				spt_02.style.display='none';
				
				stock_01.style.display='none';
				stock_02.style.display='none';
				stock_03.style.display='none';
			}
		}
	}
}
/*백화점 대체상품 재고조회I*/
function deptChgStock_view(div,itemCode,venCode){
	if (div){
		if (div.style){
			if(div.style.display=='block')
			{
				div.style.display='none';
				deptChgstockAjaxDiv.style.display='none';
				spt_02.style.display='block';
				stock_01.style.display='none';
				stock_03.style.display='none';
			}
			else
			{	
				deptChgGetStockAjax(itemCode,venCode);
				deptChgstockAjaxDiv.style.display='block';
				div.style.display='block';
				spt_02.style.display='none';
				stock_01.style.display='none';
				stock_03.style.display='none';
			}
		}
	}
}

/*백화점 대체상품 재고조회II*/
function deptChgStock_viewII(div,itemCode,venCode){
	if (div){
		if (div.style){
			if(div.style.display=='block')
			{
				div.style.display='none';
				deptChgstockAjaxDivII.style.display='none';
				spt_02.style.display='block';
				stock_01.style.display='none';
				stock_02.style.display='none';
			}
			else
			{	
				deptChgGetStockAjaxII(itemCode,venCode);
				deptChgstockAjaxDivII.style.display='block';
				div.style.display='block';
				spt_02.style.display='none';
				stock_01.style.display='none';
				stock_02.style.display='none';
			}
		}
	}
}

function miniBasket(params) {
        if(params != '0')
                params = "page=" + params;
        else
                params = "";
        new ajax.xhr.Request(HM_CONTEXT_ROOT+"/miniBasketR.do", params, loadBasketContent, 'POST');
}

function loadBasketContent(req) {
        var ajaxObject = document.getElementById("ajaxBasketDiv");
		ajaxObject.innerHTML = "<div class='qcart_list'>데이터를 읽어오는 중입니다. 잠시만 기다려 주세요...</div>";


        if (req.readyState == 4) {
                if (req.status == 200) {
                        ajaxObject.innerHTML = req.responseText;
                }else{
                        window.alert("[Error]====>"+req.status);
                }
        }
}

function cbAllSelect() {
    var form = document.frmList;
    var Obj = form.cb;
    if(Obj != null) {
	    var ObjLen = Obj.length;
	    if(ObjLen > 0) {
	        for (i=0; i<ObjLen; i++) {
	            Obj[i].checked = true;
	            //alert(Obj[i].value);
	        }
	    } else {
	        Obj.checked = true;
	    }
    } else {
    	alert("상품이 없습니다.");
    }
}


function compareGGimItem(type) {
    var form = document.frmList;
    var itemTotal = "";
    var itemChkCnt = 0;
    var aspCheck = "";
    var Obj = form.cb;
    var aspObj = frmList.aspItemCd;
    if(Obj == null) {
		alert("상품이 없습니다.");
		return;
    }
    var ObjLen = Obj.length;
    if(ObjLen > 0) {
	    for (i=0; i<ObjLen; i++) {
	        if(Obj[i].checked == true) {
	            itemTotal += Obj[i].value + "^";
	            itemChkCnt ++;
	        }
	        if (aspObj[i].value != '0')
                aspCheck = "true";
	    }
	    itemTotal = itemTotal.substring(0,itemTotal.length-1);
    } else {
        if(Obj.checked == true){
            itemTotal = Obj.value;
            itemChkCnt ++;
        }
        if (aspObj.value != '0')
            aspCheck = "true";
    }

	if(itemTotal == "" || itemTotal == null) {
		alert("상품을 선택하신 후 이용 가능합니다.");
		return;
	}

    if(type == "1") {
        if(itemChkCnt == 1) {
                alert("2~4개까지 비교하실 수 있습니다.");
                return;
        }
		if(itemChkCnt > 4) {
			alert("최대 4개까지 비교하실 수 있습니다.");
			return;
		}
	    if(aspCheck == "true") {
	        alert("죄송합니다. 제휴몰 상품은 비교하기 이용이 제한됩니다.");
	        return;
	    }
        itemTotal = itemTotal.replace(/\^+/g, ',');
        //alert("비교하기 : " + itemTotal);
        linkUrl = HM_CONTEXT_ROOT + "/shItemCompare.do?mode=insert&ItemCode=" + itemTotal;
        window.open(linkUrl,"compareItemFrm","toolbar=no, menubar=no, scrollbars=no, resizable=no");
    }
    else if(type == "2") {
	    if(aspCheck == "true") {
	        alert("죄송합니다. 제휴몰 상품은 쇼핑찜 이용이 제한됩니다.");
	        return;
	    }
        itemTotal = itemTotal.replace(/\^+/g, ',');
        alert("쇼핑찜 : " + itemTotal);

		var params = "itemcodearry="+itemTotal;
		new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListC.do",params,loadfAddWishListNew , "POST");

    }
}


function deleteInfoCheckBasket() {
    var form = document.frmList;
    var itemTotal = "";
    var aspTotal = "";
    var unitTotal = "";
    var Obj = form.cb;
    var aspObj = form.aspItemCd;
    var unitObj = form.unitCode;
    if(Obj == null) {
		alert("상품이 없습니다.");
		return;
    }
    var ObjLen = Obj.length;
    if(ObjLen > 0) {
	    for (i=0; i<ObjLen; i++) {
	        if(Obj[i].checked == true) {
	            itemTotal += Obj[i].value + "^";
	            aspTotal += aspObj[i].value + "^";
	            unitTotal += unitObj[i].value + "^";
	        }
	    }
	    itemTotal = itemTotal.substring(0,itemTotal.length-1);
		aspTotal = aspTotal.substring(0, aspTotal.length-1);
		unitTotal = unitTotal.substring(0, unitTotal.length-1);
    } else {
        if(Obj.checked == true)
            itemTotal = Obj.value;
            aspTotal = aspObj.value;
            unitTotal = unitObj.value;
    }
	if(itemTotal == "" || itemTotal == null) {
		alert("상품을 선택하신 후 이용 가능합니다.");
		return;
	}
    /*
	    alert("삭제할 데이터 (itemCode) : " + itemTotal);
	    alert("삭제할 데이터 (aspItemCode) : " + aspTotal);
	    alert("삭제할 데이터 (unitCode) : " + unitTotal);
	*/
	form.ItemCode.value = itemTotal;
	form.AspItemCode.value = aspTotal;
	form.UnitCode.value = unitTotal;

	form.method = "post";
	form.target = "deleteBasketFrm";
	form.action = HM_CONTEXT_ROOT + "/BasketDeleteSelect.do";
	form.submit();
//    deleteBasketFrm.location.href = HM_CONTEXT_ROOT + "/BasketDeleteSelect.do?UnitCode="+unitTotal+"&ItemCode="+itemTotal+"&AspItemCode="+aspTotal;
}

function ShoppingGGim(){
	var params = "";
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListF.do?WishFlag=main", params, loadShoppingGGim, 'POST');
//	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListF.do?WishFlag=main", params, loadShoppingGGim, 'POST');
}

function goPageWish(str){
		var params = "page="+str+"&WishFlag=main";
		//alert(params);
		new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListF.do",params,loadShoppingGGim , "POST");
}

function loadShoppingGGim(req){
	var StrAjax = '';
	StrAjax ='<div id="qcart">';
	StrAjax +='<div class="qcart_body">';
	StrAjax +='<div class="qcart_body_div">';
	StrAjax +='<div class="qcart_list">';
	StrAjax +='<table cellspacing="0" cellpadding="0">';
	StrAjax +='<tr>';
	StrAjax +='<td align="center">';
	StrAjax +='로딩중입니다.';
	StrAjax +='</td>';
	StrAjax +='</tr>';
	StrAjax +='</table>';
	StrAjax +='</div>';
	StrAjax +='<div class="qcart_button_01">';
	StrAjax +='</div>';
	StrAjax +='<div class="qcart_button_02">';
	StrAjax +='</div>';
	StrAjax +='</div>';
	StrAjax +='</div >';
/*
	StrAjax +='<div class="qcart_right">	';
	StrAjax +='<img src="' + HM_IMAGE_ROOT + '/common/skyscraper/div_arrow.gif" align="absmiddle" />';
	StrAjax +='</div>';
	StrAjax +='<div style="clear:both; width:898px; height:7px; line-height:7px; position:absolute; background:url(\'http://image.hmall.com/static/2008img/common/skyscraper/nsky_shadow.gif\') no-repeat right;"><div style="clear:both; width:885px; height:7px; line-height:7px; filter:alpha(opacity:30);"><div style="clear:both; width:885px; height:7px; line-height:7px; filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr=#000000, EndColorStr=#FFFFFF);"></div></div></div>';
*/
	StrAjax +='</div>';

	//document.getElementById('qcart_box2').innerHTML = StrAjax;
	
	if(parent.document.all.qcart_box2 != null) {
		parent.document.getElementById('qcart_box2').innerHTML = StrAjax;
	} else {
		document.getElementById('qcart_box2').innerHTML = StrAjax;
	}

	//document.getElementById('qcart_box2').style.display = 'block';

	if(parent.document.all.qcart_box2 != null) {
		parent.document.getElementById('qcart_box2').style.display = 'block';
	} else {
		document.getElementById('qcart_box2').style.display = 'block';
	}

	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			//alert(xmldoc);
			//document.getElementById('qcart_box2').innerHTML = xmldoc;

			if(parent.document.all.qcart_box2 != null) {
				parent.document.getElementById('qcart_box2').innerHTML = xmldoc;
			} else {
				document.getElementById('qcart_box2').innerHTML = xmldoc;
			}
			
			//document.getElementById('qcart_box2').style.display = 'block';

			if(parent.document.all.qcart_box2 != null) {
				parent.document.getElementById('qcart_box2').style.display = 'block';
			} else {
				document.getElementById('qcart_box2').style.display = 'block';
			}
			
		}else{
			window.alert("쇼핑찜 로딩 실패");
		}
	}
}
/*장바구니/쇼핑찜/고객등급*/

function header_smenu_view(top_div,over){

	if(over=='block' || over=='none')
	{
		if(over=='block')
		{
			if(top_div.style.display=='block')
			{
				top_div.style.display='none';
			}
			else
			{
				top_div.style.display='block';

				if(top_div==qcart_box)
				{
					document.getElementById('qcart_box2').style.display='none';
					document.getElementById('qcustgrade_box').style.display='none';
					if(document.getElementById('category_zindex') != null){
						document.getElementById('category_zindex').style.zIndex = 1000;	// 장바구니 로드시 카테고리 zindex 처리
					}
					miniBasket('0');
				}
				else if(top_div==qcart_box2)
				{
					document.getElementById('qcart_box').style.display='none';
					document.getElementById('qcustgrade_box').style.display='none';
					if(document.getElementById('category_zindex') != null){
						document.getElementById('category_zindex').style.zIndex = 1000;	// 찜 로드시 카테고리 zindex 처리
					}
					ShoppingGGim();
				}
				else if(top_div==qcustgrade_box)
				{
					document.getElementById('qcart_box').style.display='none';
					document.getElementById('qcart_box2').style.display='none';
				}
				else
				{
					document.getElementById('qcart_box').style.display='none';
					document.getElementById('qcart_box2').style.display='none';
					document.getElementById('qcustgrade_box').style.display='none';
				}
			}
		}
		else
		{
			if(document.getElementById('category_zindex') != null){
				document.getElementById('category_zindex').style.zIndex = 10000;	// 카테고리 zindex 처리
			}
			top_div.style.display=over;
		}
	}
	else
	{
		if(over=='over')
		{
			top_div.style.display='block';
		}
		else
		{
			top_div.style.display='none';
		}
	}
}

function tv_view_div(div1){

	if(div1.style.display=='block')
	{
		div1.style.display='none';
	}
	else
	{
		div1.style.display='block';
	}
}

function list_calendar(img,name,dir,div){


	search_search.style.display="none";
	calendar.style.display="none";

	list_calendar_button_01.src=HM_IMAGE_ROOT + "/common/button/button_calendar_01.gif";
	list_calendar_button_02.src=HM_IMAGE_ROOT + "/common/button/button_calendar_02.gif";

	img.src = dir+name+"_on.gif";
	div.style.display="block";
}

/* 20080626 TV 편성표 추가 */
function list_broad(img,name,dir,div){


	daily.style.display="none";
	weekly.style.display="none";

	list_broad_button_01.src=HM_IMAGE_ROOT + "/common/button/button_broad_01.gif";
	list_broad_button_02.src=HM_IMAGE_ROOT + "/common/button/button_broad_02.gif";

	img.src = dir+name+"_on.gif";
	div.style.display="block";
}

/*말풍선 div*/
function view_comment_01(div){

	if(div.style.display=='block')
	{
		div.style.display='none';
	}
	else
	{
		div.style.display='block';
		div.style.left=event.x + 10;
	}
}
function view_comment_02(div){

	if(div.style.display=='block')
	{
		div.style.display='none';
	}
	else
	{
		div.style.display='block';
		div.style.left=event.x;
	}
}
function view_comment_03(div){

	if(div.style.display=='block')
	{
		div.style.display='none';
	}
	else
	{
		div.style.display='block';
		div.style.left=event.x;
		div.style.top=document.body.scrollTop+event.y-25;
	}
}

/*div select box view*/
function select_div_view_over(selectdiv,div,scrollview){

		div.style.display='block';

		div.style.width = selectdiv.offsetWidth;

		if(div.offsetHeight > 367)
		{
			scrollview.style.height = 367;
			scrollview.style.overflowY='auto';
		}
}

/*div select box view*/
function select_div_view_out(div){
	div.style.display='none';
}

/*div select box view*/
function select_div_view(selectdiv,div,scrollview){

	if(div.style.display=='block')
	{
		div.style.display='none';
	}
	else
	{
		div.style.display='block';

		div.style.width = selectdiv.offsetWidth;

		if(div.offsetHeight > 367)
		{
			scrollview.style.height = 367;
			scrollview.style.overflowY='auto';
		}
		///div.style.pixelWidth=;
	}
}

function select_div_view1(selectdiv,div){

	if(div.style.display=='block')
	{
		div.style.display='none';
	}
	else
	{
		div.style.display='block';

		div.style.width = selectdiv.offsetWidth;

		var t_height = document.body.scrollTop+event.y;
//		var view_height = t_height-150;
		var view_height = t_height-190;

		div.style.top=view_height;
	}
}

/*탭버튼 start*/
function tabbuttonevent(tabbutton,classvalue){

	var objID = tabbutton;
	var arrayID = objID.split("_");
	var outobj =  arrayID[0]+'_'+arrayID[1];

	var arrayDiv = arrayID[0].split("0");
	var DivNum = arrayDiv[1];

	for(i=1;i<=arrayID[1];i++)
	{
		if(arrayID[1]==4)
		{

			if(i==arrayID[1])
			{
				document.getElementById(outobj+'_'+i).className = 'last';
			}
			else
			{
				document.getElementById(outobj+'_'+i).className = '';
			}
		}
		else
		{
			if(i==arrayID[1])
			{
				document.getElementById(outobj+'_'+i).className = arrayID[1]+'_last';
			}
			else
			{
				document.getElementById(outobj+'_'+i).className = arrayID[1];
			}
		}

		if(document.getElementById('tabdiv'+DivNum+'_'+i))
			document.getElementById('tabdiv'+DivNum+'_'+i).style.display = 'none';
	}

	document.getElementById(tabbutton).className = classvalue;


	if(document.getElementById('tabdiv'+DivNum+'_'+arrayID[2])) document.getElementById('tabdiv'+DivNum+'_'+arrayID[2]).style.display = 'block';
}
/*탭버튼*/

/*메뉴 type3*/
function menu03_view(img,div){
	var obj = document.getElementById(div);

	if(obj){
		if(obj.style.display=='block')
		{
			obj.style.display='none';
			if(img){
				img.src=HM_IMAGE_ROOT + '/common/menu/menu_plus.gif';
			}
		}
		else
		{
			obj.style.display='block';
			if(img){
				img.src=HM_IMAGE_ROOT + '/common/menu/menu_minus.gif';
			}
		}
	}
}
/*메뉴 type3*/

/*기존소스*/
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

function MM_showHideLayers() { //v3.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}
/*기존소스*/

/*미리보기*/
function view_div_open(img,div){

	if(document.getElementById(div).style.display=='none')
	{
		img.src=HM_IMAGE_ROOT + '/common/button/button_view_12_on.gif';
		document.getElementById(div).style.display='block';
	}
	else
	{
		img.src=HM_IMAGE_ROOT + '/common/button/button_view_12.gif';
		document.getElementById(div).style.display='none';
	}
}
/*미리보기*/


/*작은이미지 보기*/
function simgs_view(bimg,simg){

	document.getElementById(bimg).src = simg.src;
}
/*작은이미지 보기*/


/*링크 점선 없애기*/
function bluring(){

	if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
}
document.onfocusin=bluring;


/*메뉴 start*/
function menu_bg(div,color,over){

	if(over=='over')
	{
		div.style.backgroundColor=color;
		div.style.color='#ffffff';
	}
	else
	{
		div.style.backgroundColor='#ffffff';
		div.style.color='#777777';
	}
}

/*탭버튼 start*/
function tabbuttonevent(tabbutton,classvalue){

	var objID = tabbutton;
	var arrayID = objID.split("_");
	var outobj =  arrayID[0]+'_'+arrayID[1];

	var arrayDiv = arrayID[0].split("0");
	var DivNum = arrayDiv[1];

	for(i=1;i<=arrayID[1];i++)
	{
		if(arrayID[1]==4)
		{
			if(i==arrayID[1])
			{
				document.getElementById(outobj+'_'+i).className = 'last';
			}
			else
			{
				document.getElementById(outobj+'_'+i).className = '';
			}
		}
		else
		{
			if(i==arrayID[1])
			{
				document.getElementById(outobj+'_'+i).className = arrayID[1]+'_last';
			}
			else
			{
				document.getElementById(outobj+'_'+i).className = arrayID[1];
			}
		}

		if(document.getElementById('tabdiv'+DivNum+'_'+i)) document.getElementById('tabdiv'+DivNum+'_'+i).style.display = 'none';
	}

	document.getElementById(tabbutton).className = classvalue;
	if(document.getElementById('tabdiv'+DivNum+'_'+arrayID[2])) document.getElementById('tabdiv'+DivNum+'_'+arrayID[2]).style.display = 'block';
}

function numtabbuttonevent(img,name,url){

	var objID = img;
	var arrayID = objID.split("_");
	var outobj =  arrayID[0]+'_'+arrayID[1];

	var arrayDiv = arrayID[0].split("0");
	var DivNum = arrayDiv[1];

	for(i=1;i<=arrayID[1];i++)
	{
		var outimg = document.getElementById(outobj+'_'+i).src;
		var arrayoutimg = outimg.split("_on.gif");

		var checkimg = arrayoutimg[0].slice(-4);

		if(checkimg!='.gif')
		{
			document.getElementById(outobj+'_'+i).src = arrayoutimg[0]+'.gif';
		}

		if(document.getElementById('numtabdiv'+DivNum+'_'+i)) document.getElementById('numtabdiv'+DivNum+'_'+i).style.display = 'none';
	}

	document.getElementById(img).src = url+name+'_on.gif';
	if(document.getElementById('numtabdiv'+DivNum+'_'+arrayID[2])) document.getElementById('numtabdiv'+DivNum+'_'+arrayID[2]).style.display = 'block';
}
/*탭버튼 end*/

/*중분류 start*/
function view_category_03(button,num,hmall){

	var viewobj = 'category_03_con'+num;
	var boxtitle = 'category_03_body_title'+num;
	var boxcon = 'category_03_body_table'+num;
	var boxbottom = 'category_03_body_bottom'+num;

				if(document.getElementById(viewobj).style.display=='block')
				{
					button.src= HM_IMAGE_ROOT + '/common/button/button_category_view_01.gif';
					document.getElementById(viewobj).style.display='none';
				}
				else
				{
					button.src=HM_IMAGE_ROOT + '/common/button/button_category_view_02.gif';
					document.getElementById(viewobj).style.display='block';
				}

}
/*중분류 end*/



/*중분류 start*/
function view_category_032(objs,num,hmall){


	var button = document.getElementById(objs);
	var viewobj = 'category_03_con'+num;
	var boxtitle = 'category_03_body_title'+num;
	var boxcon = 'category_03_body_table'+num;
	var boxbottom = 'category_03_body_bottom'+num;

	if (button!=null){
				if(document.getElementById(viewobj).style.display=='block')
				{
					button.src= HM_IMAGE_ROOT + '/common/button/button_category_view_01.gif';
					document.getElementById(viewobj).style.display='none';
				}
				else
				{
					button.src=HM_IMAGE_ROOT + '/common/button/button_category_view_02.gif';
					document.getElementById(viewobj).style.display='block';
				}
		}

}

/*중분류 end*/



/*검색 GNB start*/
function search_tab(div1,div2){

	var button_img	= new Array("","left_button_01","left_button_02","left_button_03","left_button_04","right_button_05","right_button_06");
	var view_div1	= new Array("","search_tab_view_bar_1","search_tab_view_bar_2");
	var view_div2	= new Array("","search_tab_view_bar_01","search_tab_view_bar_02","search_tab_view_bar_03","search_tab_view_bar_04","search_tab_view_bar_05","search_tab_view_bar_06");
div2 = "0"+div2;
alert('div2');
	for(var i=1;i<=6;i++)
	{

		if(i<5)
			document.getElementById(button_img[i]).src=HM_IMAGE_ROOT + '/common/search_tab/left_button_0'+ i +'.gif';
		else
			document.getElementById(button_img[i]).src=HM_IMAGE_ROOT + '/common/search_tab/right_button_0'+ i +'.gif';

		if(i<3) document.getElementById(view_div1[i]).style.display='none';

		document.getElementById(view_div2[i]).style.display='none';
	}

	document.getElementById(button_img[div2]).src=HM_IMAGE_ROOT + '/common/search_tab/'+ button_img[div2] +'_on.gif';

	document.getElementById(view_div1[div1]).style.display='block';
	document.getElementById(view_div2[div2]).style.display='block';
}
/*검색 GNB end*/

/*VOD 팝업 start*/
function popItemVodView(itemCode, fileName) {
	var url = "/shItemVodR.do" +
	          "?ItemCode=" + itemCode +
	          "&SelectedFileName=" + fileName;
	fOpenWin(url, "popItemVodView", "width=670,height=600,resizable=no,scrollbars=no,status=no");
}
/*VOD 팝업 end*/


/*window open 함수 start*/
function fOpenWin(url, wname, wopt) {
	var newopt = "", wHeight = 0, wWidth = 0;
	if (wopt != "") {
		var woptlist = wopt.replace(/ /g, "").split(",");
		//2010.11.05_나윤원 for문 수정 .... 
		//for (var i in woptlist) {
		for(var i=0; i < woptlist.length; i++) { 
			if (woptlist[i].match(/^height=/i)) {
				wHeight = parseInt(woptlist[i].substr(7),10);
				wHeight += 35;
				if (!isNaN(wHeight)) newopt += "top=" + Math.floor((screen.availHeight - wHeight) / 2) + ",";
			}
			if (woptlist[i].match(/^width=/i)) {
				wWidth = parseInt(woptlist[i].substr(6),10);
				wWidth += 10;
				if (!isNaN(wWidth)) newopt += "left=" + Math.floor((screen.availWidth - wWidth) / 2) + ",";
			}
		}
	}
	return window.open(gDomain + gCtxRoot + url, wname, newopt + wopt);
}

/*window open 함수 end*/

/* FAQ Answer start */
function menuctl(no){
	ns4 = (document.layers)?true:false
	ie4 = (document.all)?true:false

	//리스트 갯수 설정
	for(i=1; i<=2; i++){
		ob = eval("document.getElementById('n"+i+"')");
		if(i==no){
			if(ob.style.display=="none") ob.style.display = "block";
			else ob.style.display = "none";
		}else{
			ob.style.display = "none";
		}
	}
}
/* FAQ Answer end */

/* 고객센터 FAQ List 중분류 메뉴 레이어 start */
function show_depth(n) {
    for(var i = 1; i < 13; i++) {

        obj = document.getElementById('tab_sub_'+i);

        if ( n == i ) {
            obj.style.display = "block";
        } else {
            obj.style.display = "none";
        }
    }
}
/* 고객센터 FAQ List 중분류 메뉴 레이어 end */



/* 코멘트 레이어 20071015 start */
var	x =	0;
var	y =	0;
var	snow = 0;
var	sw = 0;
var	cnt	= 0;
var	dir	= 1;
var	offsetx	= 0;
var	offsety	= 0;
var	width =	290;
var	height = 50;

/*
document.onmousemove = mouseMove;
*/
function nd() {
	if ( cnt >=	1 )	{ sw = 0; }
	if ( sw	== 0 ) { snow =	0; hideObject(over); }
	else { cnt++; }
}

/* Layer 보이기 */
function disp(obj) {
	parm = eval(obj);
	over = parm.style;
	if (snow ==	0) {
		if (dir	== 2) {	moveTo(over,x+offsetx-(width/2),y+offsety);	} // Center
		if (dir	== 1) {	moveTo(over,x+offsetx,y+offsety); }	// Right
		if (dir	== 0) {	moveTo(over,x-offsetx-width,y+offsety);	} // Left
		showObject(over);
		snow = 1;
	}
}

function mouseMove(e) {
	x=event.x +	document.body.scrollLeft+12
	y=event.y +	document.body.scrollTop-80
	if (x+width-document.body.scrollLeft > document.body.clientWidth) x=x-width-25;
	if (y+height-document.body.scrollTop > document.body.clientHeight) y=y-height;

	if (snow) {
		if (dir	== 2) {	moveTo(over,x+offsetx-(width/2),y+offsety);	} // Center
		if (dir	== 1) {	moveTo(over,x+offsetx,y+offsety); }	// Right
		if (dir	== 0) {	moveTo(over,x-offsetx-width,y+offsety);	} // Left
	}
}
function showObject(obj) { obj.visibility =	"visible" }
function hideObject(obj) { obj.visibility =	"hidden" }
function moveTo(obj,xL,yL) { obj.left =	xL;	obj.top	= yL; }

	if (document.all)
	{
		layerRef='document.all'
		styleRef='.style.'
	}
	else if	(document.layers)
	{
		layerRef='document.layers'
		styleRef='.'
	}
/* 코멘트 레이어 20071015 end */

/* 다중 체크박스 선택 - 20071015 start */
function MainCheck(Frm) {
if (Frm.check.checked == true)
CheckT(Frm);
else
CheckF(Frm);
}

function CheckT(Frm) {
for (i = 0; i < Frm.cname.length; i++) {
Frm.cname[i].checked = true;
}
}

function CheckF(Frm) {
for (i = 0; i < Frm.cname.length; i++) {
Frm.cname[i].checked = false;
}
}
/* 다중 체크박스 선택 - 20071015 end */


/*배경이미지 깜빡이는 현상 제거*/
try {
    document.execCommand('BackgroundImageCache', false, true);
} catch(me) {}
/*배경이미지 깜빡이는 현상 제거*/

function doCompareItem(){
	var pareItemcode = "";
	var cook = "";
	var cookold = "";
	var cookoldvalue = "";

	for(var k=0;k<80;k++){
		if(document.getElementsByName('parechk')[k]){
			//alert(document.getElementsByName('parechk')[k].checked);
			if(document.getElementsByName('parechk')[k].checked == true){
				pareItemcode += document.getElementsByName('parechk')[k].value+',';
			}
		}
	}

	if(pareItemcode == ""){
		window.alert("choice compare product");
	}else{
		if(document.cookie){
			cookold = document.cookie.split("=");
			cookoldvalue = cookold[1];

			document.cookie="CpareItemcode="+cookoldvalue+pareItemcode;
		}else{
			document.cookie="CpareItemcode="+pareItemcode;
		}
		cook = document.cookie.split("=");
		alert("cookies itemcode ==> "+cook[1]+" page compare page move");
	}
}

/*TV 리스트 이미지 롤오버 start*/
function tvListImgOver(obj,url){
	document.getElementById(obj).src = url;
}
/*TV 리스트 이미지 롤오버 end*/

/* keyWordPromotion_09.js 에 있던 배열을 옮김.*/
var keywordImgList09 = new Array();
var keywordUrlList09 = new Array();
/* keyWordPromotion_09.js 에 있던 배열을 옮김.*/

/* utils.js에도 있으나 utils.js를 뒤에 선언해서 에러나는 경우 방지 */
function getCookie(name) {
	var cname = name + "=";
	var dc = document.cookie;
	if (dc.length > 0) {
		begin = dc.indexOf(cname);
		if (begin != -1) {
			begin += cname.length;
			end = dc.indexOf(";", begin);
			if (end == -1) end = dc.length;
				return unescape(dc.substring(begin, end));
		}
	}
	return null;
}

function AllCategory(){
	window.open(HM_CONTEXT_ROOT+"/shAllCategoryShow.do","ALLCATEGORY","width=810,height=640");
}










/* 쇼핑찜 관련 function  시이자악 */
function doChoice(){
	var chkboxexist = false;

	for(var i=0;i<8;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementById('choicebtn').src == HM_IMAGE_ROOT+"/common/button/button_qcart_01.gif"){
				document.getElementsByName('ItemCode')[i].checked = true;
			}else{
				document.getElementsByName('ItemCode')[i].checked = false;
			}

			chkboxexist = true;
		}
	}

	if(chkboxexist){
		if(document.getElementById('choicebtn').src == HM_IMAGE_ROOT+"/common/button/button_qcart_01.gif"){
			document.getElementById('choicebtn').src = HM_IMAGE_ROOT+"/common/button/button_qcart_01_cancel.gif";
		}else{
			document.getElementById('choicebtn').src = HM_IMAGE_ROOT+"/common/button/button_qcart_01.gif";
		}
	}
}


function doChoiceDel(){
	var wishDel = "";

	for(var i=0;i<8;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				wishDel += document.getElementsByName('ItemCode')[i].value + ",";
			}
		}
	}

	if(wishDel == ''){
		window.alert("삭제하실 상품을 선택 해 주세요");
		return;
	}

	var params = "ItemCode="+wishDel+"&dflag=del&WishFlag=main";
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListD.do", params, loaddoChoiceDel, 'POST');
}

function loaddoChoiceDel(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;

			var zzimCount = getCookie("GGimCnt");		// 쇼핑찜 갯수

			var strHtml = zzimCount +"개";

			document.getElementById('GGimCnt_DIV').innerHTML = strHtml;

			ShoppingGGim();
		}else{
			alert("삭제실패["+req.status+"]");
		}
	}
}


var changeType = "";
var newItemCode = "";
var pageView = "";

function TypeMappingFirst(typedepth,itemCode,pageview){
	changeType = typedepth;
	newItemCode = itemCode;
	pageView = pageview;
	//alert(pageView);
	//alert(changeType);
	var typeId = document.getElementById('type_depth_'+typedepth+'_'+itemCode);

	var typename = new Array();

	typename[0] = "";
	typename[1] = "";
	typename[2] = "";
	typename[3] = "";

	//alert("typeId==>"+typeId);
	if(typeId){
		for(var i=0;i<parseInt(typedepth);i++){
			//alert("0."+document.getElementById('type_depth_'+(i+1)+'_'+itemCode));
			if(document.getElementById('type_depth_'+(i+1)+'_'+itemCode)){
				typename[i] = document.getElementById('type_depth_'+(i+1)+'_'+itemCode).value;
				//alert("1.typename["+i+"]====================>"+typename[i]);
			}
		}
		var params = "type1_name="+encodeURIComponent(typename[0])+"&type2_name="+encodeURIComponent(typename[1])+"&type3_name="+encodeURIComponent(typename[2])+"&type4_name="+encodeURIComponent(typename[3])+"&item_code="+itemCode+"&type_depth="+(parseInt(typedepth)+1)+"&pageview="+pageView+"&doctype=";
		//alert("2."+params);
		new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shItemMapping.do", params, loadTypeMappingFirst, 'POST');
	}
}

function loadTypeMappingFirst(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			var selectwidth = '';
			//window.clipboardData.setData('Text', xmldoc);
			//alert("2."+changeType);
			if(pageView == 'main'){
				selectwidth = 80;
			}else{
				selectwidth= 180;
			}
			if(document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode)){
				//alert(xmldoc);
				document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode).innerHTML = xmldoc;
			}

			if(changeType != '4'){
				if(document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode)){
					for(var j=(parseInt(changeType)+2);j<5;j++){
						if(document.getElementById('type'+j+'Select_'+newItemCode)){
							var strHtmlsubtype = "<select class='div_select' style='width:'+selectwidth+'px;' id='type_depth_"+j+"_"+newItemCode+"'><option value=''>선택하세요</option></select>";
							document.getElementById('type'+j+'Select_'+newItemCode).innerHTML = strHtmlsubtype;
						}
					}
				}else{
					getTypeUniCode();
				}
			}else{
				getTypeUniCode();
			}
		}else{
			var strHtmlcomment = "상품평  로딩실패";
			if(document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode)){
				document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode).innerHTML = strHtmlcomment;
			}
		}
	}else{
		if(document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode)){
			var strHtmlcommentLoad = "";

			strHtmlcommentLoad = "<select class='div_select' style='width:'+selectwidth+'px;' id='type_depth_'+(parseInt(changeType)+1)+'_'+newItemCode>"
								+"  <option >로딩중입니다</option>"
								+"</select>";

			document.getElementById('type'+(parseInt(changeType)+1)+'Select_'+newItemCode).innerHTML = strHtmlcommentLoad;
		}
	}
}


function getTypeUniCode(){
	var typename = new Array();
	typename[0] = "";
	typename[1] = "";
	typename[2] = "";
	typename[3] = "";

	for(var q=0;q<4;q++){
		if(document.getElementById('type_depth_'+(q+1)+'_'+newItemCode)){
			typename[q] = document.getElementById('type_depth_'+(q+1)+'_'+newItemCode).value;
			//alert("3.typename["+q+"]====================>"+typename[q]);
		}
	}
	//alert(pageView);
	var params = "type1_name="+encodeURIComponent(typename[0])+"&type2_name="+encodeURIComponent(typename[1])+"&type3_name="+encodeURIComponent(typename[2])+"&type4_name="+encodeURIComponent(typename[3])+"&item_code="+newItemCode+"&type_depth="+changeType+"&doctype=UnitCodeHidden&pageview="+pageView;
	//alert("[params]=====================>"+params);
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shItemMapping.do", params, loadTypeUniCode, 'POST');
}



function loadTypeUniCode(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			//alert(xmldoc);
			document.getElementById('UnitCodeHidden_'+newItemCode).innerHTML = xmldoc;
			setUnitCode(pageView);
		}else{
			alert("단품 UNIT CODE 가져오기 실패");
		}
	}
}

// 상품 상세용 비교보관함 담기
function fAddCompareItem(itemcode){
	var params = "mode=insert&ItemCode="+itemcode+",";
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shItemCompare.do",params,loadfAddCompareItem , "POST");
}

function loadfAddCompareItem(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			alert("비교보관함에 담았습니다");
			window.open(HM_CONTEXT_ROOT+"/shItemCompare.do?mode=list","Compare","width=400,height=500");
		}else{
			window.alert("비교하기 실패");
		}
	}
}

// 리스트용 비교보관함 담기
function fAddCompareItem1(){
	var itemcode =  "";
	var forcnt = 0;
	for(var i=0;i<100;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				itemcode += document.getElementsByName('ItemCode')[i].value+",";
				forcnt = forcnt + 1;
			}
		}
	}

	if(itemcode == ""){
		window.alert("비교하실 상품을 선택 해 주세요");
		return;
	}

	if(forcnt > 4){
		window.alert("비교하실 상품은 4개 이하로 선택 해 주세요");
		return;
	}

	//var params = "ItemCode="+itemcode+"&mode=Insert";
	//new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shItemCompare.do",params,loadfAddCompareItem1 , "POST");

	window.open(HM_CONTEXT_ROOT+"/shItemCompare.do?mode=insert&ItemCode="+itemcode,"Compare","width=400,height=500");
}



function loadfAddCompareItem1(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			alert("비교보관함에 담겼습니다");
		}else{
			window.alert("비교하기 실패");
		}
	}
}

function doChoiceCart(){
	var itemCode = "";
	var unitCode = "";
	var wishArry;
	var wishName = "";
	var wishStock = "";
	var j = 0;

	for(var i=0;i<80;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				j = i + 1;
				wishArry = document.getElementById('Unit_Code_'+j+'_'+document.getElementsByName('ItemCode')[i].value).value.split("^");

				if(wishArry[1] <= 0){
					window.alert("재고가 없는  상품은 장바구니에 담으실 수 없습니다");
					return;
				}
				itemCode += document.getElementsByName('ItemCode')[i].value + ",";
				unitCode += wishArry[0] + ",";
			}
		}
	}

	if(itemCode == ''){
		window.alert("장바구니에 담을  상품을 선택 해 주세요");
		return;
	}

	var params = "itemCode="+itemCode+"&unitCode="+unitCode+"&BasketWish=Y&mode=new";

	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/AddBasketItems.do",params,loaddoChoiceCart,"POST");
}
function doChoiceCart2(){
	var itemCode = "";
	var unitCode = "";
	var wishArry;
	var wishName = "";
	var wishStock = "";
	var j = 0;

	for(var i=0;i<80;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				j = i + 1;
				wishArry = document.getElementById('Unit_Code_'+j+'_'+document.getElementsByName('ItemCode')[i].value).value.split("^");

				if(wishArry[1] <= 0){
					window.alert("재고가 없는  상품은 장바구니에 담으실 수 없습니다");
					return;
				}
				itemCode += document.getElementsByName('ItemCode')[i].value + ",";
				unitCode += wishArry[0] + ",";
			}
		}
	}

	if(itemCode == ''){
		window.alert("장바구니에 담을  상품을 선택 해 주세요");
		return;
	}

	var params = "itemCode="+itemCode+"&unitCode="+unitCode+"&BasketWish=Y&mode=new";

	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/AddBasketItems.do",params,loaddoChoiceCart2,"POST");
}
function  doChoiceCart1(itemCode){
	var wishArry;
	var unitCode;
	wishArry = document.getElementById('Unit_Code_'+itemCode).value.split("^");

	if(wishArry[1] <= 0){
		window.alert("재고가 없는  상품은 장바구니에 담으실 수 없습니다");
		return;
	}
	unitCode = wishArry[0] + ",";
	var params = "itemCode="+itemCode+",&unitCode="+unitCode+"&BasketWish=Y&mode=new";

	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/AddBasketItems.do",params,loaddoChoiceCart2,"POST");

}

function  doChoiceCart11(itemCode, count){
	var wishArry;
	var unitCode;
	
	wishArry = document.getElementById('Unit_Code_'+count+'_'+itemCode).value.split("^");

	if(wishArry[1] <= 0){
		window.alert("재고가 없는  상품은 장바구니에 담으실 수 없습니다");
		return;
	}
	unitCode = wishArry[0] + ",";
	var params = "itemCode="+itemCode+",&unitCode="+unitCode+"&BasketWish=Y&mode=new";

	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/AddBasketItems.do",params,loaddoChoiceCart,"POST");

}

function  doChoiceCart3(itemCode){
	var wishArry;
	var unitCode;
	wishArry = document.getElementById('Unit_Code_'+itemCode).value.split("^");

	if(wishArry[1] <= 0){
		window.alert("재고가 없는  상품은 장바구니에 담으실 수 없습니다");
		return;
	}
	unitCode = wishArry[0] + ",";
	var params = "itemCode="+itemCode+",&unitCode="+unitCode+"&BasketWish=Y&mode=new";

	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/AddBasketItems.do",params,loaddoChoiceCart2,"POST");

}
function loaddoChoiceCart(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			window.alert("장바구니에 담겼습니다");
		}else{
			window.alert("장바구니담기실패");
		}
	}
}

function loaddoChoiceCart2(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			window.alert("장바구니에 담겼습니다");
			parent.document.location.reload();
		}else{
			window.alert("장바구니담기실패");
		}
	}
}

function fAddWishListNew(){
	var itemcode = "";
	for(var i=0;i<100;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				itemcode += document.getElementsByName('ItemCode')[i].value+",";
			}
		}
	}

	if(itemcode == ""){
		window.alert("찜리스트에 담을  상품을 선택 해 주세요");
		return;
	}

	var UserIDCookieValue = getCookie("EHUserID");
	if (UserIDCookieValue == null || UserIDCookieValue == "" || UserIDCookieValue == "_ERAnonymousUser") {
	    popLogin('89',"",itemcode, "", "", "", "", "", "","");
	}else{
		var params = "itemcodearry="+itemcode;
		new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListC.do",params,loadfAddWishListNew , "POST");
	}
}

function fAddWishListNewLogin(itemCode){
	var params = "itemcodearry="+itemCode;
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListC.do",params,loadfAddWishListNew , "POST");
}

function fAddWishListNew1(itemCode){
	if(itemCode == ''){
		window.alert("상품코드가 있어야합니다");
		return;
	}

	//HMALL 쿠키값을 쓰므로 KBP용으로 바꿔야 함.
	var UserIDCookieValue = getCookie("EHUserID");

//	if (UserIDCookieValue == null || UserIDCookieValue == "" || UserIDCookieValue == "_ERAnonymousUser") {
//	    popLogin('90',"",itemCode, "", "", "", "", "", "","");
//	}else{
//		var params = "itemcodearry="+itemCode;
//		new ajax.xhr.Request(KB_TARGET_DOMAIN+"/shWishListC_KB.do",params,loadfAddWishListNew , "POST");
//	}

		var params = "itemcodearry="+itemCode;

		new ajax.xhr.Request(KB_TARGET_DOMAIN+"/AddWishList_KB.do",params,loadfAddWishListNew , "POST");
        setTimeout("document.location.reload()", 500);
}


function loadfAddWishListNew(req){
	/*if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			var zzimCount = getCookie("GGimCnt");		// 쇼핑찜 갯수

			var strHtml = zzimCount +"개";

			//document.getElementById('GGimCnt_DIV').innerHTML = strHtml;

			if(parent.document.all.GGimCnt_DIV != null) {
				parent.document.getElementById('GGimCnt_DIV').innerHTML = strHtml;
			} else {
				document.getElementById('GGimCnt_DIV').innerHTML = strHtml;
			}
			
			for(var k=0;k<80;k++){
				if(document.getElementsByName('ItemCode')[k]){
					if(document.getElementsByName('ItemCode')[k].checked == true){
						document.getElementsByName('ItemCode')[k].checked = false;
					}
				}
			}

			ShoppingGGim();
			var screenW = screen.width / 2;
			var screenH = screen.height / 2;
			var divX = screenW-50;
			var divY = screenH-150;

			var strHtml = "";

			if(document.getElementById('tmpWishDiv')){
				document.getElementById('tmpWishDiv').style.top = divY;
				document.getElementById('tmpWishDiv').style.left= divX;
				//alert(document.getElementById('tmpWishDiv').style.top);
				//alert(document.getElementById('tmpWishDiv').style.left);
				document.getElementById('tmpWishDiv').style.display = 'block';
				ShoppingGGimTmp();
			}

			setTimeout('ShoppingGGimHidden()','7000');

			alert("찜리스트에 추가 되었습니다");

		}else{
			window.alert("찜 담기  실패");
		}
	}*/
	if (req.readyState == 4) {
		if (req.status == 200) {
			alert("찜 리스트에 추가 되었습니다");
		}else{
			window.alert("찜 담기  실패");
		}
	}
	
}

function ShoppingGGimTmp(){
	var params = "";
	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListF.do?WishFlag=main", params, loadShoppingGGim, 'POST');
//	new ajax.xhr.Request(HM_CONTEXT_ROOT+"/shWishListF.do?WishFlag=main", params, loadShoppingGGimTmp, 'POST');
}


function loadShoppingGGimTmp(req){
	if (req.readyState == 4) {
		if (req.status == 200) {
			var xmldoc = req.responseText;
			document.getElementById('tmpWishDiv').innerHTML = xmldoc;


			setTimeout('ShoppingGGimHiddenTmp()','5000');

		}else{
			window.alert("쇼핑찜 로딩 실패");
		}
	}else{
		var StrAjax = "<tr><td>로딩중입니다</td></tr>";
		//document.getElementById('qcart_box2').innerHTML = StrAjax;

		if(parent.document.all.qcart_box2 != null) {
			parent.document.getElementById('qcart_box2').innerHTML = StrAjax;
		} else {
			document.getElementById('qcart_box2').innerHTML = StrAjax;
		}
		
		//document.getElementById('qcart_box2').style.display = '';

		if(parent.document.all.qcart_box2 != null) {
			parent.document.getElementById('qcart_box2').style.display = '';
		} else {
			document.getElementById('qcart_box2').style.display = '';
		}
	}
}

function ShoppingGGimHiddenTmp(){
	document.getElementById('tmpWishDiv').style.display = 'none';
}

function ShoppingGGimHidden(){
	//document.getElementById('qcart_box2').style.display = 'none';

	if(parent.document.all.qcart_box2 != null) {
		parent.document.getElementById('qcart_box2').style.display = 'none';
	} else {
		document.getElementById('qcart_box2').style.display = 'none';
	}
}

function fAddCartWish(){
	var wishCart = "";

	for(var i=0;i<8;i++){
		if(document.getElementsByName('ItemCode')[i]){
			if(document.getElementsByName('ItemCode')[i].checked == true){
				wishCart += document.getElementsByName('ItemCode')[i].value + ",";
			}
		}
	}

	if(wishCart == ''){
		window.alert("장바구니에 담을 상품을 선택 해 주세요");
		return;
	}

	alert("장바구니담기작업중입니다");
	/*
	var params = "ItemCode="+wishDel+"&dflag=del&WishFlag=main";
	new ajax.xhr.Request("<c:url value="/shWishListD.do"/>", params, loaddoChoiceDelWish, 'POST');
	*/
}

function fAddCartWishS(itemCode){

	if(itemCode == ''){
		window.alert("장바구니에 담을 상품을 선택 해 주세요");
		return;
	}

	alert("장바구니담기작업중입니다");
	/*
	var params = "ItemCode="+itemCode+"&dflag=del&WishFlag=main";
	new ajax.xhr.Request("<c:url value="/shWishListD.do"/>", params, loaddoChoiceDelWish, 'POST');
	*/
}

function doChoiceCartPreChk(){
	var itemtype = "";
	for(var q=0;q<8;q++){
		if(document.getElementsByName('')[q]){
			if(document.getElementsByName('')[q].value == '04'){
				itemtype = "1";
			}
		}
	}
	if(itemtype == ""){
		doChoiceCart();
	}else{
		window.alert("장바구니에 담으실 수 없는 상품(보험 등)이 있습니다");
	}
}
/* 쇼핑찜 관련 function  끄읏 */
function navilist_over(li,over){

	if(over=='over'){

		li.style.backgroundColor='#EAEAEA';
	}
	else{

		li.style.backgroundColor='#FFFFFF';
	}
}

//팝업관련
function HmallWindowOpen(url,name,scrollbars,width,height ){
  window.open(url , name, "scrollbars=" + scrollbars +" , width=" + width + ", height=" + height + ",left=0, top=0 ");
}

// www.hmall.com을  <a href="http://www.hmall.com">로 변경
function getAnchorTag(linkUrl)
{
	var anchorTag = "xx";
	var httpStr = "http://";
	var targetStr = "target=";

	if ( linkUrl.length > 6 ) {
		if ( linkUrl.charAt(0) == '<' ) {
			anchorTag = linkUrl;
		}
		else {
			if ( (linkUrl.length > httpStr.length) && (linkUrl.indexOf(httpStr) == 0) ) {
				httpStr = "";
			}

			var index = linkUrl.indexOf(targetStr);

			if ( index > 0 ) {
				index += targetStr.length;
				var n, targetLen = 0;
				for ( n = index; n < linkUrl.length; n++ ) {
					if ( linkUrl.charAt(n) == '&' )
						break;
					targetLen ++;
				}
				targetStr = " " + targetStr + "\"" + linkUrl.substring(index, index + targetLen) + "\"";
				
				index = linkUrl.indexOf(" ");	// space 가 있으면 이후는 삭제
				if ( index > 0 ) {
					linkUrl = linkUrl.substring(0, index);
				}
			}
			else {	// target지정 안되어있으면 _parent로 지정
				targetStr = " " + targetStr + "\"_parent\"";
			}

			anchorTag = "<A href=\"" + httpStr + linkUrl + "\" " + targetStr + ">";
		}
	}

	return(anchorTag);
}

function basketQtyChange() {
	var cartSize = getCookie("EHCartSize");       //장바구니
	if( cartSize != null ) {
		document.all.basket_count.innerHTML = cartSize;
	}
}

// 20100222 쇼핑가이드 (코디)
function fshoppingGuide2(url){
	window.open(url, "pop", "width=973, height=738, scrollbars=yes, toolbar=no, top=0, left=0, resizable=no");
}

// 20100504 메인 카테고리
function cate_fsize(id, w, h){
	var obj = document.getElementById(id);
	if(w){ obj.width = w; }
	if(h){ obj.height = h; }
}


//Form을 serialize
function compFormPost(frmObj) {  
     var str = '';  
     var elm;  
     var endName = '';  
     for (i = 0, k = frmObj.length; i < k; i++) {  
         elm = frmObj[i];  
         switch (elm.type) {  
       	   case 'text':  
           case 'hidden':  
           case 'password':  
           case 'textarea':  
           case 'select-one':  
             str += elm.name + '=' + escape(elm.value) + '&';  
             break;  
         case 'select-multiple':  
            sElm = elm.options;  
             str += elm.name + '=' 
             for (x = 0, z = sElm.length; x < z; x++) {  
                 if (sElm[x].selected) {  
                     str += escape(sElm[x].value) + ',';  
                 }  
             }  
             str = str.substr(0, str.length - 1) + '&';  
             break;  
         case 'radio': 
             if (elm.checked) {  
                 str += elm.name + '=' + escape(elm.value) + '&';  
             }  
             break;  
         case 'checkbox':  
             if (elm.checked) {  
                 if (elm.name == endName) {  
                     if (str.lastIndexOf('&') == str.length - 1) {  
                         str = str.substr(0, str.length - 1);  
                     }  
                     str += ',' + escape(elm.value);  
                 } else {  
                     str += elm.name + '=' + escape(elm.value);  
                 }  
                 str += '&';  
                 endName = elm.name;  
             }  
             break;  
         }  
     } 
     return str.substr(0, str.length - 1);  
 }