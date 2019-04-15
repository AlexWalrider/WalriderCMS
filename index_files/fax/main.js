if(document.addEventListener){
	document.addEventListener("DOMContentLoaded", function(){
		loaded();
	});
} else if(document.attachEvent){
	document.attachEvent("onreadystatechange", function(){
		loaded();
	});
}

function loaded(){
	var rpex = 8;
	var video = document.getElementsByTagName("video")[0];
	setInterval(loop, 1000);

}

var x = 0;
var titleText = [ "WALRIDER", "PROJECT" ];
function loop(){
	document.getElementsByTagName("title")[0].innerHTML = titleText[x++%titleText.length];
}