<script type="text/javascript">
<!--
function item_sch(){
	var frm = document.srcFrm;

	if(frm.key.value == ""){
		alert("아이템명을 입력해 주세요.");
		frm.key.focus();
		return;
	}

	frm.action = "index.php";
	frm.submit();
}
//-->
</script>
<div class="itemSch">
	<div class="totalPost"><strong>전체</strong> 아이템[ <span class="num"><%=listcount%></span> 종]</div>
	<form name="srcFrm">
	<input type="hidden" name="Search" value="P_Name" />
	<div class="sch">아이템검색
		<input type="text" class="keyword" name="key" />
		<a href="javascript:item_sch();"><img src="/work/lunaPlus/itemMall/images/btnSch.gif" alt="검색" /></a>
	</div>
	</form>
</div>
