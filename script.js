$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	console.log(pathname);
	$('ul li a.nav-item').click(function(){ $('li a.nav-item').removeClass("active"); $(this).addClass("active"); });
})