"use strict";

(function($) {
	
	$(document).ready(function(){
		$('.qna li dl dt').click(function(){
				$(this).parent('dl').find('dd').toggle();
			});
	});

})(jQuery);