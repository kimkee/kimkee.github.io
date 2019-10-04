<%
idx = Request("idx")

file_name = "wall_" & idx & ".jpg"
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>Wallpaper Image</title>
</head>

<body topmargin="0" leftmargin="0" onload="self.resizeTo(1024,768);" style=" overflow-x: scroll; overflow-y: scroll;">
<img src="/work/edda/pds/wallpaper/big/<%=file_name%>" style="cursor:pointer" onclick="self.close();" />
</body>
</html>
