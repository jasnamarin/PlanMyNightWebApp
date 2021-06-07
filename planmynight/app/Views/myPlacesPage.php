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
    
<!--    <script type="text/javascript">
        window.onload = function() {
            var locations = 
            var locs = locations.split(";");
            
            var names = 
            var nams = names.split(";");
            
            var prices = 
            var prs = prices.split(";");
            
            for (let i = 0; i < locs.length - 1; i++) {
                var button = document.createElement("button");
                button.className = "btn btn-login rounded-lg";
                button.innerHTML = "See details";
                
                var footer = document.createElement("div");
                footer.className = "card-footer bg-transparent";
                footer.appendChild(button);
                
                var card = document.createElement("div");
                card.className = "card card-block login-card";
                card.style.cssText = 'height: 600px';
                
        
                card.appendChild(footer);
                
                
                var col = document.createElement("div");
                col.className = "col-sm-4 vertical-margin";
                col.appendChild(card);
                
                var back = document.getElementById("back");
                back.appendChild(col);
            }
            
        }
    </script>-->

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
                            <a class="nav-link" href="<?php echo base_url('MapView') ?>">Map View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('About') ?>">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <br><br>
        <div class="row h-20">
            <div class="col-sm-4 vertical-margin header">
                <?php
                    echo "<h1>$namesurname's places:</h1>";
                ?>

            </div>
        </div>
        <br><br>
        <form method="post" action="<?= base_url('PlaceDetails') ?>">
        <div class="row h-100" id="back">
            <div class="col-sm-4 vertical-margin offset-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php 
                        $i = 0;
                        foreach ($user_places as $place) {
                            $actives = '';
                            if ($i == 0)
                                $actives = 'active';

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
                        foreach ($user_places as $place) {
                            $name = $place->getName();
                            $address = $place->getAddress();
                            $price = $place->getPricing();
                            $actives = '';
                            if ($i == 0)
                                $actives = 'active';

                    ?>

                    <div class="carousel-item <?= $actives;?>">
                        <div class="card card-block login-card" style="height: 600px; width: 500px; text-align: center">
                            <?php
                                echo "<br>";
                                echo "<h1>$name</h1>";
                                echo "<br><br>";
                            ?>
                                <h3 name="placeaddress" id="placeaddress">Address: <?php echo $address?></h3>
                            <?php
                                echo "<h4>Pricing: $price</h4>";
                                echo "<br><br><br><br>";
                            ?>
                            <input type="text" name="placeaddress<?=$i?>" style="display: none" value="<?php echo $address?>">
                            
                            <div class="card-footer bg-transparent">
                                <button class="btn btn-login rounded-lg" formaction="<?= base_url('PlaceDetails/index/'.$i) ?>">Set details</button>
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
        </form>
    
    
    
    </div>
</body>
</html>