"use strict";

jQuery(function($) {
	$('.qna li dl dt').on('click', function() {
		$(this).parent('dl').find('dd').toggle();
	});

	$('ul.db-list li dl dt').on('click', function() {
		$(this).parent('dl').find('dd').toggle();
	});
	
	$('.data-year-view .ri ul li dl dt').on('click', function() {
		$(this).parent('dl').find('dd').toggle();
	});
	
});