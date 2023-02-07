<!DOCTYPE html>
<html lang="en">
@include('components.theme_color_white')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ $links['mobileCss'] }}">
    <script src="{{ $links['mobileJs'] }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
</head>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
.mapboxgl-ctrl-logo{
    display: none !important;
}
.mapboxgl-ctrl-top-right{
    display: none !important;
}

.mapboxgl-ctrl-attrib{
    display: none !important;
}

.user-location {
    /* background-image: url('/user_location.svg'); */
    background-size: cover;
    width: 48px;
    height: 48px;
    cursor: pointer;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .user-location-icon{
    width: 48px;
    height: 48px;
  }

  .driver-location {
    background-image: url('/driver_location.svg');
    background-size: cover;
    width: 48px;
    height: 48px;
    cursor: pointer;
  }

  .circle {
    border-radius: 50%;
    background-color: #E50914;
    width: 48px;
    height: 48px;
    position: absolute;
    animation: scaleIn 1s infinite;
    z-index: -1;
    }

@keyframes scaleIn {
  from {
    opacity: 1;
  }
  to {
    transform: scale(2);
  }
}
</style>
<body>
    <div class="header">
        <div class="display-flex-space-between">
            <span class="material-symbols-sharp">
            west
            </span>
            <span class="my-font-align nowrap">Your live location</span>
            <span class="material-icons-sharp">
            more_horiz
            </span>
        </div>
        <div class="breaker"></div>
        <div class="display-flex-center">
            <div class="input-background mid-gap">
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    distance
                    </span><br>
                    <span>Share my <br> location</span>
                </div>
                <div class="text-align-center">
                    <span class="material-symbols-sharp">
                    schedule
                    </span><br>
                    <span>Schedule <br> for later</span>
                </div>
            </div>
        </div>
    </div>
    <div class="map-bottom-content">
        <div id="waitingforcoords">
            <div class="display-flex-space-between">
                <div>
                    <span class="text-mid">Searching for your live location</span><br>
                    <span class="text-small">Please remain at your position</span>
                </div>
                <div>
                <span class="loader"></span>
                </div>
                <script>
                    setTimeout(() => {

                        document.querySelector(".loader").style.width = "65px";
                        document.querySelector(".loader").style.height = "65px";
                        document.querySelector(".loader").classList.add("loader-spin-color");
                    }, 100);
                </script>
            </div>  
        </div>   
        <div id="coordsreceived" class="display-none">
            <div>
                <div class="display-flex-space-between">
                    <div>
                        <span class="text-mid">Location found</span><br>
                        <span class="text-small">Please remain at your position <br> until your ride arrives</span>
                    </div>
                    <button class="button-width-auto" onclick="showHideElement('coordsreceived', 'waitingforride', 'block')">
                        <span class="my-font-align ">Continue</span>
                        <span class="material-symbols-sharp">
                        east
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div id="waitingforride" class="display-none">
            <div class="display-flex-space-between">
                <span class="slogan">Your <br> ride <br> is on <br> the  way</span> 
                <div class="display-flex-align mid-gap">
                    <div>
                        <spa>Closing <br> distance</span><br>
                        <span class="slogan">5</span><span>km</span><br>
                    </div>
                    <div class="vert-divider"></div>
                    <div>
                        <spa>Closing <br> time</span><br>
                        <span class="slogan">10</span><span>min</span><br>
                    </div>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="driver-details display-flex-align">
                <div class="display-flex-space-between w-100">
                    <div>
                        <span>Simphiwe Mafoko</span><br>
                        <span class="text-small">Nissan Magnus</span><br>
                        <span class="text-small">DFS 654 L</span>
                    </div>
                    <button class="button-width-auto">
                        <span class="my-font-align ">Call driver</span>
                        <span class="material-symbols-sharp">
                        call
                        </span>
                    </button>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="text-align-center">
                <span>Cancel ride</span>
            </div>
        </div>
    </div>
    <div class="staff-add display-none" id="staffadd">
        <div class="display-flex-space-between">
            <span class="slogan"><span class=>TED</span> <br> <span class="slogan">for <br> staff</span></span>
            <span class="material-symbols-sharp" onclick="showHideElement('staffadd')">
            close
            </span>
        </div>
        <span>Get a ride to and from work at flexible rates</span>
        <div class="breaker"></div>
        <div class="staff-banner">
            <img src="https://t4.ftcdn.net/jpg/02/73/16/71/360_F_273167153_83IJ8krIJ9lCrCs7aHDB2OGG5ml2pOun.jpg" alt="">
        </div>
        <div class="breaker"></div>
        <div class="display-flex-space-between">
            <div class="display-flex-align mid-gap">
                <div>
                    <spa>Go</span><br>
                    <span class="heavy">R 350.00</span><br>
                    <span class="text-small">Fluctuates</span>
                </div>
                <div>
                    <spa>Return</span><br>
                    <span class="heavy">R 750.00</span><br>
                    <span class="text-small">Fluctuates</span>
                </div>
            </div>
            <button class="button-width-auto">
                <span class="my-font-align">Apply</span>
                <span class="material-symbols-sharp">
                east
                </span>
            </button>
        </div>
    </div>
    <script>
        showHideElement(null, "staffadd", "block");
    </script>
    <div id="map"></div>
    <script>

        var lng = 0;
        var lat = 0;
        var start = [];

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {
            
            lng = position.coords.longitude;
            lat = position.coords.latitude;

            addMarkers(); 
            start = [lng, lat];
            //getRoute([18.423300, -33.918861]);
        }

        getLocation();

        mapboxgl.accessToken = 'pk.eyJ1IjoidGxhbmdlbGFuaWRldmVsb3BlciIsImEiOiJjbGEwMGw4ZGowa20yM3BuejZjMHU0bTYyIn0.im6s7f-GEtCJo4w6fsP1Qg';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/tlangelanideveloper/ckuloxpby9mi818rzqts88yfo', // style URL
            center: [18.423300, -33.918861], // starting center in [lng, lat]
            zoom: 6, // starting zoom,
        });

        map.on('style.load', () => {
            map.setFog({}); // Set the default atmosphere style
        });

        // Add geolocate control to the map.
        map.addControl(
            new mapboxgl.GeolocateControl({
            positionOptions: {
            enableHighAccuracy: true
            },
            // When active the map will receive updates to the device's location as it changes.
            trackUserLocation: true,
            // Draw an arrow next to the location dot to indicate which direction the device is heading.
            showUserHeading: false,
            })
        );

        function addMarkers(){

            setTimeout(() => {
                const geojson = {
                    type: 'FeatureCollection',
                    features: [
                        {
                            type: 'Feature',
                            geometry: {
                                type: 'Point',
                                coordinates: [lng, lat]
                            }
                        },
                        {
                            type: 'Feature',
                            geometry: {
                                type: 'Point',
                                coordinates: [18.423300, -33.918861]
                            }
                        }
                    ]
                };

                let circle = document.createElement('div');
                circle.className = "circle";

                let userLocationIcon = document.createElement('img');
                userLocationIcon.src = "/user_location.svg";
                userLocationIcon.className = "user-location-icon";

                let userLocation = document.createElement('div');
                userLocation.className = 'user-location';
                userLocation.appendChild(circle);
                userLocation.appendChild(userLocationIcon);

                // let driverLocation = document.createElement('div');
                // driverLocation.className = 'driver-location';
                
                new mapboxgl.Marker(userLocation).setLngLat(geojson.features[0].geometry.coordinates).addTo(map);
                //new mapboxgl.Marker(driverLocation).setLngLat(geojson.features[1].geometry.coordinates).addTo(map);

                map.flyTo({
                    center: geojson.features[0].geometry.coordinates,
                    essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });

                if(lng !== 0 && lat !== 0){

                document.querySelector("#waitingforcoords").style.display = "none";
                document.querySelector("#coordsreceived").style.display = "block";
                }
            }, 5000);
           
        }

        // create a function to make a directions request
        async function getRoute(end) {
            // make a directions request using cycling profile
            // an arbitrary start will always be the same
            // only the end or destination will change
            const query = await fetch(
                `https://api.mapbox.com/directions/v5/mapbox/cycling/${start[0]},${start[1]};${end[0]},${end[1]}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`,
                { method: 'GET' }
            );
            const json = await query.json();
            const data = json.routes[0];
            const route = data.geometry.coordinates;
            const geojson = {
                type: 'Feature',
                properties: {},
                geometry: {
                type: 'LineString',
                coordinates: route
                }
            };
            // if the route already exists on the map, we'll reset it using setData
            if (map.getSource('route')) {
                map.getSource('route').setData(geojson);
            }
            // otherwise, we'll make a new request
            else {
                map.addLayer({
                id: 'route',
                type: 'line',
                source: {
                    type: 'geojson',
                    data: geojson
                },
                layout: {
                    'line-join': 'round',
                    'line-cap': 'round'
                },
                paint: {
                    'line-color': '#E50914',
                    'line-width': 4,
                    'line-opacity': 0.9
                }
                });
            }
            // add turn instructions here at the end
            }

            map.on('load', () => {
            // make an initial directions request that
            // starts and ends at the same location
            getRoute(start);

            // Add starting point to the map
            map.addLayer({
                id: 'point',
                type: 'circle',
                source: {
                type: 'geojson',
                data: {
                    type: 'FeatureCollection',
                    features: [
                    {
                        type: 'Feature',
                        properties: {},
                        geometry: {
                        type: 'Point',
                        coordinates: start
                        }
                    }
                    ]
                }
                },
                paint: {
                'circle-radius': 10,
                'circle-color': '#3887be'
                }
            });
            // this is where the code from the next step will go
        });

    
        //showHidePlaceHolder(document.querySelector("#locaton"), 'locatonplaceholder', 'locatoncontain');
    </script>
</body>
</html>