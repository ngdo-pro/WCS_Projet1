$(document).ready(function(){
	$socialnav_height = parseInt($("#social-navbar").css('height'));
	$mainnav_height = parseInt($("#main-nav").css('height'));
	$section_height = $(window).height()-$mainnav_height-$socialnav_height;
	$("#section_aboutus, #section_events, #section_franchise").css('height', $section_height);
});