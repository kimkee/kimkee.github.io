// 캐시 이름
const CACHE_NAME = "cache-v4";


// 캐싱할 파일
const FILES_TO_CACHE = [
	"./offline.html",
	"./app/img/cm/fav.ico",
	"./app/img/icons/icon-app.png",
	"./app/img/ss/ssLhmk.jpg",
	"./app/img/ss/ssAboutpet.jpg",
	"./app/img/ss/ssSbms.jpg",
	"./app/img/ss/ssHebt.jpg",
	"./app/img/ss/ssFapee.jpg",
	"./app/img/ss/ssMhrM.jpg",
	"./app/img/ss/ssHimart.jpg",
	"./app/img/ss/ssInsterior.jpg",
	"./app/img/ss/ssMlbM.jpg",
	"./app/img/ss/ssMlb.jpg",
	"./app/img/ss/ssApcM.jpg",
	"./app/img/ss/ssApc.jpg",
	"./app/img/ss/ssMyomeeM.jpg",
	"./app/img/ss/ssMyomee.jpg",
	"./app/img/ss/ssCjtelenix.jpg",
	"./app/img/ss/ssCjwhistle.jpg",
	"./app/img/ss/ssEfss.jpg",
	"./app/img/ss/ssGalleria.jpg",
	"./app/img/ss/ssGalleriaM.jpg",
	"./app/img/ss/ssDice.jpg",
	"./app/img/ss/ssKingkong.jpg",
	"./app/img/ss/ssChatOn2.jpg",
	"./app/img/ss/ssHotelShilla.jpg",
	"./app/img/ss/ssHotelShillaM.jpg",
	"./app/img/ss/ssSktstore.jpg",
	"./app/img/ss/ssHomeplus.jpg",
	"./app/img/ss/ssChatOn1.jpg",
	"./app/img/ss/ssSpoplay.jpg",
	"./app/img/ss/ssSpoplayM.jpg",
	"./app/img/ss/ssSpolive.jpg",
	"./app/img/ss/ssSpoliveM.jpg",
	"./app/img/ss/ssWshop.jpg",
	"./app/img/ss/ssMasterKorean.jpg",
	"./app/img/ss/ssTenspoon.jpg",
	"./app/img/ss/ssArisam.jpg",
	"./app/img/ss/ssArisamMe.jpg",
	"./app/img/ss/ssCitibank.jpg",
	"./app/img/ss/ssKb.jpg",
	"./app/img/ss/ssEyaGroup.jpg",
	"./app/img/ss/ssEyaCustomer.jpg",
	"./app/img/ss/ssEyaPc.jpg",
	"./app/img/ss/ssLuna.jpg",
	"./app/img/ss/ssAngel.jpg",
	"./app/img/ss/ssEda.jpg",
	"./app/img/ss/ssCorum.jpg",
	"./app/img/ss/ssFlorensia.jpg",
	"./app/img/ss/ssAhkoguryo.jpg",
	"./app/img/ss/ssMack.jpg",
	"./app/img/ss/ssX1.jpg",
	"./app/img/ss/ssIndewave.jpg",
	"./app/img/ss/ssEnertech.jpg",
	"./app/img/ss/ssCorumjp.jpg",
	"./app/img/ss/ssFlorensiajp.jpg",
	"./app/img/ss/ssAngelFlash.jpg",
	"./app/img/ss/ssCybertour.jpg",
	"./app/img/ss/ssSlot.jpg",
	"./app/img/ss/ssRoulette.jpg",
	"./app/img/ss/ssGame.jpg",
	"./app/img/ss/ssHighLow.jpg"
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
				.then((cache) => cache.match("/offline.html"))
		)
	);
});
