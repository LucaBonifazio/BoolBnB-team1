<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <script src="{{ asset('js/front.js') }}" defer></script>

    {{-- TOMTOM --}}
    <!-- Replace version in the URL with desired library version -->
    <link
    rel="stylesheet"
    type="text/css"
    href="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps.css"
    />

    <style>
        #map {
            width: 800px;
            height: 380px;
        }
    </style>
    {{-- / TOMTOM --}}

</head>

<body>

    <div id="app"></div>


{{--
    PARTE DI TOMTOM - GESTIONE DELLA MAPPA DEL NAVIGATORE
--}}

    <div id="map" class="map"></div>


    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.23.0/maps/maps-web.min.js"></script>

    <script type="text/javascript">

        let center = [9.135752487471335, 45.46166580610122] //TODO: mettere latitude, longitude come variabili

        const map = tt.map({
            key: "gMfd6J6PIRqQQaAmyKd2WQbENA4FkXwr",
            container: "map",
            center: center,
            zoom: 17,
        })
        map.on('load', () => {
                    var marker = new tt.Marker().setLngLat(center).addTo(map)
                })

    </script>

{{--
    / PARTE DI TOMTOM - GESTIONE DELLA MAPPA DEL NAVIGATORE
--}}
</body>
</html>
