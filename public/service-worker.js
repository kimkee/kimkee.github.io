// 캐시 이름
const CACHE_NAME = "cache-v7";


// 캐싱할 파일
const FILES_TO_CACHE = [
	"./offline.html",
	"./img/cm/fav.ico",
	"./img/icons/icon-app.png",
	"./img/ss/ssLhmk.jpg",
	"./img/ss/ssAboutpet.jpg",
	"./img/ss/ssSbms.jpg",
	"./img/ss/ssHebt.jpg",
	"./img/ss/ssFapee.jpg",
	"./img/ss/ssMhrM.jpg",
	"./img/ss/ssHimart.jpg",
	"./img/ss/ssInsterior.jpg",
	"./img/ss/ssMlbM.jpg",
	"./img/ss/ssMlb.jpg",
	"./img/ss/ssApcM.jpg",
	"./img/ss/ssApc.jpg",
	"./img/ss/ssMyomeeM.jpg",
	"./img/ss/ssMyomee.jpg",
	"./img/ss/ssCjtelenix.jpg",
	"./img/ss/ssCjwhistle.jpg",
	"./img/ss/ssEfss.jpg",
	"./img/ss/ssGalleria.jpg",
	"./img/ss/ssGalleriaM.jpg",
	"./img/ss/ssDice.jpg",
	"./img/ss/ssKingkong.jpg",
	"./img/ss/ssChatOn2.jpg",
	"./img/ss/ssHotelShilla.jpg",
	"./img/ss/ssHotelShillaM.jpg",
	"./img/ss/ssSktstore.jpg",
	"./img/ss/ssHomeplus.jpg",
	"./img/ss/ssChatOn1.jpg",
	"./img/ss/ssSpoplay.jpg",
	"./img/ss/ssSpoplayM.jpg",
	"./img/ss/ssSpolive.jpg",
	"./img/ss/ssSpoliveM.jpg",
	"./img/ss/ssWshop.jpg",
	"./img/ss/ssMasterKorean.jpg",
	"./img/ss/ssTenspoon.jpg",
	"./img/ss/ssArisam.jpg",
	"./img/ss/ssArisamMe.jpg",
	"./img/ss/ssCitibank.jpg",
	"./img/ss/ssKb.jpg",
	"./img/ss/ssEyaGroup.jpg",
	"./img/ss/ssEyaCustomer.jpg",
	"./img/ss/ssEyaPc.jpg",
	"./img/ss/ssLuna.jpg",
	"./img/ss/ssAngel.jpg",
	"./img/ss/ssEda.jpg",
	"./img/ss/ssCorum.jpg",
	"./img/ss/ssFlorensia.jpg",
	"./img/ss/ssAhkoguryo.jpg",
	"./img/ss/ssMack.jpg",
	"./img/ss/ssX1.jpg",
	"./img/ss/ssIndewave.jpg",
	"./img/ss/ssEnertech.jpg",
	"./img/ss/ssCorumjp.jpg",
	"./img/ss/ssFlorensiajp.jpg",
	"./img/ss/ssAngelFlash.jpg",
	"./img/ss/ssCybertour.jpg",
	"./img/ss/ssSlot.jpg",
	"./img/ss/ssRoulette.jpg",
	"./img/ss/ssGame.jpg",
	"./img/ss/ssHighLow.jpg"
];


// 상술한 파일 캐싱
self.addEventListener("install", (event) => {
	event.waitUntil(
		caches.open(CACHE_NAME).then((cache) => cache.addAll(FILES_TO_CACHE))
	);
});


// CACHE_NAME이 변경되면 오래된 캐시 삭제
self.addEventListener("activate", (event) => {
	event.waitUntil(
		caches.keys().then((keyList) =>
			Promise.all(
				keyList.map((key) => {
					if (CACHE_NAME !== key) return caches.delete(key);
				})
			)
		)
	);
});


// 요청에 실패하면 오프라인 페이지 표시
self.addEventListener("fetch", (event) => {
	if ("navigate" !== event.request.mode) return;


	event.respondWith(
		fetch(event.request).catch(() =>
			caches
				.open(CACHE_NAME)
				.then((cache) => cache.match("./offline.html"))
		)
	);
});
