$(document).ready(function() {


    /**
     * 
     * @type Object JSON countries is already defened in a js file imported
     * @type Object JSON members is already defened in a js file imported
     */

    var total_user = countries.properties.total;
    var grades = [0, 10, 50, 200, 500, 1000];

    var countries_layer;
    var markers_layer;

    var map = L.map("map", {
        center: [48, 51],
        zoom: 3,
        minZoom: 2,
        zoomControl: false,
        //crs: L.CRS.EPSG3857
        //crs: L.CRS.EPSG4326
        //crs: L.CRS.EPSG900913
    })
    map.addControl(new L.Control.ZoomMin());

    L.tileLayer('http://{s}.tile.cloudmade.com/{key}/{styleId}/256/{z}/{x}/{y}.png', {
        key: '05a69c07b66542de8c7a3e7bf9d50da3',
        attribution: 'jlfa',
        styleId: 22677
    }).addTo(map);

    

    

    function getColor(d) {
        return d > grades[5] ? '#800026' :
                d > grades[4] ? '#BD0026' :
                d > grades[3] ? '#E31A1C' :
                d > grades[2] ? '#FD8D3C' :
                d > grades[1] ? '#FEB24C' :
                d > grades[0] ? '#FED976' :
                'white'
    }

    function style(feature) {
        return {
            fillColor: getColor(feature.properties.density),
            weight: 2,
            opacity: 1,
            color: 'grey',
            dashArray: '2',
            fillOpacity: 0.5
        };
    }

    var info = L.control();

    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed
    info.update = function(props) {
        this._div.innerHTML = '<h4>Total users: ' + total_user + '</h4>'
                + (props ? '<b>' + props.country + '</b><br />'
                + props.density + ' people' : 'Hover over a state');
    };

    info.addTo(map);

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera) {
            layer.bringToFront();
        }
        info.update(layer.feature.properties);
    }

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function resetHighlight(e) {
        countries_layer.resetStyle(e.target);
        info.update();
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }

    countries_layer = L.geoJson(countries, {
        style: style,
        onEachFeature: onEachFeature
    }).addTo(map);

    var legend = L.control({position: 'bottomright'});

    legend.onAdd = function(map) {

        var div = L.DomUtil.create('div', 'info legend'),
                labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                    '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                    grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
        }

        return div;
    };

    legend.addTo(map);


// markers
    var markers = L.markerClusterGroup();

    var geoJsonLayer = L.geoJson(members, {
        onEachFeature: function(feature, layer) {

            var title = $('<h1/>').html(feature.properties.username);
            var link = $('<a/>').html('see my profile').attr('href', feature.properties.profile_link);
            var feature_container = $('<div/>').html(title).append(link);
            layer.bindPopup(feature_container.html());
        }
    });
    markers.addLayer(geoJsonLayer);
    map.addLayer(markers);

});