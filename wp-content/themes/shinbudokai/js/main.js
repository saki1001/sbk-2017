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
    center: {lat: 40.7264561, lng: -73.990621},
    zoom: 16,
    scrollwheel: false,
    draggable: false,
    navigationControl: false,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    rotateControl: false,
    fullscreenControl: false
  });

  var marker = new google.maps.Marker({
    position: {lat: 40.7264561, lng: -73.990621},
    map: map
  });
}