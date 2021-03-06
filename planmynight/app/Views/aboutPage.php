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

    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

</head>
<body>
    <div class="container-fluid">
        
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
                            <a class="nav-link" href="javascript:void(0)">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p>Drinks with coworkers? Dinner date? Best rave in the city and the <br/> cheapest pre-game spot?</p>
                <p class="enhanced-text">
                    Whatever it is you're looking for, Plan My Night is here to help you find it.
                </p>
                <p>Fill in our questionnaire and get personalized night-out plans. <br/> Choose your favorite one and make the reservations with one click.</p>
                <p>Organizing your evening outings has never been easier!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-signup rounded-lg signup-flat" onclick="toSignUpPage()">Sign up to get your plans</button>
            </div>
            <div class="col">
                <a href="loginPage.php"><img src="PlanMyNightPics/back-arrow.png" alt="" class="back"></a>
            </div>
        </div>

    </div>
</body>
</html>