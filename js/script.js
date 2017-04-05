//document.getElementById("#menu-botton").onclick = function(){menuAni()};

function showDiv() {
    if ((document.getElementById('menubar').style.top) == "-150px"){
        //document.getElementById('menubar').style.display = "block";
        document.getElementById('menubar').style.top = "0px";
        document.getElementById('page-title').style.opacity = 0;
    } else {
        //document.getElementById('menubar').style.display = "none";
        document.getElementById('menubar').style.top = "-150px";
        document.getElementById('page-title').style.opacity = 1;
    }
    
}