
window.initMap = function(){
    var locations = [
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Kontrast</h2>' + 
         '<div id="bodyContent">' +
         '<p>Maridalsveien 15a, 0175 Oslo</p></div></div>', 
         59.922473, 10.751005, 6],
        
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Døgnvill</h2>' + 
         '<div id="bodyContent">' +
         '<p>Vulkan 12, 0178 Oslo</p></div></div>' , 59.9217100, 10.7516682, 5],
        
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Lucky Bird</h2>' + 
         '<div id="bodyContent">' +
         '<p>Vulkan 7, 0175 Oslo</p></div></div>' , 59.9226004, 10.7519892, 4],
        
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Hitchhiker</h2>' + 
         '<div id="bodyContent">' +
         '<p>Vulkan 5, 0178 Oslo</p></div></div>' , 59.922339, 10.752095, 3],
        
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Asian Street Food</h2>' + 
         '<div id="bodyContent">' +
         '<p>Torggata 29, 0183 Oslo</p></div></div>' , 59.916983, 10.7534519, 2],
        
        ['<div id="content"> <div id="siteNotice"></div>' + 
         '<h2 id="firstHeading" class="firstHeading">Villa Paradiso</h2>' + 
         '<div id="bodyContent">' +
         '<p>Olaf Ryes plass 8, 0552 Oslo</p></div></div>', 59.923535, 10.757500, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var bounds = new google.maps.LatLngBounds();

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        bounds.extend(marker.position);

        google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
        google.maps.event.addListener(marker, 'mouseout', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.close(map, marker);
            }
        })(marker, i));
    }

    map.fitBounds(bounds);

    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(16);
        google.maps.event.removeListener(listener);
    });
}