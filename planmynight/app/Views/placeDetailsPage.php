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
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />

</head>

<body >
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
        <div class="row h-100">
            <div class="col-sm-12 vertical-margin">
                <div class="card card-block signup-card">
                    <div class="container" style="height: 600px;">
                        <form method="post" action="<?= base_url('PlaceDetails') ?>">
                        <div class="row">
                                <div class="col-sm-12">
                                    <br><br>

                                    <?php
                                        echo "<h3>Address: $address</h3>";
                                    ?>
                                    
                                    <br><br>
                                    
                                    Monday: &nbsp;&nbsp;&nbsp; <input type="text" name="monday" id="monday">

                                    <br><br>

                                    Tuesday: &nbsp;&nbsp;&nbsp; <input type="text" name="tuesday" id="tuesday">

                                    <br><br>

                                    Wednesday: &nbsp;&nbsp;&nbsp; <input type="text" name="wednesday" id="wednesday">

                                    <br><br>

                                    Thursday: &nbsp;&nbsp;&nbsp; <input type="text" name="thursday" id="thursday">

                                    <br><br>

                                    Friday: &nbsp;&nbsp;&nbsp; <input type="text" name="friday" id="friday">

                                    <br><br>

                                    Saturday: &nbsp;&nbsp;&nbsp; <input type="text" name="saturday" id="saturday">

                                    <br><br>

                                    Sunday: &nbsp;&nbsp;&nbsp; <input type="text" name="sunday" id="sunday">

                                    <br><br>

                                    Worktime start: &nbsp;&nbsp;&nbsp; <input type="time" name="startTime" id="startTime">

                                    <br><br>

                                    Worktime end: &nbsp;&nbsp;&nbsp; <input type="time" name="endTime" id="endTime">
                                    <br><br>

                                    Week start date: &nbsp;&nbsp;&nbsp; <input type="date" name="weekdate" id="weekdate">
                                    <br><br>
                                    Change pricing &nbsp;<input type="checkbox" name="changePricing"> <br>
                                    Pricing: &nbsp;&nbsp;&nbsp; <input type="text" name="pricingChange" id="pricingChange">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col offset-8" style="margin-top: 100px;">

                                <button class="btn btn-signup rounded-lg" formaction="<?= base_url('PlaceDetails/setProgram/'.$address) ?>">Submit!</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
