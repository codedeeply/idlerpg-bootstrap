$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('ul li a.nav-item').click(function(){ $('li a').removeClass("active"); $(this).addClass("active"); });
})