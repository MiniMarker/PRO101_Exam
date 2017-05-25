<?php 
require "php/index-header.php";
?>

<body>
    <div id="container">
        <img id="background" src="img/background.png">
        
        
        <!-- WESTERDALS LOGO -->
        <div id="bookmark">
            <a href="http://westerdals.no">
                <img src="img/bookmark.png">
            </a>
        </div>
        <!-- WESTERDALS LOGO SLUTT -->
        
        
        
        <!-- SPRÅKINFO BOKS -->
        <div id="langInfo">
            <p>Trykk på teksten for å endre språk</p>
        </div>
        <!-- SPRÅKINFO BOKS SLUTT -->
        
        
        
        <!-- TITTEL -->
        <div id="textbox">
            <h1 id="title">
                <span onclick="myFunction()" id="demo">Velkommen</span> til Westerdals Vulkan
            </h1>
            
            <p id="language"></p>
            
            <h3 id="undertitle">På denne siden kan du utforske nærområdet rundt skolen</h3>
        </div>
        <!-- TITTEL SLUTT -->
        
        
        
        <!-- BUTTONS -->
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
        <!-- BUTTONS SLUTT -->
        
        
        
    </div>
    
<?php 
    require "php/footer.php";
?>