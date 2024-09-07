<div>
    <div>
        <div id="nav-bar">
            <div id='search-area' class="mb-4">
                <input type="text" id="autocomplete" placeholder="Buscar Uma Localização" />
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" id="search-button">Buscar Endereço</button>
            </div>
            <div id='button'> </div>

        </div>
        <div id="map" style="width:50vw;height:50vh"></div>
    </div>


    @push('scripts')
    <script>
        let map;
        let service;
        let infowindow;
        let autocomplete;


        function initMap() {
            const sydney = new google.maps.LatLng(-33.867, 151.195);

            infowindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById("map"), {
                center: sydney,
                zoom: 15,
            });

            const locationButton = document.getElementById("button");
           
            completeSearch();
          
            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(
                    browserHasGeolocation ?
                    "Error: The Geolocation service failed." :
                    "Error: Your browser doesn't support geolocation."
                );
                infoWindow.open(map);

            }

            function writeIntro() {
                const content = "Hello, welcome to my Google Maps API project! Try clicking the button to see your current location."
                document.getElementById("intro").innerHTML = content;
            }

            map.controls[google.maps.ControlPosition.TOP_CENTER].push(button);
            const request = {
                query: "taguatinga ",
                fields: ["name", "geometry"],
            };

            service = new google.maps.places.PlacesService(map);
            service.findPlaceFromQuery(request, (results, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK && results) {
                    for (let i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }

                    map.setCenter(results[0].geometry.location);
                }
            });



        }

        function createMarker(place) {
            if (!place.geometry || !place.geometry.location) return;

            const marker = new google.maps.Marker({
                map,
                position: place.geometry.location,
            });

            google.maps.event.addListener(marker, "click", () => {
                infowindow.setContent(place.name || "");
                infowindow.open(map);
            });
        }



        window.initMap = initMap;

        function completeSearch() {
            //make the input box autocomplete
            const options = {
                fields: ["place_id", "geometry", "name", "formatted_address"],
                strictBounds: false,
            }
            autocomplete = new google.maps.places.Autocomplete(document.getElementById("autocomplete"), options);
            autocomplete.bindTo("bounds", map);

            const auto_marker = new google.maps.Marker({
                map,
                anchorPoint: new google.maps.Point(0, -29),
            });
            autocomplete.addListener("place_changed", () => {
                auto_marker.setVisible(false);
                const place = autocomplete.getPlace();
                search_pos = place.geometry.location;
                console.log(JSON.stringify(search_pos));
                if (!place.geometry || !place.geometry.location) {
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                auto_marker.setPosition(place.geometry.location);
                auto_marker.setVisible(true);

            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvQv6vTUStxiOAWGIM7jA56viVHLeWgPc&callback=initMap&libraries=places&v=weekly" defer></script>
    @endpush
</div>