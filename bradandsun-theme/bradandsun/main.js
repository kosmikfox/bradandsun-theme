
(function($) {
	var loadCss = function(url) {
		$('<link>')
		.attr({
			'rel':'stylesheet'
			,'type':'text/css'
			,'href':url
		})
		.appendTo('head')
		;
	};
	
	$(document).ready(function() {
		/*
		 * Do some cross-browser styling
		 */
		$('.page-container').css('border-radius', '10px');
		$('.front-page-name-box').css('border-radius', '15px');
		$('.links a').css('border-radius', '8px 8px 0px 0px');
		
		/*
		 * Load fonts after the initial page load
		 * to make things appear sooner to the user
		 */
		loadCss('http://fonts.googleapis.com/css?family=Happy+Monkey');
	});
})(jQuery);



