<!DOCTYPE html>

<html>
    <head>
        <title>Introduction to Google Maps Javascript API</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
            <meta charset="utf-8">
            <style>
                html, body{
                    height:100%;   
                }
                
                #map{
                    height:60%;  
                    width:40%
                }
            </style>
    </head>
    <body>
        <div id="map">
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5XThpKGR5-hojN4ioD7m7IDE51BdPIZc"></script><script>        
            //set map options
        
            var myLatLng = {lat: 51.3, lng: -0.05};
        
            var mapOptions = {
                center: myLatLng,
//                fillColor: 'yellow',
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.SATELLITE
            };
        
        //create map
        var map= new google.maps.Map(document.getElementById('map'), mapOptions);
        
        //setting the mapTypeId upon construction
        map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
       
        var marker1Options = {
            position: myLatLng,
            map: map,
            title: "Warlingham Veterinary Surgery",
//            draggable: true,
            animation: google.maps.Animation.DROP
        };
        var marker1 = new google.maps.Marker(marker1Options);
        
        var marker2Options = {
            position: {lat:51.37, lng: -0.07},
            map: map,
            title: "Croydon",
            
            
//            draggable: true,
//            animation: google.maps.Animation.DROP
        };
        var marker2 = new google.maps.Marker(marker2Options);
        
        var marker2Options = {
            position: {lat:51.23, lng: -0.15},
            map: map,
            title: "Redhill",
//            draggable: true,
//            animation: google.maps.Animation.DROP
        };
        var marker2 = new google.maps.Marker(marker2Options);
    </script>
    </body>
</html>