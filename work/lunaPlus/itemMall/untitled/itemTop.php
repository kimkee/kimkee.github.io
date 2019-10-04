<script src="/work/lunaPlus/itemMall/rolling_banner.js" type="text/javascript"></script>
<div class="itemTop">
	<div class="list">		
	<div id="listDiv" style=" height:115px;">
<%
memDBConnect()
sql = " exec dbo.LM_Shop_Item_Scroll_List_Proc "
set Lst = memDB.execute(sql)
if not Lst.eof then
	Lnum = 0
	do until Lst.eof
		Lnum = Lnum + 1		
		P_SaleRate = Lst("P_SaleRate")
		P_Price = Lst("P_Price")
		If P_SaleRate <> "0" Then 
			P_Price = Round(P_Price - (P_Price * (P_SaleRate/100)),0)
		End If 

		ltype = Lst("Type")
		Select Case ltype
			Case "1"
				SImg = "icoNew.gif"
			Case "2"
				SImg = "icoHot.gif"
			Case "3"
				SImg = "icoBest.gif"
		End Select

		P_Cate = Lst("P_Cate")
		P_Idx = Lst("P_Idx")
		P_Name = Lst("P_Name")
		If Len(P_Name) > 14 Then
			PP_Name = Left(P_Name,14) & ".."
		Else
			PP_Name = P_Name
		End If
%>
		<div style=" height:24px;">
		<table border="1" cellspacing="0">			
			<tr class="trOn" style=" height:23px;">
				<td class="bTit"><a href="/work/lunaPlus/itemMall/?cidx=<%=P_Cate%>&Search=P_Name&key=<%=P_Name%>"><%=PP_Name%>&nbsp;<%If P_SaleRate<>"0" Then%><img src="/work/lunaPlus/itemMall/images/sale_icon.gif" alt="Sale" /><%End If%></a></td>
				<td class="bIco"><img src="/work/lunaPlus/itemMall/images/<%=SImg%>" alt="New" /></td>
				<td class="bCash"><%=FormatNumber(P_Price,0)%> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></td>
			</tr>
		</table>
		</div>
<%
		Lst.movenext
	loop
else
%>
		<div style=" height:24px;">
		<table border="1" cellspacing="0">			
			<tr class="trOn" style=" height:23px;">
				<td class="bTit"></td>
				<td class="bIco"></td>
				<td class="bCash"></td>
			</tr>
		</table>
		</div>
<%
end if 
set Lst = nothing
memDBClose()
%>
	</div>
	</div>
	<?php include("../itemMall/rollBanner.php"); ?>
</div>
<script language="javascript"> 
var roll1 = new rolling_banner(document.getElementById('listDiv'));
roll1.gap=1;
roll1.gap_time = '1';	
roll1.gap_sleep = '3000';
roll1.start();
</script>