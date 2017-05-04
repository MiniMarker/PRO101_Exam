function initMap() {
    var locations = [
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Tim Wendelboe</h2>' +
         '<div id="bodyContent">' +
         '<p>Gruners gate 1, 0552 Oslo</p></div></div>', 59.9233709, 10.755650, 6],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Cafe Sara</h2>' +
         '<div id="bodyContent">' +
         '<p>Hausmanns gate 29, 0182 Oslo</p></div></div>', 59.9176068, 10.7541500, 5],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Espresso house Nordre Gate</h2>' +
         '<div id="bodyContent">' +
         '<p>Nordre gate 18, 0551 Oslo</p></div></div>', 59.9211606, 10.7575700, 4],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">La Crêpe</h2>' +
         '<div id="bodyContent">' +
         '<p>Vulkan 28, 0178 Oslo</p></div></div>', 59.9225697, 10.7516500, 3],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Godt brød</h2>' +
         '<div id="bodyContent">' +
         '<p>Thorvald Meyers gate 49, 0555 Oslo</p></div></div>', 59.9239878, 10.7589800, 2],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Kaffebrenneriet</h2>' +
         '<div id="bodyContent">' +
         '<p>Thorvald Meyers gate 55, 0555 Oslo</p></div></div>', 59.923489, 10.758820, 1]
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
