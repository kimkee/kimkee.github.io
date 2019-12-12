// ui script
var ui = {
	init:function () {
		console.log("김기현 - kimkee@naver.com , 010-3236-1677");	
		this.common.init();
		this.slides.init();
		this.link.init();
		this.ly.init();
	},
	ly:{
		init:function () {

			$(document).on( "click", ".noticeWrap .box .btnClose", function() {
				$( this ).closest(".noticeWrap").slideUp(500);
			});

			$(window).on("load scroll resize",function(){
				var scr = $(window).scrollTop();
				// console.log(scr);
				// $("body").css({
				// 	"background-position-y": (scr - 400) * 0.8 
				// });
				
				if ( scr > 700) {
					$(".topBtn").fadeIn(200);
				} else {
					$(".topBtn").fadeOut(500);
				};

			});
			var poskit = function(n1,n2){		
				n2 = ( pct * (n2-n1) / 100 )  + n1  ;
				return [n1 , n2] ;
			}
			$(window).on("load scroll resize",function(){
				var winH = $(window).height();
				var docH = $(document).height();
				var scrT = $(window).scrollTop();
				pct = Math.ceil( scrT / ( docH - winH ) * 100 );
				scm = Math.ceil( pct * 0.75 );
				// console.log( winH , docH , scrT ,  pct );
				$("#barH").css({"width":pct+"%"});

				// $(".pic.p1").html(  poskit(3,15) );
				// $(".pic.p2").html( " "+ poskit(5,23) );
				$(".pic.p1").css({
					// left:  poskit(3,15)[1]+"%"
				});
				
				// scmStat.init();
				
			});
		}
	},
	slides:{
		init:function () {
			$(this.mainSd.els).length && this.mainSd.using();
		},
		mainSd:{  //  mainSd
            els: ".mainSd #slides",
            opt: {
				slidesPerView: 1,
				observer: true,
				observeParents: true,
				watchOverflow:true,
				pagination: {
					el: '.mainSd .pagi',
					clickable: true
				},
				navigation: {
					nextEl: '.navi .nav.next',
					prevEl: '.navi .nav.prev'
				},
                // autoHeight:true,
				autoplay:false,
				preloadImages: false,
				loop: true
            },
            using: function() {
                if ( $(this.els).find(".swiper-slide").length <= 1 ) {
                    this.opt.loop = false;
                }
                this.slide = new Swiper(this.els, this.opt);
			}
        }

	},
	common:{
		init:function(){

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

			// 스크롤 TOP버튼
			$(document).on("click",".topBtn a.bt",function(e){
				var toScr ;
				if( $(this).hasClass("down") ) {
					toScr = $(document).height();
				}else{
					toScr = 0;
				}
				$("body,html").animate({
					scrollTop: toScr
				}, 300);
			});
		}

	},
	link:{
		init:function(){
			var _this = this;
			$(document).on("keydown",function(e){ // M 키 이벤트
				if( e.keyCode == 77 && !_this.stat ){
					_this.using(true);
				}else{
					_this.using(false);
				}
			});	
		},
		stat:false,
		using:function(st){
			var els = ".pList li .ptBox .ss a  ,  .mainTop .mainSd .slides .pBox a" ;
			if (st === true) {
				this.stat = true;
				$(els).each(function() {
					var linkAmt = $(this).attr("data-url");
					if (linkAmt) {
						$(this).attr("href",linkAmt).css("cursor","pointer").attr("target","_blank");
					}
				});
				console.log("링크가 활성화 됐습니다.");
			}else{
				this.stat = false;
				$(els).each(function() {
					var linkAmt = $(this).attr("href");
					$(this).attr("href","javascript:;").css("cursor","default").removeAttr("target");
					$(this).attr("data-url",linkAmt);
				});
				console.log("링크가 비활성화 됐습니다.");
			}
		}
	}
};


ui.init();


















	