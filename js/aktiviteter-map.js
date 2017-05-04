function initMap() {
    var locations = [
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">Christiania Minigolf</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Søndre gate 1, 0550 Oslo</p></div></div>', 59.9185678, 10.7588000, 6
                ],
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">Megazone</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Møllergata 24, 0179 Oslo</p></div></div>', 59.9162511, 10.7494700, 5
                ],
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">Oslo bar og bowling</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Torggata 16, 0181 Oslo</p></div></div>', 59.9158823, 10.7507500, 4
                ],
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">Vulkan klatresenter</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Vulkan 13, 0178 Oslo</p></div></div>', 59.9229466, 10.7520000, 3
                ],
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">Grunerhagen ballplass</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Grunerhagen ballplass</p></div></div>', 59.9229935, 10.7550900, 2
                ],
                ['<div id="content"> <div id="siteNotice"></div>' +
                    '<h2 id="firstHeading" class="firstHeading">SIO Helse Vulkan</h2>' +
                    '<div id="bodyContent">' +
                    '<p>Vulkan 15, 0178 Oslo</p></div></div>', 59.9231517, 10.7522093, 1
                ]
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