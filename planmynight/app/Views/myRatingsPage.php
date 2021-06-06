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
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />

</head>

<body>
    <div class="container-fluid background">

         <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm">
                    <a class="navbar-brand" href="Main">
                        <img src="../../assets/PlanMyNightPics/planMyNightLogo.png" alt="">
                        <a class="nav-link logotype" href="Main"></a>
                    </a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="RegisterPlace">Register Place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="DiscoverPlaces">Discover Places</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="MapView">Map View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About">About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <br><br>
        <div class="row h-20">
            <div class="col-sm-4 vertical-margin header">
                <h1>Filip Andric's ratings:</h1>
            </div>
        </div>
        <br><br>
        <div class="row h-100">
            <div class="col-sm-4 vertical-margin">
                <div class="card card-block login-card" style="height: 600px;">
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-login rounded-lg">See details</button>
                        <br>
                        <fieldset class="rating"> <input type="radio" id="1star5" name="rating" value="5" /><label
                                class="full" for="1star5" title="Awesome - 5 stars"></label> <input type="radio"
                                id="1star4" name="rating" value="4" /><label class="full" for="1star4"
                                title="Pretty good - 4 stars"></label>
                            <input type="radio" id="1star3" name="rating" value="3" /><label class="full" for="1star3"
                                title="Meh - 3 stars"></label>
                            <input type="radio" id="1star2" name="rating" value="2" /><label class="full" for="1star2"
                                title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="1star1" name="rating" value="1" /><label class="full" for="1star1"
                                title="Sucks big time - 1 star"></label> 
                            <input type="radio" class="reset-option" name="rating" value="reset" />
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 vertical-margin">
                <div class="card card-block login-card" style="height: 600px;">
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-login rounded-lg">See details</button>
                        <br>
                        <fieldset class="rating"> <input type="radio" id="2star5" name="rating2" value="5" /><label
                                class="full" for="2star5" title="Awesome - 5 stars"></label> <input type="radio"
                                id="2star4" name="rating2" value="4" /><label class="full" for="2star4"
                                title="Pretty good - 4 stars"></label>
                            <input type="radio" id="2star3" name="rating2" value="3" /><label class="full" for="2star3"
                                title="Meh - 3 stars"></label>
                            <input type="radio" id="2star2" name="rating2" value="2" /><label class="full" for="2star2"
                                title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="2star1" name="rating2" value="1" /><label class="full" for="2star1"
                                title="Sucks big time - 1 star"></label> 
                                <input type="radio" class="reset-option" name="rating2 value="reset" />
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 vertical-margin">
                <div class="card card-block login-card" style="height: 600px;">
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-login rounded-lg">See details</button>
                        <br>
                        <fieldset class="rating"> <input type="radio" id="3star5" name="rating3" value="5" /><label
                                class="full" for="3star5" title="Awesome - 5 stars"></label> <input type="radio"
                                id="3star4" name="rating3" value="4" /><label class="full" for="3star4"
                                title="Pretty good - 4 stars"></label>
                            <input type="radio" id="3star3" name="rating3" value="3" /><label class="full" for="3star3"
                                title="Meh - 3 stars"></label>
                            <input type="radio" id="3star2" name="rating3" value="2" /><label class="full" for="3star2"
                                title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="3star1" name="rating3" value="1" /><label class="full" for="3star1"
                                title="Sucks big time - 1 star"></label>
                            <input type="radio" class="reset-option" name="rating3" value="reset" />
                        </fieldset>

                    </div>
                </div>
            </div>

        </div>



    </div>
</body>

</html>
