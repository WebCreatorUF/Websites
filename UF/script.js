/*jshint unused:false*/
function myMap() {
	"use strict";
    var myLatLng = {lat: 55.702145, lng: 13.178157};
	var newLatLng ={lat: 55.702358, lng: 13.177902};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
    	zoom: 16,
        center: newLatLng
	});
    var contentString = '<div id="content">'+
    	'<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading" style="padding:0;">Polhemskolan</h1>'+
        '<div id="bodyContent">'+
        '<p><b>Polhemskolan</b> är en kommunal gymnasieskola i <b>Lund</b>. '+
        'Skolan är Sveriges största gymnasieskola med sina 2 400 elever. '+
        'Eftersom vi inte har ett huvudkontor har vi varit '+
        'använt våran skola som adress för den. '+
        'Det är möjligt för intresserade kunder att hitta oss här, men det är nog '+
        'ett svårt alternativ. Ni kan gärna kontakta oss genom informationen vi har angivit '+
		'ovan. Om ni vill hellre hitta oss går vi går i klass <b>TE15D</b>, och är oftast i <b>byggnad 2</b>.'+
		'<p>Källförteckning: Polhemskolan, <a href="https://sv.wikipedia.org/wiki/Polhemskolan,_Lund">'+
        'https://sv.wikipedia.org/wiki/Polhemskolan,_Lund</a> '+
        '(besöktes November 4, 2017).</p>'+
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

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(function() {

  var inWrap = $('.inner-wrapper');

  $('.prev').on('click', function() {

    inWrap.animate({left: '0%'}, 300, function(){

      inWrap.css('left', '-100%');

      $('.slide').first().before($('.slide').last());

    });


  });



  $('.next').on('click', function() {

    inWrap.animate({left: '-200%'}, 300, function(){

      inWrap.css('left', '-100%');

      $('.slide').last().after($('.slide').first());

    });


  });


})

$(function() {
  $('.tempcontainer1').hover(function() {
    $('.btnTry1').css('visibility', 'visible');
	$('.tempcontainer1').css('background-color', 'rgba(255,255,255,0.1)');
  }, function() {
	  

    // on mouseout, reset the background colour
   $('.tempcontainer1').css('background-color', '');
   $('.btnTry1').css('visibility', 'hidden');
   
  });
});

$(function() {
  $('.tempcontainer2').hover(function() {
    $('.btnTry2').css('visibility', 'visible');
	$('.tempcontainer2').css('background-color', 'rgba(255,255,255,0.1)');
  }, function() {
	  

    // on mouseout, reset the background colour
   $('.tempcontainer2').css('background-color', '');
   $('.btnTry2').css('visibility', 'hidden');
  });
});

$(function() {
  $('.tempcontainer3').hover(function() {
    $('.btnTry3').css('visibility', 'visible');
	$('.tempcontainer3').css('background-color', 'rgba(255,255,255,0.1)');
  }, function() {
	  

    // on mouseout, reset the background colour
   $('.tempcontainer3').css('background-color', '');
   $('.btnTry3').css('visibility', 'hidden');
  });
});

$(function() {
  $('.tempcontainer4').hover(function() {
    $('.btnTry4').css('visibility', 'visible');
	$('.tempcontainer4').css('background-color', 'rgba(255,255,255,0.1)');
  }, function() {
	  

    // on mouseout, reset the background colour
   $('.tempcontainer4').css('color', '#fff');
   $('.btnTry4').css('visibility', 'hidden'); 
  });
});


$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) 
	{
		$('.innerinfo').fadeIn(0);
	}
	else 
	{
		$('.innerinfo').style.display = "block";	
	}
	});