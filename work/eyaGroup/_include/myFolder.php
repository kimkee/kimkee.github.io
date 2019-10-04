<script type="text/javascript">
	function mFolderToggle(K) {
		document.getElementById('mFolderOff').style.display='none';
		document.getElementById('mFolderOn').style.display='none';
		document.getElementById('mFolder'+K).style.display='block';
	}
</script>

<div class="myFolder" id="mFolderOn">
	<div class="head">
		<h3>마이폴더</h3>
		<div class="btn"><a href="javascript:mFolderToggle('Off');"><img src="/work/eyaGroup/images/leftTitBtnUp.gif" alt="" width="33" height="34" /></a> </div>
	</div>
	<div class="list" id="myFolderList">
		<div class="dtree">
			<p style="margin-bottom:7px;"><a href="javascript:d.openAll();">모두열기</a> | <a href="javascript:d.closeAll();">모두닫기</a></p>
			<script type="text/javascript">
				<!--
				//  (id, pid, name, url, title, target, icon, iconOpen, open)
				d = new dTree('d');
		
				d.add(0,-1,'MY Folder','#');
				d.add(1,0,'1:1문의하기','#');
				d.add(2,0,'팀업무','');
				d.add(3,2,'업무1','http://www.naver.com','네이버로','_blank');
				d.add(4,2,'업무2','#');
				d.add(5,0,'주업무','');
				d.add(6,5,'ID도용','#');
				d.add(7,5,'ID블럭','#');
				d.add(8,0,'기타','');
				d.add(9,8,'디자인요청','#');
				d.add(10,0,'휴지통','#','','','/work/eyaGroup/images/dtImg/trash.gif','','');

				document.write(d);
		
				//-->
			</script>
		</div>
		<div class="btnAdmin"><a href="#"><img src="/work/eyaGroup/images/btnAdmin.gif" alt="관리" width="34" height="14" /></a></div>
	</div>
</div>
<div class="myFolder" id="mFolderOff" style="display:none">
	<div class="head">
		<h3>마이폴더</h3>
		<div class="btn"> <a href="javascript:mFolderToggle('On');"><img src="/work/eyaGroup/images/leftTitBtnDown.gif" alt="" width="33" height="34" /></a> </div>
	</div>
</div>
