<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="imagetoolbar" content="no" />
<?php include("../_include/title.php"); ?>
<link rel="icon" href="/work/edda/images/main/fav.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/work/edda/images/main/fav.ico" type="image/x-icon" />
<link rel="icon" href="/work/edda/images/main/fav.gif" type="image/gif" />
<link href="/work/edda/_css/common.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/work/edda/_js/common.js"></script>
<script type="text/javascript" src="/work/edda/_js/default.js"></script>

<script src="/work/edda/pds/movie/ent_common.js"></script>
<%
Response.Charset = "EUC-KR"

str1 = Request("str1")
str2 = Request("str2")

rtype = Request("type")

IF str1 = "" THEN
	str1 = "워리어"
ELSE
	str1 = str1
END IF

flash_MovieName = "/" & str1 & "/" & str2 & ".flv"
flash_imageName = "/" & str1 & "/" & str2 & ".jpg"

IF rtype = "" THEN
	f_width = "616"
	f_height = "482"
ELSEIF rtype = "skill" THEN
	f_width = "200"
	f_height = "160"
ELSE
	f_width = "520"
	f_height = "368"
END IF
%>

<script type="text/javascript">
<!--
function LoadMovie(movie_name,list_img){
	//var s2 = new SWFObject("/pds/movie/player.swf","ply","520","368","9","#FFFFFF");
	var s2 = new SWFObject("/swf/player_mini.swf","ply","<%=f_width%>","<%=f_height%>","9","#FFFFFF");
	s2.addParam("allowfullscreen","true");
	s2.addParam("allowscriptaccess","always");
	s2.addParam("flashvars","linkFLV=/swf/classMovie/"+movie_name+"&linkIMG=/swf/classMovie/" + list_img);
	s2.write("container");
}
//-->
</script>
</head>
<body style="background-color:transparent; margin:0">
<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="<%=f_width%>" height="<%=f_height%>" align="center" valign="top">
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                                	<!-- 실제 동영상 플레이어 가이드 -->
                                    <div id="container" style="color:#CCCCCC"><a href="http://www.macromedia.com/go/getflashplayer">해당 서비스에 장애가 발생 하였습니다.</a></div>
                                    <script language="javascript">
                                    <!--
                                    LoadMovie('<%=flash_MovieName%>','<%=flash_imageName%>');
                                    //-->
                                    </script>
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

<!-- 동영상 플레이어 끝 -->