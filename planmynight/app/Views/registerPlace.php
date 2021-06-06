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
    <link rel="stylesheet" href="PlanMyNightStyle.css">
</head>

<body>
    <div class="container-fluid background">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm">
                    <a class="navbar-brand" href="loginPage.html">
                        <img src="../../assets/PlanMyNightPics/planMyNightLogo.png" alt="">
                        <a class="nav-link logotype" href="loginPage.html"></a>
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register Place</a>
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
            <div class="col-sm-12 vertical-margin">
                <div class="card card-block signup-card">
                    <div class="container" style="height: 600px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <br><br>

                                Unique Master Personal Number: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="JMBG">

                                <br><br>

                                Business Registers Agency Number: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="APR">

                                <br><br>

                                Address: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="Place_address">

                                <br><br>

                                Place Name: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="Place_address">

                                <br><br>

                                Place Address: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="Place_address">

                                <br><br>

                                Pricing: &nbsp;&nbsp;&nbsp; <input type="text" name="" id="Place_address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col offset-8" style="margin-top: 100px;">

                                <button class="btn btn-signup rounded-lg" onclick="registerPlace()">Request register!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
