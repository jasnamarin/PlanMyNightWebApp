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
            <?php
            $name = $place->getName();
            $address = $place->getAddress();
            $pricing = $place->getPricing();
            if ($program != NULL) {
                $mon = $program->getMonday();
                if ($mon == "")
                    $mon = "Ne radi.";

                $tue = $program->getTuesday();
                if ($tue == "")
                    $tue = "Ne radi.";

                $wed = $program->getWednesday();
                if ($wed == "")
                    $wed = "Ne radi.";

                $thr = $program->getThursday();
                if ($thr == "")
                    $thr = "Ne radi.";

                $fri = $program->getFriday();
                if ($fri == "")
                    $fri = "Ne radi.";

                $sat = $program->getSaturday();
                if ($sat == "")
                    $sat = "Ne radi.";

                $sun = $program->getSunday();
                if ($sun == "")
                    $sun = "Ne radi.";

                $start = date_format($program->getWorkTimeStart(),'H:i');
                if ($start == "")
                    $start = "00";

                $end = date_format($program->getWorkTimeEnd(),'H:i');
                if ($end == "")
                    $end = "24";

                $date = date_format($program->getWeekDate(), 'd.m.Y');
            }
            else {
                $mon = "Ne radi.";
                $tue = "Ne radi.";
                $wed = "Ne radi.";
                $thr = "Ne radi.";
                $fri = "Ne radi.";
                $sat = "Ne radi.";
                $sun = "Ne radi.";
                $date="";
                $start = "00";
                $end = "24";
            }
            ?>
            <div class="row h-100">
                <div class="col-sm-12 vertical-margin">
                    <div class="card card-block signup-card">
                        <div class="container" style="height: 600px;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    echo "<h1>$name</h1>";
                                    ?>
                                    <br><br>

                                    <?php
                                    echo "<h2>Address: $address</h2>";
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Pricing: $pricing </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Monday: $mon </h3>"
                                    ?>

                                    <br><br>
                                    <?php
                                    echo "<h3>Tuesday: $tue </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Wednesday: $wed </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Thursday: $thr </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Friday: $fri </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Saturday: $sat </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Sunday: $sun </h3>"
                                    ?>
                                    <br><br>
                                    <?php
                                    echo "<h3>Work hours: $start - $end </h3>"
                                    ?>
                                    <?php
                                    echo "<h3>Week date: $date </h3>"
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
