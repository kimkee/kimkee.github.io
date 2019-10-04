<script type="text/javascript">
	function qPart(P) {
		if( P == 'on'){
		document.getElementById('partOff').style.display='none';
		document.getElementById('partOn').style.display='block';
		}
		if( P == 'off'){
		document.getElementById('partOff').style.display='block';
		document.getElementById('partOn').style.display='none';
		}
	}
</script>


<div class="quickPart">
			<div class="selList" id="partOff" onclick="javascript:qPart('on');">
				<div class="btnSel"><img src="/work/eyaGroup/images/btnSelOpen.gif" alt="" /></div>
				<table cellspacing="0">
					<tr>
						<th>Director</th>
						<td>퍼블리싱3 팀 고희찬 PM</td>
					</tr>
				</table>
			</div>
			<div class="selList" id="partOn" onclick="javascript:qPart('off');" style="display:none;">
				<div class="btnSel"><img src="/work/eyaGroup/images/btnSelClose.gif" alt="" /></div>
				<table cellspacing="0">
					<tr>
						<th>Director</th>
						<td>퍼블리싱3 팀 고희찬 PM</td>
					</tr>
				</table>
				<div class="scroll" style="overflow:auto; height:300px; padding:1px 1px 1px 0px ;">
					<table cellspacing="0" style="width:233px;">
						<tr>
							<th class="bg1">Manager</th>
							<td class="bg1">
								<ul>
									<li><a href="#">운영팀 GM유희철 팀장</a></li>
									<li><a href="#">운영팀 GM유희철 팀장</a></li>
									<li><a href="#">운영팀 GM유희철 팀장</a></li>
									<li><a href="#">운영팀 GM유희철 팀장</a></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Staff</th>
							<td>
								<ul>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>Staff</th>
							<td>
								<ul>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
									<li><a href="#">운영팀 GM강중화 선임</a></li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>