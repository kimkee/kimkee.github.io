<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<?php include("../_lib/includeFiles.php"); ?>
<%
Response.CharSet = "euc-kr"
%>
<%
otype = request("otype")
'아이템몰 선물하기 막기 (2010-05-18)
otype = "1"
sidx = request("sidx")
memDBConnect()
Set objCmd = Server.CreateObject("ADODB.Command")
Set objRs1 = Server.CreateObject("ADODB.Recordset")
With objCmd
   .ActiveConnection = memDB
   .CommandType = adCmdStoredProc
   .CommandText = "dbo.EM_Shop_Item_View_Proc"
   .Parameters.Append .CreateParameter("@sidx",adInteger,adParamInput,0,sidx)	 'idx 번호
	objRs1.CursorLocation = adUseClient
	set objRs1 = .execute()
Set objCmd.ActiveConnection = Nothing
End With 


if objRs1("P_Name") = "0" then
	response.write "<script>alert('잘못된 경로입니다.');document.getElementById('itemPop1').style.display='none';</script>"
	response.End
end if 

if Login_Id = "" then
	response.write "<script>alert('로그인 후 이용하실 수 있습니다.');document.getElementById('itemPop1').style.display='none';</script>"
	response.End
end if 

P_Price = objRs1("P_Price") '가격
P_Sell = objRs1("P_Sell") '판매개수
P_Count = objRs1("P_Count") '판매개수
P_SaleRate = objRs1("P_SaleRate") '세일률
P_PointYN = objRs1("P_PointYN") '포인트적립 여부
P_PointRate = objRs1("P_PointRate") '포인트 적립률

set objRs1 = nothing 
memDBClose()

'============================================ 엔팡 캐쉬 조회 ======================================================
url = "http://218.234.20.212:8000/api/API_BC_USERINFO_SEARCH.php?userno=" & Enpang_Idx &"&userid=" & Login_ID &"&companycd=EYAH"

Set oDOM = Server.CreateObject("Microsoft.XMLDOM")
with oDOM
	.async = False
	.setProperty "ServerHTTPRequest", True
	.Load(url)

end with
Set myRec = oDOM.documentElement

Set Nodes = myRec.selectNodes("//Data")
			

If myRec.selectSingleNode("//root/Return_Code").Text = "0000" Then

	Total_account = 0
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_shop").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_contents").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_bonus").Text
	'Total_account = Total_account + Nodes(0).selectSingleNode("Amt_etc").Text
	'Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
	Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text


	account = Nodes(0).selectSingleNode("Amt_contents").Text


	bonus_account  = 0	
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_shop").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_bonus").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_etc").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
	bonus_account = bonus_account + Nodes(0).selectSingleNode("Amt_mileage_contents").Text			

Else
	Total_account = 0
End If 

'========================================== //엔팡 캐쉬 조회 ====================================================
%>
<div class="itemBuyPop" id="itemBuyPop" style="display:block;">
		<div class="head">
			<div class="tit"><% if otype = "1" then %>구매<% else %>선물<% end if %></div>
			<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
		</div>		
		<div class="buyCtn">
			<table border="1" cellspacing="0" class="specList">
            <form name="buyform" action="" method="post">
            <input type="hidden" name="otype" value="<%=otype%>" />
            <input type="hidden" name="sidx" value="<%=sidx%>" />
				<tr>
					<th>개별가격</th>
					<td><span class="bold tGray"><%=P_Price%></span> <img src="/work/lunaPlus/itemMall/images/icoN4.gif" alt="N" /></td>
				</tr>
				<tr>
					<th>구매수량</th>
					<td>
						<select name="itemcount" onchange="itemcnt_ch();">
							<%'<option value="0">수량</option>%>
                        <% for i = 1 to P_Count %>
							<option value="<%=i%>"><%=i%></option>
                        <% next %>
						</select>
					</td>
				</tr>
				<tr>
					<th>쿠폰사용</th>
					<td>
						<select name="itemcupon">
							<option>--쿠폰없음--</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>할인가격</th>
					<td><%=(P_Price * (P_SaleRate/100))%>  <img src="/work/lunaPlus/itemMall/images/icoN5.gif" alt="N" /></td>
				</tr>
				<tr>
					<th>적립포인트</th>
					<td>
					<% if P_PointYN = "Y" then %>
                    <%=(P_Price * (P_PointRate/100))%>
                    <% else %>
                    0
                    <% end if %>  
					<img src="/work/lunaPlus/itemMall/images/icoP5.gif" alt="P" /></td>
				</tr>
				<tr>
					<th class="tGray">최종구매가격</th>
					<td><div id="priceN" style="display:block;"><span class="bold tRed"><%=P_Price - (P_Price * (P_SaleRate/100))%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /></div>
                    <input type="hidden" name="price" value="<%=P_Price - (P_Price * (P_SaleRate/100))%>" />
                    <input type="hidden" name="defaultprice" value="<%=P_Price - (P_Price * (P_SaleRate/100))%>" />
                    </td>
				</tr>
				<tr>
					<th>보유캐시</th>
					<td><span class="bold tYellow"><%=Total_account%></span> <img src="/work/lunaPlus/itemMall/images/icoN2.gif" alt="N" />
                    <input type="hidden" name="cash" value="<%=Total_account%>" />
                    </td>
				</tr>
			</table>
			<div class="dotLine"></div>
			<table border="1" cellspacing="0" class="specList" style="margin-bottom:5px;">
				<tr>
					<th>결재 후 캐시</th>
					<td><div id="cashN" style="display:block;"><span class="bold tGreen"><%=Total_account-(P_Price - (P_Price * (P_SaleRate/100)))%></span> <img src="/work/lunaPlus/itemMall/images/icoN3.gif" alt="N" /></div>
                    </td>
				</tr>
			</table>
			
			<table border="1" cellspacing="0" class="selBuy" style="margin-bottom:7px;">
				<tr>
					<th style="width:80px;">구매인</th>
					<td>
                    <div id="serv_n">
						<select id="ServerNo" name="ServerNo" onchange="category_change1('/itemMall/character_xml.php', 'serv_n', '');">
							<option value="">서버선택</option>
                            <option value="1" <% if ServerN = 1 then %>selected<% end if %>>가이아</option>
                            <option value="2" <% if ServerN = 2 then %>selected<% end if %>>크로노스</option>
						</select>
						<select id="CharacterName" name="CharacterName">
							<option value="">캐릭터</option>
						</select>
                    </div>
					</td>
				</tr>
				<% if otype="2" then %>
				<tr>
					<th>수령인</th>
					<td>
						<select id="in_ServerNo" name="in_ServerNo" >
                        	<option value="">서버선택</option>
                            <option value="1" <% if ServerN = 1 then %>selected<% end if %>>가이아</option>
                            <option value="2" <% if ServerN = 2 then %>selected<% end if %>>크로노스</option>
						</select>
						<input type="text" name="in_CharacterName" value="" style="width:70px" maxlength="10" />
                        <input type="hidden" name="in_CharacterIdx" value="" />
					</td>
				</tr>
				<!--<tr>
					<th>메시지</th>
					<td><input type="text" name="msg" value="<%'사랑의 메세지를 입력해보세요.%>" style="width:170px" maxlength="30" />
					</td>
				</tr>-->
				<input type="hidden" name="msg" value="" />
                <% else %>
                <input type="hidden" name="in_ServerNo" value="" />
                <input type="hidden" name="in_CharacterName" value="" />
                <input type="hidden" name="in_CharacterIdx" value="" />
                <input type="hidden" name="msg" value="" />
				<% end if %>
            </form>
			</table>
			<div class="btnList"><a href="javascript:itemBuyCom();"><img src="/work/lunaPlus/itemMall/images/btnBuyCom.gif" alt="구매확정" /></a></div>
		</div>
		<div class="rt"></div>
		<div class="lb"></div>	
		<div class="rb"></div>	
	</div>