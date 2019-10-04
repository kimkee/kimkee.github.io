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


});






















	