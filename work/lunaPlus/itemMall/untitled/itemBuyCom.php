<?php include("../_lib/includeFiles.php"); ?>
<%
buy_code = request("buy_code")
error_name = ""
if buy_code = "2" then
	error_name = "로그인 후 다시 이용해 주시기 바랍니다."
	error_title = "결재실패"
elseif buy_code = "3" then
	error_name = "캐릭터가 존재하지 않습니다."
	error_title = "결재실패"
elseif buy_code = "4" then
	error_name = "상품이 존재하지 않습니다."
	error_title = "결재실패"
elseif buy_code = "5" then
	error_name = "구매수가 제한되었습니다."
	error_title = "결재실패"
elseif buy_code = "6" then
	error_name = "캐시가 부족합니다."
	error_title = "결재실패"
elseif buy_code = "7" then
	error_name = "결재가 실패하였습니다.</br>잠시 후 다시 시도해 주시기 바랍니다."
	error_title = "결재실패"
elseif buy_code = "8" then
	error_name = "행운상자는 1일 10회만 구매 가능합니다."
	error_title = "결재실패"
elseif buy_code = "10" then
	error_name = "네트워크 오류입니다.</br>고객센터에 문의하여 주시기 바랍니다."
	error_title = "결재실패"
elseif buy_code = "11" then
	error_name = "계정이 존재하지 않습니다."
	error_title = "결재실패"
elseif buy_code = "12" then
	error_name = "캐릭터가 존재하지 않습니다."
	error_title = "결재실패"
elseif buy_code = "13" then
	error_name = "잘못된 경로입니다."
	error_title = "결재실패"
elseif buy_code = "14" then
	error_name = "상품이 존재하지 않습니다."
	error_title = "결재실패"
elseif buy_code = "15" then
	error_name = "캐시가 부족합니다."
	error_title = "결재실패"
elseif buy_code = "" then
	error_name = "확인중 입니다."
	error_title = "결재확인"
end if

if error_name = "" then 

memDBConnect()
sql = " exec dbo.EM_Shop_Buy_Log_View_Proc_By_Id '"& Login_Id &"' "
set rs = memDB.execute(sql)
if rs.eof then
	
else
	if rs(0) = 0 then
	
	end if
end if

p_name = rs(1)

set rs = rs.NextRecordset
%>
	<div class="itemBuyCom" id="itemBuyCom" style="display:block;">
		<div class="head">
			<div class="tit">결재완료</div>
			<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
		</div>		
		
		<div class="buyComCtn">
			<table border="1" cellspacing="0" class="selBuy">
				<tr>
					<td>
						<div style="text-align:center; padding:30px 0">
							<div class="tit">"<%=p_name%>"</div>
							<div class="memo">
                            <%
							if not rs.eof then 
							%>
                            <% if rs("p_idx") <> 17 then %>확률아이템<br /><% end if %>
                            <select>
                            <%
								do until rs.eof
									okname = rs("Item_Name")
									If Len(okname) > 26 Then
										okname = Left(okname,26)
									End if
							%>
                            <option>[<span class="tOrange bold"><%=okname%></span>]</option>
                            <%
									rs.movenext
								loop
							%>
							</select><br />
							<%
							end if %>
                            상품구매가 <span class="tBlue bold">정상처리</span> 되었습니다.</div>
						</div>
					</td>
				</tr>
			</table>
			<div class="aCenter" style="padding:10px 0; line-height:18px;">에다전설 아이템 몰을 이용해 주셔서<br />감사합니다.</div>
			<div class="btnList"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose2.gif" alt="닫기" /></a></div>
		</div>
		<div class="rt"></div>
		<div class="lb"></div>	
		<div class="rb"></div>	
	</div>
<%
set rs = nothing
memDBClose()

else
%>
	<div class="itemBuyCom" id="itemBuyCom" style="display:block;">
		<div class="head">
			<div class="tit"><%=error_title%></div>
			<div class="btn"><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose.gif" alt="닫기" /></a></div>
		</div>		
		
		<div class="buyComCtn">
			<table border="1" cellspacing="0" class="selBuy">
				<tr>
					<td>
						<div style="text-align:center; padding:30px 0">
							<div class="tit">"<%=error_name%>"</div>
						</div>
					</td>
				</tr>
			</table>
<div class="aCenter" style="padding:10px 0; line-height:18px;">에다전설 아이템 몰을 이용해 주셔서<br />감사합니다.</div>
			<div class="btnList"><% If buy_code <> "" Then %><a href="javascript:itemPopClose();"><img src="/work/lunaPlus/itemMall/images/btnClose2.gif" alt="닫기" /></a><% End If %></div>
		</div>
		<div class="rt"></div>
		<div class="lb"></div>	
		<div class="rb"></div>	
	</div>
<% end if %>