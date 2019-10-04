<!-- METADATA TYPE="typelib" FILE="C:\program files\common files\system\ado\msado15.dll"-->
<?php include("../_lib/includeFiles.php"); ?>
<%
Response.CharSet = "euc-kr"
%>
<!--
<div class="itemPop p1">
에서 p1 ~ p6 까지가 팝업위치입니다.
 -->
<%
sidx = request("sidx")
num = request("num")
memDBConnect()
Set objCmd = Server.CreateObject("ADODB.Command")
Set objRs1 = Server.CreateObject("ADODB.Recordset")
With objCmd
   .ActiveConnection = memDB
   .CommandType = adCmdStoredProc
   .CommandText = "dbo.LM_Shop_Item_View_Proc"
   .Parameters.Append .CreateParameter("@sidx",adInteger,adParamInput,0,sidx)	 'idx 번호
	objRs1.CursorLocation = adUseClient
	set objRs1 = .execute()
Set objCmd.ActiveConnection = Nothing
End With 


if objRs1("P_Name") = "0" then
	response.write "<script>alert('잘못된 경로입니다.');document.getElementById('itemPop1').style.display='none';</script>"
	response.End
end if 

P_Name = objRs1("P_Name")	'상품명
P_Content = objRs1("P_Content")		'상품 설명
P_UseEffect = "" 'objRs1("P_UseEffect")		'상품 효과
P_ImageYN = objRs1("P_ImageYN")		'이미지 사용YN
P_Image = objRs1("P_Image")		'이미지
P_Price	= objRs1("P_Price")		'상품 가격
P_SaleRate = objRs1("P_SaleRate")	'세일률
P_CuponYN = objRs1("P_CuponYN")		'쿠폰 적용여부
P_PointYN = objRs1("P_PointYN")		'포인트 적용여부
P_PointRate	= objRs1("P_PointRate")		'포인트 적립률
P_Edate = objRs1("P_Edate")		'판매기간
if P_Edate > "2000-01-01" then
	P_Edate = replace(left(P_Edate,10),"-",".")
else
	p_Edate = "기간없음"
end if
P_Limited = objRs1("P_Limited")		'한정 판매개수
P_Sell = objRs1("P_Sell")		'판매개수
P_User_Limited = objRs1("P_User_Limited")	'1인당 구매 가능 개수
P_UseDate = objRs1("P_UseDate")		'사용기간
P_UseCondition = objRs1("P_UseCondition")		'사용 조건
P_UseMethod = "" 'objRs1("P_UseMethod")		'사용 방법
Connect_Img1 = objRs1("Connect_Img1")	'관련이미지
Connect_Img2 = objRs1("Connect_Img2")
Connect_Img3 = objRs1("Connect_Img3")
Connect_Img4 = objRs1("Connect_Img4")
'Connect_Product1 = objRs1("Connect_Product1")	'관련상품
'Connect_Idx1 = objRs1("Connect_Idx1")
'Connect_Product2 = objRs1("Connect_Product2")
'Connect_Idx2 = objRs1("Connect_Idx2")
'Connect_Product3 = objRs1("Connect_Product3")
'Connect_Idx3 = objRs1("Connect_Idx3")
'Connect_Product4 = objRs1("Connect_Product4")
'Connect_Idx4 = objRs1("Connect_Idx4")


set objRs1 = objRs1.NextRecordset

%>

<div class="itemSpecPop" id="itemSpecPop" style="display:block;">
	<div class="head">
		<div class="tit"><%=P_Name%></div>
		<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
	</div>
	<div class="ssScreen" id="ssScreen"></div>
	<div class="detailView">
		<div class="left">
			<div class="item">
				<div class="img"><img src="/work/lunaPlus/savefile/LunaBlue/mall/item/<%=P_Image%>" alt="아이템"  width="60" height="60" /></div>
			</div>
			<div class="itemSS">
				<div class="tit">관련이미지</div>
                <% if Connect_Img1 = "" and Connect_Img2 = "" and Connect_Img3 = "" and Connect_Img4 = "" then %>
                <% else %>
				<ul class="ssList">
                	<% if Connect_Img1 <> "" then %><li><a href="javascript:itemSSPop('1');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img1%>" alt="스크린샷" width="78" height="56" /></a></li>
					<div class="itemSSBig" id="itemSSBig1">
						<div class="img"><a href="javascript:itemSSClose('1');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img1%>" alt="스크린샷" width="390" height="250" /></a></div>
					</div>
					<% end if %>
					<% if Connect_Img2 <> "" then %><li><a href="javascript:itemSSPop('2');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img2%>" alt="스크린샷" width="78" height="56" /></a></li>
					<div class="itemSSBig" id="itemSSBig2">
						<div class="img"><a href="javascript:itemSSClose('2');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img2%>" alt="스크린샷" width="390" height="250" /></a></div>
					</div>
					<% end if %>
                    <% if Connect_Img3 <> "" then %><li><a href="javascript:itemSSPop('3');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img3%>" alt="스크린샷" width="78" height="56" /></a></li>
					<div class="itemSSBig" id="itemSSBig3">
						<div class="img"><a href="javascript:itemSSClose('3');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img3%>" alt="스크린샷" width="390" height="250" /></a></div>
					</div>
					<% end if %>
                    <% if Connect_Img4 <> "" then %><li><a href="javascript:itemSSPop('4');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img4%>" alt="스크린샷" width="78" height="56" /></a></li>
					<div class="itemSSBig" id="itemSSBig4">
						<div class="img"><a href="javascript:itemSSClose('4');"><img src="/work/lunaPlus/uploadFiles/mall/item/<%=Connect_Img4%>" alt="스크린샷" width="390" height="250" /></a></div>
					</div>
					<% end if %>
				</ul>
                <% end if %>
			</div>
		</div>
		<div class="right">
			<table border="1" cellspacing="0" class="specList">
				<tr>
					<th>가격</th>
					<td><%=Formatnumber(P_Price,0)%></td>
				</tr>
				<tr>
					<th>할인가격</th>
					<td><%=Formatnumber(((P_Price*P_SaleRate)/100),0)%></td>
				</tr>
				<tr>
					<th>적립포인트</th>
					<td><% if P_PointYN = "Y" then %><%=Formatnumber(((P_Price*P_PointRate)/100),0)%><% else %>0<% end if %></td>
				</tr>
				<tr>
					<th>쿠폰적용 여부</th>
					<td><% if P_CuponYN = "Y" then %>쿠폰가능<%else%>쿠폰불가<% end if %></td>
				</tr>
				<tr>
					<th>할인적용가격</th>
					<td><span class="bold tRed"><%=Formatnumber((P_Price - ((P_Price*P_SaleRate)/100)),0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" width="11" height="14" /></td>
				</tr>
				<%
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
                    Total_account = Total_account + Nodes(0).selectSingleNode("Amt_etc").Text
                    Total_account = Total_account + Nodes(0).selectSingleNode("Amt_mileage_shop").Text
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
'                
                '========================================== //엔팡 캐쉬 조회 ====================================================
                %>
				<tr>
					<th>보유캐시</th>
					<td><span class="bold tYellow"><%=Formatnumber(Total_account,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN2.gif" alt="N" width="11" height="14" /></td>
				</tr>
			</table>
			<div class="dotLine"></div>
			<table border="1" cellspacing="0" class="specList">
				<tr>
					<th>판매기간</th>
					<td><%=p_Edate%></td>
				</tr>
				<tr>
					<th>한정판매</th>
					<td><% if P_Limited < 9999 then %><%=P_Limited%><%else%>무한<%end if%> / <% if P_Limited < 9999 then %><%=P_Limited - P_Sell%>개 남음<%else%>무한<%end if%></td>
				</tr>
                <%
				sql = " select count(*) from dbo.LM_Shop_Log with(nolock) where idx = "& sidx &" and Login_Id='"& Login_Id &"' "
				set ict = memDB.execute(sql)
				if not ict.eof then
					U_buyc = ict(0)
				else
					U_buyc = 0
				end if
				set ict = nothing
				%>
				<tr>
					<th>계정당 한정</th>
					<td><% if P_User_Limited < 9999 then %><%=P_User_Limited%><%else%>무한<%end if%> / <% if P_User_Limited < 9999 then %><%=P_User_Limited - U_buyc%>개 남음<%else%>무한<%end if%></td>
				</tr>
			</table>
			<div class="dotLine"></div>
			<table border="1" cellspacing="0" class="specList">
				<tr>
					<th>귀속여부</th>
					<td>개별 아이템 참조</td>
				</tr>
				<tr>
					<th>사용기간</th>
					<td><%=P_UseDate%></td>
				</tr>
				<tr>
					<th>사용방법</th>
					<td><%=P_UseMethod%></td>
				</tr>
				<tr>
					<th>대상클래스</th>
					<td><% if P_Class <> "" then %><%=P_Class%><% else %>없음<% end if %></td>
				</tr>
				<tr>
					<th>사용조건</th>
					<td><%=P_UseCondition%></td>
				</tr>
			</table>
			<div class="dotLine"></div>
			<table border="1" cellspacing="0" class="specList">
				<tr>
					<th>관련상품1</th>
					<td><% if Connect_Product1 <> "" then %><a href="javascript:itemSpecPop('<%=Connect_Idx1%>','1');"><%=Connect_Product1%></a><% end if %></td>
				</tr>
				<tr>
					<th>관련상품2</th>
					<td><% if Connect_Product2 <> "" then %><a href="javascript:itemSpecPop('<%=Connect_Idx2%>','1');"><%=Connect_Product2%></a><% end if %></td>
				</tr>
				<tr>
					<th>관련상품3</th>
					<td><% if Connect_Product3 <> "" then %><a href="javascript:itemSpecPop('<%=Connect_Idx3%>','1');"><%=Connect_Product3%></a><% end if %></td>
				</tr>
				<tr>
					<th>관련상품4</th>
					<td><% if Connect_Product4 <> "" then %><a href="javascript:itemSpecPop('<%=Connect_Idx4%>','1');"><%=Connect_Product4%></a><% end if %></td>
				</tr>
			</table>
		</div>
		<div class="clear"></div>
	</div>

    
    <div class="itemCtn">
    
                <div class="listIco">
                    <ul>
    <%
    if not objRs1.eof then
        numt = 0
        do until objRs1.eof
            numt = numt + 1
            imgSrc = objRs1("Item_Image")
            Item_Name = objRs1("Item_Name")
            Item_Content = objRs1("Item_Content")
            Item_Group = "" 'objRs1("Item_Group")
            Item_Effect = "" 'objRs1("Item_Effect")
            Item_Count = objRs1("Item_Count")
            Group_Idx = objRs1("Group_Idx")
            Item_Rate = objRs1("Item_Rate")
            Item_Sub = objRs1("Item_Sub")
            if Item_Sub = "Y" then
                Item_Sub_txt = "YES" 
            else
                Item_Sub_txt = "NO"
            end if
            Item_Period = objRs1("Item_Period")
    %>
                <div class="itemPopInfo t<% if numt < 6 then%>1<%else%>2<%end if%>" id="itemPopInfo1<%=numt%>">
                    <div class="arrow p<%=numt%>"></div>
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
                    <div class="img"><a href="javascript:;" onmouseover="javascript:document.getElementById('itemPopInfo1<%=numt%>').style.display='block';" onmouseout="javascript:document.getElementById('itemPopInfo1<%=numt%>').style.display='none';"><img src="/work/lunaPlus/savefile/LunaBlue/mall/item/<%=imgSrc%>" alt="아이템이미지" width="45" /></a></div>
                    <div class="tit">
                    <% if sidx = 17 then %>
                    <%=numt%> 등
                    <% else %>
                    <% if Group_Idx = 0 then %>기본<% else %><% if Item_Rate = 100 then %>바로지급<%else %>확률<%=Item_Rate%>%<% end if %><% end if %>
                    <% end if %>
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
            <div class="memo memo<%if numt > 5 then%>1<%else%>2<% end if %>"><%=P_Content%></div>
            <div class="spec spec1"><%=P_UseEffect%></div>
            <div class="btnList">
                <div class="left"><a href="javascript:itemPopOn('<%=sidx%>','<%=num%>');"><img src="/work/lunaPlus/itemMall/images/btnSpecClose.gif" alt="스팩열기" /></a></div>
                <div class="right"><a href="javascript:itemBuyPop('<%=sidx%>','1');"><img src="/work/lunaPlus/itemMall/images/btnBuy.gif" alt="구매" /></a> <!--<% If sidx <> "17" Then %><a href="javascript:itemBuyPop('<%=sidx%>','2');"><img src="/work/lunaPlus/itemMall/images/btnGift.gif" alt="선물" /></a><% End If %>--></div>
            </div>
        </div>
    </div>


</div>
