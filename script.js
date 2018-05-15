$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	console.log(pathname);
	//$('ul.nav.navbar-item li.nav-item a.nav-link').click(function(){ $('li.nav-item a.nav-link').removeClass("active"); $(this).addClass("active"); });
	$(".navbar a").on("click", function(){
	   	$(".navbar").find(".active").removeClass("active");
	   	$(this).parent().addClass("active");
	});
})