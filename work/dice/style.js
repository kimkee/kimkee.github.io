
var uiGame = {
	init:function(){
		this.mals();
		$(document).on({ // a , button 
			mousedown: function(){ $(this).addClass("press");    },
			mouseup  : function(){ $(this).removeClass("press"); },
			mouseout : function(){ $(this).removeClass("press"); }
		},"a,button");
	},
	mdScreen:{
		show:function(){
			$(".board").append('<div class="mdScreen"></div>');
		},
		hide:function(){ 
			$(".mdScreen").remove();
		}
	},
	loading:{
		show:function(){
			$(".board").append('<div class="loading"></div>');
			$(".mdScreen").css("z-index","1000");
			uiGame.mdScreen.show();
		},
		hide:function(){
			$(".loading").remove();	
			$(".mdScreen").css("z-index","");
			uiGame.mdScreen.hide();
		}
	},
	mals:function(){
		
		$(".board").append('<ol class="mals"></ol>');
		for(var i = 1 ; i <= 30 ; i++ ){
			$(".board ol.mals").append('<li class="m'+i+'">'+i+'</li>');
		}
		$("ol.mals>li").each(function(i,els) {
			i++;
			dice.posit["m"+i] = {"left" : $(this).css("left") , "top" : $(this).css("top") }
			console.log(dice.posit["m"+i] );
		});
		
	}
};

uiGame.init();


//dice.posit = {"m1":{"ball":"1000"}}