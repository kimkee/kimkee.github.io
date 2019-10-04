<script type="text/javascript" src="/work/edda/js/jquerypack.js"></script>
<script type="text/javascript" src="/work/edda/js/stepcarousel.js"></script>
<%
memDBConnect()
Set objRs = Server.CreateObject("ADODB.RecordSet")
Set objGetData = Server.CreateObject("ADODB.Command")
With objGetdata
	.ActiveConnection = memDB
	.CommandType = adCmdStoredProc
	.CommandText = "dbo.MAIN_ITEMMALL_SELECT"
	objRs.CursorLocation = adUseClient
	objRs.Open objGetData, ,adOpenStatic, adLockReadOnly
	Set objRs.ActiveConnection = Nothing
	Set objGetData.ActiveConnection = Nothing
End With
If Not objRs.eof Then 

	Do Until objRs.eof 

	P_idx = objRs("idx")
	P_Name = objRs("P_Name")
	Item_Idx = objRs("Item_Idx")
	P_Cate = objRs("P_Cate")
	P_SetYN = objRs("P_SetYN")
	P_ImageYN = objRs("P_ImageYN")
	P_Image = objRs("P_Image")
	P_Price = objRs("P_Price")
	P_Count = objRs("P_Count")

'	P_User_Limited = Rs("P_User_Limited")
'	P_Limited = Rs("idx")
'	P_Sell = Rs("idx")
'	P_Class = Rs("idx")
'	P_CuponYN = Rs("idx")
'	P_SaleRate = Rs("idx")
'	P_PointYN = Rs("idx")
'	P_PointRate = Rs("idx")
'	P_Edate = Rs("idx")
'	P_Content = Rs("idx")
'	P_UseDate = Rs("idx")
'	P_UseCondition = Rs("idx")
'	P_UseMethod = Rs("idx")
'	P_UseEffect = Rs("idx")

	strPrice = CStr(FormatNumber(P_Price,0))
	loopNum = Len(strPrice)
For k = 1 To loopNum
						If Mid(strPrice,k,1) = "," Then 
							priceNUM = "C"
						Else 
							priceNUM = Mid(strPrice,k,1)
						End If 
					Next 
		objRs.MoveNext 
	Loop 	
End If
%>
<div class="rightArea">
	<div class="movie" style=" background:url(/work/edda/images/main/mainMovieBg.gif) no-repeat; width:240px; height:165px; position:relative; margin-bottom:37px; ">
		<div style="position:absolute; left:12px; top:2px; width:215px; height:156px;">
			<script type="text/javascript">flashWrite('/swf/player_mini.swf',215,156,'mainTop','#ffffff','linkFLV=http://eyamovie.zcdn.co.kr/eyamovie/edda/swf/mainMovie/main_ongamenet.flv&amp;linkIMG=/swf/mainMovie/sum100423.jpg&amp;linkURL=000','transparent','false')</script> 
		</div>
	</div>

	<div class="mainItemMall">
		<script type="text/javascript">
			function popCoupon() {
			  window.open('/news/eventPop3.php','eventPop3','scrollbars=no,width=280,height=235,left=100,top=100');
			}		
		</script>
		<table width="240" height="183" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td><img src="/work/edda/images/main/img_pcij.jpg" width="240" height="183" border="0" usemap="#Map"></td>
		  </tr>
		</table>
		<map name="Map">
		  <area shape="rect" coords="32,140,117,161" href="http://pcbang.enpang.com/introduction/pcSearch.php" target="_blank">
		  <area shape="rect" coords="122,140,207,161" href="javascript:popCoupon();">
		</map>	
	</div>
	<div class="mainPoll">
		<div class="info">
			유익한 설문을 준비중에<br>있습니다.
			<br>잠시 기다려 주세요.
		</div>
		<!-- <div class="date">기간 10.05.22 ~ 05.22</div> -->
<!--		<div class="img"><img src="/work/edda/images/main/mainPoll.gif" alt="설문조사" border="0" usemap="#Map" />
 <map name="Map" id="Map">
	<area shape="rect" coords="13,5,223,33" href="/work/edda/news/pollList.php" alt="설문조사" />
</map></div> -->
	</div>
</div>
<div class="clear"></div>
