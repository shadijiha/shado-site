function whatKey()
{
var form = document.forms[0]
document.onkeydown = checkKeycode
function checkKeycode(e) {
var keycode;
if (window.event)
keycode = window.event.keyCode;
else
if (e)
keycode = e.which;
if(keycode == 13)
if (checkInput('showtipsbysearch.html?view=$view&home=$home&show_private=$showprivate'))
return true
else
return false
}
}