
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

		$(document).on('mouseover','a',function() {
			var selection $(this);
			if('/wedding-party' === selection.attr('href')) {
				selection.text('Wedding Party');
			}
		});
		
		/*
		 * Load fonts after the initial page load
		 * to make things appear sooner to the user
		 */
		loadCss('http://fonts.googleapis.com/css?family=Happy+Monkey');
	});
})(jQuery);



