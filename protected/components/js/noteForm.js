
(function($) {
// Doing this only for this page, that's why made new file.
	
$("#Note_title").charCount({
    allowed: 400,		
    warning: 385,
    counterText: 'Characters left: '	
});	

/*
 * pre loading images , makes loading a bit slow...but makes sure all images are loaded.
 * 
var $container = $('#notes');

$container.imagesLoaded( function(){
	$container.masonry({
		// options
		itemSelector : 'div.note',
		columnWidth : 100, 
		isAnimated: true
	});
});
*/

})(jQuery);