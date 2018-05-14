$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('nav ul li a').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
})