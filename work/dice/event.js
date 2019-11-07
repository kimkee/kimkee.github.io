$(document).ready(function() {

	var $menu = $(".menu .list"),
		$section = $("div.section"),
		headH = 84;

	$menu.find("li").each(function(i) {
		$(this).addClass("m"+i).find("a").attr("href","#anchor"+i);
	});

	$menu.find("li a[href*='#anchor']").on("click",function(e){
		var myHref = $(this).attr("href");
		pt = $(myHref).offset().top;
		if( myHref === "#anchor0" ){ pt = 0; }
		$("body,html").animate({scrollTop:pt - headH }, 500 ,"easeOutExpo");
		e.preventDefault();
	});

	$section.each(function(i) {
		$(this).addClass("c"+i).attr("id","anchor"+i);
	});

	$(window).on("scroll load",function(){
		var wsc = $(window).scrollTop()+ headH;
		for ( i = 0 ; i < $section.length; i++) {
			var $seci = $("div.section#anchor"+i);
			var iTop = $seci.offset().top;
			var jTop = iTop + $seci.outerHeight() + 300;
			if( wsc >= iTop && wsc < jTop ){
				$menu.find("li.m"+i).addClass("active").siblings().removeClass("active");
				console.log( iTop , jTop);
			}
		}
		//if(!window.CSSBS_mobile) $section.first().css("margin-top",-wsc*0.6); // if Not 모바일
	});

});
