<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
					
<%
r_nowYear = Request("searchYear")
r_nowMonth = Request("searchMonth")
r_nowDay = Request("searchDay")

IF r_nowYear = "" THEN
	nowYear = year(now)
ELSE
	nowYear = r_nowYear
END IF

IF r_nowMonth = "" THEN
	nowMonth = Right("00" & month(now),2)
ELSE
	nowMonth = Right("00" & r_nowMonth,2)
END IF

IF r_nowDay = "" THEN
	nowDay = Right("00" & day(now),2)
ELSE
	nowDay = Right("00" & r_nowDay,2)
END IF

nowDate = nowYear & "-" & nowMonth & "-" & nowDay

SearchType = Request("searchType")
SearchName = Request("searchName")

page = Request("page")
IF page = "" THEN
	page = 1
ELSE
	page = Request("page")
END IF

pageSize = 20

tongDBConnect()

%>
						<script type="text/javascript">
							function search_check(){
								if(document.getElementById('searchName').value == "" || document.getElementById('searchName').value == "검색어를 입력해주세요"){
									alert("검색할 내용을 입력하세요.");
									return false;
								}
								
								document.frmsearch.submit();
							}
							
							function tab_change1(str1, str2){

								document.getElementById('top_20').style.display = "none";
								document.getElementById('top_40').style.display = "none";
								document.getElementById('top_60').style.display = "none";
								document.getElementById('top_80').style.display = "none";
								document.getElementById('top_100').style.display = "none";
								
								document.getElementById('top_img20').src="/work/edda/community/images/rankingTab1.gif";
								document.getElementById('top_img40').src="/work/edda/community/images/rankingTab2.gif";
								document.getElementById('top_img60').src="/work/edda/community/images/rankingTab3.gif";
								document.getElementById('top_img80').src="/work/edda/community/images/rankingTab4.gif";
								document.getElementById('top_img100').src="/work/edda/community/images/rankingTab5.gif";

								document.getElementById(str1).style.display = "block";
								
								if(str2 == "top_img20"){
									img_num = 1;
								} else if(str2 == "top_img40"){
									img_num = 2;
								} else if(str2 == "top_img60"){
									img_num = 3;
								} else if(str2 == "top_img80"){
									img_num = 4;
								} else{
									img_num = 5;
								}
								document.getElementById(str2).src="/work/edda/community/images/rankingTab" + img_num + "On.gif";
						
							}
						</script>
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit02.gif" alt="팬사이트" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 에다랭킹</div>
						</div>
						
                        <div class="rankHead">
							 <form name="frm" method="post" action="ranking.php">
                            <div style="position:absolute; left:17px; top:13px;">
                           
								<img src="/work/edda/news/images/bul01.gif" alt=""  /> 	현재 랭킹은 <span style="color:#7a8c9a">[<%=nowDate%> 오전 4:00] 기준입니다</span>	 &nbsp;&nbsp;&nbsp;  <img src="/work/edda/news/images/bul01.gif" alt=""  />  랭킹기준은 레벨이며, 동 레벨일 경우 경험치 우선입니다.<!--지난랭킹-->
								<!--<select class="w70" id="searchYear" name="searchYear">
                                <%
								FOR y = 2009 TO year(now) + 1
								%>
									<option value="<%=y%>" <%IF y = nowYear THEN%>selected<%END IF%>><%=y%>년</option>
                                <%
								NEXT
								%>
								</select>
								<select class="w60" id="searchMonth" name="searchMonth">
                                <%
								FOR m = 1 TO 12
								%>
									<option value="<%=right("00" & m,2)%>" <%IF right("00" & m,2) = nowMonth THEN%>selected<%END IF%>><%=m%>월</option>
                                <%
								NEXT
								%>
								</select>
								<select class="w60" id="searchDay" name="searchDay">
                                <%
								FOR d = 1 TO 31
								%>
									<option value="<%=right("00"&d,2)%>" <%IF right("00" & d,2) = nowDay THEN%>selected<%END IF%>><%=d%>일</option>
                                <%
								NEXT
								%>    
								</select>
								<input type="image" src="/work/edda/images/board/btnSch.gif" style="border:0px; padding:0px;" alt="검색" />-->
							</div>
                            </form>
                            <form name="frmsearch" method="post" action="/community/ranking.php">
							<div style="position:absolute; left:20px; top:55px; width:600px;" class="aCenter">
								<select class="w80" id="searchType" name="searchType">
									<option value="characterName">캐릭터별</option>
								</select>
								<input type="text" id="searchName" name="searchName" value="검색어를 입력해주세요" onclick="this.value=''" class="w150" />
								<a href="javascript:;" onclick="search_check();"><img src="/work/edda/images/board/btnSch.gif" alt="검색" /></a>
							</div>
                            </form>
						</div>
						
						<ul class="rankTab">
							<li><a href="javascript:;" onclick="tab_change1('top_20','top_img20')"><img id="top_img20" src="/work/edda/community/images/rankingTab1On.gif" alt="1위~20위" /></a></li>
							<li><a href="javascript:;" onclick="tab_change1('top_40','top_img40')"><img id="top_img40" src="/work/edda/community/images/rankingTab2.gif" alt="21위~40위" /></a></li>
							<li><a href="javascript:;" onclick="tab_change1('top_60','top_img60')"><img id="top_img60" src="/work/edda/community/images/rankingTab3.gif" alt="41위~60위" /></a></li>
							<li><a href="javascript:;" onclick="tab_change1('top_80','top_img80')"><img id="top_img80" src="/work/edda/community/images/rankingTab4.gif" alt="61위~80위" /></a></li>
							<li><a href="javascript:;" onclick="tab_change1('top_100','top_img100')"><img id="top_img100" src="/work/edda/community/images/rankingTab5.gif" alt="81위~100위" /></a></li>
						</ul>

						<div id="top_20" style="display:block;">
						<table cellspacing="0" border="1" class="rankList">
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/community/images/hImgRanking.gif" alt="랭킹" /></th>
									<th><img src="/work/edda/community/images/hImgChar.gif" alt="캐릭터명" /></th>
									<th><img src="/work/edda/community/images/hImgClass.gif" alt="클래스" /></th>
									<th class="right"><img src="/work/edda/community/images/hImgGod.gif" alt="우호신" /></th>
								</tr>
							</thead>

                                <tbody>
                            	<%
								SQL = "select * from dbo.Game_CharacterRanking_TOP100 where convert(varchar(10), write_Date, 121) = '" & nowDate & "' and RankNO between 1 and 20"
								SQL = SQL & " order by RankNO ASC"
								set Rs1 = tongDB.Execute(SQL)

								IF Rs1.EOF THEN
								%>
                                <tr>
                                	<td class="aCenter" colspan="4">과연 명예의 전당 주인공은?<!--랭킹 업데이트 중입니다.--></td>
                                </tr>
                                <%
								ELSE
								
									a = 1
									
									DO UNTIL Rs1.EOF
									
										RankNO = Rs1("RankNO")
										characterName = Rs1("characterName")
										CurLevel = Rs1("CurLevel")
										changeRank = Rs1("changeRank")
										
										IF changeRank = "NEW" THEN
											LevelStatus = "<img src=""/images/main/mainRankingIcoNew.png"" alt=""New"" class=""png24"" />"
										ELSE
											changeType = left(changeRank,1)
											changeNum = MID(changeRank,2,LEN(changeRank))
											
											Select case changeType
												case "+"	rchangeType = "<img src=""/images/main/mainRankingIcoUp.png"" alt=""Up"" class=""png24"" />"
												case "-"	rchangeType = "<img src=""/images/main/mainRankingIcoDown.png"" alt=""Down"" class=""png24"" />"
												case else	rchangeType = "<img src=""/images/main/mainRankingIcoStop.png"" alt=""Up"" class=""png24"" />"
											END Select
											
											LevelStatus = rchangeType & " " & changeNum
										END IF
										
										MainClassName = Rs1("MainClassName")
										friendlyGodName = Rs1("friendlyGodName")
										
										IF a >= 1 and a <= 5 THEN
											RankNO = "<img src=""/images/main/mainRankingNum" & a & ".png"" alt=""" & a & """ class=""png24"" />"
										ELSE
											RankNO = RankNO
										END IF
								
										if friendlyGodName = "올림푸스" then 
											friendlyGodName = "올림포스"
										end if 
								%>
								<tr <%IF a mod 2 = 0 THEN%>class="bg2"<%ELSE%>class="bg1"<%END IF%>>
									<td class="bNum"><%=RankNO%> <span class="rNum"><%=LevelStatus%></span></td>
									<td class="bTit"><%=characterName%></td>
									<td class="bName"><%=MainClassName%></td>
									<td class="bDate"><%=friendlyGodName%></td>
								</tr>
                                <%
										Rs1.MoveNext
										a = a + 1
									LOOP
								END IF
								%>
                                </tbody>
							</table>
                            </div>
                                
                            <div id="top_40" style="display:none;">
                            <table cellspacing="0" border="1" class="rankList">
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/community/images/hImgRanking.gif" alt="랭킹" /></th>
									<th><img src="/work/edda/community/images/hImgChar.gif" alt="캐릭터명" /></th>
									<th><img src="/work/edda/community/images/hImgClass.gif" alt="클래스" /></th>
									<th class="right"><img src="/work/edda/community/images/hImgGod.gif" alt="우호신" /></th>
								</tr>
							</thead>
                            
                                <tbody>
                            	<%
								SQL = "select * from dbo.Game_CharacterRanking_TOP100 where convert(varchar(10), write_Date, 121) = '" & nowDate & "' and RankNO between 21 and 40"
								SQL = SQL & " order by RankNO ASC"
								set Rs2 = tongDB.Execute(SQL)

								IF Rs2.EOF THEN
								%>
                                <tr>
                                	<td class="aCenter" colspan="4">과연 명예의 전당 주인공은?<!--랭킹 업데이트 중입니다.--></td>
                                </tr>
                                <%
								ELSE
								
									b = 1
								
									DO UNTIL Rs2.EOF
									
										RankNO = Rs2("RankNO")
										characterName = Rs2("characterName")
										CurLevel = Rs2("CurLevel")
										changeRank = Rs2("changeRank")
										
										IF changeRank = "NEW" THEN
											LevelStatus = "<img src=""/images/main/mainRankingIcoNew.png"" alt=""New"" class=""png24"" />"
										ELSE
											changeType = left(changeRank,1)
											changeNum = MID(changeRank,2,LEN(changeRank))
											
											Select case changeType
												case "+"	rchangeType = "<img src=""/images/main/mainRankingIcoUp.png"" alt=""Up"" class=""png24"" />"
												case "-"	rchangeType = "<img src=""/images/main/mainRankingIcoDown.png"" alt=""Down"" class=""png24"" />"
												case else	rchangeType = "<img src=""/images/main/mainRankingIcoStop.png"" alt=""Up"" class=""png24"" />"
											END Select
											
											LevelStatus = rchangeType & " " & changeNum
										END IF
										
										MainClassName = Rs2("MainClassName")
										friendlyGodName = Rs2("friendlyGodName")

								%>
								<tr <%IF b mod 2 = 0 THEN%>class="bg2"<%ELSE%>class="bg1"<%END IF%>>
									<td class="bNum"><%=RankNO%> <span class="rNum"><%=LevelStatus%></span></td>
									<td class="bTit"><%=characterName%></td>
									<td class="bName"><%=MainClassName%></td>
									<td class="bDate"><%=friendlyGodName%></td>
								</tr>
                                <%
										Rs2.MoveNext
										b = b + 1
									LOOP
								END IF
								%>
                                </tbody>
							</table>
                            </div>
                                
                            <div id="top_60" style="display:none;">
                            <table cellspacing="0" border="1" class="rankList">
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/community/images/hImgRanking.gif" alt="랭킹" /></th>
									<th><img src="/work/edda/community/images/hImgChar.gif" alt="캐릭터명" /></th>
									<th><img src="/work/edda/community/images/hImgClass.gif" alt="클래스" /></th>
									<th class="right"><img src="/work/edda/community/images/hImgGod.gif" alt="우호신" /></th>
								</tr>
							</thead>
                            
                                <tbody>
                            	<%
								SQL = "select * from dbo.Game_CharacterRanking_TOP100 where convert(varchar(10), write_Date, 121) = '" & nowDate & "' and RankNO between 41 and 60"
								SQL = SQL & " order by RankNO ASC"
								set Rs3 = tongDB.Execute(SQL)

								IF Rs3.EOF THEN
								%>
                                <tr>
                                	<td class="aCenter" colspan="4">과연 명예의 전당 주인공은?<!--랭킹 업데이트 중입니다.--></td>
                                </tr>
                                <%
								ELSE
								
									c = 1
									
									DO UNTIL Rs3.EOF
									
										RankNO = Rs3("RankNO")
										characterName = Rs3("characterName")
										CurLevel = Rs3("CurLevel")
										changeRank = Rs3("changeRank")
										
										IF changeRank = "NEW" THEN
											LevelStatus = "<img src=""/images/main/mainRankingIcoNew.png"" alt=""New"" class=""png24"" />"
										ELSE
											changeType = left(changeRank,1)
											changeNum = MID(changeRank,2,LEN(changeRank))
											
											Select case changeType
												case "+"	rchangeType = "<img src=""/images/main/mainRankingIcoUp.png"" alt=""Up"" class=""png24"" />"
												case "-"	rchangeType = "<img src=""/images/main/mainRankingIcoDown.png"" alt=""Down"" class=""png24"" />"
												case else	rchangeType = "<img src=""/images/main/mainRankingIcoStop.png"" alt=""Up"" class=""png24"" />"
											END Select
											
											LevelStatus = rchangeType & " " & changeNum
										END IF
										
										MainClassName = Rs3("MainClassName")
										friendlyGodName = Rs3("friendlyGodName")
										
								%>
								<tr <%IF c mod 2 = 0 THEN%>class="bg2"<%ELSE%>class="bg1"<%END IF%>>
									<td class="bNum"><%=RankNO%> <span class="rNum"><%=LevelStatus%></span></td>
									<td class="bTit"><%=characterName%></td>
									<td class="bName"><%=MainClassName%></td>
									<td class="bDate"><%=friendlyGodName%></td>
								</tr>
                                <%
										Rs3.MoveNext
										c = c + 1

									LOOP
								END IF
								%>
                                </tbody>
							</table>
                            </div>
                                
                            <div id="top_80" style="display:none">
                            <table cellspacing="0" border="1" class="rankList">
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/community/images/hImgRanking.gif" alt="랭킹" /></th>
									<th><img src="/work/edda/community/images/hImgChar.gif" alt="캐릭터명" /></th>
									<th><img src="/work/edda/community/images/hImgClass.gif" alt="클래스" /></th>
									<th class="right"><img src="/work/edda/community/images/hImgGod.gif" alt="우호신" /></th>
								</tr>
							</thead>
                            
                                <tbody>
                            	<%
								SQL = "select * from dbo.Game_CharacterRanking_TOP100 where convert(varchar(10), write_Date, 121) = '" & nowDate & "' and RankNO between 61 and 80"
								SQL = SQL & " order by RankNO ASC"
								set Rs4 = tongDB.Execute(SQL)

								IF Rs4.EOF THEN
								%>
                                <tr>
                                	<td class="aCenter" colspan="4">과연 명예의 전당 주인공은?<!--랭킹 업데이트 중입니다.--></td>
                                </tr>
                                <%
								ELSE
								
									d = 1
								
									DO UNTIL Rs4.EOF
									
										RankNO = Rs4("RankNO")
										characterName = Rs4("characterName")
										CurLevel = Rs4("CurLevel")
										changeRank = Rs4("changeRank")
										
										IF changeRank = "NEW" THEN
											LevelStatus = "<img src=""/images/main/mainRankingIcoNew.png"" alt=""New"" class=""png24"" />"
										ELSE
											changeType = left(changeRank,1)
											changeNum = MID(changeRank,2,LEN(changeRank))
											
											Select case changeType
												case "+"	rchangeType = "<img src=""/images/main/mainRankingIcoUp.png"" alt=""Up"" class=""png24"" />"
												case "-"	rchangeType = "<img src=""/images/main/mainRankingIcoDown.png"" alt=""Down"" class=""png24"" />"
												case else	rchangeType = "<img src=""/images/main/mainRankingIcoStop.png"" alt=""Up"" class=""png24"" />"
											END Select
											
											LevelStatus = rchangeType & " " & changeNum
										END IF
										
										MainClassName = Rs4("MainClassName")
										friendlyGodName = Rs4("friendlyGodName")
										
								%>
								<tr <%IF d mod 2 = 0 THEN%>class="bg2"<%ELSE%>class="bg1"<%END IF%>>
									<td class="bNum"><%=RankNO%> <span class="rNum"><%=LevelStatus%></span></td>
									<td class="bTit"><%=characterName%></td>
									<td class="bName"><%=MainClassName%></td>
									<td class="bDate"><%=friendlyGodName%></td>
								</tr>
                                <%
										Rs4.MoveNext
										d = d + 1

									LOOP
								END IF
								%>
                                </tbody>
							</table>
                            </div>
                                
                            <div id="top_100" style="display:none;">
                            <table cellspacing="0" border="1" class="rankList">
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/community/images/hImgRanking.gif" alt="랭킹" /></th>
									<th><img src="/work/edda/community/images/hImgChar.gif" alt="캐릭터명" /></th>
									<th><img src="/work/edda/community/images/hImgClass.gif" alt="클래스" /></th>
									<th class="right"><img src="/work/edda/community/images/hImgGod.gif" alt="우호신" /></th>
								</tr>
							</thead>
                            
                                <tbody>
                            	<%
								SQL = "select * from dbo.Game_CharacterRanking_TOP100 where convert(varchar(10), write_Date, 121) = '" & nowDate & "' and RankNO between 81 and 100"
								SQL = SQL & " order by RankNO ASC"
								set Rs5 = tongDB.Execute(SQL)

								IF Rs5.EOF THEN
								%>
                                <tr>
                                	<td class="aCenter" colspan="4">과연 명예의 전당 주인공은?<!--랭킹 업데이트 중입니다.--></td>
                                </tr>
                                <%
								ELSE
								
									e = 1
								
									DO UNTIL Rs5.EOF
									
										RankNO = Rs5("RankNO")
										characterName = Rs5("characterName")
										CurLevel = Rs5("CurLevel")
										changeRank = Rs5("changeRank")
										
										IF changeRank = "NEW" THEN
											LevelStatus = "<img src=""/images/main/mainRankingIcoNew.png"" alt=""New"" class=""png24"" />"
										ELSE
											changeType = left(changeRank,1)
											changeNum = MID(changeRank,2,LEN(changeRank))
											
											Select case changeType
												case "+"	rchangeType = "<img src=""/images/main/mainRankingIcoUp.png"" alt=""Up"" class=""png24"" />"
												case "-"	rchangeType = "<img src=""/images/main/mainRankingIcoDown.png"" alt=""Down"" class=""png24"" />"
												case else	rchangeType = "<img src=""/images/main/mainRankingIcoStop.png"" alt=""Up"" class=""png24"" />"
											END Select
											
											LevelStatus = rchangeType & " " & changeNum
										END IF
										
										MainClassName = Rs5("MainClassName")
										friendlyGodName = Rs5("friendlyGodName")
										
								%>
								<tr <%IF e mod 2 = 0 THEN%>class="bg2"<%ELSE%>class="bg1"<%END IF%>>
									<td class="bNum"><%=RankNO%> <span class="rNum"><%=LevelStatus%></span></td>
									<td class="bTit"><%=characterName%></td>
									<td class="bName"><%=MainClassName%></td>
									<td class="bDate"><%=friendlyGodName%></td>
								</tr>
                                <%
										Rs5.MoveNext
										e = e + 1

									LOOP
								END IF
								%>
                                </tbody>
							</table>
                            </div>
							
						

<%
tongDBClose()
%>						
						
						
						
						
						<!--# include virtual="/_board/paging.php"); ?>
						<!--# include virtual="/_board/search.php"); ?>

						
<?php include("../_include/_foot.php"); ?>					