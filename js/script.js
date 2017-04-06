// MENUBAR
function showDiv() {
    "use strict";
    if ((document.getElementById('menubar').style.top) === "-150px") {
        document.getElementById('menubar').style.top = "0px";
        document.getElementById('page-title').style.opacity = 0;
        document.getElementById('close-menu-button').style.display = "block";
    } else {
        document.getElementById('menubar').style.top = "-150px";
        document.getElementById('page-title').style.opacity = 1;
        document.getElementById('close-menu-button').style.display = "none";
    }
}

//Velkommen i flere språk
function myFunction() {
    "use strict";
    var x = Math.floor((Math.random() * 10));
    var y = "(Det står velkommen på ";
    document.getElementById("demo").innerHTML = x;
    document.getElementById("language").innerHTML = y;

    switch (x) {
        case 0: //Engelsk
            document.getElementById("demo").innerHTML = "Welcome";
            document.getElementById("language").innerHTML = y + "engelsk)";
            break;
        case 1: //Fransk
            document.getElementById("demo").innerHTML = "Bienvenue";
            document.getElementById("language").innerHTML = y + "fransk)";
            break;
        case 2: //Tysk
            document.getElementById("demo").innerHTML = "Willkommen";
            document.getElementById("language").innerHTML = y + "tysk)";
            break;
        case 3: //Italiensk
            document.getElementById("demo").innerHTML = "Benvenuto";
            document.getElementById("language").innerHTML = y + "italiensk)";
            break;
        case 4: //SvensK
            document.getElementById("demo").innerHTML = "Välkommen";
            document.getElementById("language").innerHTML = y + "svensk)";
            break;
        case 5: //Kinesisk (mandarin)
            document.getElementById("demo").innerHTML = "Huānyíng";
            document.getElementById("language").innerHTML = y + "kinesisk)";
            break;
        case 6: //Finsk
            document.getElementById("demo").innerHTML = "Tervetuloa";
            document.getElementById("language").innerHTML = y + "finsk)";
            break;
        case 7: //Islandsk
            document.getElementById("demo").innerHTML = "Velkomin";
            document.getElementById("language").innerHTML = y + "islandsk)";
            break;
        case 8: //Nepalsk
            document.getElementById("demo").innerHTML = "Namaste";
            document.getElementById("language").innerHTML = y + "nepalsk)";
            break;
        case 9: //Portugisisk
            document.getElementById("demo").innerHTML = "Bem-vindo";
            document.getElementById("language").innerHTML = y + "portugisisk)";
            break;
        case 10: //Swahili
            document.getElementById("demo").innerHTML = "Karibu"; 
            document.getElementById("language").innerHTML = y + "swahili)";
            break;
        default:
            document.getElementById("demo").innerHTML = "Velkommen";
                        document.getElementById("language").innerHTML = y + "norsk)";

    }
}

// GOOGLE MAPS
function initMap() {
    "use strict";

    // sette punkter
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

    // init map
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: mapCenter
    });

    // sette markører
    var kontrastMark = new google.maps.Marker({
        position: kontrast,
        map: map
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
}
