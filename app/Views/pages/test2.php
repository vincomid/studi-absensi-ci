<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" readonly>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" readonly>
        </div>
    </form>
    <script>
    // Initialize and add the map
    function initMap() {
        // Initialize the map
        // var map = new google.maps.Map(document.getElementById('map'), {
        //     zoom: 15
        // });
        // Define geolocation options
        var options = {
            enableHighAccuracy: true,
            maximumAge: 1000
        };
        // Try HTML5 geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // Get the user's current position
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                document.getElementById("latitude").value = pos.lat;
                document.getElementById("longitude").value = pos.lng;
                // Center the map on the user's current position
                // map.setCenter(pos);
                // Add a marker for the user's current position
                // var marker = new google.maps.Marker({
                //     position: pos,
                //     map: map
                // });
                // Log the latitude and longitude to the console
                console.log('Latitude: ' + pos.lat + ', Longitude: ' + pos.lng);
            }, function() {
                // Handle geolocation errors
                console.log('Error: The Geolocation service failed.');
            }, options);
        } else {
            // Browser doesn't support geolocation
            console.log('Error: Your browser doesn\'t support geolocation.');
        }

    }
    window.initMap = initMap;
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLaJCI-XUM6pcnqL1QrPPZjVMqX2Rv3NI&callback=initMap"
        async defer></script>
</body>

</html>