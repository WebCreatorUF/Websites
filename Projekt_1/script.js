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