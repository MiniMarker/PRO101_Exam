
function initMap() {
    var locations = [
        ['<p>Christiania Minigolf</p>', 59.9185678, 10.7588000, 6],
        ['<p>Megazone</p>', 59.9162511, 10.7494700, 5],
        ['<p>Oslo bar og bowling</p>', 59.9158823, 10.7507500, 4],
        ['<p>Vulkan klatresenter</p>', 59.9229466, 10.7520000, 3],
        ['<p>Grunerhagen Ballplass</p>', 59.9229935, 10.7550900, 2],
        ['<p>SIO Helse Vulkan</p>', 59.9231517, 10.7522093, 1]
    ];

    window.map = new google.maps.Map(document.getElementById('map'), {
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

function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
    document.body.appendChild(script);
}

window.onload = loadScript;