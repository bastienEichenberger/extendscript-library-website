/**
 * @requires jquery
 * @requires Google Map API
 * @requires jquery geocoding
 */
$(document).ready(function() {
    // tooltip to the right
    $('form span.glyphicon').tooltip({
        placement: 'right'
    });

    /**
     * Adresse field geocomplete
     */
    
    // create map
    var center = new google.maps.LatLng(53, 9);
    var defaultBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(-33.8902, 151.1759),
            new google.maps.LatLng(-33.8474, 151.2631)
    );
    // clear adresse field if the user refresh the page
    var ADRESSE_FIELD = '#fos_user_registration_form_location_adresse';
    $(ADRESSE_FIELD).val('');
    // autocomplete
    $(ADRESSE_FIELD).geocomplete({
        bounds: defaultBounds,
        map: '#map-canvas',
        details: "form",
        types: ["geocode", "establishment"],
        detailsAttribute: "data-geo"
    });
    
    var map =  $(ADRESSE_FIELD).geocomplete("map")
    map.setCenter(center);
    map.setZoom(2);
    
    
     // if user click to go -> find the adresse
    $('#go').click(function() {
        $(ADRESSE_FIELD).geocomplete("find", $(ADRESSE_FIELD).val());
    });
    


}); // end document.ready
