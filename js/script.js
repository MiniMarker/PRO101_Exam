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