//////////////////////////////////////////////
// Spoplay.com  미니게임 킹콩 UI 스크립트   //
// 김기현 : kimkee@naver.com         /////////
// Date : 2016-01-01 ~ 2016-01-08 	 /////////
//////////////////////////////////////////////

var loadingStat  = false; // 이미지 시쿼스 데이타 로딩 여부;
var timeIngStat  = false; // 시간 카운터 중인가
var throwStat    = false; // 던지기 동작 중인가.
var balltimeStat = false; // 공굴러가는 중인가.
var kongIdleStat = false; // 킹콩 숨쉬기 중인가
var lampAniStat  = false; // 램프반짝거리는 중인가.
var resultStat   = false; // 결과 메시지 빤짝이는 중인가


var uiGame = {  //  공통 UI
	init:function(){
		$(window).on("load",function(){
			$(document).on({ // a , button 
				mousedown: function(){ $(this).addClass("press");    },
				mouseup  : function(){ $(this).removeClass("press"); },
				mouseout : function(){ $(this).removeClass("press"); }
			},"a,button");	
				
			$(document).on("click",".popLayerSelect .panSelect .selectList>li>button.btn",function(){
				if( $(this).hasClass("active") ){
					$(this).removeClass("active");
				}else{
					$(this).addClass("active").siblings("button.btn").removeClass("active");
				}
			});
		});
		
	},
	mdScreen:{
		show:function(){
			$("body>.wrap").append('<div class="mdScreen"></div>');
		},
		hide:function(){ 
			$(".mdScreen").remove();
		}
	},
	loading:{
		show:function(){
			$("body>.wrap").append('<div class="loading"></div>');
			$(".mdScreen").css("z-index","1000");
			uiGame.mdScreen.show();
		},
		hide:function(){
			$(".loading").remove();	
			$(".mdScreen").css("z-index","");
			uiGame.mdScreen.hide();
		}
	},
	msg:{
		open:function(msg,cls){
			$pop =
			'<div class="sysMsg">'+
				'<div class="msg">'+msg+'</div>'+
				'<button class="close" onclick="javascript:uiGame.msg.close();">닫기</button>'+
			'</div>' ;
			$("body>.wrap").append($pop);
			$sysMsg = $(".sysMsg");
			$sysMsg.css({
				"width": $sysMsg.outerWidth(), "min-width": $sysMsg.outerWidth(), "margin-top": - $sysMsg.outerHeight() *.5, "margin-left": - $sysMsg.outerWidth() *.5
			}).fadeIn(200);
			if(cls=="close"){
				setTimeout(function(){
					uiGame.msg.close();
				},2500);
			}
		},
		close:function(){
			$sysMsg.fadeOut(400,function(){
				$(this).remove();
			});
		}
	},
	gameOut:function(){
		if(confirm("게임을 종료하시겟습니까?")){
			window.self.close();
		}
	}
};

var popLayerSelect = { // 선택창
	pop : $(".popLayerSelect"),
	init : function(){
		this.pop.find(".panPresult .list").mCustomScrollbar({
			scrollInertia:100, mouseWheel:{	scrollAmount:500, preventDefault:true}
		});
	},
	open : function(){
		this.init();
		this.pop.show();
	},
	close : function(){
		this.pop.hide();
	}
};

var popLayerBet = { // 베팅창
	pop : $(".popLayerBet"),
	init : function(){ },
	open : function(){
		this.pop.show("clip",100);
		this.init();
	},
	close : function(){
		this.pop.hide("clip",100);
	}
};

var popLayerResult = { // 게임 결과창
	pop : $(".popLayerResult"),
	init : function(){ },
	open : function(st){
		uiGame.mdScreen.hide();
		
		this.pop.find(">.status").removeClass("success , fail").addClass(""+st+"");
		console.log(st);
		if(st==="success"){
			this.pop.show("clip",100);
		}else{
			this.pop.show("clip",100);
		}
		resultMsg.init();	
		uiGame.mdScreen.show();
		this.pop.find(".listTable").mCustomScrollbar({
			scrollInertia:100, mouseWheel:{	scrollAmount:500, preventDefault:true}
		});
		this.init();
	},
	close : function(){
		this.pop.hide("clip",100);
		uiGame.mdScreen.hide();
		resultMsg.end();
	}
};




var gameTimeCount = function(min,sec){ // 타임 카운터 

	popLayerBet.close();
	popLayerResult.close();
	kingkong.idle.init();
	kingkong.lamp.init();
	
	var isFirst = true;
	var endTime = new Date(00, 00, 00, 00, min, sec);;
	var nowTime = new Date(00, 00, 00, 00, 00, 00);
	var timeLeft = (endTime - nowTime) / 1000;
	var timeSinceLast = 0;
	var $timeNumber = $(".timeSecond");
	var timeFreeze = 5; //베팅 얼림 시간
	
	setTimeout(function(){
		popLayerSelect.open(); //  선택창 열기	
	},1000);
	
	if(!timeIngStat){
		timeIngStat = true;
		
		$(this).everyTime(1000, "countTimer", function () {
			var outputString = '';
			if(timeLeft < 0) {
				//카운터 끝났을때
				$(".timeMsgBox").hide();
				
				//////////////////////////////////////////////////////
				/**/ kingkong.throw.init(1); // 킹공 던지기 동작 애니 시작
				//////////////////////////////////////////////////////
				
				timeIngStat = false;
				return false;

			}else{
				//카운터 중일때
				var dayCount  = Math.floor(timeLeft / 86400);
				var hourCount = Math.floor((timeLeft - dayCount * 86400) / 3600);
				var minCount  = Math.floor((timeLeft - (dayCount * 86400) - (hourCount * 3600)) / 60);
				var secCount  = timeLeft - (dayCount * 86400) - (hourCount * 3600) - (minCount * 60);
				console.log(timeLeft);
				
				if(timeLeft <= timeFreeze) { // 베팅 얼리기 때
					popLayerSelect.close();
					popLayerBet.close();
					popLayerResult.close();
				}
				
				outputString += "<span class='cellB cellM'>"+ minCount + "</span>" + '<span class="dot">분</span> ' + "<span class='cellB cellS'>"+ secCount +"</span><span class='dot'>초 </span>";

				timeLeft -= 1;
				timeSinceLast += 1;
				$timeNumber.html(outputString);
				if(minCount == 0){
					$timeNumber.find(".cellM").hide().next(".dot").hide();
				}
				$(".timeMsgBox").show();
			}
		});
	}else{ return ;}
};




var kingkong = { 
	throw:{ //  던지기동작  //////////////
		init:function(cho){
			popLayerSelect.close();
			popLayerBet.close();
			if(!throwStat&&!balltimeStat){
				throwStat = true;
				$(".kingkong").hide();
				$(".throw").show();
				this.count(cho);
			}else{ return;}
		},
		count:function(cho){
			var i = 0, w = 157, h = 143 , speed = 100;
			this.timer = setInterval(function(){ 
				i = i - h;
				kingkong.throw.gm(i);
				if( i <= -(h*24) ){
					i = 0;
					kingkong.throw.end();
				}
				if( i <= -(h*12) ){
					///////////////////////////////////////////////
					kingkong.ball.init(cho); ////공굴러가기 시작///
					///////////////////////////////////////////////
				}
			},speed);
		},
		gm:function(i){
			$(".throw").css("background-position","0px "+i+"px");
			// $(".throw.right").css("background-position-x","-154px");
		},
		end:function(){
			if(throwStat){ clearInterval(this.timer); }
			throwStat = false;
		}
	},
	ball:{
		init:function(cho){
			if(!balltimeStat){
				balltimeStat = true;

				//cho 1[1,2]  cho 2[3,4] cho 3[5,6]
				cho = cho * 2 - (  parseInt( Math.random() * 2 )  ) ; console.log(cho);

				$(".gmotion").show().append('<ul></ul>').addClass("ani"+cho);
				for( j=1; j<=89 ; j++ ){ // 결과당 애니컷 89 개
					$(".gmotion ul").append('<li><img src="./img/motion/'+cho+'/'+j+'.png"></li>');
				}
				this.count(cho);
			}else{ return; }
		},
		count:function(cho){
			var i = 0 , speed = 50;
			this.timer = setInterval(function(){
				i ++ ;
				$(".gmotion ul>li").hide();
				kingkong.ball.gm(i,cho);
				if( i>= 89){
					kingkong.ball.gm(i,cho);
					kingkong.ball.end(cho);
					i = 0;
				}
			},speed);
		},
		gm:function(i,cho){
			$(".gmotion ul>li:nth-child("+i+")").show();
		},
		end:function(cho){
			if(balltimeStat){clearInterval(this.timer);}
			balltimeStat = false;
			$(".gmotion").hide().removeClass("ani"+cho);
			$(".gmotion ul").remove();
			setTimeout(function(){
				$(".throw").hide();
				$(".kingkong").show();
				//////////////////////////////////////////////////
				popLayerResult.open('success'); // 결과 창 열기///
				//////////////////////////////////////////////////	
			},300);
		}
	},
	idle:{
		init:function(){
			if(!kongIdleStat){
				kongIdleStat = true;
				$(".kingkong").show();
				this.count();
			}else{ return; }
		},
		count:function(){
			var i = 0 , speed = 100;
			this.timer = setInterval(function(){
				i ++ ;
				kingkong.idle.gm(i);
				if( i >= 25){
					kingkong.idle.gm(i);
					//kingkong.idle.end();
					i = 0;
				}		
			},speed);
		},
		gm:function(i){
			$(".kingkong img").attr("src","./img/kingkong/idle/"+i+".png");
		},
		end:function(){
			if(kongIdleStat){ clearInterval(this.timer); }
			kongIdleStat = false;
		}
	},
	lamp:{
		init:function(){
			if(!lampAniStat){
				lampAniStat = true;
				this.count();
			}else{ return; }
		},
		count:function(){
			var i = 0, h = 60 , speed = 100;
			this.timer = setInterval(function(){ 
				i = i - h;
				kingkong.lamp.gm(i);
				if( i <= -(h*14) ){
					i = 0;
				}
			},speed);
		},
		gm:function(i){
			$(".lamp em").css("background-position","0px "+i+"px");
		},
		end:function(){
			if(lampAniStat){ clearInterval(this.timer); }
			lampAniStat = false;
		}
	}
};




var resultMsg = { // 결과 창 메시지 빤짝.
	init:function(){
		popLayerSelect.close();
		popLayerBet.close();
		kingkong.idle.end();
		kingkong.lamp.end();
		if(!resultStat){
			resultStat = true;
			this.count();
		}else{ return; }
	},
	count:function(){
		var i = 0,  w = 150, h = 72 , speed = 50;
		this.timer = setInterval(function(){
			i = i - h;
			resultMsg.gm(i);
			if(i<= -(h*15)){
				i = 0;
			}
		},speed);
	},
	gm:function(i){
		$(".popLayerResult .status").css("background-position","0px "+i+"px");
		$(".popLayerResult .status.fail").css("background-position-x","-153px");
	},
	end:function(){
		if(resultStat){
			clearInterval(this.timer);
		}
		resultStat = false;
	}
};



var preLoad = { // 이미지 시퀀스 데이타 뿌리고 로딩 완료  여부 체크
	init:function(){
		$("body").append('<div class="preLoad"></div>');
		for( i=1; i<=6 ; i++ ){ // 결과종류 3 폴더
			for( j=1; j<=89 ; j++ ){ // 결과당 애니컷 89 개
				$(".preLoad").append('<img src="./img/motion/'+i+'/'+j+'.png">');
			}
		}
		for( i=1; i<=25 ; i++ ){ // 킹콩 숨쉬기 애니컷 25 개
			$(".preLoad").append('<img src="./img/kingkong/idle/'+i+'.png">');
		}
		this.load();
	},
	load:function(){
		$(".preLoad img:last-child").on("load",this.success);
	},
	success:function(){
		uiGame.loading.hide();
		loadingStat = true;
		
		
		gameTimeCount('00','15');
		
	}
};




uiGame.loading.show();
preLoad.init();

uiGame.init();


