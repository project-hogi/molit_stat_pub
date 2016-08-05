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

	$('body.page-graph-view').each(function() {
		setInterval(function() {
			$('.graph-view').css('min-height', $('.chk-list').outerHeight() + 40);
		}, 100);
	});

	$('body.page-index').each(function() {

		$('.lnb').each(function() {
			var $lnb = $(this);
			var $statNav = $(this).find('>ul>li');
			var $statDepth2Wrap = $('.depth2-t');
			var timeoutId = null;
			var $container = $statDepth2Wrap.find(".container");

			$statNav.find('>a').click(function(event) {
				event.preventDefault();
			});
			$statNav.on('click', function(event) {
				if ($(this).hasClass('on')) {
					$statNav.removeClass('on');
					$lnb.triggerHandler('endNow');
				} else {
					$statNav.removeClass('on');
					$(this).addClass('on');
					$lnb.trigger('start');
					var index = $statNav.index(this);
					$container.find("div").hide().eq(index).show();
				}
			});
			$lnb.on('mouseleave', function() {
				$lnb.trigger('end');
			});
			$container.find('>*').on('mouseenter', function() {
				$lnb.trigger('start');
			});
			$container.find('>*').on('mouseleave', function() {
				$lnb.trigger('end');
			});
			$statDepth2Wrap.find('.close-btn a').on('click', function(event) {
				event.preventDefault();

				$lnb.trigger('endNow');
			});
			$(this).on('start', function() {
				$statDepth2Wrap.stop().fadeIn();

				timeoutId != null && clearTimeout(timeoutId);
			});
			$(this).on('end', function() {
				timeoutId != null && clearTimeout(timeoutId);

				timeoutId = setTimeout(function() {
					$statDepth2Wrap.stop().fadeOut();
					$statNav.removeClass('on');
				}, 600);
			});
			$(this).on('endNow', function() {
				timeoutId != null && clearTimeout(timeoutId);

				$statDepth2Wrap.stop().fadeOut();
			});
			$statDepth2Wrap.on("click mouseover", function(event) {
				if (event.target == event.currentTarget) {
					$lnb.triggerHandler("endNow");
				}
			});
		});

	});

	$('body.layout-page').each(function() {

		$('.lnb').each(function() {
			var $lnb = $(this);
			var $statNav = $(this).find('>ul>li');
			var $statDepth2Wrap = $('.depth2-t');
			var timeoutId = null;
			var $container = $statDepth2Wrap.find(".container");

			$statNav.on('mouseenter', function() {
				$lnb.trigger('start');
				var index = $statNav.index(this);
				$container.find("div").hide().eq(index).show();
			});
			$lnb.on('mouseleave', function() {
				$lnb.trigger('end');
			});
			$statDepth2Wrap.find('>*').on('mouseenter', function() {
				$lnb.trigger('start');
			});
			$statDepth2Wrap.find('>*').on('mouseleave', function() {
				$lnb.trigger('end');
			});
			$statDepth2Wrap.find('.close-btn a').on('click', function(event) {
				event.preventDefault();

				$lnb.trigger('endNow');
			});
			$(this).on('start', function() {
				$statDepth2Wrap.stop().fadeIn();

				timeoutId != null && clearTimeout(timeoutId);
			});
			$(this).on('end', function() {
				timeoutId != null && clearTimeout(timeoutId);

				timeoutId = setTimeout(function() {
					$statDepth2Wrap.stop().fadeOut();
				}, 4000);
			});
			$(this).on('endNow', function() {
				timeoutId != null && clearTimeout(timeoutId);

				$statDepth2Wrap.stop().fadeOut();
			});
			$statDepth2Wrap.on("click mouseover", function(event) {
				if (event.target == event.currentTarget) {
					$lnb.triggerHandler("endNow");
				}
			});
		});

	});

	$('body.layout-page').each(function() {
		var $window = $(window);
		var $body = $(this);
		var $side_w = $(".side_w");
		var $header = $("#header");
		var $document = $(document);
		var $footer = $("#footer");
		var $goTop = $(".go-top");

		$window.on("scroll", function(event) {
			var scrollTop = $window.scrollTop();
			var headerHeight = $header.height();

			if (scrollTop >= headerHeight) {
				$body.addClass('fixed');
				$side_w.css("top", 0);
			} else {
				$body.removeClass('fixed');
				$side_w.css("top", headerHeight - scrollTop);
			}

			var aPoint = $document.height() - $footer.height();
			var bPoint = $window.height() + scrollTop;

			$goTop.css("bottom", aPoint <= bPoint ? bPoint - aPoint : 0);
		});
		$window.on("resize", function() {
			if ($side_w.height() <= 632) {
				$side_w.addClass("small");
			} else {
				$side_w.removeClass("small");
			}
		});
		setInterval(function(){
			if ($side_w.height() <= 632) {
				$side_w.addClass("small");
			} else {
				$side_w.removeClass("small");
			}
		}, 500);
	});

	$('.graph-view').each(function() {
		// $(this).click(function(){
		// $('.graph-info').hide();
		// $(this).parent('.graph-view').css('padding-right','49px');
		// $(this).css('right','0');
		// });

		var $obj = $(this);
		var $menu = $(this).parent().find('.graph-info');
		var $more = $(this).find('p.info-menu');
		var $moreOpen = $more.find('.open');
		var $moreClose = $more.find('.close');
		var isOpened = true;

		$more.find('a').on('click', function(event) {
			event.preventDefault();

			$obj.trigger('toggles');
		});
		$obj.on('toggles', function() {
			if (isOpened) {
				$obj.trigger('close');
			} else {
				$obj.trigger('open');
			}
		});
		$obj.on('open', function() {
			if (isOpened)
				return;

			isOpened = true;

			$obj.stop().animate({
				'padding-right' : 349
			});
			$menu.stop().animate({
				'right' : '-1'
			});
			$more.stop().animate({
				'right' : 299
			});
			$moreOpen.stop().fadeOut(1200, 'easeInOutExpo');
			$moreClose.stop().fadeIn(1200, 'easeInOutExpo');
			$more.removeClass('on');
		});
		$obj.on('close', function() {
			if (!isOpened)
				return;

			isOpened = false;

			$obj.stop().animate({
				'padding-right' : 49
			});
			$menu.stop().animate({
				'right' : '-300'
			});
			$more.stop().animate({
				'right' : 0
			});
			$moreOpen.stop().fadeIn(1200, 'easeInOutExpo');
			$moreClose.stop().fadeOut(1200, 'easeInOutExpo');
			$more.addClass('on');
		});
	});

	$('.menu-pos').each(function() {
		var $obj = $(this);
		var $menu = $(this).find('.menu');
		var $more = $(this).find('.more-click');
		var $moreOpen = $more.find('.open');
		var $moreClose = $more.find('.close');
		var isOpened = false;

		$more.find('a').on('click', function(event) {
			event.preventDefault();

			$obj.trigger('toggles');
		});
		$obj.on('toggles', function() {
			if (isOpened) {
				$obj.trigger('close');
			} else {
				$obj.trigger('open');
			}
		});
		$obj.on('open', function() {
			if (isOpened)
				return;

			isOpened = true;

			$menu.stop().animate({
				'width' : 872
			}, 1200, 'easeInOutExpo');
			$more.stop().animate({
				'left' : 872
			}, 1200, 'easeInOutExpo');
			$moreOpen.stop().fadeOut(1200, 'easeInOutExpo');
			$moreClose.stop().fadeIn(1200, 'easeInOutExpo');
			setTimeout(function() {
				$('img.menu4').attr('src', '/resources/front/images/main/menu4.png');
			}, 600);
		});
		$obj.on('close', function() {
			if (!isOpened)
				return;

			isOpened = false;

			$menu.stop().animate({
				'width' : 612
			}, 1200, 'easeInOutExpo');
			$more.stop().animate({
				'left' : 612
			}, 1200, 'easeInOutExpo');
			$moreOpen.stop().fadeIn(1200, 'easeInOutExpo');
			$moreClose.stop().fadeOut(1200, 'easeInOutExpo');
			setTimeout(function() {
				$('img.menu4').attr('src', '/resources/front/images/main/menu4-ov.png');
			}, 600);
		});
	});

	$('ul.main-slider').bxSlider({
		auto : true,
		autoControls : true
	});

	$('ul.menu-slide').bxSlider({
		auto : true,
		autoControls : true
	});

	$('ul.top-slide').bxSlider({
		auto : true,
		autoControls : true
	});

	$('.page-index').each(function() {
		$('.stat-slide-w').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : false,
				pagerActiveClass : 'on'
			};
			var $prev = $('.btn_slide_prev', $visual).each(function() {
				options.prev = this;
			});
			var $next = $('.btn_slide_next', $visual).each(function() {
				var $this = $(this);

				options.next = this;

				setTimeout(function() {
					$this.click();
				}, 1000);
			});
			var $pager = $('.btn_pager', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			var $pauseAndPlay = $('.btn_pager_play', $visual);

			$pauseAndPlay.on("click", function(event) {
				event.preventDefault();

				if ($pauseAndPlay.hasClass("on")) {
					$pauseAndPlay.removeClass("on");
					$visualContent.cycle("resume");
				} else {
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
			var $visualContent = $('.slide-content', $visual);
			var options = {
				slides : '>div',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'active'
			};
			var $prev = $('.btn_slide_prev', $visual).each(function() {
				options.prev = this;
			});
			var $next = $('.btn_slide_next', $visual).each(function() {
				var $this = $(this);

				options.next = this;

				setTimeout(function() {
					$this.click();
				}, 2000);
			});
			var $pager = $('.pager', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);
		});

	});

	$('.page-index').each(function() {
		var images = [ "/resources/front/images/common/bg_container-visual.png", "/resources/front/images/common/bg_container-visual2.png", "/resources/front/images/common/bg_container-visual3.png" ];
		var $body = $("body"), $bg = $(".page-index #bg"), n = images.length, c = 0; // Loop
		// Counter

		// Preload Array of images...
		for (var i = 0; i < n; i++) {
			var tImg = new Image();
			tImg.src = images[i];
		}

		$body.css({
			backgroundImage : "url(" + images[c] + ")"
		});

		(function loopBg() {
			$bg.hide().css({
				backgroundImage : "url(" + images[++c % n] + ")"
			}).fadeTo(3000, 1, 'easeOutExpo', function() {
				loopBg();
			});
		}());
	});

	$('.search-box').each(function() {
		var $hiddenInput = $(this).find('input.search-option');
		var $searchClick = $(this).find(".select-click");
		var $searchOptions = $(this).find(".select-click-over");

		$searchOptions.hide();

		$searchClick.on("click", function() {
			if ($(this).hasClass("on")) {
				$(this).removeClass("on");
				$searchOptions.hide();
			} else {
				$(this).addClass("on");
				$searchOptions.show();
			}
		});
		$searchOptions.on("click", "a", function(event) {
			event.preventDefault();

			var value = $(this).attr("data-value");
			var label = $.trim($(this).text());

			$searchClick.removeClass("on");
			$searchOptions.hide();

			$searchClick.text(label);
			$searchClick.attr("data-value", value);
			$hiddenInput.val(value);
		});
	});

	$('#footer').each(function() {
		var $hiddenInput = $(this).find('input.search-option');
		var $searchClick = $(this).find("p.site span");
		var $searchOptions = $(this).find(".site-over");

		$searchOptions.hide();

		$searchClick.on("click", function() {
			if ($searchClick.hasClass("on")) {
				$searchClick.removeClass("on");
				$searchOptions.show();

			} else {
				$searchClick.addClass("on");
				$searchOptions.hide();
			}
		});
		$searchOptions.on("click", "a", function(event) {
			event.preventDefault();

			var value = $(this).attr("data-value");
			var label = $.trim($(this).text());

			$searchClick.removeClass("on");
			$searchOptions.hide();

			$searchClick.find('a').text(label);
			$searchClick.find('a').attr("data-value", value);
			$hiddenInput.val(value);
		});
	});
	/*
	 * $('#footer').each(function(){
	 * 
	 * $(this).find('.site-over').hide();
	 * 
	 * $(this).find('p.site').on('click', function() {
	 * $(this).find('.site-over').toggle(); });
	 * 
	 * 
	 * $(this).find('.site-over > ul > li > a').on('click', function(){
	 * $('.site-over').hide(); }); var isplay = true;
	 * 
	 * $('#footer').find('p.site').on('click',function(){ if (isplay == true){
	 * $(this).find('span').addClass('on'); isplay= false; } else{
	 * $(this).find('span').removeClass('on'); isplay= true; } });
	 * 
	 * $(this).find('.site-over').on('click',function(){
	 * $('#footer').find('p.site span').removeClass('on'); isplay= true; });
	 * 
	 * });
	 */

	$('p.site').on('click', function() {
		$('.site-over').toggle();
	});

	$(document).on('click', 'a[href$=close-toppopup]', function(event) {
		event.preventDefault();

		$('.toppopup').stop().animate({
			"margin-top" : -80
		}, 800, "easeInOutExpo");
	});
	setTimeout(function() {
		$('.toppopup').stop().animate({
			"margin-top" : 0
		}, 1600, "easeInOutExpo", function() {
			$('.menu-pos').trigger('open');

			setTimeout(function() {
				$('.menu-pos').trigger('close');
			}, 1200);
		});
	}, 1000);

	// sitemap
	$('p.site-map a').on('click', function() {
		$('.sitemap_pc').toggle();
	});

	$('.btn_sitemap_pc_close').on('click', function() {
		$('.sitemap_pc').hide();
	});

});
