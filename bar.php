<?php 
require "php/db-connection.php";

$statement = $connection -> prepare('SELECT * FROM barer');

$statement -> execute();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $bars[] = $row;
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDom7SHx9ZtEf7dQKyTbbvGjEjkG-aTc6o&callback=initMap">


    </script>

    <title>Bar</title>

</head>

<body>
    <div id="container">
        <img id="background" src="img/background.png">

        <img onclick="showDiv()" id="menu-botton" src="img/menu.png">
        <img onclick="showDiv()" id="close-menu-button" src="img/menu2.png">
        <a href="index.html"><img id="home-button" src="img/home.png"></a>

        <div id="page-title">
            <h1>Barer</h1>
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

                <?php foreach($bars as $bar) { ?>

                <div class="cards">
                    <a href="<?= $bar["link-path"] ?>">
                        <img class="card-img" src="<?= $bar["img_path"] ?>">
                        
                        <h1 class="card-title">
                            <?= $bar["name"] ?>
                        </h1>
                    </a>

                    <?php if ($bar["rating"] == 5) { ?>
                    <img class="card-stars" src="img/stars/5-stars.png">

                    <?php } elseif ($bar["rating"] == 4) { ?>
                    <img class="card-stars" src="img/stars/4-stars.png">

                    <?php } elseif ($bar["rating"] == 3) { ?>
                    <img class="card-stars" src="img/stars/3-stars.png">

                    <?php } elseif ($bar["rating"] == 2) { ?>
                    <img class="card-stars" src="img/stars/2-stars.png">

                    <?php } elseif ($bar["rating"] == 1) { ?>
                    <img class="card-stars" src="img/stars/1-star.png">

                    <?php } ?>

                    <div class="card-description">
                        <p>
                            <?= $bar["description"] ?>
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
</body>

</html>
