<!-- °øÁö¶Ù¿ì±â -->

<!--
function change(form)
{
if (form.url.selectedIndex !=0)
parent.location = form.url.options[form.url.selectedIndex].value
}
function setCookie( name, value, expiredays )
{
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}
function getCookie( name )
{
	var nameOfCookie = name + "=";
	var x = 0;
	while ( x <= document.cookie.length )
	{
		var y = (x+nameOfCookie.length);
		if ( document.cookie.substring( x, y ) == nameOfCookie ) {
			if ( (endOfCookie=document.cookie.indexOf( ";", y )) == -1 )
				endOfCookie = document.cookie.length;
			return unescape( document.cookie.substring( y, endOfCookie ) );
		}
		x = document.cookie.indexOf( " ", x ) + 1;
		if ( x == 0 )
			break;
	}
	return "";
}
if ( getCookie( "Notice" ) != "done" )
{
	noticeWindow  =  window.open('home/popup.php','notice','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=no,width=300,height=430 left=30 top=30');
	noticeWindow.opener = self;
}
// -->


<!-- °øÁö¶Ù¿ì±â -->