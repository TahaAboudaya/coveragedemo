var map;
var myLatLng;
var markers = [];

$(document).ready(function () {
    geoLocationInit();
});
function geoLocationInit() {
    if (navigator.geolocation) {
        Option = {
            enableHighAccuracy: true,
            maximumAge: 60000,
            timeout: 5000
        }
        navigator.geolocation.getCurrentPosition(success, fail, Option);
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
    addMarker(myLatLng);
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
    
    /* var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        draggable: true
    }); */
    // This event listener will call addMarker() when the map is clicked.
    map.addListener('click', function(event) {
        if (markers.length >= 1) {
            deleteMarkers();
        }
        addMarker(event.latLng);
        let lat = event.latLng.lat()
        let lng = event.latLng.lng()
        $('#lat').val(lat)
        $('#lng').val(lng)
        });

   /*  google.maps.event.addListener(marker, 'position_changed',
        function () {
            let lat = marker.position.lat()
            let lng = marker.position.lng()
            $('#lat').val(lat)
            $('#lng').val(lng)
        }) */
        
}
 // Adds a marker to the map and push to the array.
 function addMarker(location) {
    var marker = new google.maps.Marker({
      position: location,
      map: map

    });
    markers.push(marker);
  }
   // Sets the map on all markers in the array.
   function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
  }
// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
  }

  // Deletes all markers in the array by removing references to them.
  function deleteMarkers() {
    clearMarkers();
    markers = [];
  }
