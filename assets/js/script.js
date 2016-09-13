$(document).ready(function(){
	$socialnav_height = parseInt($("#social-navbar").css('height'));
	$mainnav_height = parseInt($("#main-nav").css('height'));
	$section_height = $(window).height()-$mainnav_height-$socialnav_height;
	$("section").css('height', $section_height);
});