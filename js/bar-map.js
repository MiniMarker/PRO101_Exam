function initMap() {
    var locations = [
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Crowbar</h2>' +
         '<div id="bodyContent">' +
         '<p>Torggata 32, 0183 Oslo</p></div></div>', 59.9171999, 10.7534261, 6],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Sjenkestua studentbar</h2>' +
         '<div id="bodyContent">' +
         '<p>Chr. Krohgs gate 32A</p></div></div>', 59.9160856, 10.7599377, 5],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Smelteverket</h2>' +
         '<div id="bodyContent">' +
         '<p>Maridalsveien 17A, 0178 Oslo</p></div></div>', 59.9223728, 10.752400, 3],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Pokalen</h2>' +
         '<div id="bodyContent">' +
         '<p>Vulkan 26, 0178 Oslo</p></div></div>', 59.9224689, 10.75120, 2],
        ['<div id="content"> <div id="siteNotice"></div>' +
         '<h2 id="firstHeading" class="firstHeading">Ryes</h2>' +
         '<div id="bodyContent">' +
         '<p>Sofienberggata</p></div></div>', 59.9222518, 10.7566619, 1]
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
        map.setZoom(15);
        google.maps.event.removeListener(listener);
    });
}
