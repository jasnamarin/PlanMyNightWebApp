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
        
        <form method="post" action="<?= base_url('Login/submit') ?>">
        <div class="row h-100">
            <div class="col-sm-4 offset-4 vertical-center">
                <div class="card card-block login-card">
                    <br>
                    
                    <input type="text" name="username" id="username" class="input rounded-lg" value = "<?= set_value("username") ?>">
                    <label for="username">Username</label>
                    
                    <?php                         
                        if (!empty($errors['username'])) {
                            echo "This field is required.";
                        }
                    ?>

                    <input type="password" name="password" id="password" class="input rounded-lg" value = "<?= set_value("password") ?>">
                    <label for="password">Password</label>
                    
                    <?php                         
                        if (!empty($errors['password'])) {
                            echo "This field is required.";
                        }
                    ?>

                    <br>

                    <?php 
                                  
                        if (isset($error)) {
                            echo $error;
                        }

                    ?>
                    
                    <button class="btn btn-login rounded-lg" type="submit">Login</button>
                                        
                    <br>

                    <label for="register">Don't have an account?</label>
                    <button class="btn btn-signup rounded-lg" type="button" onclick="window.location.href='SignUp'">Sign Up</button>

                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
            </form>

    </div>
</body>
</html>
