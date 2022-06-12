var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});
    function geoLocationInit() {
        if (navigator.geolocation) {
            Option={
                enableHighAccuracy:true,
                maximumAge:60000,
                 timeout:5000
            }
            navigator.geolocation.getCurrentPosition(success, fail,Option);
        } else {
            alert("Browser not supported");
        }
    }

    function success(position) {
        console.log(position);
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
        $('#lat').val(latval)
        $('#lng').val(lngval)
        // nearbySearch(myLatLng, "school");
    }

    function fail() {
        alert("it fails");
    }
    //Create Map
    function createMap(myLatLng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 12
        });
        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        draggable: true
    });
    google.maps.event.addListener(marker, 'position_changed',
        function () {
            let lat = marker.position.lat()
            let lng = marker.position.lng()
            $('#lat').val(lat)
            $('#lng').val(lng)
        })
        
    }
    //Create marker
    function createMarker(latlng, icn, name) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title: name
        });
    }
   
    

   


