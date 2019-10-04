
<!--MD Pick -->
<script type="text/javascript">
	function mdCtnToggleTab(K) {
		for (i = 1; i <= 3 ; i++){
			document.getElementById('mdCtnToggle'+i).style.display='none';
			document.getElementById('mdBtn'+i).src='/work/kbpoint/images/main/num0'+i+'.gif';
		}
		document.getElementById('mdCtnToggle'+K).style.display='block';
		document.getElementById('mdBtn'+K).src='/work/kbpoint/images/main/num0'+K+'_on.gif';
	}
</script>

<div class="mainRollBanner2 mainMdPick">
    <div>
        <div class="md_pick_title"> <img src="/work/kbpoint/images/main/mainIcoMdspick.png" alt="" class="png24" />
            <!-- MD픽 -->
            <!--<img src="/work/kbpoint/images/main/mainIcoShock.png" alt="" class="png24" /> 쇼킹1데이 -->
        </div>
        <ul class="md_pick_list">
            <li><a href="javascript:;" onmouseover="mdCtnToggleTab(1)"><img id="mdBtn1" src="/work/kbpoint/images/main/num01.gif"  alt="1" /></a></li>
            <li><a href="javascript:;" onmouseover="mdCtnToggleTab(2)"><img id="mdBtn2" src="/work/kbpoint/images/main/num02.gif"  alt="2" /></a></li>
            <li><a href="javascript:;" onmouseover="mdCtnToggleTab(3)"><img id="mdBtn3" src="/work/kbpoint/images/main/num03.gif"  alt="3" /></a></li>
        </ul>
        <div class="md_pic_contents" id="mdCtnToggle1" style="display:block">
            <div class="img"><a href="#"><img src="/work/kbpoint/images/main/mainMds01.jpg" alt="" /></a></div>
            <div class="tit"><a href="#">농협유통 하나로클럽 고창황토쌀 20Kg</a></div>
            <div class="price">
                <div class="aPrice">31,000</div>
                <div class="bPrice">15,000</div>
            </div>
        </div>
        <div class="md_pic_contents" id="mdCtnToggle2" style="display:none">
            <div class="img"><a href="#"><img src="/work/kbpoint/images/main/mainMds02.jpg" alt="" /></a></div>
            <div class="tit"><a href="#">수협유통 하나로클럽 고창황토쌀 20Kg</a></div>
            <div class="price">
                <div class="aPrice">31,000</div>
                <div class="bPrice">15,000</div>
            </div>
        </div>
        <div class="md_pic_contents" id="mdCtnToggle3" style="display:none">
            <div class="img"><a href="#"><img src="/work/kbpoint/images/main/mainMds03.jpg" alt="" /></a></div>
            <div class="tit"><a href="#">축협유통 하나로클럽 고창황토쌀 20Kg</a></div>
            <div class="price">
                <div class="aPrice">31,000</div>
                <div class="bPrice">15,000</div>
            </div>
        </div>
    </div>
</div>
