// JavaScript Document 
$(document).ready(function () {    	

	
	$("body" ).on( "click", ".noticeWrap .box .btnClose", function() {
		$( this ).parent(".box").parent(".noticeWrap").slideUp(500);
	});

	vBodyWidthFuc = function(){  
		vBodyWidth = $(window).width() 
		if(vBodyWidth <= 980){
			//$('#scrollbar1').tinyscrollbar_update();	
		}
		if(vBodyWidth > 980){
			//$('#scrollbar1').tinyscrollbar_update();

		}
	}
	$(window).resize(function() { 
		vBodyWidthFuc();
	});
	
	
	// 스크롤 TOP버튼
	$('.topBtn a.up').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 300);   // 애니메이션 속도 작을 수록 빨라요~
		return false;
	});
	$('.topBtn a.down').click(function () {
		var botScroll = $(document).height();
		$('body,html').animate({
			scrollTop: botScroll
		}, 300);   // 애니메이션 속도 작을 수록 빨라요~
		return false;
	});
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 700) {
			$(".topBtn").fadeIn(200);
		} else {
			$(".topBtn").fadeOut(500);
		};
	});



	var sdRandom = Math.ceil((  Math.random() * 4)  );
	$('#slides').slidesjs({
		width: 700,
		height: 506,
		autostart: false,
		start: 1,//sdRandom
		play: {
			active: true,
			// [boolean] Generate the play and stop buttons.
			// You cannot use your own buttons. Sorry.
			effect: "slide",
			// [string] Can be either "slide" or "fade".
			interval: 2000,
			// [number] Time spent on each slide in milliseconds.
			auto: false,
			// [boolean] Start playing the slideshow on load.
			swap: true,
			// [boolean] show/hide stop and play buttons
			pauseOnHover: true,
			// [boolean] pause a playing slideshow on hover
			restartDelay: 2500
			// [number] restart delay on inactive slideshow
		},
		navigation: {
			active: true,
			effect: "slide"
		},
		pagination: {
			active: true,
			effect: "slide"
		},
		effect: {
			slide: {
			speed: 200
			},
			fade: {
			speed: 300,
			crossfade: true
			}
		}
	});
	
	var linkStat = false;

	var linkAmtFunc = function(){
		$(".contain .container .pList li .ptBox .ss a   ,   .mainTop .mainSd .slides .pBox a").each(function(index) {
			var linkAmt = $(this).attr("href");
			$(this).attr("href","javascript:;").css("cursor","default").removeAttr("target");
			$(this).attr("data-url",linkAmt);
		});
		console.log("링크가 비활성화 됐습니다.")
	}
	// linkAmtFunc();
	
	var linkAmtSet = function(){
		$(".contain .container .pList li .ptBox .ss a   ,   .mainTop .mainSd .slides .pBox a").each(function(index) {
			var linkAmt = $(this).attr("data-url");
			$(this).attr("href",linkAmt).css("cursor","pointer").attr("target","_blank");
			
		});
		console.log("링크가 활성화 됐습니다.")
	}
	//linkAmtSet()

	$(document).keydown(function(event){ // M 키 이벤트
		if(event.keyCode == 77 ){
			if(!linkStat){
				linkAmtSet();
				linkStat = true;
			}else{
				linkAmtFunc();
				linkStat = false;
			}
		}
	});	
	

	$("#scrollbar1").mCustomScrollbar({
		mouseWheel:{
			scrollAmount:400,
			preventDefault:true
		}	
	});


	$("img.lazy").lazyload({
		event : "fadeIn"
	});
	$("img.lazy").show().lazyload();
	

	console.log("김기현 - kimkee@naver.com , 010-3236-1677");

});






















	