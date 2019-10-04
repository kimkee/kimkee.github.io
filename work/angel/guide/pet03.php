<?php include("../guide/_head.php"); ?>	
					<style type="text/css">
.glt-elm{
    position: absolute;
    left: 0;
    top: 0;
    width: 122px;
    color: #fff;
  font-family: Arial, sans-serif;
    opacity: 0.9;
    visibility: hidden;
}

.glt-elm p{
background:url(/work/angel/guide/images/bulBg.gif) repeat-y;
    margin: 0;
	text-align:center;
    padding: 0.5em;
}

.glt-elm img{
    display: block;
}

/* and this CSS for IE, if you want to use transparency: */


</style>
					<script type="text/javascript">
/* This script and many more are available free online at
The JavaScript Source!! http://javascript.internet.com
Created by: Robert Nyman | http://www.robertnyman.com */
/*
    GLT is developed by Robert Nyman, http://www.robertnyman.com
    For more information and copyright information,
please see http://www.robertnyman.com/glt
*/

var GLT = {
    // Customization parameters
    titleClassName : "glt-elm",
    topImagePath : "/guide/images/bulTop.gif",
    bottomImagePath : "/guide/images/bulBot.gif",
    suppressAltTooltipsInIE : true,
    timeBeforeShow : 100,
    
    //풍선도움말 위치 지정
    titleOffsetX : -50, //x축 좌표값 지정
    titleOffsetY : -70, //y축 좌표값 지정

    //페이드인아웃 효과 설정
    fadeInTitle : true,
    fadeOutTitle : true,
    fadeStartLevel : 0.5,
    originalFadeLevel : 0.9,
    fadeIncrement : 0.1,
    timePerFadeStep : 50,

    // GLT parameters
    titleElm : null,
    titleTextElm : null,
    titleTopImage : null,
    titleBottomImage : null,
    elementsWithTitles : null,
    currentElm : null,
    currentTitle : "",
    currentFadeLevel : 0,
    fadeTimer : null,

    init : function (){
        if(document.getElementById){
            this.elementsWithTitles = getElementsByAttribute(document, "*", "title");
            if(this.elementsWithTitles.length > 0){
                this.titleElm = document.createElement("div");
                this.titleElm.className = this.titleClassName;
                if(this.topImagePath){
                    this.titleTopImage = document.createElement("img");
                    this.titleTopImage.setAttribute("src", this.topImagePath);
                    this.titleElm.appendChild(this.titleTopImage);
                }
                this.titleTextElm = document.createElement("p");
                this.titleElm.appendChild(this.titleTextElm);
                if(this.bottomImagePath){
                    this.titleBottomImage = document.createElement("img");
                    this.titleBottomImage.setAttribute("src", this.bottomImagePath);
                    this.titleElm.appendChild(this.titleBottomImage);
                }
                document.body.appendChild(this.titleElm);
                this.useMSFilter = typeof this.titleElm.style.filter != "undefined";
                this.applyEvents();
            }
        }
    },

    applyEvents : function (){
        var oElm;
        var strClassName;
        for(var i=0; i<this.elementsWithTitles.length; i++){
            oElm = this.elementsWithTitles[i];
            if(this.suppressAltTooltipsInIE){
                oElm.setAttribute("alt", "");
            }
            oElm.onmouseover = GLT.mouseOverElm;
            oElm.onmouseout = GLT.mouseOutElm;
        }
        if(this.clickDocumentToClearFocus){
            this.addEvent(document, "click", function(){FaT.clearFocus();}, false);
        }
    },

    mouseOverElm : function (oEvent){
        var oEvent = (typeof oEvent != "undefined")? oEvent : event;
        if(typeof GLT != "undefined"){
            GLT.startTimer(this, oEvent);
            oEvent.cancelBubble = true;
            oEvent.returnValue = false;
            if(oEvent.stopPropagation){
                oEvent.stopPropagation();
            }
        }
    },

    mouseOutElm : function (oEvent){
        var oEvent = (typeof oEvent != "undefined")? oEvent : event;
        if(typeof GLT != "undefined"){
            GLT.hideTitle(this, oEvent);
        }
    },

    startTimer : function (oElm, oEvent){
        if(!this.currentElm || this.currentElm != oElm || this.fadeTimer > 0){
            if(this.fadeTimer){
                clearTimeout(this.fadeTimer);
            }
            if(this.currentElm){
                this.hideTitle(null, false, true);
            }
            this.currentElm = oElm;
            this.currentTitle = this.currentElm.getAttribute("title");
            this.currentElm.setAttribute("title", "");
            this.currentX = oEvent.clientX;
            this.currentY = oEvent.clientY;
            this.fadeTimer = setTimeout("GLT.showTitle()", GLT.timeBeforeShow);
        }
    },

    stopTimer : function (oElm){
        clearTimeout(GLT.fadeTimer);
    },

    showTitle : function (){
        this.setTitlePos();
        this.titleTextElm.innerHTML = this.currentTitle;
        this.titleElm.style.visibility = "visible";
        if(this.fadeInTitle){
            this.currentFadeLevel = this.fadeStartLevel;
            this.fadeIn();
        }
    },

    hideTitle : function (oElm, oEvent, forceHide){
        if(this.currentElm && (oElm || forceHide)){
            var bIsChildOfCurrentElm = false;
            if(typeof oEvent != "undefined" && typeof oEvent == "object"){
                var oEventTarget = (typeof oEvent.relatedTarget != "undefined")? oEvent.relatedTarget : oEvent.toElement;
                if(oEventTarget){
                    while(!bIsChildOfCurrentElm && oEventTarget && oEventTarget.nodeName && oEventTarget.nodeName.search(/body/i) == -1){
                        if(oEventTarget == oElm){
                            bIsChildOfCurrentElm = true;
                            break;
                        }
                        oEventTarget = oEventTarget.parentNode;
                    }
                }
            }
            if(!bIsChildOfCurrentElm){
                this.stopTimer();
                if(this.fadeOutTitle && (typeof forceHide == "undefined" || !forceHide)){
                    this.fadeOut();
                }
                else{
                    clearTimeout(this.fadeTimer);
                    this.currentElm.setAttribute("title", this.currentTitle);
                    this.currentElm = null;
                    this.titleElm.style.visibility = "hidden";
                }
            }
        }
    },

    setTitlePos : function (){
        var arrScroll = this.getWinSizeAndScroll();
        var intTitleElmWidthAndPos = this.titleElm.offsetWidth + this.currentX + this.titleOffsetX;
        var intDiff = intTitleElmWidthAndPos - arrScroll[0];
        var intX = (intDiff > 0)? (this.currentX - intDiff) : (this.currentX + this.titleOffsetX);
        this.titleElm.style.left = intX + arrScroll[2] + "px";
        this.titleElm.style.top = this.currentY + arrScroll[3] + this.titleOffsetY + "px";
    },

    fadeIn : function (fadeOut){
        this.currentFadeLevel = this.currentFadeLevel + this.fadeIncrement;
        if(this.currentFadeLevel < this.originalFadeLevel){
            this.fadeTimer = setTimeout("GLT.fadeIn()", GLT.timePerFadeStep);
        }
        else{
            this.currentFadeLevel = this.originalFadeLevel;
            clearTimeout(this.fadeTimer);
        }
        this.setFade();
    },

    fadeOut : function (){
        this.currentFadeLevel = this.currentFadeLevel - this.fadeIncrement;
        if(this.currentFadeLevel > this.fadeStartLevel){
            this.fadeTimer = setTimeout("GLT.fadeOut()", GLT.timePerFadeStep);
        }
        else{
            this.currentFadeLevel = this.originalFadeLevel;
            this.hideTitle(null, false, true);
        }
        this.setFade();
    },

    setFade : function (){
        // This line is b/c of a floating point bug in JavaScript
        this.currentFadeLevel = Math.round(this.currentFadeLevel * 10) / 10;
        if(this.titleElm){
            if(this.useMSFilter){
                this.titleElm.style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=" + (this.currentFadeLevel * 100) + ")";
            }
            else{
                this.titleElm.style.opacity = this.currentFadeLevel;
            }
        }
    },

    getWinSizeAndScroll : function (){
        var intWidth = document.body.offsetWidth;
        var intHeight = (typeof window.innerHeight != "undefined")? window.innerHeight : (document.documentElement && document.documentElement.clientHeight > 0)? document.documentElement.clientHeight : document.body.clientHeight;
        var intXScroll = (typeof window.pageXOffset != "undefined")? window.pageXOffset : document.body.scrollLeft;
        var intYScroll = (typeof window.window.pageYOffset != "undefined")? window.window.pageYOffset : (document.documentElement && document.documentElement.scrollTop > 0)? document.documentElement.scrollTop : document.body.scrollTop;
        return [intWidth, intHeight, intXScroll, intYScroll];
    },

    closeSession : function (oEvent){
        this.removeEvent(window, "load", function(){GLT.init();}, false);
        GLT = null;
        delete GLT;
    },

    addEvent : function (oObject, strEvent, oFunction, bCapture){
        if(oObject){
            if(oObject.addEventListener){
                oObject.addEventListener(strEvent, oFunction, bCapture);
            }
            else if(window.attachEvent){
                oObject.attachEvent(("on" + strEvent), oFunction)
            }
        }
    },

    removeEvent : function (oObject, strEvent, oFunction, bCapture){
        if(oObject){
            if(oObject.removeEventListener){
                oObject.removeEventListener(strEvent, oFunction, false);
            }
            else if(window.detachEvent){
                oObject.detachEvent(("on" + strEvent), oFunction)
            }
        }
    }
};
// ---
GLT.addEvent(window, "load", function(){GLT.init();}, false);
// ---
// Utility functions
// ---
function getElementsByAttribute(oElm, strTagName, strAttributeName, strAttributeValue){
    var arrElements = (strTagName == "*" && oElm.all)? oElm.all : oElm.getElementsByTagName(strTagName);
    var arrReturnElements = new Array();
    var oAttributeValue = (typeof strAttributeValue != "undefined")? new RegExp("(^|\\s)" + strAttributeValue + "(\\s|$)") : null;
    var oCurrent;
    var oAttribute;
    for(var i=0; i<arrElements.length; i++){
        oCurrent = arrElements[i];
        oAttribute = oCurrent.getAttribute && oCurrent.getAttribute(strAttributeName);
        if(typeof oAttribute == "string" && oAttribute.length > 0){
            if(typeof strAttributeValue == "undefined" || (oAttributeValue && oAttributeValue.test(oAttribute))){
                arrReturnElements.push(oCurrent);
            }
        }
    }
    return arrReturnElements;
}
// ---
if(typeof Array.prototype.push != "function"){
    Array.prototype.push = ArrayPush;
    function ArrayPush(value){
        this[this.length] = value;
    }
}

</script>
					<script src="boxover.js"></script>
					<div class="headTit">
						<h3 class="tit"><img src="/work/angel/guide/images/subTit09.png" alt="시스템" /></h3>
						<div class="location">HOME &gt; 게임가이드  &gt;  시스템</div>
					</div>
					<div class="ctnBox">
						<div class="top"></div>
						<div class="ctn">
							<!-- 컨텐츠시작 -->
							<h4 class="gudTab"><img src="/work/angel/guide/images/pet03IMG.gif" alt="" width="610" height="70" border="0" usemap="#Map" />
								<map name="Map" id="Map">
									<area shape="rect" coords="279,44,358,69" href="/work/angel/guide/pet03.php" alt="펫의 종류" />
									<area shape="rect" coords="175,44,277,69" href="/work/angel/guide/pet02.php" alt="펫인터페이스" />
									<area shape="rect" coords="81,44,173,69" href="/work/angel/guide/pet01.php" alt="펫에대하여" />
								</map>
							</h4>
							<p><img src="/work/angel/guide/images/pet03IMG01.jpg" alt="" border="0" usemap="#pet1" />
								<map name="pet1" id="pet1">
									<area shape="circle" coords="396,449,22" href="#" alt="" title="심해왕" />
									<area shape="circle" coords="395,375,22" href="#" alt="" title="솔베이져" />
									<area shape="circle" coords="398,310,22" href="#" alt="" title="캡틴아쿠아" />
									<area shape="circle" coords="395,243,22" href="#" alt="" title="심해의영웅" />
									<area shape="circle" coords="392,177,22" href="#" alt="" title="바다선봉자" />
									<area shape="circle" coords="272,441,22" href="#" alt="" title="마린다이버" />
									<area shape="circle" coords="274,361,22" href="#" alt="" title="마린스워머" />
									<area shape="circle" coords="272,283,22" href="#" alt="" title="섬머보이" />
									<area shape="circle" coords="269,203,22" href="#" alt="" title="워터보이" />
									<area shape="circle" coords="183,400,22" href="#" alt="" title="마린" />
									<area shape="circle" coords="175,258,22" href="#" alt="" title="물원소" />
									<area shape="circle" coords="110,333,22" href="#" alt="" title="물원소의알" />
									<area shape="rect" coords="497,76,541,115" href="#" alt="" title="마린다이버" />
									<area shape="rect" coords="428,76,472,115" href="#" alt="" title="마린스워머" />
									<area shape="rect" coords="358,75,402,114" href="#" alt="" title="섬머보이" />
									<area shape="rect" coords="291,76,335,115" href="#" alt="" title="워터보이" />
									<area shape="rect" coords="172,76,216,115" href="#" alt="" title="마린" />
									<area shape="rect" coords="114,77,158,116" href="#" alt="" title="물의원소" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG02.jpg" alt="" border="0" usemap="#pet2" />
								<map name="pet2" id="pet2">
									<area shape="circle" coords="413,418,22" href="#" alt="" title="폭렬특급버닝호" />
									<area shape="circle" coords="411,346,22" href="#" alt="" title="작렬초특급" />
									<area shape="circle" coords="412,274,22" href="#" alt="" title="작렬나이트" />
									<area shape="circle" coords="408,211,22" href="#" alt="" title="돌격하는폭주광" />
									<area shape="circle" coords="407,149,22" href="#" alt="" title="불꽃의폭주족" />
									<area shape="circle" coords="298,396,22" href="#" alt="" title="불꽃추종자" />
									<area shape="circle" coords="294,320,22" href="#" alt="" title="폭탄영웅" />
									<area shape="circle" coords="292,247,22" href="#" alt="" title="난폭한두목" />
									<area shape="circle" coords="291,177,22" href="#" alt="" title="위험한가스공" />
									<area shape="circle" coords="205,369,22" href="#" alt="" title="난폭한소년" />
									<area shape="circle" coords="198,229,22" href="#" alt="" title="난폭한원소" />
									<area shape="circle" coords="198,229,22" href="#" alt="" title="불원소" />
									<area shape="circle" coords="131,302,22" href="#" alt="" title="불원소의알" />
									<area shape="rect" coords="488,45,533,86" href="#" alt="" title="난폭한두목" />
									<area shape="rect" coords="426,47,471,88" href="#" alt="" title="폭탄영웅" />
									<area shape="rect" coords="354,46,399,87" href="#" alt="" title="난폭한두목" />
									<area shape="rect" coords="290,47,335,88" href="#" alt="" title="위험한 가스공" />
									<area shape="rect" coords="170,47,215,88" href="#" alt="" title="난폭한 소년" />
									<area shape="rect" coords="116,46,161,87" href="#" alt="" title="불 원소" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG03.jpg" alt="" border="0" usemap="#pet3" />
								<map name="pet3" id="pet3">
									<area shape="circle" coords="417,419,20" href="#" alt="" title="대공레인저" />
									<area shape="circle" coords="415,348,20" href="#" alt="" title="UFO왕자" />
									<area shape="circle" coords="412,276,20" href="#" alt="" title="스트라토스" />
									<area shape="circle" coords="409,212,20" href="#" alt="" title="빨간마후라" />
									<area shape="circle" coords="408,146,20" href="#" alt="" title="격추왕" />
									<area shape="circle" coords="300,401,20" href="#" alt="" title="스카이워터" />
									<area shape="circle" coords="300,319,20" href="#" alt="" title="쿨윈드" />
									<area shape="circle" coords="293,246,20" href="#" alt="" title="에어포스원" />
									<area shape="circle" coords="290,178,20" href="#" alt="" title="제트프린스" />
									<area shape="circle" coords="200,362,20" href="#" alt="" title="윈드" />
									<area shape="circle" coords="195,241,20" href="#" alt="" title="바람원소" />
									<area shape="circle" coords="131,302,20" href="#" alt="" title="바람원소알" />
									<area shape="rect" coords="499,50,538,88" href="#" alt="" title="스카이워터" />
									<area shape="rect" coords="427,50,466,88" href="#" alt="" title="쿨윈드" />
									<area shape="rect" coords="356,49,395,87" href="#" alt="" title="에어포스원" />
									<area shape="rect" coords="291,49,330,87" href="#" alt="" title="제트프린스" />
									<area shape="rect" coords="170,49,209,87" href="#" alt="" title="윈드" />
									<area shape="rect" coords="116,48,155,86" href="#" alt="" title="바람원소" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG04.jpg" alt="" border="0" usemap="#pet4" />
								<map name="pet4" id="pet4">
									<area shape="circle" coords="424,411,20" href="#" alt="" title="마이스터스" />
									<area shape="circle" coords="417,340,20" href="#" alt="" title="불도저스" />
									<area shape="circle" coords="415,281,20" href="#" alt="" title="빅매그넘" />
									<area shape="circle" coords="411,213,20" href="#" alt="" title="사일런트매그넘" />
									<area shape="circle" coords="412,143,20" href="#" alt="" title="크레이지드릴" />
									<area shape="circle" coords="300,396,20" href="#" alt="" title="디그다그" />
									<area shape="circle" coords="296,315,20" href="#" alt="" title="전기드릴맨" />
									<area shape="circle" coords="295,244,20" href="#" alt="" title="겐바르만" />
									<area shape="circle" coords="290,178,20" href="#" alt="" title="가텐어스" />
									<area shape="circle" coords="199,361,20" href="#" alt="" title="매드" />
									<area shape="circle" coords="197,238,20" href="#" alt="" title="흙원소" />
									<area shape="circle" coords="132,301,20" href="#" alt="" title="흙원소의알" />
									<area shape="rect" coords="498,47,534,85" href="#" alt="" title="디그다그" />
									<area shape="rect" coords="428,46,464,84" href="#" alt="" title="전기드릴맨" />
									<area shape="rect" coords="358,47,394,85" href="#" alt="" title="겐바르만" />
									<area shape="rect" coords="292,47,328,85" href="#" alt="" title="가텐어스" />
									<area shape="rect" coords="174,47,210,85" href="#" alt="" title="매드" />
									<area shape="rect" coords="116,47,152,85" href="#" alt="" title="흙원소" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG05.jpg" alt="" border="0" usemap="#pet5" />
								<map name="pet5" id="pet5">
									<area shape="circle" coords="424,450,21" href="#" alt="" title="지옥견" />
									<area shape="circle" coords="419,381,21" href="#" alt="" title="켈베로스" />
									<area shape="circle" coords="421,316,21" href="#" alt="" title="헬프레임" />
									<area shape="circle" coords="410,233,21" href="#" alt="" title="전투늑대" />
									<area shape="circle" coords="406,147,21" href="#" alt="" title="은색늑대" />
									<area shape="circle" coords="305,397,21" href="#" alt="" title="가드하운드" />
									<area shape="circle" coords="298,315,21" href="#" alt="" title="게이트하운드" />
									<area shape="circle" coords="294,244,21" href="#" alt="" title="바람타는늑대" />
									<area shape="circle" coords="292,175,21" href="#" alt="" title="흡혈늑대" />
									<area shape="circle" coords="200,364,21" href="#" alt="" title="베이비하운드" />
									<area shape="circle" coords="199,237,21" href="#" alt="" title="어린늑대" />
									<area shape="circle" coords="133,302,21" href="#" alt="" title="야수의알" />
									<area shape="rect" coords="501,48,539,84" href="#" alt="" title="가드하운드" />
									<area shape="rect" coords="429,47,467,83" href="#" alt="" title="게이트하운드" />
									<area shape="rect" coords="357,47,395,83" href="#" alt="" title="바람타는늑대" />
									<area shape="rect" coords="293,48,331,84" href="#" alt="" title="흡혈늑대" />
									<area shape="rect" coords="173,48,211,84" href="#" alt="" title="베이비하운드" />
									<area shape="rect" coords="115,49,153,85" href="#" alt="" title="어린늑대" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG06.jpg" alt="" border="0" usemap="#pet6" />
								<map name="pet6" id="pet6">
									<area shape="circle" coords="416,437,21" href="#" alt="" title="사무라이곰" />
									<area shape="circle" coords="417,368,21" href="#" alt="" title="타카노하나곰" />
									<area shape="circle" coords="410,299,21" href="#" alt="" title="이소룡곰" />
									<area shape="circle" coords="404,225,21" href="#" alt="" title="쿵푸왕곰" />
									<area shape="circle" coords="402,150,21" href="#" alt="" title="세기말곰" />
									<area shape="circle" coords="303,397,21" href="#" alt="" title="서커스곰" />
									<area shape="circle" coords="297,317,21" href="#" alt="" title="마술사곰" />
									<area shape="circle" coords="294,242,21" href="#" alt="" title="떼굴떼굴곰" />
									<area shape="circle" coords="293,176,21" href="#" alt="" title="훌라곰" />
									<area shape="circle" coords="203,357,21" href="#" alt="" title="어린곰" />
									<area shape="circle" coords="200,235,21" href="#" alt="" title="아기곰" />
									<area shape="circle" coords="132,302,21" href="#" alt="" title="맹수의알" />
									<area shape="rect" coords="498,46,541,85" href="#" alt="" title="서커스곰" />
									<area shape="rect" coords="426,47,469,86" href="#" alt="" title="마술사곰" />
									<area shape="rect" coords="355,47,398,86" href="#" alt="" title="떼굴떼굴곰" />
									<area shape="rect" coords="292,47,335,86" href="#" alt="" title="훌라곰" />
									<area shape="rect" coords="170,47,213,86" href="#" alt="" title="어린곰" />
									<area shape="rect" coords="115,47,158,86" href="#" alt="" title="아기곰" />
								</map>
							</p>
							<p><img src="/work/angel/guide/images/pet03IMG07.jpg" alt="" border="0" usemap="#pet7" />
								<map name="pet7" id="pet7">
									<area shape="circle" coords="407,433,22" href="#" alt="" title="가시선인장" />
									<area shape="circle" coords="407,369,22" href="#" alt="" title="인디언선인장" />
									<area shape="circle" coords="405,302,22" href="#" alt="" title="멕시칸선인장" />
									<area shape="circle" coords="402,234,22" href="#" alt="" title="안젤리크플라워" />
									<area shape="circle" coords="396,154,22" href="#" alt="" title="플로라" />
									<area shape="circle" coords="300,397,22" href="#" alt="" title="고함치는선인장" />
									<area shape="circle" coords="296,317,22" href="#" alt="" title="울보선인장" />
									<area shape="circle" coords="294,243,22" href="#" alt="" title="스위트플라워" />
									<area shape="circle" coords="290,174,22" href="#" alt="" title="프레그란스" />
									<area shape="circle" coords="205,356,22" href="#" alt="" title="메이지캐롯" />
									<area shape="circle" coords="202,235,22" href="#" alt="" title="맨드레이크" />
									<area shape="circle" coords="131,301,22" href="#" alt="" title="식물의알" />
									<area shape="rect" coords="497,49,537,84" href="#" alt="" title="고함치는선인장" />
									<area shape="rect" coords="430,49,470,84" href="#" alt="" title="울보선인장" />
									<area shape="rect" coords="356,50,396,85" href="#" alt="" title="스위트플라워" />
									<area shape="rect" coords="295,49,335,84" href="#" alt="" title="프레그란스" />
									<area shape="rect" coords="176,50,216,85" href="#" alt="" title="메이지캐롯" />
									<area shape="rect" coords="116,49,156,84" href="#" alt="" title="맨드레이크" />
								</map>
							</p>
							<!-- 컨텐츠끝 //-->
						</div>
						<div class="bot"></div>
					</div>
<?php include("../guide/_foot.php"); ?>
