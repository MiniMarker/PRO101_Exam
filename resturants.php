<?php 
require "php/db-connection.php";

$statement = $connection -> prepare('SELECT * FROM resturant');

$statement -> execute();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $resturants[] = $row;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="css/results.css" type="text/css" rel="stylesheet">
    <link href="OpenSans/stylesheet.css" type="text/css" rel="stylesheet">

    <!-- JAVASCRPT -->
    <script src="js/script.js"></script>


    <title>Resturanter</title>

</head>

<body>
    <div id="container">
        <img id="background" src="img/background.png">

        <img onclick="showDiv()" id="menu-botton" src="img/menu.png">
        <img onclick="showDiv()" id="close-menu-button" src="img/menu2.png">
        <a href="index.html"><img id="home-button" src="img/home.png"></a>

        <div id="page-title">
            <h1>Resturanter</h1>
        </div>

        <div id="menubar">
            <div id="buttons">
                <a href="hotell.php">
                    <div class="button" id="hotel-button">
                        <img id="hotel-img" src="img/icons/hotel.png">
                        <p>Hoteller</p>
                    </div>
                </a>

                <a href="cafes.php">
                    <div class="button" id="cafe-button">
                        <img src="img/icons/coffee-cup.png">
                        <p>Café</p>
                    </div>
                </a>

                <a href="resturants.php">
                    <div class="button" id="resturant-button">
                        <img src="img/icons/resturants.png">
                        <p>Resturanter</p>
                    </div>
                </a>

                <a href="bar.php">
                    <div class="button" id="beer-button">
                        <img src="img/icons/drink-beer-jar.png">
                        <p>Barer</p>
                    </div>
                </a>

                <a href="events.php">
                    <div class="button" id="ticket-button">
                        <img src="img/icons/tickets.png">
                        <p>Eventer</p>
                    </div>
                </a>

                <a href="aktiviteter.php">
                    <div class="button" id="activity-button">
                        <img src="img/icons/activity.png">
                        <p>Aktiviteter</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="outer-box">
            <div id="left-inner-box">

                <?php foreach($resturants as $resturant) { ?>

                <div class="cards">
                    <a href="<?= $resturant[" link-path "] ?>">
                        <img class="card-img" src="<?= $resturant["img_path"] ?>">
                        
                        <h1 class="card-title">
                            <?= $resturant["name"] ?>
                        </h1>
                    </a>

                    <?php if ($resturant["rating"] == 5) { ?>
                    <img class="card-stars" src="img/stars/5-stars.png">

                    <?php } elseif ($resturant["rating"] == 4) { ?>
                    <img class="card-stars" src="img/stars/4-stars.png">

                    <?php } elseif ($resturant["rating"] == 3) { ?>
                    <img class="card-stars" src="img/stars/3-stars.png">

                    <?php } elseif ($resturant["rating"] == 2) { ?>
                    <img class="card-stars" src="img/stars/2-stars.png">

                    <?php } elseif ($resturant["rating"] == 1) { ?>
                    <img class="card-stars" src="img/stars/1-star.png">

                    <?php } ?>

                    <div class="card-description">
                        <p>
                            <?= $resturant["description"] ?>
                        </p>
                    </div>
                </div>

                <?php } ?>
            </div>

            <div id="right-inner-box">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script>
        // GOOGLE MAPS
        function initMap() {

            // sette punkter i koordinater
            var kontrast = {
                lat: 59.922473,
                lng: 10.751005
            };
            var dognvill = {
                lat: 59.9217100,
                lng: 10.7516682
            };
            var luckyBird = {
                lat: 59.9226004,
                lng: 10.7519892
            };
            var hitchhiker = {
                lat: 59.922339,
                lng: 10.752095
            };
            var mapCenter = {
                lat: 59.922524,
                lng: 10.751749
            };

            // sette markøren
            var icons = {
                pin: {
                    icon: 'http://bildr.no/image/M2F3WTRI.jpeg'
                }
            }


            // Init kart
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: mapCenter,
                styles: [{
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.business",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }
                ]
            });

            // Tekst i infobokser
            var dognvillString = '<div id="content">' +
                '<div id="siteNotice"></div> <h1 id="firstHeading" class="firstHeading">Døgnvill</h1> <div id="bodyContent">' +
                '<p> Velkommen til Døgnvill!</p>' +
                '</div>' +
                '</div>';


            var luckyString = '<div id="content">' +
                '<div id="siteNotice"></div> <h1 id="firstHeading" class="firstHeading">Lucky Bird</h1> <div id="bodyContent">' +
                '<p> Gira på litt lucky??</p>' +
                '</div>' +
                '</div>';


            var hitchhikerString = '<div id="content">' +
                '<div id="siteNotice"></div> <h1 id="firstHeading" class="firstHeading">Hitchhiker</h1> <div id="bodyContent">' +
                '<p> Haikern, god mat! </p>' +
                '</div>' +
                '</div>';

            var kontrastString = '<div id="content">' +
                '<div id="siteNotice"></div> <h1 id="firstHeading" class="firstHeading">Kontrast</h1> <div id="bodyContent">' +
                '<p>Kontraster i matverden</p>' +
                '</div>' +
                '</div>';

            // sette infobokser og fylle dem med tekst
            var luckyInfowindow = new google.maps.InfoWindow({
                content: luckyString,
                maxWidth: 300

            });

            var dognvillInfowindow = new google.maps.InfoWindow({
                content: dognvillString,
                maxWidth: 300
            });

            var hitchhikerInfowindow = new google.maps.InfoWindow({
                content: hitchhikerString,
                maxWidth: 300
            });

            var kontrastInfowindow = new google.maps.InfoWindow({
                content: kontrastString,
                maxWidth: 300
            });


            // sette markører på kartet
            var kontrastMark = new google.maps.Marker({
                position: kontrast,
                map: map,
            });
            var dognvillMark = new google.maps.Marker({
                position: dognvill,
                map: map
            });
            var hitchhikerMark = new google.maps.Marker({
                position: hitchhiker,
                map: map
            });
            var luckyBirdMark = new google.maps.Marker({
                position: luckyBird,
                map: map
            });

            // ActionListeners
            luckyBirdMark.addListener('click', function() {
                luckyInfowindow.open(map, luckyBirdMark);
            });

            dognvillMark.addListener('click', function() {
                dognvillInfowindow.open(map, dognvillMark);
            });

            hitchhikerMark.addListener('click', function() {
                hitchhikerInfowindow.open(map, hitchhikerMark);
            });

            kontrastMark.addListener('click', function() {
                kontrastInfowindow.open(map, kontrastMark);
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDom7SHx9ZtEf7dQKyTbbvGjEjkG-aTc6o&callback=initMap">


    </script>
</body>

</html>
