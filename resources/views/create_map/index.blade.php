@extends('layouts.master')

@section('content')
{{-- css map --}}
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>


    <h3>My Google Maps Demo</h3>
    <div id="map"></div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP_-HropVYvFZQ2UzNThUaE3mB5McDB2g&callback=initMap"></script>
    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var labelIndex = 5;
        // for (var labelIndex = 0; labelIndex < 20; labelIndex++) {
        //     console.log(labelIndex);
        // }

        function initialize() {
            var originPosition = { lat: -39.59, lng: -66.36 };
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: originPosition
            });

            // This event listener calls addMarker() when the map is clicked.
            google.maps.event.addListener(map, 'click', function(event) {
            addMarker(event.latLng, map);
            });

            // Add a marker at the center of the map.
            addMarker(originPosition, map);
        }

        // Adds a marker to the map.
        function addMarker(location, map) {
            // Add the marker at the clicked location, and add the next-available label
            // from the array of alphabetical characters.
            var marker = new google.maps.Marker({
            position: location,
            label: labels[labelIndex++ % labels.length],
            map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@endsection
