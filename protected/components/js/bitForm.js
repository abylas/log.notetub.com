
(function($) {
// Doing this only for this page, that's why made new file.
	
		// basically find parent of the link, then find the next picForm and toggle it.
$(".picForm").hide();	// hide all forms in beginning...then toggle				
					
					
$(".picAddLink").toggle(
					function(){
						$(this).next(".picForm").show();
						
						},
					function(){
						$(this).next(".picForm").hide();
						
					}
					);

$("#Bit_description").charCount({
    allowed: 200,		
    warning: 40,
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