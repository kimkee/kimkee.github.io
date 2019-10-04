<?php include("../_lib/includeFiles.php"); ?>

<%
board_idx = 10

brdDBConnect()

SQL = "select A.board_flag, A.board_title, A.idx , B.board_content from dbo.board_titles A LEFT JOIN board_contents B ON A.idx = B.board_title_idx where A.deleteYN='N' and A.board_idx=" & board_idx & " order by A.idx DESC"

set Rs = brdDB.Execute(SQL)


IF NOT Rs.EOF THEN

	strXML = "<?xml version=""1.0"" encoding=""euc-kr"" ?>" & chr(13)
	

	DO UNTIL Rs.EOF
	
		board_flag = Rs("board_flag")
		r_idx = Rs("idx")
		r_content = Rs("board_content")
		
		select case board_flag
			case 1	
				flagName = "공지"
			case 2	
				flagName = "이벤트"
			case 3	
				flagName = "알림"
			case 4	
				flagName = "긴급"
			case else	
				flagName = "공지"

		END select
		
		title = Rs("board_title")
		
		strXML = strXML & "<textBanner iconRoute="""" link="""& r_content &""" Tag=""_top"">" & chr(13)	
		strXML = strXML & "  <txt value=""[" & flagName & "] |0|291f13""/>" & chr(13)
		strXML = strXML & "  <txt value=""" & title & " |1|291f13""/>" & chr(13)
		strXML = strXML & "</textBanner>" & chr(13)
			
		Rs.MoveNext
	LOOP
	
	
	strXML = strXML & "<option speed=""2000"" />" & chr(13)
	'strXML = strXML & " speed=""2000"" />" & chr(13)
	
	RW(strXML)
	
END IF

brdDBClose()
%>


