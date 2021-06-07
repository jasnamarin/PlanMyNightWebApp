<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <title>Plan my night</title>
    <link href="../../assets/PlanMyNightStyle.css" rel="stylesheet" type="text/css"/>
    <script src="../../assets/PlanMyNight.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            L.mapquest.key = 'RqHWAPqGGxE6CbzOEy1IkIaCRqggRr8a';
            
            var markers = [];
            var streets = [];
            var map = L.mapquest.map('map', {
            center: [44.8125, 20.4612],
            layers: L.mapquest.tileLayer('map'),
            zoom: 13
            });
            
            
            var locations = '<?php echo $locations?>';
            var res = locations.split(";");
            for (let i = 0; i < res.length - 1; i++) {
                L.mapquest.geocoding().geocode(res[i], addMarker);
            }

            function addMarker(error, response) {
                var location = response.results[0].locations[0];
                var latLng = location.displayLatLng;
                var marker = L.marker(latLng, {
                    icon: L.mapquest.icons.marker(),
                    draggable: false
                });
                marker.on('click', function() {
                    let i = 0;
                    while (markers[i] != this)
                        i++;
                    showPlaceInfo(streets[i]); 
                });
                markers.push(marker);
                streets.push(JSON.parse(JSON.stringify(location)).street);
                marker.addTo(map);
            }

            
            function showPlaceInfo(street) {
                street = street.toString();
                street = street.substring(6);

                <?php 
                    foreach($places as $place) {

                        $address = $place->getAddress();
                        $name = $place->getName();
                        $price = $place->getPricing();
                ?>
                if (("<?=$address ?>").includes(street)) {
 
                    var name = document.getElementById("name-place-card-mapview"); 
                    name.innerHTML = "<?=$name ?>";
                    
                    var address = document.getElementById("address-place-card-mapview"); 
                    address.innerHTML = "<?=$address ?>";
                    
                    var price = document.getElementById("price-place-card-mapview"); 
                    price.innerHTML = "<?=$price ?>";

                    
                }
                <?php 
                    }
                ?>
            } 
        }
    </script>

    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

</head>
<body>
    <div class="container-fluid background">
        
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm">
                    <a class="navbar-brand" href="<?php echo base_url('Main') ?>">
                        <img src="../../assets/PlanMyNightPics/planMyNightLogo.png" alt="">
                        <a class="nav-link logotype" href="<?php echo base_url('Main') ?>"></a>
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('RegisterPlace') ?>">Register Place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('DiscoverPlaces') ?>">Discover Places</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Map View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('About') ?>">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row h-100">
            <div class="col-sm-4 vertical-margin">
                <div class="card card-block login-card" style="height: 600px;">
                    <br>
                    <h1 id="name-place-card-mapview" style="text-align: center">Click on a marker on the map to see place info</h1>
                    <br><br>
                    <h3 id="address-place-card-mapview" style="text-align: center"></h3>
                    <h4 id="price-place-card-mapview" style="text-align: center"></h4>
                    <br><br><br><br><br><br><br><br>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-login rounded-lg">See details</button>
                    </div>
                </div>
            </div>

            <div class="col vertical-margin">
                <div id="map" style="width: 90%; height: 600px;"></div> 
            </div>
        </div>

    </div>
</body>
</html>
