<!--#include virtual="/_lib/includeFiles.php"); ?>

<%
set uploadform = server.CreateObject("DEXT.FileUpload")

uploadform.AutoMakeFolder = True

uploadform.DefaultPath = "D:\eddaUpload\fansite\"

'// 게시판 종류 (공지,이벤트,자유..)
board_idx = uploadform("board_idx")

IF board_idx = "" THEN
	ALERT_BACK("글쓰기에 실패하였습니다.")
	Response.END
END IF


'RWL(uploadform.DefaultPath)


IF UploadForm("file1") = "" THEN
	ALERT_BACK("배너 이미지를 등록해주세요.")
	Response.END
END IF



'// 게시판 등록 종류 (L:List W:Write E:Edit D:Delete)
wType = uploadform("wType")

IF wType = "" THEN
	ALERT_BACK("글 등록에 오류가 발생하였습니다.")
	Response.END
END IF

title = uploadform("fansiteName")
URL = uploadform("fansiteURL")
content = uploadform("fansiteDiscrit")


IF title = "" THEN
	ALERT_BACK("사이트 이름을 입력해 주세요.")
	Response.END
END IF

IF URL = "" THEN
	ALERT_BACK("사이트 URL를 입력해 주세요.")
	Response.END
END IF

IF content = "" THEN
	ALERT_BACK("사이트 소개를 입력해 주세요.")
	Response.END
END IF

content = Replace(content,"'","''")


article_idx = uploadform("idx")

IF article_idx = "" THEN
	article_idx = 0
END IF

IF wType = "E" and article_idx = "" THEN
	ALERT_BACK("글 수정에 오류가 발생하였습니다.")
	Response.END
END IF

board_contentType_idx = 0


IF UploadForm("file1") <> "" THEN
	
	IF LCASE(RIGHT(UploadForm("file1"),3))  <> "jpg" and LCASE(RIGHT(UploadForm("file1"),3))  <> "gif" and LCASE(RIGHT(UploadForm("file1"),3))  <> "bmp" THEN
		ALERT_BACK("첨부파일은 JPG, GIF, BMP만 가능합니다.")
	END IF

END IF


brdDBConnect()

SQL = "insert into dbo.FanSite_Info (board_idx, Login_ID, fansite_Name, fansite_discript, fansite_URL, write_IP)"
SQL = SQL & " values(" & board_idx & ",'" & Login_ID & "','" & title & "', '" & content & "', '" & URL & "', '" & Request.ServerVariables("REMOTE_ADDR") & "')"
brdDB.Execute(SQL)


SQL = "select case when MAX(idx) is NULL then 1 else MAX(idx) end from dbo.FanSite_Info"
set Rs = brdDB.Execute(SQL)

d_idx = Rs(0)


IF uploadform("file1") <> "" THEN

	newFileName1 = Year(now) & right("00"&Month(now),2) & right("00"&day(now),2) & right("00"&hour(now),2) & right("00"&minute(now),2) & right("00"&second(now),2) & "." & RIGHT(uploadform("file1"),3)

	FilePath = uploadform("file1").SaveAs(uploadform.DefaultPath & newFileName1,False)

	SQL = " insert into dbo.board_files ( board_idx, board_title_idx, board_fileType, board_fileName, deleteYN) values ( '"& board_idx &"', '"& d_idx &"','0', '" & newFileName1 &"', 'N' ) "
	brdDB.Execute(SQL)

END IF

	
CALL ALERT_URL("팬사이트에 등록되었습니다.\n심사 및 등록 기간은 신청일로부터 2주 이내 소요될 예정입니다.", "/community/fansiteList.php")

brdDBClose()
%>
