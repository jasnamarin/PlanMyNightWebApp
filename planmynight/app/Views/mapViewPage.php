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
<body onload="mapViewOnLoad()">
    <div class="container-fluid background">
        
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm">
                    <a class="navbar-brand" href="Login">
                        <img src="../../assets/PlanMyNightPics/planMyNightLogo.png" alt="">
                        <a class="nav-link logotype" href="loginPage.html"></a>
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="registerPlace.html">Register Place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Discover Places</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mapView.html">Map View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row h-100">
            <div class="col-sm-4 vertical-margin">
                <div class="card card-block login-card" style="height: 600px;">
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