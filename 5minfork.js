if(document.URL.indexOf("https://github.com") >= 0){ 
	window.location.href = window.location.href.replace("https://github.com", "http://5minfork.com");
}
else	{
	alert ("Not a valid GitHub repo");
}