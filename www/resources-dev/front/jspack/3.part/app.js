"use strict";

jQuery(function($) {
	$('.qna li dl dt').on('click', function() {
		$(this).parent('dl').find('dd').toggle();
	});

	$('ul.db-list li dl dt').on('click', function() {
		$(this).parent('dl').find('dd').toggle();
	});

	$('.data-year-view .ri>ul>li>span:first-child').on('click', function() {
		$(this).parent().toggleClass("closed");
	});

	$('.lnb').each(function() {
		var $lnb = $(this);
		var $statNav = $(this).find('>ul>li.notice');
		var $statDepth2Wrap = $('.depth2-1');
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
		$statDepth2Wrap.on("click mouseover", function(event){
			if(event.target == event.currentTarget){
				$lnb.triggerHandler("endNow");
			}
		});
	});
	
	$('.lnb').each(function() {
		var $lnb = $(this);
		var $statNav = $(this).find('>ul>li.stat');
		var $statDepth2Wrap = $('.depth2-2');
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
		$statDepth2Wrap.on("click mouseover", function(event){
			if(event.target == event.currentTarget){
				$lnb.triggerHandler("endNow");
			}
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

	$('.menu-pos').each(function(){
		var $obj = $(this);
		var $menu = $(this).find('.menu');
		var $more = $(this).find('.more-click');
		var $moreOpen = $more.find('.open');
		var $moreClose = $more.find('.close');
		var isOpened = false;
		
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
			
			$menu.stop().animate({'width': 872}, 1200, 'easeInOutExpo');
			$more.stop().animate({'left': 872}, 1200, 'easeInOutExpo');
			$moreOpen.stop().fadeOut(1200, 'easeInOutExpo');
			$moreClose.stop().fadeIn(1200, 'easeInOutExpo');
			setTimeout(function(){
				$('img.menu4').attr('src','/resources-dev/front/images/main/menu4.png');
			}, 600);
		});
		$obj.on('close', function(){
			if(!isOpened)
				return;
			
			isOpened = false;
			
			$menu.stop().animate({'width': 612}, 1200, 'easeInOutExpo');
			$more.stop().animate({'left': 612}, 1200, 'easeInOutExpo');
			$moreOpen.stop().fadeIn(1200, 'easeInOutExpo');
			$moreClose.stop().fadeOut(1200, 'easeInOutExpo');
			setTimeout(function(){
				$('img.menu4').attr('src','/resources-dev/front/images/main/menu4-ov.png');
			}, 600);
		});
	});
	
	$('ul.main-slider').bxSlider({
		auto: true,
		autoControls: true
	});
	
	$('ul.menu-slide').bxSlider({
		auto: true,
		autoControls: true
	});
	
	$('.page-index').each(function() {
		$('.stat-slide-w').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout: 2400,
				fx: 'fade',
				log: false,
				pauseOnHover: false,
				pagerActiveClass: 'on'
			};
			var $prev = $('.btn_slide_prev', $visual).each(function(){
				options.prev = this;
			});
			var $next = $('.btn_slide_next', $visual).each(function(){
				var $this = $(this);
				
				options.next = this;
				
				setTimeout(function(){
					$this.click();
				}, 1000);
			});
			var $pager = $('.btn_pager', $visual).each(function(){
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});
			
			var $pauseAndPlay = $('.btn_pager_play', $visual);
			
			$pauseAndPlay.on("click", function(event){
				event.preventDefault();
				
				if($pauseAndPlay.hasClass("on")){
					$pauseAndPlay.removeClass("on");
					$visualContent.cycle("resume");
				}else{
					$pauseAndPlay.addClass("on");
					$visualContent.cycle("pause");
				}
			});
			
			$visualContent.cycle(options);
		});
		
	});
	
	$('.page-index').each(function() {
		$('.notice-slide').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout: 2400,
				fx: 'fade',
				log: false,
				pauseOnHover: true,
				pagerActiveClass: 'on'
			};
			var $prev = $('.btn_slide_prev', $visual).each(function(){
				options.prev = this;
			});
			var $next = $('.btn_slide_next', $visual).each(function(){
				var $this = $(this);
				
				options.next = this;
				
				setTimeout(function(){
					$this.click();
				}, 2000);
			});
			var $pager = $('.btn_pager', $visual).each(function(){
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});
						
			$visualContent.cycle(options);
		});
		
	});
	
	$('.page-index').each(function(){
		var images = [
          "/resources-dev/front/images/common/bg_container-visual.png",
          "/resources-dev/front/images/common/bg_container-visual2.png",
          "/resources-dev/front/images/common/bg_container-visual3.png"
        ];
        var $body = $("body"),
            $bg = $(".page-index #bg"),
            n = images.length,
            c = 0; // Loop Counter

        // Preload Array of images...
        for(var i=0; i<n; i++){
          var tImg = new Image();
          tImg.src = images[i];
        }

        $body.css({backgroundImage : "url("+images[c]+")"}); 

        (function loopBg(){
          $bg.hide().css({backgroundImage : "url("+images[++c%n]+")"}).fadeTo(3000, 1, 'easeOutExpo', function(){
            loopBg();
          });
        }());
	});	
	
	$('.select-click').on('click', function() {
		$('.select-click-over').toggle();
	});
	
	$('p.site').on('click', function() {
		$('.site-over').toggle();
	});
	
	$(document).on('click', 'a[href$=close-toppopup]', function(event){
		event.preventDefault();
		
		$('.toppopup').stop().animate({"margin-top":-80}, 800, "easeInOutExpo");
	});
	setTimeout(function(){
		$('.toppopup').stop().animate({"margin-top":0}, 1600, "easeInOutExpo", function(){
			$('.menu-pos').trigger('open');
			
			setTimeout(function(){
				$('.menu-pos').trigger('close');
			}, 1200);
		});
	}, 1000);

});