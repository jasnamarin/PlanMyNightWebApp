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
        <link href="../../assets/Ratings.css" rel="stylesheet" type="text/css"/>
        <script src="../../assets/PlanMyNight.js"></script>

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
                    echo "<h1>$namesurname's plans:</h1>";
                    ?>
                </div>
            </div>
            <br><br>
            <div class="row h-100" id="back">
                <div class="col-sm-4 vertical-margin offset-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $i = 0;
                            foreach ($places as $place) {
                                $actives = '';
                                if ($i == 0)
                                    $actives = 'active';
                                ?>

                                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                                <?php
                                $i++;
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            foreach ($places as $place) {
                                $name = $place->getName();
                                $address = $place->getAddress();
                                $price = $place->getPricing();
                                $id = $place->getIdplace();
                                $date = date_format($dates[$i], 'd.m.Y');
                                $actives = '';
                                if ($i == 0)
                                    $actives = 'active';
                                ?>

                                <div class="carousel-item <?= $actives; ?>">
                                    <div class="card card-block login-card" style="height: 600px; width: 500px; text-align: center">
                                        <?php
                                        echo "<br>";
                                        echo "<h1>$name</h1>";
                                        echo "<br><br>";
                                        echo "<h3>Address: $address</h3>";
                                        echo "<h4>Pricing: $price</h4>";
                                        echo "<h4>Date: $date</h4>";
                                        echo "<br><br><br><br>";
                                        ?>
                                        <br>
                                        <form method="post" action="<?= base_url('MyPlans/rate/' . $id) ?>">
                                            <fieldset class="rating" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"> <input type="radio" id="<?= $id ?>star5" name="rating<?= $id ?>" value="5" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/><label
                                                    class="full" for="<?= $id ?>star5" title="Awesome - 5 stars"></label> 
                                                <input type="radio" id="<?= $id ?>star4" name="rating<?= $id ?>" value="4" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/><label class="full" for="<?= $id ?>star4"
                                                                                                                                    title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="<?= $id ?>star3" name="rating<?= $id ?>" value="3" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/><label class="full" for="<?= $id ?>star3"
                                                                                                                                    title="Meh - 3 stars"></label>
                                                <input type="radio" id="<?= $id ?>star2" name="rating<?= $id ?>" value="2" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/><label class="full" for="<?= $id ?>star2"
                                                                                                                                    title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="<?= $id ?>star1" name="rating<?= $id ?>" value="1" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/><label class="full" for="<?= $id ?>star1"
                                                                                                                                    title="Sucks big time - 1 star"></label>
                                                <input type="radio" class="reset-option" name="rating<?= $id ?>" value="reset" onclick="<?= base_url('MyPlans/rate/' . $id) ?>"/>
                                           
                                            </fieldset>
                                            <button class="btn-login" name="button<?=$id?>" formaction="<?= base_url('MyPlans/rate/' . $id) ?>">Rate</button>
                                        </form>
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




        </div>
    </body>
</html>