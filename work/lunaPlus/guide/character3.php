<?
$skal = 2;
?>
<?php include("../_include/_head.php"); ?>
				<style type="text/css">
.glt-elm{
    position: absolute;
    left: 0;
    top: 0;
    width: 160px;
    color: #fff;
  font-family: Arial, sans-serif;
    opacity: 0.9;
    visibility: hidden;
}

.glt-elm p{
background:url(/guide/images/characterBoolBg1.gif) repeat-y;
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
    topImagePath : "/guide/images/characterBoolTop1.gif",
    bottomImagePath : "/guide/images/characterBoolBot1.gif",
    suppressAltTooltipsInIE : true,
    timeBeforeShow : 100,
    
    //풍선도움말 위치 지정
    titleOffsetX : -50, //x축 좌표값 지정
    titleOffsetY : 10, //y축 좌표값 지정

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
					<div class="headTit">
						<div class="tit"><img src="/work/lunaPlus/guide/images/subTit01.png" alt="게임정보" class="png24" /></div>
						<div class="location">HOME &gt; 게임소개 &gt; 게임정보</div>
					</div>
					<div><img src="/work/lunaPlus/guide/images/characterTit.gif" alt="루나 캐릭터" /></div>
					<ul class="guideTab">
						<li><a href="character1.php"><img src="/work/lunaPlus/guide/images/characterTab01.gif" alt="종족" /></a></li>
						<li><a href="character2.php"><img src="/work/lunaPlus/guide/images/characterTab02.gif" alt="클래스" /></a></li>
						<li><a href="character3.php"><img src="/work/lunaPlus/guide/images/characterTab03On.gif" alt="전직" /></a></li>
						<li><a href="character4.php"><img src="/work/lunaPlus/guide/images/characterTab04.gif" alt="스탯효과" /></a></li>
					</ul>
					
					<div><img src="/work/lunaPlus/guide/images/character3IMG.jpg" alt="" /></div>
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit1.gif" alt="휴먼파이터전직테크트리" /></div>					
					
					<table border="1" cellspacing="0" class="jobTable j1">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="휴먼 종족, 파이터 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 모든 무기에 공통으로 사용될 수 있는액티브 스킬과 HP 자연 회복 관련 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">파이터</span></td>
							<td><a style="cursor:pointer;" title="주로 방어적인 성향의 액티브 및 패시브 스킬을 습득한다. 방패(실드) 관련 액티브 및 패시브 스킬을 최초로 습득하는 클래스이다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다. 최대 HP 및 HP 회복률 관련 패시브 스킬을 습득한다.">가드</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '가드(GUARD)'의 발전형 클래스이다.물리 방어에 특화된 액티브 및 패시브 스킬을 습득한다. 방패(실드) 관련 고급 액티브 및 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">인펀트리맨</a></td>
							<td><a style="cursor:pointer;" title="방어 특화 클래스로, 3단계 클래스인 '인펀트리맨(INFANTRYMAN)'의 발전형 클래스이다. 파티 상태일 경우, 자신의 물리 방어력이 증가하는 유형의 패시브 스킬을 습득한다. 최대 HP 및 물리 방어력 증가 관련 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">팔랑크스</a></td>
							<td><a style="cursor:pointer;" title="방어에 특화된 직업으로 자신을 희생해서까지 파티원을 지켜내는 팔라딘입니다.">팰러딘</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="물리 공격에 특화된 클래스이다. 주로 공격적인 성향의 액티브 및 패시브 스킬을 습득한다. 양손 무기 관련 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">워리어</a></td>
							<td><a style="cursor:pointer;" title="물리적인 스킬 이외에 정신적인 측면이 강조된 마법 형태의 액티브 및 패시브 스킬을 습득한다. 검 종류의 무기와 관련된 액티브 스킬을 습득한다. 파이터 계열임에도 불구하고 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">소드맨</a></td>
							<td><a style="cursor:pointer;" title="방어 중심 하이브리드 계열 클래스. 3단계 클래스인 '소드맨(SWORDMAN)'의 발전형 클래스이다. 초급 수준의 힐(HEAL) 및 초급 버프(BUFF) 관련 마법 액티브 스킬을 습득한다. 물리 방어력 및 마법 방어력과 관련된 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">나이트</a></td>
							<td><a style="cursor:pointer;" title="총기류를 사용하면서도 헤비아머를 입고 다니는 다재다능한 팬저입니다.">팬저</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="휴먼 종족만 선택 가능한 클래스이다. 2단계 클래스인 '워리어(WARRIOR)'의 발전형 클래스이다. 물리 공격에 특화된 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">머셔너리</a></td>
							<td><a style="cursor:pointer;" title="공격 특화 클래스로, 휴먼 종족만 선택 가능하다. 3단계 클래스인 '머셔너리(MERCENARY)'의 발전형 클래스이다. 방어력을 포기하면서 물리 공격력을 극대화 시키는 유형의 액티브 및 패시브 스킬을 습득한다. 모든 종류의 무기와 관련된 공격형 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">글래디에이터</a></td>
							<td><a style="cursor:pointer;" title="처음에는 신성마법을 배웠지만 이후 원소마법까지 능숙하게 다루게 된 크루세이더입니다.">크루세이더</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="양손에 검을 하나씩 들고 다니며 검무보다 더 화려한 칼 솜씨를 뽐내는 검의 달인입니다.">소드마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="파괴본능에 충실한 디스트로이어는 주특기는 자신의 살을 내어주고 상대의 뼈를 취하는 것입니다.">디스트로이어</a></td>
						</tr>
					</table>

					<div class="jobInfo">* 머셔너리, 디스트로이어는 다른 종족은 선택할 수 없는 휴먼 파이터 고유의 직업입니다.</div>
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit2.gif" alt="엘프파이터전직테크트리" /></div>
					<table border="1" cellspacing="0" class="jobTable j1">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="엘프 종족, 파이터 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 모든 무기에 공통으로 사용될 수 있는 액티브 스킬과 HP 자연 회복 관련 패시브 스킬을 습득한다. 엘프 종족의 특성에 따라 마법과 관련된 기초적인 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">파이터</a></td>
							<td><a style="cursor:pointer;" title="주로 방어적인 성향의 액티브 및 패시브 스킬을 습득한다. 방패(실드) 관련 액티브 및 패시브 스킬을 최초로 습득하는 클래스이다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다. 최대 HP 및 HP 회복률 관련 패시브 스킬을 습득한다.">가드</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '가드(GUARD)'의 발전형 클래스이다.물리 방어에 특화된 액티브 및 패시브 스킬을 습득한다. 방패(실드) 관련 고급 액티브 및 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">인펀트리맨</a></td>
							<td><a style="cursor:pointer;" title="방어 특화 클래스로, 3단계 클래스인 '인펀트리맨(INFANTRYMAN)'의 발전형 클래스이다. 파티 상태일 경우, 자신의 물리 방어력이 증가하는 유형의 패시브 스킬을 습득한다. 최대 HP 및 물리 방어력 증가 관련 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">팔랑크스</a></td>
							<td><a style="cursor:pointer;" title="방어에 특화된 직업으로 자신을 희생해서까지 파티원을 지켜내는 팔라딘입니다.">팰러딘</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="물리 공격에 특화된 클래스이다. 주로 공격적인 성향의 액티브 및 패시브 스킬을 습득한다. 양손 무기 관련 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">워리어</a></td>
							<td><a style="cursor:pointer;" title="물리적인 스킬 이외에 정신적인 측면이 강조된 마법 형태의 액티브 및 패시브 스킬을 습득한다. 검 종류의 무기와 관련된 액티브 스킬을 습득한다. 파이터 계열임에도 불구하고 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">소드맨</a></td>
							<td><a style="cursor:pointer;" title="방어 중심 하이브리드 계열 클래스. 3단계 클래스인 '소드맨(SWORDMAN)'의 발전형 클래스이다. 초급 수준의 힐(HEAL) 및 초급 버프(BUFF) 관련 마법 액티브 스킬을 습득한다. 물리 방어력 및 마법 방어력과 관련된 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">나이트</a></td>
							<td><a style="cursor:pointer;" title="총기류를 사용하면서도 헤비아머를 입고 다니는 다재다능한 팬저입니다.">팬저</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="휴먼 종족만 선택 가능한 클래스이다. 2단계 클래스인 '워리어(WARRIOR)'의 발전형 클래스이다. 물리 공격에 특화된 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">머셔너리</a></td>
							<td><a style="cursor:pointer;" title="엘프 종족만 선택 가능한 클래스로, 3단계 클래스인 '소드맨(SWORDMAN)'의 발전형 클래스이다. 같은 단계의 '나이트(KNIGHT)' 클래스에서 마법 계열쪽으로 좀더 특화된 유형의 클래스이다. 자연의 힘과 정령의 힘을 이용한 버프(BUFF) 관련 마법 액티브 스킬을 습득한다. 마법 방어력 및 MP 회복률 관련 패시브 스킬을 습득한다. 금속 계열 방어구와 관련된 패시브 스킬을 습득한다.">룬나이트</a></td>
							<td><a style="cursor:pointer;" title="처음에는 신성마법을 배웠지만 이후 원소마법까지 능숙하게 다루게 된 크루세이더입니다.">크루세이더</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="양손에 검을 하나씩 들고 다니며 검무보다 더 화려한 칼 솜씨를 뽐내는 검의 달인입니다.">소드마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="어떤 상황에서도 도움이 되는 다양한 버프스킬이 주특기 이지만 이도류를 사용하는 매그너스의 공격도 쉽게 볼 수 없습니다.">매그너스</a></td>
						</tr>
					</table>
					<div class="jobInfo">* 룬 나이트, 매그너스는 엘프 파이터 전용 직업입니다. (휴먼, 마족에는 없는 직업)</div>
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit3.gif" alt="휴먼로그전직테크트리" /></div>					
					
					<table border="1" cellspacing="0" class="jobTable j2">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="휴먼 종족, 로그 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 회피 능력 및 크리티컬 공격 능력 증가와 관련된 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">로그</a></td>
							<td><a style="cursor:pointer;" title="활 종류의 무기를 사용할 수 있는 클래스이다. 필드 플레이에 유용한 액티브 및 패시브 스킬을 습득한다. 자신의 이동속도를 약간 상승시킬 수 있는 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">보이저</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '보이저(VOYAGER)'의 발전형 클래스이다. 활 종류의 무기를 사용하는 데에 있어서 데미지 및 사정거리를 증가시키는 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">아처</a></td>
							<td><a style="cursor:pointer;" title="3단계 클래스인 '아처(ARCHER)'의 발전형 클래스이다. 활 계열 무기 사용에 있어서 사정거리 증가 및 재사용 시간 감소와 관련된 액티브 및 패시브 스킬을 습득한다. 민첩(DEX) 수치를 증가시키는 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">레이저</a></td>
							<td><a style="cursor:pointer;" title="총기류에 특화된 스나이퍼는 매우 먼거리에서도 아주 정확한 조준을 통해 치명적인 공격을 합니다.">스나이퍼</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="단검 무기를 사용할 수 있는 클래스이다. 좁은 영역에서의 플레이에 유용한 액티브 및 패시브 스킬을 습득한다. 쿨타임이 매우 긴 대신에 한 방의 위력이 강력한 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">루피안</a></td>
							<td><a style="cursor:pointer;" title="휴먼 종족만 선택 가능한 클래스이다. 2단계 클래스인 '루피안(RUFFIAN)'의 발전형 클래스이다. 민첩을 증가시키는 액티브 스킬을 습득하며, 공격과 관련된 패시브 및 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">시프</a></td>
							<td><a style="cursor:pointer;" title="단검 계열 하이브리드 클래스로 단검 계열 무기를 주로 사용한다. 몬스터 사냥 시의 아이템 습득 확률과 관련된 액티브 스킬을 습득한다. 트레져 헌터 클래스만 사용할 수 있는 각종 유용한 도구 아이템을 사용할 수 있다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">트레져헌터</a></td>
							<td><a style="cursor:pointer;" title="인트래퍼는 사냥터 곳곳에 트랩을 심어두어 적들을 쥐도새도 모르게 전장의 이슬로 만들어 버립니다.">인트래퍼</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="단검 계열 공격 특화 클래스로 휴먼 종족만 선택 가능하다. 3단계 클래스인 '시프(THIEF)'의 발전형 클래스이다. 방어력을 포기하면서 물리 공격력을 극대화 시키는 유형의 액티브 및 패시브 스킬을 습득한다. 일격필살 형태의 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">어쎄신</a></td>
							<td><a style="cursor:pointer;" title="활에 특화된 아크레인저는 화살에 마법의 힘을 실어 다수의 적에게 강력한 공격을 합니다.">아크레인져</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="양손에 단검을 하나씩 들고 돌진하는 블레이드 테이커의 공격을 받은 적들은 순식간에 피분수로 되어 버립니다.">블레이드테이커</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="jobInfo">* 시프, 어쎄신, 블레이드 테이커는 휴먼 로그 전용 직업입니다. (엘프, 마족에는 없는 직업)</div>
					
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit4.gif" alt="엘프로그전직테크트리" /></div>
					<table border="1" cellspacing="0" class="jobTable j2">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="엘프 종족, 로그 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 회피 능력 및 크리티컬 공격 능력 증가와 관련된 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다. 엘프 종족의 특성에 따라 마법과 관련된 기초적인 액티브 스킬을 습득한다.">로그</a></td>
							<td><a style="cursor:pointer;" title="활 종류의 무기를 사용할 수 있는 클래스이다. 필드 플레이에 유용한 액티브 및 패시브 스킬을 습득한다. 자신의 이동속도를 약간 상승시킬 수 있는 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">보이저</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '보이저(VOYAGER)'의 발전형 클래스이다. 활 종류의 무기를 사용하는 데에 있어서 데미지 및 사정거리를 증가시키는 액티브 및 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">아처</a></td>
							<td><a style="cursor:pointer;" title="3단계 클래스인 '아처(ARCHER)'의 발전형 클래스이다. 활 계열 무기 사용에 있어서 사정거리 증가 및 재사용 시간 감소와 관련된 액티브 및 패시브 스킬을 습득한다. 민첩(DEX) 수치를 증가시키는 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">레이저</a></td>
							<td><a style="cursor:pointer;" title="총기류에 특화된 스나이퍼는 매우 먼거리에서도 아주 정확한 조준을 통해 치명적인 공격을 합니다.">스나이퍼</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="단검 무기를 사용할 수 있는 클래스이다. 좁은 영역에서의 플레이에 유용한 액티브 및 패시브 스킬을 습득한다. 쿨타임이 매우 긴 대신에 한 방의 위력이 강력한 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">루피안</a></td>
							<td><a style="cursor:pointer;" title="엘프 종족만 선택 가능한 클래스이다. 2단계 클래스인 '보이저(VOYAGER)'와 '루피안(RUFFIAN)'의 중간 성격의 클래스이다. 자체 회복 및 초급 버프 계열 유형의 마법 액티브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">스카우트</a></td>
							<td><a style="cursor:pointer;" title="단검 계열 하이브리드 클래스로 단검 계열 무기를 주로 사용한다. 몬스터 사냥 시의 아이템 습득 확률과 관련된 액티브 스킬을 습득한다. 트레져 헌터 클래스만 사용할 수 있는 각종 유용한 도구 아이템을 사용할 수 있다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">트레져헌터</a></td>
							<td><a style="cursor:pointer;" title="인트래퍼는 사냥터 곳곳에 트랩을 심어두어 적들을 쥐도새도 모르게 전장의 이슬로 만들어 버립니다.">인트래퍼</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="마법 중심 하이브리드 계열 클래스로 엘프 종족만 선택가능하다. 3단계 클래스인 '스카우트(SCOUT)'의 발전형 클래스이다. 자연의 힘과 정령의 힘을 이용한 버프(BUFF) 관련 마법 액티브 스킬을 습득한다. 타인의 능력을 향상 시켜주는 다양한 형태의 보조 마법 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">룬워커</a></td>
							<td><a style="cursor:pointer;" title="활에 특화된 아크레인저는 화살에 마법의 힘을 실어 다수의 적에게 강력한 공격을 합니다.">아크레인져</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="자연과 동화되어 자연의 힘을 빌어 동료들에게 전달하는 템퍼 마스터입니다.">템퍼마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="jobInfo">* 시프, 어쎄신, 블레이드 테이커는 휴먼 로그 전용 직업입니다. (엘프, 마족에는 없는 직업)</div>
					
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit5.gif" alt="휴먼메이지전직테크트리" /></div>
					
					<table border="1" cellspacing="0" class="jobTable j3">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="휴먼 종족, 메이지 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 간단한 공격 및 체력 회복과 관련된 액티브 스킬을 습득한다. MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">메이지</a></td>
							<td><a style="cursor:pointer;" title="HP 회복 마법 계열에 특화된 클래스이다. 자신 및 타인의 HP를 회복시키는 액티브 스킬을 습득한다. 자신 및 타인의 상태 이상을 치료하는 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">클레릭</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '클레릭(CLERIC)'의 발전형 클래스이다. 고급 힐 계열 액티브 스킬을 습득한다. 초급 단계의 버프(BUFF) 관련 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">프리스트</a></td>
							<td><a style="cursor:pointer;" title="힐 계열 마법 전문 클래스로 3단계 클래스인 '프리스트(PRIEST)'의 발전형 클래스이다. 강력한 위력의 힐 마법 액티브 스킬을 습득한다. 언데드(UNDEAD) 유형의 몬스터에게 피해를 줄 수 있는 신성 공격 계열 마법 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">비솝</a></td>
							<td><a style="cursor:pointer;" title="다양한 힐링 스킬을 기본으로 각종 보조 스킬을 모두 섭렵하고 있는 카티날입니다.">카디날</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="마법 공격에 특화된 클래스이다. 4대 원소와 관련된 공격 마법 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">위자드</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '위자드(WIZARD)'의 발전형 클래스이다. 고급 원소 계열 공격 마법 액티브 스킬을 습득한다. 상태 이상을 일으키는 저주 등의 디버프(DEBUFF) 계열 마법 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">소서러</a></td>
							<td><a style="cursor:pointer;" title="공격 계열 마법 전문 클래스로 3단계 클래스인 '소서러(SORCERER)'의 발전형 클래스이다. 강력한 위력의 원소 계열 공격 마법 액티브 스킬을 습득한다. 강력한 위력의 원소 계열 상태 이상 마법(DEBUFF) 액티브 스킬을 습득한다. 지능(INT) 수치 및 마법 공격력 증가와 관련된 액티브 및 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">워록</a></td>
							<td><a style="cursor:pointer;" title="보통 마법사와는 다르게 체력마저 강철처럼 만들어 약점이 없는 소울아비터입니다.">소울아비터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="휴먼 종족만 선택 가능한 클래스이다. 자기 자신에게만 효력을 나타내는 버프 및 힐 계열 마법 액티브 스킬을 습득한다. 스태프 무기와 관련된 공격형 액티브 스킬을 습득한다. 최대 HP 및 HP 회복률 관련 패시브 스킬을 습득한다. 로브 및 라이트 아머 방어구와 관련된 패시브 스킬을 습득한다.">몽크</a></td>
							<td><a style="cursor:pointer;" title="마법 및 물리 공격 복합 하이브리드 클래스로 휴먼 종족만 선택가능하다. 3단계 클래스인 '몽크(MONK)'의 발전형 클래스이다. 명상을 통해 마법적인 능력을 증가시키고, 육체적인 수련도 함께 병행하는 스타일의 솔로잉 타입 클래스이다. 자기 자신을 강화시키는 버프 계열 마법 및 공격형 액티브 마법 스킬을 습득한다. 최대 HP 및 HP 회복률 관련 패시브 스킬을 습득한다. 가죽 계열 방어구와 관련된 패시브 스킬을 습득한다.">인콰이어러</a></td>
							<td><a style="cursor:pointer;" title="마음만 먹으면 작은 도시정도는 순식간에 날려버릴 수 있는 그랜드 마스터 입니다.">그랜드마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="악마의 힘을 주무기로 하는 네크로맨서는 죽음과 피를 숭배하며 고문과 같은 고약한 취미를 즐깁니다.">네크로맨서</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="jobInfo">* 몽크, 인콰이어러, 네크로맨서는 휴먼 메이지 전용 직업입니다. (엘프, 마족에는 없는 직업)</div>
					
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit6.gif" alt="엘프메이지전직테크트리" /></div>
					<table border="1" cellspacing="0" class="jobTable j3">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="엘프 종족, 메이지 계열의 첫번째 클래스이다. 최초 게임 시작 단계의 캐릭터 생성 과정에서 선택할 수 있다. 간단한 공격 및 체력 회복과 관련된 액티브 스킬을 습득한다. MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">메이지</a></td>
							<td><a style="cursor:pointer;" title="HP 회복 마법 계열에 특화된 클래스이다. 자신 및 타인의 HP를 회복시키는 액티브 스킬을 습득한다. 자신 및 타인의 상태 이상을 치료하는 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">클레릭</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '클레릭(CLERIC)'의 발전형 클래스이다. 고급 힐 계열 액티브 스킬을 습득한다. 초급 단계의 버프(BUFF) 관련 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">프리스트</a></td>
							<td><a style="cursor:pointer;" title="힐 계열 마법 전문 클래스로 3단계 클래스인 '프리스트(PRIEST)'의 발전형 클래스이다. 강력한 위력의 힐 마법 액티브 스킬을 습득한다. 언데드(UNDEAD) 유형의 몬스터에게 피해를 줄 수 있는 신성 공격 계열 마법 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">비솝</a></td>
							<td><a style="cursor:pointer;" title="다양한 힐링 스킬을 기본으로 각종 보조 스킬을 모두 섭렵하고 있는 카티날입니다.">카디날</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="마법 공격에 특화된 클래스이다. 4대 원소와 관련된 공격 마법 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">위자드</a></td>
							<td><a style="cursor:pointer;" title="2단계 클래스인 '위자드(WIZARD)'의 발전형 클래스이다. 고급 원소 계열 공격 마법 액티브 스킬을 습득한다. 상태 이상을 일으키는 저주 등의 디버프(DEBUFF) 계열 마법 액티브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">소서러</a></td>
							<td><a style="cursor:pointer;" title="공격 계열 마법 전문 클래스로 3단계 클래스인 '소서러(SORCERER)'의 발전형 클래스이다. 강력한 위력의 원소 계열 공격 마법 액티브 스킬을 습득한다. 강력한 위력의 원소 계열 상태 이상 마법(DEBUFF) 액티브 스킬을 습득한다. 지능(INT) 수치 및 마법 공격력 증가와 관련된 액티브 및 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">워록</a></td>
							<td><a style="cursor:pointer;" title="보통 마법사와는 다르게 체력마저 강철처럼 만들어 약점이 없는 소울아비터입니다.">소울아비터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="버프 계열 마법 전문 클래스로 엘프 종족만 선택가능하다. 3단계 클래스인 '프리스트(PRIEST)'의 발전형 클래스이다. 자연의 힘과 정령의 힘을 이용한 각종 버프 마법 액티브 스킬을 습득한다. 자연의 힘을 끌어내어 파티원에게 도움을 주는 마법 액티브 스킬을 습득한다. 최대 MP 및 MP 회복률 관련 패시브 스킬을 습득한다. 천 계열 방어구와 관련된 패시브 스킬을 습득한다.">엘리멘탈마스터</a></td>
							<td><a style="cursor:pointer;" title="마음만 먹으면 작은 도시정도는 순식간에 날려버릴 수 있는 그랜드 마스터 입니다.">그랜드마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><a style="cursor:pointer;" title="파괴하는 자들을 증오하지만 절대로 다투지 않고 자연을 지켜내는 룬마스터입니다.">룬마스터</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="jobInfo">* 엘리멘탈마스터, 룬마스터는 엘프 메이지 전용 직업입니다. (휴먼, 마족에는 없는 직업)	</div>
					
					
					
					
					
					<div class="jobTit"><img src="/work/lunaPlus/guide/images/character3Tit7.gif" alt="마족전직테크트리" /></div>
					<table border="1" cellspacing="0" class="jobTable j4">
						<tr>
							<th class="left">1차직업</th>
							<th>2차직업</th>
							<th>3차직업</th>
							<th>4차직업</th>
							<th class="right">5차직업</th>
						</tr>
						<tr>
							<td><a style="cursor:pointer;" title="">어프렌티스</a></td>
							<td><a style="cursor:pointer;" title="">컴배턴트</a></td>
							<td><a style="cursor:pointer;" title="">익스퍼트</a></td>
							<td><a style="cursor:pointer;" title="">마스터</a></td>
							<td><a style="cursor:pointer;" title="">어비스로드</a></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
					<div class="jobInfo">* 파괴의 힘을 능숙하게 사용하는 마족은 그들만의 특수한 마나의 활용법인 '가호'를 이용해 <br />
					 &nbsp;&nbsp;&nbsp;자신의 능력을 특화 시키며, 별도의 직업변경 없이 승급을 통해 강해집니다.</div>
					
					
				<?php include("../_include/_foot.php"); ?>
