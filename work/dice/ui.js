// JavaScript Document
//URL에서 파라미터 읽어오기
$urlParam = (function(a) {
	if (a == "") return {};
	var b = {};
	for (var i = 0; i < a.length; i++){
		var p=a[i].split('=');
		if (p.length != 2) continue;
		b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " ")); //공백으로 변환 후 디코딩
		//console.log(p[0]+" = "+b[p[0]])
	}
	return b;
})(window.location.search.substr(1).split('&')); //파라미터 정보만 분리




var uiLib = {
	init:function(){


	}
};
uiLib.init();



$("button.btnRoll").on("click",randomResult);


function randomResult(){ // 랜덤하게 결과 값 가져오기
	D = parseInt( Math.random() * 6 ) + 1 ;

	dice.roll.count(D);
};








