<div class="itemList">
	
	<script type="text/javascript">
			function itemPopOn(sidx,num) { //아이템정보 팝업 6개
				document.getElementById('itemPopA').style.display='none';
				document.getElementById('itemPopB').style.display='none';
				document.getElementById('itemPopC').style.display='none';	
				document.getElementById('itemPopD').style.display='none';
				document.getElementById('itemScreen').style.display='none';	
				url = '/itemMall/itemPop.php?sidx=' + sidx+'&num='+num;
				category_change(url, 'itemPopA', '');
				document.getElementById('itemPopA').style.display='block';
				//document.getElementById('itemPop1').style.display='block';
				
			}
			function itemBuyPop(sidx,tn) { // 구매 팝업열기
				<% if Login_Id = "" then %>
				not_login('/itemMall/');
				return;
				<% end if %>
				//	var oXMLHTTP=new ActiveXObject("Microsoft.XMLHTTP");
				//	var sURL="server_test.php";
				//	oXMLHTTP.open("GET",sURL,false);
				//	oXMLHTTP.send();
				//	checkn = oXMLHTTP.responseText 
				//	if ( String(checkn).substring(0,2) != '99'){
				//		alert('게임 서버 오류입니다.\n\n잠시 후 이용해 주시기 바랍니다.');
				//		return;
				//	}
				url = '/itemMall/itemBuyPop.php?sidx=' + sidx + '&otype=' + tn;
				category_change(url, 'itemPopC', '');
				document.getElementById('itemPopC').style.display='block';
				
				//document.getElementById('itemBuyPop').style.display='block';
				document.getElementById('itemScreen').style.display='block';
			}
			function itemPopClose() { // 모두 닫기
				document.getElementById('itemPopA').style.display='none';
				document.getElementById('itemPopB').style.display='none';
				document.getElementById('itemPopC').style.display='none';	
				category_change('/itemMall/itemBuyCom.php?buy_code=', 'itemPopD', '');
				document.getElementById('itemPopD').style.display='none';
				document.getElementById('itemScreen').style.display='none';				
			}
			function itemSpecPop(sidx,num) { // 상세스팩열기
				url = '/itemMall/itemSpecPop.php?sidx=' + sidx+'&num='+num;
				category_change(url, 'itemPopB', '');
				document.getElementById('itemPopB').style.display='block';
				//document.getElementById('itemSpecPop').style.display='block';
			}
			function itemSSPop(ttl) { // 스샷열기
				document.getElementById('itemSSBig'+ttl).style.display='block';
				document.getElementById('ssScreen').style.display='block';
			}
			function itemSSClose(ttl) { // 스샷닫기
				document.getElementById('itemSSBig'+ttl).style.display='none';
				document.getElementById('ssScreen').style.display='none';
			}
			//xml 정의
			var oXMLHTTP = null;
			try{
			 oXMLHTTP = new XMLHttpRequest();
			}catch(trymicrosoft){
			 try{
			  oXMLHTTP = new ActiveXObject("Msxml2.XMLHTTP");  //MSXML2.ServerXMLHTTP.4.0  'Msxml2.XMLHTTP
			 }catch(othermicrosoft){
			  try{
			   oXMLHTTP = new ActiveXObject("Microsoft.XMLHTTP");
			  }catch(failed){
			   oXMLHTTP = null;
			  }
			 }
			}
			if(oXMLHTTP == null)
			 alert("Error creating request object!");
			function itemBuyCom() { //구매하기
				category_change('/itemMall/itemBuyCom.php?buy_code=', 'itemPopD', '');
				document.getElementById('itemPopD').style.display='none';
				if (document.buyform.itemcount.value == 0){
					alert('구매 수량을 선택해 주시기 바랍니다.');
					return;
				}
				//if (document.buyform.cash.value < document.buyform.price.value){
				//	var nocash = document.buyform.cash.value - document.buyform.price.value;
				//	alert('캐시가 부족합니다.'+nocash);
				//	return;
				//}
				if (document.buyform.ServerNo.value == ''){
					alert('서버를 선택해 주시기 바랍니다.');
					return;
				}
				if (document.buyform.CharacterName.value == ''){
					alert('캐릭터를 선택해 주시기 바랍니다.');
					return;
				}
				if (document.buyform.otype.value == '2'){
					if (document.buyform.in_ServerNo.value == ''){
						alert('수령인 서버를 선택해 주시기 바랍니다.');
						return;
					}
					if (document.buyform.in_CharacterName.value == ''){
						alert('수령인 캐릭터를 적어 주시기 바랍니다.');
						return;
					}
					var in_ServerNo = document.buyform.in_ServerNo.value;
					var in_CharacterName = document.buyform.in_CharacterName.value;
					var oXMLHTTP=new ActiveXObject("Microsoft.XMLHTTP");
					var sURL="character_idx_xml.php?ServerN="+in_ServerNo + "&cName="+in_CharacterName;
					oXMLHTTP.open("GET",sURL,false);
					oXMLHTTP.send();
					in_chr_idx = oXMLHTTP.responseText 
					if ( in_chr_idx == 0){
						alert('수령인 캐릭터가 존재하지 않습니다.');
						return;
					}
					document.buyform.in_CharacterIdx.value = in_chr_idx;
				}
				submitok();
			}
			function submitok(){
				sParams = "otype="+document.buyform.otype.value;
				sParams = sParams + "&sidx="+document.buyform.sidx.value;
				sParams = sParams + "&itemcount="+document.buyform.itemcount.value;
				sParams = sParams + "&itemcupon="+document.buyform.itemcupon.value;
				sParams = sParams + "&ServerNo="+document.buyform.ServerNo.value;
				sParams = sParams + "&CharacterName="+document.buyform.CharacterName.value;
				sParams = sParams + "&in_ServerNo="+document.buyform.in_ServerNo.value;
				//sParams = sParams + "&in_CharacterName="+document.buyform.in_CharacterName.value;
				sParams = sParams + "&in_CharacterIdx="+document.buyform.in_CharacterIdx.value;
				sParams = sParams + "&msg="+document.buyform.msg.value;
				
					sURL="itemBuyOk.php";  //?msg="+document.buyform.msg.value+"&in_CharacterName="+document.buyform.in_CharacterName.value
					oXMLHTTP.open("post",sURL,false);
					 //oXMLHTTP.setRequestHeader "Accept-Language","ko"
					 //oXMLHTTP.setRequestHeader "Accept-Encoding","gzip, deflate"
					 //oXMLHTTP.setRequestHeader "Content-Type","application/x-www-form-urlencoded"
					 //oXMLHTTP.setRequestHeader "Connection","Keep-Alive"
					 //oXMLHTTP.setRequestHeader "Cache-Control","no-cache"

					oXMLHTTP.setRequestHeader('Content-Type','application/x-www-form-urlencoded;, charset=UTF-8');
					oXMLHTTP.onreadystatechange = collResult;
					oXMLHTTP.send(sParams);	
					//oXMLHTTP.send(escape(sParams));

			}
			
			function collResult(){
				if(oXMLHTTP.readyState == 4){
					var ReVal = oXMLHTTP.responseText;
					//alert(ReVal);
					//return;
					url = '/itemMall/itemBuyCom.php?buy_code=' + ReVal;
					category_change(url, 'itemPopD', '');
					document.getElementById('itemPopD').style.display='block';
					document.getElementById('itemPopC').style.display='none';
				}
			}
			function itemcnt_ch(){ //구매수량 수정
				var cnt = document.buyform.itemcount.value;
				var priceN = document.buyform.defaultprice.value * cnt;
				var cashN = document.buyform.cash.value - priceN;
				document.buyform.price.value = priceN;
				document.getElementById('priceN').innerHTML = "<span class='bold tRed'>"+ priceN +"</span> <img src='/itemMall/images/icoN.gif' alt='N' />";
				document.getElementById('cashN').innerHTML = "<span class='bold tGreen'>" + cashN + "</span> <img src='/itemMall/images/icoN3.gif' alt='N' />";
			}
			//구매시 캐릭터 선택
			function category_change1(URL, obj, param) {
				var ServerN = document.getElementById('ServerNo').value;
				URL = URL + '?ServerN=' + ServerN;
				document.getElementById('serv_n').style.display='block';
				createXMLHttpRequest();
				var url = URL;
				var queryString = createQueryString(URL, param);
				document.getElementById('outObj1').value = obj;
				xmlHttp.open("POST", url, true);
				xmlHttp.onreadystatechange = updateCategoryMenu;
				xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded, charset=UTF-8');
				xmlHttp.send(queryString);
			}
			//구매 폼 전송
			
	</script>
	
	<div class="itemScreen" id="itemScreen"></div>  <!-- 배경 가리기 -->
	
    <div id="itemPopA">
    </div>

    <div id="itemPopB">
    </div>

    <div id="itemPopC">
    </div>

		<div id="itemPopD">
    </div>

	<ul>
<%
If Not(objRs.EOF) Then
	i = 1
	Do Until objRs.EOF

		P_idx = objRs("idx")
		P_Name = objRs("P_Name")
		If Len(P_Name) > 14 Then
			P_Name = Left(P_Name,13) & ".."
		End If 

		Item_Idx = objRs("Item_Idx")
		P_Cate = objRs("P_Cate")
		P_SetYN = objRs("P_SetYN")
		P_Image = objRs("P_Image")
		P_Price = objRs("P_Price")
		P_SaleRate = objRs("P_SaleRate")
		If P_SaleRate <> "0" Then 
			P_SalePrice = Round(P_Price - (P_Price * (P_SaleRate/100)),0)
		End If 
		P_Content = objRs("P_Content")
		P_Content = Replace(P_Content,"<br />",Chr(10))
		P_Content = Replace(P_Content,"&nbsp;"," ")
		P_Content = Replace(P_Content,"<P>;","")
		P_Content = Replace(P_Content,"</P>","")
		'If Len(P_Content) > 65 Then
		'	P_Content = Left(P_Content,65) & "..."
		'End If 

%>
		<li class="itBox">
			<div class="item">
				<!-- <div class="flag"><img src="/work/lunaPlus/itemMall/images/flagHot.png" alt="HOT" class="png24" /></div> -->
				<div class="img"><a href="javascript:itemPopOn('<%=P_idx%>','<%=i%>');"><img src="/work/lunaPlus/savefile/LunaBlue/mall/item/<%=P_Image%>" width="60" height="60" alt="" /></a></div>
				<div class="btn"><a href="javascript:itemBuyPop('<%=P_idx%>','1');"><img src="/work/lunaPlus/itemMall/images/btnBuy.gif" alt="구매" /></a> <!--<% If P_idx <> "17" Then %><a href="javascript:itemBuyPop('<%=P_idx%>','2');"><img src="/work/lunaPlus/itemMall/images/btnGift.gif" alt="선물" /></a><% End If %>--></div>
			</div>
			<div class="info">
				<div class="head">
					<h4 class="tit"><a href="javascript:itemPopOn('<%=P_idx%>','<%=i%>');"><%=P_Name%></a></h4>
					<%
					If P_SetYN = "Y" Then
					%>
					<div class="ico"><img src="/work/lunaPlus/itemMall/images/icoPack.gif" alt="패키지" /></div>
					<%
					End If 
					%>
				</div>
				<div class="cash"><img src="/work/lunaPlus/itemMall/images/icoCoin.gif" alt="" /> 
				<%
				If P_SaleRate = "0" Then
				%>
				<span class="ct red"><%=FormatNumber(P_Price,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" />
				<%
				Else 
				%>
				<span class="ctLine"><%=FormatNumber(P_Price,0)%></span> → <span class="ct red"><%=FormatNumber(P_SalePrice,0)%></span> <img src="/work/lunaPlus/itemMall/images/icoN.gif" alt="N" /> <span class="sale"><%=P_SaleRate%>%</span>
				<%
				End If 
				%>
				</div>
				<div class="memo"><a href="javascript:itemPopOn('<%=P_idx%>','<%=i%>');"><%=Trim(P_Content)%></a></div>
			</div>	
		</li>
<%
	i = i + 1
	objRs.MoveNext
	Loop
End If 
%>		
	</ul>
	<div class="clear"></div>
</div>

<script>
//포커스 없애기
myAnchors = document.all.tags("A");
for (i = 0; i<myAnchors.length ; i++ )
{
	myAnchors[i].onfocus=new Function("myAnchors["+i+"].blur()");
}
</script>