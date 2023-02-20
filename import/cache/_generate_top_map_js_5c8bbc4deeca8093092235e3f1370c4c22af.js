


var markers = new Array();
var map;
var marker_clusterer ;
$(document).ready(function(){
    var myLocationEnabled = true;
    var style_map = mapStyle;
    var scrollwheelEnabled = true;

    
    if($('#main-map').length){    
        map = L.map('main-map', {
                        center: [0, 0],
                        zoom: 8-2,
            scrollWheelZoom: scrollwheelEnabled,
            dragging: !L.Browser.mobile,

            
            tap: !L.Browser.mobile
        });     
        L.tileLayer('../../../../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var positron = L.tileLayer('../../../../cartodb-basemaps-%7bs%7d.global.ssl.fastly.net/light_all/%7bz%7d/%7bx%7d/%7by%7d%7br%7d.png').addTo(map);

                map.addLayer(clusters);   
        
                /* set center */
        if(markers.length){
            var limits_center = [];
            for (var i in markers) {
                if(typeof markers[i]['_latlng'] == 'undefined') continue;
                var latLngs = [ markers[i].getLatLng() ];
                limits_center.push(latLngs)
            };
            var bounds = L.latLngBounds(limits_center);
                            map.fitBounds(bounds);
                   }
                
        if(!markers.length){
                            $.get('https://nominatim.openstreetmap.org/search?format=json&amp;q=France', function(data){
                    if(data.length && typeof data[0]) {
                        map.setView([data[0].lat, data[0].lon]); 
                    } else {
                    }
                });
                    }
    } 
    })

