// Google Map
// Note: have to use "jQuery" instead of "$" due to the weird
// way that Drupal handle jQuery
jQuery(document).ready(function() {
	function initialize() {
		var mapOptions = {
		  center: new google.maps.LatLng(45.950338, -66.852185),
		  zoom: 15,
		  mapTypeId: google.maps.MapTypeId.SATELLITE,
		  scrollwheel: false
		};

		var map = new google.maps.Map(document.getElementById("map"),
		    mapOptions);

		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(45.949954,-66.851238),
			map: map
		});
	}

	if (jQuery('#map').length > 0) {
		google.maps.event.addDomListener(window, 'load', initialize);
	}
});