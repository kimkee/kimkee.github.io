<script type="text/javascript">
	function mfFolder(k) {
		if( k == 'on'){
		document.getElementById('mList').style.display='block';
		document.getElementById('mFbtnOpen').style.display='none';
		document.getElementById('mFbtnClose').style.display='block';
		}
		if( k == 'off'){
		document.getElementById('mList').style.display='none';
		document.getElementById('mFbtnOpen').style.display='block';
		document.getElementById('mFbtnClose').style.display='none';
		}
	}
</script>

<div class="setfolder">
	<div class="list"> 아이디 도용 처리 시 본인인증 자료를 꼭 확보하셔야 합니다. 법적인 책임을 물을 수도 있습니다. 꼭!! 관련 자료를 
		꼼꼼하게 확보하시고 처리하기 바랍니다.  -  최종수정 2009/09/28 운영팀 GM 강중화선임 <a href="#"><img src="/work/eyaGroup/images/btnMyEdit.gif" alt="Edit" width="42" height="16" /></a> <a href="#"><img src="/work/eyaGroup/images/btnMyDel.gif" alt="삭제" width="17" height="16" /></a> </div>
	<div id="mList" style="display:none">
		<div class="list"> 아이디 도용 처리 시 본인인증 자료를 꼭 확보하셔야 합니다. 법적인 책임을 물을 수도 있습니다. 꼭!! 관련 자료를 <br />
			꼼꼼하게 확보하시고 처리하기 바랍니다.  -  최종수정 2009/09/28 운영팀 GM 강중화선임 <a href="#"><img src="/work/eyaGroup/images/btnMyEdit.gif" alt="Edit" width="42" height="16" /></a> <a href="#"><img src="/work/eyaGroup/images/btnMyDel.gif" alt="삭제" width="17" height="16" /></a> </div>
		<div class="list"> 아이디 도용 처리 시 본인인증 자료를 꼭 확보하셔야 합니다. 법적인 책임을 물을 수도 있습니다. 꼭!! 관련 자료를 <br />
			꼼꼼하게 확보하시고 처리하기 바랍니다.  -  최종수정 2009/09/28 운영팀 GM 강중화선임 <a href="#"><img src="/work/eyaGroup/images/btnMyEdit.gif" alt="Edit" width="42" height="16" /></a> <a href="#"><img src="/work/eyaGroup/images/btnMyDel.gif" alt="삭제" width="17" height="16" /></a> </div>
	</div>
	<div class="btnMyfolder"><a href="#"><img src="/work/eyaGroup/images/btnMyfolder.gif" alt="마이폴더등록" width="76" height="22" /></a></div>
	<div class="btnMyOpen" id="mFbtnOpen"><a href="javascript:mfFolder('on');"><img src="/work/eyaGroup/images/btnMyfolerOpen.gif" alt="열기" width="17" height="16" /></a></div>
	<div class="btnMyOpen" id="mFbtnClose" style="display:none"><a href="javascript:mfFolder('off');"><img src="/work/eyaGroup/images/btnMyfolerClose.gif" alt="닫기" width="17" height="16" /></a></div>
</div>
