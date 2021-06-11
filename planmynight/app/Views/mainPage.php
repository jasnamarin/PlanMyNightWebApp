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

                <?php 
                    foreach($places as $place) {
                        $address = $place->getAddress();
                        $name = $place->getName();
                        $price = $place->getPricing();
                        $address_data = explode(",", $address);
                        $address_street = $address_data[0];
                ?>

                if (street.includes("<?=$address_street ?>")) {
 
                    var name = document.getElementById("name-place-card"); 
                    name.innerHTML = "<?=$name ?>";
                    
                    var address = document.getElementById("address-place-card"); 
                    address.innerHTML = street;
                    
                    var price = document.getElementById("price-place-card"); 
                    price.innerHTML = "<?=$price ?>";
                    
                    var card = document.getElementById("place-info");
                    card.style.display = "block";
                    
                }
                <?php 
                    }
                ?>
            }
            
            //L.mapquest.directions().route({
            // start: '350 5th Ave, New York, NY 10118',
            // end: 'One Liberty Plaza, New York, NY 10006'
            // });
        }
    </script>

    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
</head>
<body>

    <div class="container-fluid on-map">    
        <div class="row background">
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
                            <a class="nav-link" href="<?php echo base_url('MapView') ?>">Map View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('About') ?>">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <form method="post" action="<?= base_url('Main/planNight') ?>">
    <div class="container-fluid">
        <a href="javascript:void(0);"><img src="../../assets/PlanMyNightPics/menu-logo.png" id="user-info-logo" alt="" class="menu-logo" onclick="showUserInfo()"></a>
        
        <div class="col-sm-12 user-info" id="user-info">
            <div class="card card-block user-card">
                <br>
                <?php
                    echo "<h1>$namesurname</h1>";
                ?>
                <br>
                <a class="nav-link-user" href="<?php echo base_url('MyPlans') ?>">My plans</a>
                <br>
                <a class="nav-link-user" href="<?php echo base_url('PlanQuestionaire') ?>">Preferences</a>
                <br>
                <a class="nav-link-user" href="<?php echo base_url('MyRatings') ?>">Ratings</a>
                <br>
                <a class="nav-link-user" href="<?php echo base_url('MyPlaces') ?>">My places</a>
                <a href="javascript:void(0);"><img src="../../assets/PlanMyNightPics/back-arrow.png" alt="" class="back" style="margin-top: 150px;" onclick="hideUserInfo()"></a>
            </div>
        </div>
        
        <div class="col-sm-12 user-info" id="place-info">
            <div class="card card-block place-card">
                <br>
                <h1 id="name-place-card" style="text-align: center"></h1>
                <br><br>
                <h3 id="address-place-card" style="text-align: center"></h3>
                <h4 id="price-place-card" style="text-align: center"></h4>
                
                
                <a href="javascript:void(0);"><img src="../../assets/PlanMyNightPics/back-arrow.png" alt="" class="back" style="margin-top: 150px;" onclick="hidePlaceInfo()"></a>
            </div>
        </div>
        
        <div class="row h-100">
            <div class="col-sm-4 offset-4 carousel-plan" id="plans">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php 
                        $i = 0;
                        foreach ($possible as $poss) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                               
                    ?>
                    <script>
                        $( '#plans' ).css('display', 'block');
                    </script>
                    <?php 
                            }
                    ?>
                    
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i;?>" class="<?= $actives;?>"></li>
                   <?php 
                            $i++;
                        }
                    ?>
                </ol>
                <div class="carousel-inner">
                    <?php 
                        $i = 0;
                        foreach ($possible as $poss) {
                            $name = $poss->getName();
                            $address = $poss->getAddress();
                            $price = $poss->getPricing();
                            $actives = '';
                            if ($i == 0)
                                $actives = 'active';

                    ?>

                    <div class="carousel-item <?= $actives;?>" >
                        <div class="card card-block login-card" style="height: 300px; width: 490px; text-align: center">
                            <?php
                                echo "<br>";
                                echo "<h3>$name</h3>";
                                echo "<br>";
                            ?>
                                <h4>Address: <?php echo $address?></h4>
                            <?php
                                echo "<h5>Pricing: $price</h5>";
                            ?>
                            
                            <div class="card-footer bg-transparent">
                                <button class="btn btn-login rounded-lg"  formaction="<?= base_url('MyPlans/pickPlan/'.$poss->getAddress()) ?>">Reserve</button>
                            </div>
                        </div>
                    </div>
                    <?php 
                            $i++;
                        }
                    ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>                    
          </div>
            
        </div>
        
        <button class="btn btn-signup rounded-lg btn-plan" onclick="setCarouselVisible()">Plan my night</button>
        <?php                         
            if ($error==="Change preferences.") {
                echo "<br>";
                echo "<p class='p-enhanced-text'>There's no programs for you. Please, change your preferences.</p>";
            }
        ?>
        
        
        <div id="map" class="map-canvas"></div>   
    </div>
    </form>
</body>
</html>
