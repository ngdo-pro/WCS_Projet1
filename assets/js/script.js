$(document).ready(function(){

	var $socialnav_height;
    var $mainnav_height;
    var $section_height;
	$socialnav_height = parseInt($("#social-navbar").css('height'));
	$mainnav_height = parseInt($("#main-nav").css('height'));
	$section_height = $(window).height()-$mainnav_height-$socialnav_height;
	$("#section_events, #section_franchise, #section_aboutus, #section_restaurantlaloupe").css('min-height', $section_height);
	$("#section_events .container").css('min-height', $section_height);
});