<?php 
require "php/db-connection.php";
require "php/result-header.php";

$statement = $connection -> prepare('SELECT * FROM aktivitet');

$statement -> execute();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $aktiviteter[] = $row;
}

?>

<!DOCTYPE html>
<html>

<head>
    <script src="js/aktiviteter-map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDom7SHx9ZtEf7dQKyTbbvGjEjkG-aTc6o&callback=initMap">
    </script>

    <title>Aktiviteter</title>
</head>

<body>
    <div id="container">
        <img id="background" src="img/background.png">

        <img onclick="showDiv()" id="menu-botton" src="img/menu.png">
        <img onclick="showDiv()" id="close-menu-button" src="img/menu2.png">
        <a href="index.php"><img id="home-button" src="img/home.png"></a>

        <div id="page-title">
            <h1>Aktivitet</h1>
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

                <?php foreach($aktiviteter as $aktivitet) { ?>

                <div class="cards">
                    <a href="<?= $aktivitet["link-path"] ?>">
                        <img class="card-img" src="<?= $aktivitet["img_path"] ?>">
                        
                        <h1 class="card-title">
                            <?= $aktivitet["name"] ?>
                        </h1>
                    </a>

                    <?php if ($aktivitet["rating"] == 5) { ?>
                    <img class="card-stars" src="img/stars/5-stars.png">

                    <?php } elseif ($aktivitet["rating"] == 4) { ?>
                    <img class="card-stars" src="img/stars/4-stars.png">

                    <?php } elseif ($aktivitet["rating"] == 3) { ?>
                    <img class="card-stars" src="img/stars/3-stars.png">

                    <?php } elseif ($aktivitet["rating"] == 2) { ?>
                    <img class="card-stars" src="img/stars/2-stars.png">

                    <?php } elseif ($aktivitet["rating"] == 1) { ?>
                    <img class="card-stars" src="img/stars/1-star.png">

                    <?php } ?>

                    <div class="card-description">
                        <p>
                            <?= $aktivitet["description"] ?>
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
<?php 
    require "php/footer.php";
?>
