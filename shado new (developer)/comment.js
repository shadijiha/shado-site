
$(document).ready(function() {
$('#text').keydown(function() {
var message = $("textarea").val();
if (event.keyCode == 13) {
if (message == "") {
alert("Enter Some Text In Textarea");
} else {
document.funform.text.disabled="disabled";
}

}
});
});