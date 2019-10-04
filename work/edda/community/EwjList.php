<?
$skal = 5;
?>
<?php include("../_include/_head.php"); ?>		
<%
e_count = 0
if Login_ID <> "" then 
	memDBConnect()	
	sql = "select Count(*) from EWJ_Member where Login_ID = '"& Login_ID &"'"
	set Rs = memDB.execute(sql)
	e_count = Rs(0)
end if 

%>				
						<div class="headTit">
							<div class="tit"><img src="/work/edda/community/images/subTit07.gif" alt="에다 영웅들의 전설" /></div>
							<div class="location">Home &gt; 커뮤니티 &gt; 에다 영웅들의 전설</div>
						</div>
						<%
						board_idx = 14
						RedirectURL = "/community/EwjView.php"
						%>
<table cellspacing="0" border="1" class="bbsList">
							<%if board_idx = 11 then %>
							
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/images/board/hImgNum.gif" alt="No" /></th>
									<th><img src="/work/edda/images/board/hImgTitle.gif" alt="제목" /></th>
									<th><img src="/work/edda/images/board/hImgWriter.gif" alt="작성자" /></th>
									<th><img src="/work/edda/images/board/hImgDate.gif" alt="작성일" /></th>
								</tr>
							</thead>
							<%else %>
							<thead>
								<tr>
									<th class="left"><img src="/work/edda/images/board/hImgNum.gif" alt="No" /></th>
									<th><img src="/work/edda/images/board/hImgTitle.gif" alt="제목" /></th>
									<th><img src="/work/edda/images/board/hImgWriter.gif" alt="작성자" /></th>
									<th><img src="/work/edda/images/board/hImgDate.gif" alt="작성일" /></th>
									<th class="right"><img src="/work/edda/images/board/hImgHit.gif" alt="조회" /></th>
								</tr>
							</thead>

							<%end if %>
							<%
                                page = Request.form("page")
                                
                                IF page = "" THEN
                                    page = 1
                                ELSE
                                    page = CINT(page)
                                END IF
                                
                                searchType = Request.Form("searchType")
                                searchName = Request.Form("searchName")
                                
                                IF searchType = "" THEN
                                    searchType = ""
                                END IF
                                
                                IF searchName = "" THEN
                                    searchName = ""
                                END IF
                                                        
                                PageSize = 15
                                PageCount = 10
                                
								
								brdDBConnect()
                                
                                Set Rs = Server.CreateObject("ADODB.RecordSet")
                                Set RsGetData = Server.CreateObject("ADODB.Command")
                                With RsGetdata
                                    .ActiveConnection = brdDB
                                    .CommandType = adCmdStoredProc
                                    .CommandText = "dbo.board_list_proc"
                                    .Parameters.Append .CreateParameter("RETURN_VALUE",adInteger,adParamReturnValue,0)
                                    .Parameters.Append .CreateParameter("@board_idx",adInteger,adParamInput,4,board_idx)
                                    .Parameters.Append .CreateParameter("@permission",adInteger,adParamInput,4,0)
                                    .Parameters.Append .CreateParameter("@page",adInteger,adParamInput,4,page)
                                    .Parameters.Append .CreateParameter("@pageSize",adInteger,adParamInput,4,pageSize)
                                    .Parameters.Append .CreateParameter("@SearchType",adVarchar,adParamInput,50,searchType)
                                    .Parameters.Append .CreateParameter("@SearchName",adVarchar,adParamInput,100,searchName)
                                    .Parameters.Append .CreateParameter("@totalCount",adInteger,adParamOutput,0)
                                    Rs.CursorLocation = adUseClient
                                    Rs.Open RsGetData, ,adOpenStatic, adLockReadOnly
                                
                                    ReturnValue = .Parameters("RETURN_VALUE")
                                    board_listTotalCount = .Parameters("@totalCount")
                                
                                    If ReturnValue <> 0 Then
                                        Response.write "<script>alert('NO List');</script>"
                                        Response.End
                                    End IF
                                End with
								
                                TotalCount = board_listTotalCount
								'RWL(TotalCount)								
                                
                                BlockNum = INT((page+(10-1))/10)
                                Totalpage = (TotalCount/PageSize)

                                StartPage = INT((page - 1)/10) * 10 + 1
                                
                                IF Totalpage - (StartPage + 10) < 0 THEN
                                    IF (TotalCount mod PageSize) > 0 THEN
                                        EndPage = INT(TotalPage + 1)
                                    ELSE
                                        EndPage = INT(TotalPage)
                                    END IF
                                ELSE
                                    EndPage = INT(StartPage + 9)
                                END IF
								
                            %>
							<tbody>
							<%    
                                IF Rs.EOF THEN
                            %>
								<tr>
                                    <td colspan="5" align="center" height="36" class="notice_01">등록된 글이 없습니다.</td>
                                </tr>
							<%
								ELSE
								
									Rs.Move (page-1) * pageSize
									num = totalCount - (page-1) * pageSize
								
									DO UNTIL Rs.EOF
										article_idx = Rs("idx")
										board_titleType = Rs("board_titleType")
										board_title = Rs("board_title")
										board_writer = Rs("write_userID")
										wdate = Year(Rs("write_date")) & "." & Right("00" & month(Rs("write_date")),2) & "." & Right("00" & day(Rs("write_date")),2)
										readCount = Rs("read_count")
										commentCount = Rs("comment_count")
										
										board_flag = Rs("board_flag")
										

										writeUserID = board_writer

										IF board_idx = 3 and board_flag = 1 THEN
											best_Img = "<font color='red'>BEST</font>"
										ELSE
											best_Img = ""
										END IF
										
										IF board_idx = 1 or board_idx = 5 or board_idx = 6 THEN
											board_writer = "<img src='/images/board/icoAdmin.png' class='png24' />"
										ELSE
											memDBConnect()
											
											SQL = "select nickName from member_info where login_id='" & board_writer & "'"
											set nicRs = memDB.Execute(SQL)
											
											IF nicRs.EOF or ISNULL(nicRs("nickName")) THEN
												board_writer = "미등록"
											ELSE
												board_writer = nicRs("nickName")
											END IF
											
											memDBClose()
										END IF
										
										IF datediff("h",Rs("write_date"), now()) < 24 THEN
											newIcon = "<img src='/images/board/icoNew.gif' alt='New' />"
										ELSE
											newIcon = ""
										END IF
										
										IF commentCount > 0 THEN
											commCount = "<span class='comCount'>" & commentCount & "</span>"
										ELSE
											commCount = ""
										END IF
										
										IF board_idx = 5 THEN
										
											SQL = "select board_content from board_contents where board_idx=" & board_idx & " and board_title_idx=" & article_idx
											set urlRs = brdDB.Execute(SQL)
											
											IF NOT urlRs.EOF THEN
												rcontentURL = split(urlRs("board_content"),"""")
												contentURL = rcontentURL(1)
											END IF
										
											TarGet = "target='_blank'"
										END IF
										

										if len(board_title) > 27 then 
												board_title = left(board_title,25) & ".."
										end if 
										'RWL(contentURL)
							
										if board_titleType = 1 then 
											board_writer = "<img src='/images/board/icoAdmin.png'/>"
										
											board_title = "<b>" & board_title & "</b>"
										end if 
							

										if board_flag <>"" and board_flag <> 0 and isnumeric(board_flag) = true then 
											sql = "select flag_txt from Board_Flag_Info where idx=" & board_flag 
											set f_Rs = brdDB.execute(sql)
											if not f_Rs.eof then
												flag_txt = "<b>[" &f_Rs(0)& "]</b>&nbsp;"
											else 
												flag_txt = "" 
											end if 
										end if 
														
							%>



								<tr>
									<td class="bNum"><%=num%></td>
									<td class="bTit">
<%'if writeUserID = Login_ID then %>
 <a href="<%=RedirectURL%>?board_idx=<%=board_idx%>&idx=<%=article_idx%>&ST=<%=SearchType%>&SN=<%=SearchName%>"><%=flag_txt%> <%=board_title%></a> 
<%=commCount%> <%=newIcon%> <%=best_Img%> 
<%'else %>									
<!-- <a href="javascript:alert('해당 게시물은 본인과 에다전설 운영진만이 열람가능합니다.');"> <%=flag_txt%> <%=board_title%></a> 
<%=commCount%> <%=newIcon%> <%=best_Img%> -->
<%'end if %>
									</td>
									<td class="bName"><%=board_writer%></td>
									<td class="bDate"><%=wdate%></td>
									<td class="bHit"><%=readCount%></td>
								</tr>

							 
							 <%
							 			Rs.MoveNext
										num = num - 1
							 		LOOP
									
									brdDBClose()
							 
							 	END IF
							 %>
							</tbody>
                            <iframe id="hidden_hitIframe" frameborder="0" width="0" height="0"></iframe>
						</table>
                        
                        <form name="frmview" method="post">
                        <input type="hidden" id="board_idx" name="board_idx" value="<%=board_idx%>" />
                        <input type="hidden" id="boardType" name="boardType" value="V" />
                        <input type="hidden" id="page" name="page" value="<%=page%>" />
                        <input type="hidden" id="article_idx" name="article_idx" />
                        </form>
                        <script type="text/javascript">
                            function board_view(num){
                                document.frmview.action = "<%=Replace(Request.ServerVariables("PATH_INFO"),"index.php","")%>";
                                document.getElementById('article_idx').value = num;
                                document.frmview.submit();
                            }
							
							function hit_update(num){
								document.getElementById('hidden_hitIframe').src="/work/edda/_board/hit_update_ok.php?idx="+num;
							}
                        </script>
                        						
						<div class="btnList aRight"><a href="<%IF Login_ID = "" THEN%>javascript:alert('로그인 후 이용하세요.');location.href='/etc/login.php';<%ELSE%>/community/EwjWrite.php<%END IF%>"><img src="/work/edda/images/board/btnWrite.gif" alt="쓰기" /></a></div>
						<!--#include virtual="/_board/paging.php"); ?>
						<!--#include virtual="/_board/search.php"); ?>
						
<?php include("../_include/_foot.php"); ?>					