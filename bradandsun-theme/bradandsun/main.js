
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
		 * Load fonts after the initial page load
		 * to make things appear sooner to the user
		 */
		loadCss('http://fonts.googleapis.com/css?family=Happy+Monkey');
	});
})(jQuery);



