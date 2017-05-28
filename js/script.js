
// MENUBAR
    var down = false;
function showDiv() {
    "use strict";
    if((!down)){
        
        //Kommer til syne
        down = true;
        document.getElementById('menubar').style.top = "0px";
        document.getElementById('page-title').style.opacity = 0;
        document.getElementById('close-menu-button').style.display = "block";
    } else {
        
        //
        document.getElementById('menubar').style.top = "-350px";
        document.getElementById('page-title').style.opacity = 1;
        document.getElementById('close-menu-button').style.display = "none";
        down = false;
    }
}

// Velkommen i flere språk
function myFunction() {
    "use strict";
    
    // setter variabler
    var x = Math.floor((Math.random() * 10) + 1);
    var y = "(Det står velkommen på ";
    document.getElementById("demo").innerHTML = x;
    document.getElementById("language").innerHTML = y;

    switch (x) {
        case 0: //Engelsk
            document.getElementById("demo").innerHTML = "Welcome";
            document.getElementById("language").innerHTML = y + "engelsk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 1: //Fransk
            document.getElementById("demo").innerHTML = "Bienvenue";
            document.getElementById("language").innerHTML = y + "fransk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 2: //Tysk
            document.getElementById("demo").innerHTML = "Willkommen";
            document.getElementById("language").innerHTML = y + "tysk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 3: //Italiensk
            document.getElementById("demo").innerHTML = "Benvenuto";
            document.getElementById("language").innerHTML = y + "italiensk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 4: //Svensk
            document.getElementById("demo").innerHTML = "Välkommen";
            document.getElementById("language").innerHTML = y + "svensk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 5: //Kinesisk (mandarin)
            document.getElementById("demo").innerHTML = "Huānyíng";
            document.getElementById("language").innerHTML = y + "kinesisk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 6: //Finsk
            document.getElementById("demo").innerHTML = "Tervetuloa";
            document.getElementById("language").innerHTML = y + "finsk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 7: //Islandsk
            document.getElementById("demo").innerHTML = "Velkomin";
            document.getElementById("language").innerHTML = y + "islandsk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 8: //Nepalsk
            document.getElementById("demo").innerHTML = "Namaste";
            document.getElementById("language").innerHTML = y + "nepalsk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 9: //Portugisisk
            document.getElementById("demo").innerHTML = "Bem-vindo";
            document.getElementById("language").innerHTML = y + "portugisisk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        case 10: //Swahili
            document.getElementById("demo").innerHTML = "Karibu"; 
            document.getElementById("language").innerHTML = y + "swahili)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";
            break;
        default: //norsk (vil aldri intreffe)
            document.getElementById("demo").innerHTML = "Velkommen";
            document.getElementById("language").innerHTML = y + "norsk)";
            document.getElementById('undertitle').style.top = "-68%";
            document.getElementById('langInfo').style.display = "none";

    }
}