$(document).ready(function(){
	$socialnav_height = parseInt($("#social-navbar").css('height'));
	$mainnav_height = parseInt($("#main-nav").css('height'));
	$section_height = $(window).height()-$mainnav_height-$socialnav_height;
	$("#section_events, #section_franchise, #section_aboutus").css('min-height', $section_height);
	$("#section_events .container").css('min-height', $section_height);

});