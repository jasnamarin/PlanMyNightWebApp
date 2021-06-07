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
                        
                        <form method="post" action="<?= base_url('PlanQuestionaire') ?>">
                        <div class="row">
                            <div class="col-sm-12">
                                <br><br>

                                Up to how much money do you want to spend in total? (In RSD) &nbsp;&nbsp;&nbsp; <input type="number" name="plan_budget" id="plan_budget">
                                
                            <?php                         
                            if (!empty($errors['plan_budget'])) {
                            echo "This field is required.";
                            }
                            ?>

                                <br><br>

                                Check the boxes next to the things you want to include in your night out:
                            </div>
                            <div class="col-sm-2">
                                <br>
                                Live music <input type="checkbox" name="music_live" id="music_live" value="live">
                                <br><br>
                                Pop <input type="checkbox" name="music_pop" id="music_pop" value="pop">
                                <br><br>
                                Techno/Electronic <input type="checkbox" name="music_techno" id="music_techno" value="techno">
                            </div>
                            <div class="col-sm-2">
                                <br>
                                R'n'B <input type="checkbox" name="music_rnb" id="music_rnb" value="rnb">
                                <br><br>
                                Jazz <input type="checkbox" name="music_jazz" id="music_jazz" value="jazz">
                                <br><br>
                                After party in town <input type="checkbox" name="afterparty" id="afterparty" value="1">
                            </div>
                            <div class="col-sm-12">
                                <br><br>
                                At what time do you wish to arrive? &nbsp;&nbsp;&nbsp; <input type="time" name="plan_time" id="plan_time">
                                
                                <?php                         
                                if (!empty($errors['plan_time'])) {
                                echo "This field is required.";
                                }
                                ?>
                            </div>
                            <div class="col-sm-12">
                                <br><br>
                                At what time do you wish to go home? &nbsp;&nbsp;&nbsp; <input type="time" name="plan_time_end" id="plan_time_end">
                            </div>
                        </div>
                            
                            
                        <?php 
                                  
                        if (isset($error)) {
                            echo $error;
                        }

                        ?>
                        <div class="row">
                            <div class="col offset-8" style="margin-top: 100px;">
                                
                                <button class="btn btn-create-plan rounded-lg" onclick="createPlan()" type="submit" formaction="<?= base_url('PlanQuestionaire/setPreferences') ?>">Show me my plans!</button>
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