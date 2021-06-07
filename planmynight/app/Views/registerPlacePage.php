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
                            <a class="nav-link" href="javascript:void(0)">Register Place</a>
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

        <form method="post" action="<?= base_url('RegisterPlace/submit') ?>">
        <div class="row h-100">
            <div class="col-sm-12 vertical-margin">
                <div class="card card-block signup-card">
                    <div class="container" style="height: 600px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <br><br>

                                Unique Master Personal Number: &nbsp;&nbsp;&nbsp; <input type="text" name="UMPN" id="UMPN"
                                                                                         value = "<?= set_value("UMPN") ?>">
                                <?php                         
                                    if (!empty($errors['UMPN'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>

                                <br><br>

                                Business Registers Agency Number: &nbsp;&nbsp;&nbsp; <input type="text" name="APR" id="APR"
                                                                                            value = "<?= set_value("APR") ?>">
                                <?php                         
                                    if (!empty($errors['APR'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>

                                <br><br>

                                Address: &nbsp;&nbsp;&nbsp; <input type="text" name="address" id="address"
                                                                   value = "<?= set_value("address") ?>">
                                <?php                         
                                    if (!empty($errors['address'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>

                                <br><br>

                                Place Name: &nbsp;&nbsp;&nbsp; <input type="text" name="Place_name" id="Place_name"
                                                                      value = "<?= set_value("Place_name") ?>">
                                <?php                         
                                    if (!empty($errors['Place_name'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>

                                <br><br>

                                Place Address: &nbsp;&nbsp;&nbsp; <input type="text" name="Place_address" id="Place_address"
                                                                         value = "<?= set_value("Place_address") ?>">
                                <?php                         
                                    if (!empty($errors['Place_address'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>

                                <br><br>

                                Pricing: &nbsp;&nbsp;&nbsp; <input type="text" name="pricing" id="pricing"
                                                                   value = "<?= set_value("pricing") ?>">
                                <?php                         
                                    if (!empty($errors['pricing'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col offset-8" style="margin-top: 100px;">
                                <?php 
                                  
                                    if (isset($error)) {
                                        echo $error;
                                    }
                                
                                ?>
                                <button class="btn btn-signup rounded-lg" onclick="registerPlace()">Request register!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
