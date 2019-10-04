<div class="itemCtn">

			<script type="text/javascript">
				function itemPopInfo(dn) {
					alert(dn);
					//document.getElementById('itemPopInfo1').style.display='block';
				}
				function itemPopInfoOff(dn) {
					//document.getElementById('itemPopInfo1').style.display='none';
				}
			</script>

			<div class="listIco">
				<ul>
<%
if not objRs1.eof then
	numd = 0
	do until objRs1.eof
		numd = numd + 1
		imgSrc = objRs1("Item_Image")
		Item_Name = objRs1("Item_Name")
		Item_Content = objRs1("Item_Content")
		Item_Group = "" 'objRs1("Item_Group")
		Item_Effect = "" 'objRs1("Item_Effect")
		Item_Count = objRs1("Item_Count")
		Group_Idx = objRs1("Group_Idx")
		Item_Rate = objRs1("Item_Rate")
		Item_Sub = objRs1("Item_Sub")
		if Item_Sub = "O" then
			Item_Sub_txt = "YES" 
		else
			Item_Sub_txt = "NO"
		end if
		Item_Period = objRs1("Item_Period")
%>
			<div class="itemPopInfo t<% if numd < 6 then%>1<%else%>2<%end if%>" id="itemPopInfo<%=numd%>">
				<div class="arrow p<%=numd%>"></div>
				<div class="infoS">
					<div class="tit"><%=Item_Name%></div>
					<div class="memo"><%=Item_Content%></div>
				</div>
				<div class="specS">
					<table border="1" cellspacing="0">
						<tr>
							<th>시간 :</th>
							<td><%=Item_Period%></td>
							<th>개수 :</th>
							<td><%=Item_Count%>개</td>
							<th>귀속 :</th>
							<td><%=Item_Sub_txt%></td>
						</tr>
					</table>
				</div>
			</div>
            
            <li class="icoPack">
				<% if Group_Idx > 0 and Item_Rate < 100 then %><div class="flag"><img src="/work/lunaPlus/itemMall/images/flagRadom.png" alt="확률" class="png24" /></div><% end if %>
                <div class="img"><a href="javascript:;" onmouseover="javascript:document.getElementById('itemPopInfo<%=numd%>').style.display='block';" onmouseout="javascript:document.getElementById('itemPopInfo<%=numd%>').style.display='none';"><img src="/work/lunaPlus/savefile/LunaBlue/mall/item/<%=imgSrc%>" alt="아이템이미지" width="45" width="45" /></a></div>
                <div class="tit">
                <% if sidx = 17 then %>
                <%=numd%> 등
                <% else %>
				<% if Group_Idx = 0 then %>기본<% else %><% if Item_Rate = 100 then %>바로지급<%else %>확률<%=Item_Rate%>%<% end if %><% end if %>
                <% end if %>
                </div>
            </li>
<%
objRs1.movenext
loop
end if
%>

        </ul>
        <div class="clear"></div>
    </div>
    <div class="itemInfo">
        <div class="memo memo<%if numd > 5 then%>1<%else%>2<% end if %>"><%=P_Content%></div>
        <div class="spec spec1"><%=P_UseEffect%></div>
        <div class="btnList">
            <div class="left"><a href="javascript:itemSpecPop('<%=sidx%>','<%=num%>');"><img src="/work/lunaPlus/itemMall/images/btnSpec.gif" alt="스팩열기" /></a></div>
            <div class="right"><a href="javascript:itemBuyPop('<%=sidx%>','1');"><img src="/work/lunaPlus/itemMall/images/btnBuy.gif" alt="구매" /></a> <!--<% If sidx <> "17" Then %><a href="javascript:itemBuyPop('<%=sidx%>','2');"><img src="/work/lunaPlus/itemMall/images/btnGift.gif" alt="선물" /></a><% End If %>--></div>
        </div>
    </div>
</div>