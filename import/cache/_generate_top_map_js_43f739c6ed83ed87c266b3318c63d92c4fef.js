


var markers = new Array();
var map;
var marker_clusterer ;
$(document).ready(function(){
    var myLocationEnabled = true;
    var style_map = mapStyle;
    var scrollwheelEnabled = true;

    
    if($('#main-map').length){    
        map = L.map('main-map', {
                        center: [48.5829356, 2.94417625],
                        zoom: 8-2,
            scrollWheelZoom: scrollwheelEnabled,
            dragging: !L.Browser.mobile,

            
            tap: !L.Browser.mobile
        });     
        L.tileLayer('../../../%7bs%7d.tile.openstreetmap.org/%7bz%7d/%7bx%7d/%7by%7d.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var positron = L.tileLayer('../../../cartodb-basemaps-%7bs%7d.global.ssl.fastly.net/light_all/%7bz%7d/%7bx%7d/%7by%7d%7br%7d.png').addTo(map);

                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [48.5602959, 3.2988089],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Boutiques éphémère--><div class=\"infobox map-box\">    <a href=\"https://boutiquesephemeres.cdconnect.fr/index.php/property/32/en/bjelovar_estate_1\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://boutiquesephemeres.cdconnect.fr/files/strict_cache/575x500no_image.jpg\" alt=\"Bjelovar estate 1\">        <div class=\"rate-info\">                    <h5>                                                €78.000                                        </h5>                    <span class=\"purpose-\">                            </span>         </div>        <div class=\"listing-item-content\">            <h3>Bjelovar estate 1</h3>            <span><i class=\"la la-map-marker\"></i>77160 Provins</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [48.5387219, 2.6605287],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Boutiques éphémère--><div class=\"infobox map-box\">    <a href=\"https://boutiquesephemeres.cdconnect.fr/index.php/property/31/en/bjelovar_estate_1\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://boutiquesephemeres.cdconnect.fr/files/strict_cache/575x500147_1png.jpeg\" alt=\"Bjelovar estate 1\">        <div class=\"rate-info\">                    <h5>                                                €78.000                                        </h5>                    <span class=\"purpose-\">                            </span>         </div>        <div class=\"listing-item-content\">            <h3>Bjelovar estate 1</h3>            <span><i class=\"la la-map-marker\"></i>19 rue Pouteau 77000 Melun</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
                                           
                        
            var innerMarker = '<div class="marker-container"><div class="marker-card"><div class="front face"><i class="fa fa-building"></i></div><div class="back face"> <i class="fa fa-building"></i></div><div class="marker-arrow"></div></div></div>'    

            var marker = L.marker(
                [48.6271493, 2.5895436],
                {icon: L.divIcon({
                        html: innerMarker,
                        className: 'open_steet_map_marker google_marker',
                        iconSize: [40, 46],
                        popupAnchor: [1, -35],
                        iconAnchor: [20, 46],
                    })
                }
            )/*.addTo(map)*/;

            marker.bindPopup("<!--Widget-preview-category-path: Boutiques éphémère--><div class=\"infobox map-box\">    <a href=\"https://boutiquesephemeres.cdconnect.fr/index.php/property/30/en/bjelovar_estate_1\" class=\"listing-img-container\">        <div class=\"infoBox-close\"><i class=\"fa fa-times\"></i>        </div><img src=\"https://boutiquesephemeres.cdconnect.fr/files/strict_cache/575x500boutique_moissy_cramayel_01.jpeg\" alt=\"Bjelovar estate 1\">        <div class=\"rate-info\">                    <h5>                                                €78.000                                        </h5>                    <span class=\"purpose-\">                            </span>         </div>        <div class=\"listing-item-content\">            <h3>Bjelovar estate 1</h3>            <span><i class=\"la la-map-marker\"></i>251 avenue philippe bur 77550 moissy-cramayel</span>        </div>    </a></div>", jpopup_customOptions);
            clusters.addLayer(marker);
            markers.push(marker);
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

