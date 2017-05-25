<?php 
require "php/db-connection.php";
require "php/result-header.php";

$statement = $connection -> prepare('SELECT event.id, event.name, event.description, event.place, event.date, event.month, event.img_path, event.link_path, kategori.navn FROM event JOIN kategori on event.kategori_id = kategori.kategori_id ORDER BY event.id');

$statement -> execute();

while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
    $events[] = $row;
}

?>

<head>
    
    
    
    <!-- GENERELLE INNSTILLINGER -->
    <title>Events</title>
    <script src="js/event-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDom7SHx9ZtEf7dQKyTbbvGjEjkG-aTc6o&callback=initMap" async defer>
    </script>
    <!-- GENERELLE INNSTILLINGER SLUTT -->
    
    
    
</head>

<body>
    <!-- CONTAINER -->
    <div id="container">
        <img id="background" src="img/background.png">
        
        

        <!-- MENYKNAPPER -->
        <img onclick="showDiv()" id="menu-botton" src="img/menu.png">
        <img onclick="showDiv()" id="close-menu-button" src="img/menu2.png">
        <a href="index.php">
            <img id="home-button" src="img/home.png">
        </a>
        <!-- MENYKNAPPER SLUTT -->
        
        
        
        <!-- SIDETITTEL -->
        <div id="page-title">
            <h1>Events</h1>
        </div>
        <!-- SIDETITTEL SLUTT -->
        
        
        
        <!-- MENY -->
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
        <!-- MENY SLUTT -->
        
        
        
        <!-- YTRE DIV -->
        <div id="outer-box">
            
            
            
            <!-- RESULTATLISTE -->
            <div id="left-inner-box">

                <?php foreach($events as $event) { ?>

                <div class="cards">
                    <a href="<?= $event["link_path"] ?>">
                        <img class="card-img" src="<?= $event["img_path"] ?>">
                        
                        <h1 class="card-title">
                            <?= $event["name"] ?>
                        </h1>
                    </a>
                    
                    <div class="card-date">
                        <h2>
                            <?= $event["date"], " ", $event["month"] ?>
                        </h2>
                    </div>
                    
                    <div class="card-category">
                        <p>
                            <?= $event["navn"] ?>
                        </p>
                    </div>

                    <div class="card-event-description">
                        <p>
                            <?= $event["description"] ?>
                        </p>
                    </div>
                </div>

                <?php } ?>
            </div>
            <!-- RESULTATLISTE SLUTT -->
            
            
            
            <!-- KART -->
            <div id="right-inner-box">
                <div id="map"></div>
            </div>
            <!-- KART SLUTT -->
            
        </div>
        <!-- YTRE DIV SLUTT -->
        
    </div>
    <!-- CONTAINER SLUTT -->
    
<?php 
    require "php/footer.php";
?>