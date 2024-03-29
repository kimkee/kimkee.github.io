const ui = {
    init: function(){
        this.dark.init();
    },
    iosx:{ // 아이폰X 여백값
        top: ()=>    parseInt(getComputedStyle(document.documentElement).getPropertyValue("--safe-top").replace(/[^0-9]/g, "")) || 0 ,
        bottom: ()=> parseInt(getComputedStyle(document.documentElement).getPropertyValue("--safe-bottom").replace(/[^0-9]/g, "")) || 0
    },
    viewport: {
        height: () => parseInt(window.visualViewport ? visualViewport.height : window.innerHeight),
        width: () => parseInt(window.visualViewport ? visualViewport.width : window.innerWidth),
        docHeight: () => parseInt(document.documentElement.scrollHeight || document.body.clientHeight),
        scrollTop: () => parseInt(document.documentElement.scrollTop)
    },
    dark:{
        init:function(){
            this.set();
        },
        set:function(){
            if (window.matchMedia("(prefers-color-scheme: dark)").matches){
                document.documentElement.classList.add("dark");
            }
        }
    },
    popup:{
        evt:function(){
            
        },
        resize:function(){
            
            let $pop =  document.querySelector(".pop-layer");
            let pctnH =  $pop.offsetHeight || 0;
            let pbtnH =  $pop.querySelector(".pbt")?.offsetHeight || 0 ;
            let phtnH =  $pop.querySelector(".phd")?.offsetHeight || 0 ;
            pctnH = (pctnH - phtnH) || 0 ;
            console.log(pctnH  );
            $pop.querySelector(".pct").style.maxHeight = pctnH - pbtnH+"px" ; 
        
        }
    },
    alert: function (msg, params) { // 커스텀 알럿

        let opt = Object.assign({
            msg: msg,
            tit: "",
            cls: "",
            ycb: "",
            ybt: "확인"
        }, params);

        if (document.querySelectorAll(".ui-alert").length) return;

        ui.lock.using(true);
        // console.log(opt.tit);

        var lyAlert =
            `<article class="ui-alert ${opt.cls}" tabindex="0">
            <div class="pbd">
                <div class="phd"><span class="ptit">${opt.tit}</span></div>
                <div class="pct"><div class="msg">${opt.msg}</div></div>
                <div class="pbt">
                    <button type="button" class="btn btn-confirm">${opt.ybt}</button>
                </div>
                <!-- <button type="button" class="btn-close"><i class="fa-regular fa-xmark"></i></button> -->
            </div>
        </article>`;
        const body = document.querySelector("body");
        body.insertAdjacentHTML("beforeend", lyAlert);

        const uiAlert = document.querySelector(".ui-alert");
        body.classList.add("is-alert");
        setTimeout(() => uiAlert.classList.add("open"));
        opt.tit && uiAlert.querySelector(".pbd>.phd").classList.add("is-tit");

        uiAlert.focus();
        uiAlert.querySelector(".btn-confirm").addEventListener("click", () => window.setTimeout(opt.ycb));

        uiAlert.querySelectorAll(".btn-confirm, .btn-close").forEach((btn) => { btn.addEventListener("click", alertClose); })
        // $(".ui-alert").find(".btn-close , .btn-confirm").on("click",alertClose);

        function alertClose() {
            uiAlert.remove();
            body.classList.remove("is-alert");
            if (document.querySelectorAll(".pop-layer").length < 1) {
                ui.lock.using(false);
            }
        }
    },
    confirm: function (msg, params) { // 커스텀 컨펌

        let opt = Object.assign({
            msg: msg,
            tit: "",
            cls: "",
            ycb: "",
            ybt: "확인",
            ncb: "",
            nbt: "취소"
        }, params);

        if (document.querySelectorAll(".ui-confirm").length) return;

        ui.lock.using(true);

        let lyConfirm =
        `<article class="ui-confirm ${opt.cls}" tabindex="0">
            <div class="pbd">
                <div class="phd"><span class="ptit">${opt.tit}</span></div>
                <div class="pct"><div class="msg">${opt.msg}</div></div>
                <div class="pbt">
                    <button type="button" class="btn btn-cancel">${opt.nbt}</button>
                    <button type="button" class="btn btn-confirm">${opt.ybt}</button>
                </div>
                <!-- <button type="button" class="btn-close"><i class="fa-regular fa-xmark"></i></button> -->
            </div>
        </article>`;
        const body = document.querySelector("body");
        body.insertAdjacentHTML("beforeend", lyConfirm);

        const uiConfirm = document.querySelector(".ui-confirm");
        body.classList.add("is-confrim");
        setTimeout(() => uiConfirm.classList.add("open"));
        opt.tit && uiConfirm.querySelector(".pbd>.phd").classList.add("is-tit");
        uiConfirm.focus();
        uiConfirm.querySelector(".btn-confirm").addEventListener("click", () => window.setTimeout(opt.ycb));
        uiConfirm.querySelector(".btn-cancel").addEventListener("click", () => window.setTimeout(opt.ncb));

        uiConfirm.querySelectorAll(".btn-confirm, .btn-close , .btn-cancel").forEach((btn) => { btn.addEventListener("click", confirmClose); })

        function confirmClose() {
            uiConfirm.remove();
            body.classList.remove("is-confrim");
            if (document.querySelectorAll(".pop-layer").length < 1) {
                ui.lock.using(false);
            }
        }
    },
    loading: { // 로딩중..
        show: function () {
            if (!document.querySelectorAll("body>.ui-loading-dot").length) {
                // var els = '<div class="ui-loading"><em></em></div>';
                var els =
                `<div class="ui-loading-dot">
                    <div class="bx"><em><i></i></em></div>
                </div>`;
                document.querySelector("body").insertAdjacentHTML("afterbegin", els);
                document.querySelector("body").classList.add("is-loading");
            }
        },
        hide: function () {
            document.querySelectorAll(".ui-loading-dot").forEach(el => el.remove());
            document.querySelector("body").classList.remove("is-loading");
        }
    },
    lock: { // 스크롤 막기,풀기
        
        stat: false,
        els: ".pop-layer  , .ui-confirm , .ui-alert",
        set: function () {
            if (document.querySelectorAll(this.els).length <= 0) {
                this.using(false);
            }
        },
        using: function (opt) {
            const body = document.querySelectorAll("body , html");
            const html = document.querySelector("html");
            if (opt === true && this.stat === false) {
                ui.lock.stat = true;
                ui.lock.sct = window.scrollY;
                body.forEach(body => body.classList.add("is-lock", "is-lock-end"));
                html.style.top = -ui.lock.sct + "px";
                // $(this.els).bind("touchmove scroll", function(e){ e.preventDefault(); });
            }
            if (opt === false && document.querySelectorAll(this.els).length <= 0 && html.classList.contains("is-lock")) {
                ui.lock.stat = false;
                body.forEach(body => body.classList.remove("is-lock"));
                html.style.top = "";
                window.scrollTo(0, ui.lock.sct)
                // $(this.els).unbind("touchmove scroll");
                setTimeout(() => {
                    body.forEach(body => body.classList.remove("is-lock-end"));
                }, 50);
            }
        }
    },
};
ui.init();
window.ui = ui;
export default ui