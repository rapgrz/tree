<html>
<head>

</head>
<body>
<div id="map"></div>
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk3WXDEFfEzP9wcut-c_GmNkYlYkjj6TY&callback=initMap"></script>
<script>

    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
</script>
</html>