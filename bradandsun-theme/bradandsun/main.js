
(function($) {
	$(document).ready(function() {
		/*
		 * Do some cross-browser styling
		 */
		$('.front-page-name-box').css('border-radius', '15px');
		$('.links a').css('border-radius', '10px');
		
		/*
		 * Load fonts after the initial page load
		 * to make things appear sooner to the user
		 */
		$('<link>')
		.attr({
			'rel':'stylesheet'
			,'type':'text/css'
			,'href':'http://fonts.googleapis.com/css?family=Sacramento'
		})
		.appendTo('head')
		;
		
		$('<link>')
		.attr({
			'rel':'stylesheet'
			,'type':'text/css'
			,'href':'http://fonts.googleapis.com/css?family=Happy+Monkey'
		})
		.appendTo('head')
		;
	});
})(jQuery);



