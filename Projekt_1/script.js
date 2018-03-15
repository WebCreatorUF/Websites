// JavaScript Document
$(document).ready(function () {
	 'use strict';
	 $("#sidebar").niceScroll({
        cursorwidth: 0,
        cursorborder: 'none'
	 });
     $('#dismiss, .overlayside').on('click', function () {
     	$('#sidebar').removeClass('active');
		$('.btnNavbar').show('slow');
		$('.centerimage').show('fast');
        $('.overlayside').fadeOut();
	 });

     $('#sidebarCollapse').on('click', function () {
     	$('#sidebar').addClass('active');
        $('.overlayside').fadeIn();
		$('.btnNavbar').toggle('fast');
		$('.centerimage').toggle('fast');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	 });
});

/*jshint unused:false*/
function myMap() {
	"use strict";
    var myLatLng = {lat: 55.44324049999999, lng: 13.847648499999991};
	var newLatLng ={lat: 55.44324049999999, lng: 13.847648499999991};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
    	zoom: 17,
        center: newLatLng
	});
    var contentString = '<div id="content">'+
    	'<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading" style="padding:0;">Skåne Lås AB</h1>'+
        '<div id="bodyContent">'+
        '<p>'+
        ''+
        ''+
        ''+
        ''+
        ''+
		''+
        '</p>'+
        '</div>'+
        '</div>';
		
	var infowindow = new google.maps.InfoWindow({
    	content: contentString
    });
    var marker = new google.maps.Marker({
    	position: myLatLng,
        map: map,
		animation: google.maps.Animation.DROP,
        title: 'Click me!'
    });
    marker.addListener('click', function() {
    	infowindow.open(map, marker);
    });		
}