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

	$('.lnb').each(function() {
		var $lnb = $(this);
		var $statNav = $(this).find('>ul>li.stat');
		var $statDepth2Wrap = $('.stat-depth2');
		var timeoutId = null;

		$statNav.on('mouseenter', function() {
			$lnb.trigger('start');
		});
		$(this).find('>ul>li').not($statNav).on('mouseenter', function() {
			$lnb.trigger('endNow');
		});
		$statNav.on('mouseleave', function() {
			$lnb.trigger('end');
		});
		$statDepth2Wrap.find('>*').on('mouseenter', function() {
			$lnb.trigger('start');
		});
		$statDepth2Wrap.find('>*').on('mouseleave', function() {
			$lnb.trigger('end');
		});
		$statDepth2Wrap.find('.close a').on('click', function(event) {
			event.preventDefault();
			
			$lnb.trigger('endNow');
		});
		$(this).on('start', function() {
			$statDepth2Wrap.fadeIn();

			timeoutId != null && clearTimeout(timeoutId);
		});
		$(this).on('end', function() {
			timeoutId != null && clearTimeout(timeoutId);

			timeoutId = setTimeout(function() {
				$statDepth2Wrap.stop().fadeOut();
			}, 500);
		});
		$(this).on('endNow', function() {
			timeoutId != null && clearTimeout(timeoutId);

			$statDepth2Wrap.stop().fadeOut();
		});
	});

	$(window).scroll(function() {

		if ($(window).scrollTop() >= 128) {
			$('.snb').addClass('fixed');
		} else {
			$('.snb').removeClass('fixed');
		}

	});

});