
// GOOGLE MAPS





function initMap() {
    "use strict";

    // sette punkter
    var christianiaGolf = {
        lat: 59.9185678,
        lng: 10.7561222
    };
    var megazone = {
        lat: 59.9162511,
        lng: 10.7471591
    };
    var barBowling = {
        lat: 59.9158823,
        lng: 10.7485494
    };
    var vulkanKlatre = {
        lat: 59.9229466,
        lng: 10.7497761
    };
    
    var grunerHagenball {    
    59.9229935,
    10.7526765
    };
    
    var sioHelseVulkan
    59.9231517,
    10.7500093
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
    var christianiaGolfMark = new google.maps.Marker({
        position: christianiaGolf,
        map: map
    });
    var megazoneMark = new google.maps.Marker({
        position: megazone,
        map: map
    });
    var barBowlingMark = new google.maps.Marker({
        position: barBowling,
        map: map
    });
    var vulkanKlatreMark = new google.maps.Marker({
        position: sioHelseVulkan,
        map: map
    });
}