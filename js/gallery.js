// Gallery Thumbnails
jQuery(document).ready(function() {
	jQuery('.thumbnail').each(function() {
		var href = jQuery(this).attr('href');
		jQuery(this).css('background', 'url(' + href + ') no-repeat');
	});
});