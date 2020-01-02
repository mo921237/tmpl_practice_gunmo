$(document).ready(function(){
	$("#full-menu-ul li a").on("click",function(e){
		e.preventDefault();
		$("#wrapper").load("/"+$(this).attr("href"));
		$("header .nav-icon").click();
		//window.location.hash = $(this).attr("href");
		$.cookie("lastPage",$(this).attr("href"));
	});
});
$(function(){
	
});
