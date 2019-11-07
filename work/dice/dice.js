
var data = { 
	"m1" : {"left":"0"}
};


var dice = {
	posit:{},
	init:function(){
		
	},
	roll:{
		count:function(D){
			console.log(D);
			var i = 0 , t = 0 , speed = 20;
			this.timer = setInterval(function(){
				i = i+20 ;
				dice.roll.gm(i);
				if( i >= 600){
					i = 0;
				}
				t ++ ; //console.log(t);
				if( t >= 100){
					dice.roll.end(D);
				}
			},speed);
		},
		gm:function(i){
			$(".dice>.dc").css("top", -(i) );
		},
		end:function(D){
			clearInterval(this.timer);
			$(".dice>.dc").css("top", -(D*100-100) ).attr("dice",D);
			dice.move.count(D)
		}
	},
	move:{
		count:function(M){
			console.log(M);
			var P = parseInt( $("em.mal").attr("pos") );
			
			var speed = 500;
			this.timer = setInterval(function(){
				M -- ;
				if( M == 0 ){
					dice.move.end();
				}
				P ++ ;
				if( P >= 31 ){
					P = 1 ;
				}
				$("em.mal").attr("pos",P); console.log(P);
				
				dice.move.gm( dice.posit["m"+P].left ,  dice.posit["m"+P].top  );
			},speed);
		},
		gm:function(l,t){
			$("em.mal").css({ "left" : l , "top" : t });
		},
		end:function(){
			clearInterval(this.timer);
		}
	}
};

dice.init();


var	sysMsg = {
	open:function(msg,cls){
		$pop =
		'<div class="sysMsg">'+
			'<div class="msg">'+msg+'</div>'+
			'<button class="close" onclick="javascript:sysMsg.close();">닫기</button>'+
		'</div>';
		$(".board").append($pop);
		$sysMsg = $(".sysMsg");
		$sysMsg.css({
			"width": $sysMsg.outerWidth(), "min-width": $sysMsg.outerWidth(), "margin-top": - $sysMsg.outerHeight() *.5, "margin-left": - $sysMsg.outerWidth() *.5
		}).fadeIn(200);
		if(cls=="close"){
			setTimeout(function(){
				sysMsg.close();
			},2500);
		}
		if(cls=="open"){
			$sysMsg.find(".close").hide();
		}
	},
	close:function(){
		$sysMsg.fadeOut(400,function(){
			$(this).remove();
		});
	}
};