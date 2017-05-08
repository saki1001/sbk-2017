/**
 * File main.js.
 *
 * Main JS
 *
 * Contains initition of 3rd party scripts.
 */

( function( $ ) {

	// Fancybox Modal
	$("[data-fancybox]").fancybox({
		// Options will go here
	});

} )( jQuery );

// Google Maps
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 40.7397, lng: -74.002984},
    zoom: 16,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false
  });

  var marker = new google.maps.Marker({
    position: {lat: 40.7397, lng: -74.002984},
    map: map
  });
}