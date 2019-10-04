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

idx = Request("idx")

IF idx = "" THEN
	idx = 3
ELSE
	idx = idx
END IF

Select case CINT(idx)
	case 1
			flash_MovieName = "EDDA_Final_CG(WMV9)_30s.flv"
			flash_imageName = "movie_img1.jpg"
			flash_FileName = "에다전설 홍보 동영상(30초)"
			down_FileName = "/pds/movie/EDDA_Final_CG(WMV9)_30s.flv"
	case 2
			flash_MovieName = "EddA_FGT2009-F2_2m.flv"
			flash_imageName = "movie_img2.jpg"
			flash_FileName = "에다전설 플레이 동영상(2분)"
			down_FileName = "/pds/movie/EddA_FGT2009-F2_2m.flv"
	case 3
			flash_MovieName = "Edda_CBT2_100304.flv"
			flash_imageName = "movie_img1.jpg"
			flash_FileName = "2차 CBT 플레이 동영상"
			down_FileName = "/pds/movie/Edda CBT2_100304.flv"
END Select
%>
<script type="text/javascript">
	parent.document.getElementById('downURL').value = "<%=down_FileName%>";
</script>

<script type="text/javascript">
<!--
function LoadMovie(movie_name,list_img){
	//var s2 = new SWFObject("/pds/movie/player.swf","ply","520","368","9","#FFFFFF");
	var s2 = new SWFObject("/pds/movie/player.swf","ply","600","340","9","#FFFFFF");
	s2.addParam("allowfullscreen","true");
	s2.addParam("allowscriptaccess","always");
	s2.addParam("flashvars","linkFLV=/pds/movie/"+movie_name+"&linkIMG=/pds/movie/" + list_img);
	
	s2.write("container");
}

//-->
</script>
</head>
<body style="background-color:transparent; margin:0">
<table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="600" height="340" align="center" valign="top">
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