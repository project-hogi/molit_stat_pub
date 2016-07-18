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
	
	$('.graph-view').each(function(){
		//$(this).click(function(){
			//$('.graph-info').hide();
//			$(this).parent('.graph-view').css('padding-right','49px');
			//$(this).css('right','0');
//		});
		
		var $obj = $(this);
		var $menu = $(this).parent().find('.graph-info');
		var $more = $(this).find('p.info-menu');
		var $moreOpen = $more.find('.open');
		var $moreClose = $more.find('.close');
		var isOpened = true;
		
		$more.find('a').on('click', function(event){
			event.preventDefault();
			
			$obj.trigger('toggles');
		});
		$obj.on('toggles', function(){
			if(isOpened){
				$obj.trigger('close');
			}else{
				$obj.trigger('open');
			}
		});
		$obj.on('open', function(){
			if(isOpened)
				return;
			
			isOpened = true;
			
			$obj.stop().animate({'padding-right': 349});
			$menu.stop().animate({'right': '-1'});
			$more.stop().animate({'right': 299});
			$moreOpen.stop().fadeOut(1200, 'easeInOutExpo');
			$moreClose.stop().fadeIn(1200, 'easeInOutExpo');
			$more.removeClass('on');
		});
		$obj.on('close', function(){
			if(!isOpened)
				return;
			
			isOpened = false;
			
			$obj.stop().animate({'padding-right': 49});
			$menu.stop().animate({'right': '-300'});
			$more.stop().animate({'right': 0});
			$moreOpen.stop().fadeIn(1200, 'easeInOutExpo');
			$moreClose.stop().fadeOut(1200, 'easeInOutExpo');			
			$more.addClass('on');
		});
	});

});

jQuery(function($){
	
	$(document).on('click', 'area[href$=toggle-lnb]', function(event){
		event.preventDefault();
		
		if($('#wrap').hasClass('on')){
			$('#wrap').removeClass('on');
			$('.main-on').stop().fadeOut();
		}else{
			$('#wrap').addClass('on');
			$('.main-on').stop().fadeIn();
		}
		
	});
	$(document).on('click', 'area[href$=toggle-lnb2]', function(event){
		event.preventDefault();
		
		if($('#wrap').hasClass('on')){
			$('#wrap').removeClass('on');
			$('.main-on2').stop().fadeOut();
		}else{
			$('#wrap').addClass('on');
			$('.main-on2').stop().fadeIn();
		}
		
	});
	$(document).on('click', 'area[href$=close-toppopup]', function(event){
		event.preventDefault();
		
		$('.toppopup').stop().animate({"margin-top":-80}, 800, "easeInOutExpo");
	});
	setTimeout(function(){
		$('.toppopup').stop().animate({"margin-top":0}, 1600, "easeInOutExpo");
	}, 1000);

});