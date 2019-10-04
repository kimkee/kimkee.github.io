<%
cate_idx = Request("cidx")
If cate_idx = "" Then
	cate_idx = 0
End If 
%>
<% 
if login_id = "" then
	txt = "javascript:alert('로그인 후 이용하실 수 있습니다.');"
else
	txt = "javascript:bill_pop('http://cs.enpang.com/popUpBill/cashAgreeCheck.php');"
end if 
%>
<div class="clientDown"><a href="<%=txt%>"><img src="/work/lunaPlus/images/main/btn_cash.gif" alt="캐시충전하기" /></a></div>
<div id="itemMall" class="leftMenu" >
	<h3 class="tit"><img src="/work/lunaPlus/itemMall/images/leftMenuTit.gif" alt="아이템몰"/></h3>
	<ul class="menu">

		<li><a href="/work/lunaPlus/itemMall/"><img src="/work/lunaPlus/itemMall/images/subMenu01.gif" alt="상품" onmouseover="this.src='/itemMall/images/subMenu01On.gif'" onmouseout="this.src='/itemMall/images/subMenu01.gif'" /></a>
			<ul>
				<li <%If cate_idx="0" Then%>class="on"<%End If%>><a href="/work/lunaPlus/itemMall/?cidx=0">전체</a></li>
				<%
				memDBConnect				

				sql = "select * from dbo.EM_Category where deleteYN='N' and idx <> 9 order by cOrder asc"
				Set CateRs = memDB.Execute(sql)

					Do Until CateRs.EOF
					cidx = CateRs("idx")
					cateName = CateRs("cateName")
				%>
				<li <%If CInt(cate_idx)=CInt(cidx) Then%>class="on"<%End If%>><a href="/work/lunaPlus/itemMall/?cidx=<%=cidx%>"><%=cateName%></a></li>
				<%
					CateRs.MoveNext
					Loop
				memDBClose()
				%>
                <!--<li <%If CInt(cate_idx)= 9 Then%>class="on"<%End If%>><a href="/work/lunaPlus/itemMall/?cidx=9">행운상자</a></li>-->
			</ul>
		</li>
		<li><a href="/work/lunaPlus/itemMall/cashList1.php"><img src="/work/lunaPlus/itemMall/images/subMenu02.gif" alt="캐시계좌" onmouseover="this.src='/itemMall/images/subMenu02On.gif'" onmouseout="this.src='/itemMall/images/subMenu02.gif'" /></a></li>
		<li><a href="javascript:bill_pop('http://cs.enpang.com/popUpBill/cashAgreeCheck.php');"><img src="/work/lunaPlus/itemMall/images/subMenu03.gif" alt="캐쉬충전" onmouseover="this.src='/itemMall/images/subMenu03On.gif'" onmouseout="this.src='/itemMall/images/subMenu03.gif'" /></a></li>
		<li style="position:relative;"><a href="javascript:;"><img src="/work/lunaPlus/itemMall/images/subMenu04.gif" alt="쿠폰BOX" onmouseover="this.src='/itemMall/images/subMenu04On.gif'" onmouseout="this.src='/itemMall/images/subMenu04.gif'" /></a><img src="/work/lunaPlus/itemMall/images/icoSoon.png" alt="ComingSoon" style="position:absolute; left:100px; top:5px;" /></li>
		<li><a href="http://cs.enpang.com/policy/policyCash.php" target="_blank"><img src="/work/lunaPlus/itemMall/images/subMenu05.gif" alt="캐시이용약관" onmouseover="this.src='/itemMall/images/subMenu05On.gif'" onmouseout="this.src='/itemMall/images/subMenu05.gif'" /></a></li>

	</ul>
	<div class="bot"><img src="/work/lunaPlus/images/main/leftMenuBot.png" alt="" class="png24" /></div>
</div>