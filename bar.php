<?php 
require "php/db-connection.php";
require "php/result-header.php";

$statement = $connection -> prepare('SELECT * FROM barer');

$statement -> execute();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $bars[] = $row;
}

?>
<head>
    <title>Bar</title>
    <script src="js/bar-map.js"></script>
</head>

<body>
    <div id="container">
        <img id="background" src="img/background.png">

        <img onclick="showDiv()" id="menu-botton" src="img/menu.png">
        <img onclick="showDiv()" id="close-menu-button" src="img/menu2.png">
        <a href="index.php"><img id="home-button" src="img/home.png"></a>

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
                        <img class="card-img" src="<?= $bar["img_path"] ?>">
                        
                        <h1 class="card-title">
                            <?= $bar["name"] ?>
                        </h1>

                    <div class="card-olpris">
                        <p class="bold">
                            Billigste øl: <?= $bar["billigsteOl"] ?> kr
                        </p>
                    </div>

                    <div class="card-description">
                        <p>
                            <?= $bar["description"] ?>
                        </p>
                    </div>
                    
                    <a href="<?= $bar["link-path"] ?>"> 
                        <p class="card-link">
                            Besøk siden
                        </p>
                    </a>
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
