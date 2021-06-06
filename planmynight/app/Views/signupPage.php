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
                    <a class="navbar-brand" href="Login">
                        <img src="../../assets/PlanMyNightPics/planMyNightLogo.png" alt="">
                        <a class="nav-link logotype" href="Login"></a>
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

        <form method="post" action="<?= base_url('SignUp/submit') ?>">
        <div class="row h-100">
            <div class="col-sm-12 vertical-margin">
                <div class="card card-block signup-card">
                    <div class="container" style="height: 600px;">
                        <div class="row">
                            <div class="col-sm-4">
                                <br>
                                <input type="text" name="username_signup" id="username_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("username_signup") ?>">
                                <label for="username_signup" style="margin-left: 40px;">Username</label>
                                <?php                         
                                    if (!empty($errors['username_signup'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>
            
                                <br>
                                <br>

                                <input type="text" name="password_signup" id="password_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("password_signup") ?>">
                                <label for="password_signup" style="margin-left: 40px;">Password</label>
                                <?php                         
                                    if (!empty($errors['password_signup'])) {
                                        echo "<br>";
                                        if ($errors['password_signup'] == 'The password_signup field must be at least 6 characters in length.')
                                            echo "This field must be at least 6 characters in length.";
                                        else
                                            echo "This field is required.";
                                    }
                                ?>
                                <br>
                                <br>
            
                                <input type="text" name="e-mail_signup" id="e-mail_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("e-mail_signup") ?>">
                                <label for="e-mail_signup" style="margin-left: 40px;">E-mail address</label>
                                <?php                         
                                    if (!empty($errors['e-mail_signup'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    } 
                                    if (isset($emailerror)) {
                                        echo "<br>";
                                        echo $emailerror;
                                    }
                                    
                                ?>
                                <br>

                                <a href="loginPage.html"><img src="PlanMyNightPics/back-arrow.png" alt="" class="back" style="margin-top: 250px;"></a>
                            </div>
                            <div class="col-sm-3">
                                <br>
                                <input type="text" name="name_signup" id="name_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("name_signup") ?>">
                                <label for="name_signup" style="margin-left: 40px;">Name</label>
                                <?php                         
                                    if (!empty($errors['name_signup'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>
                                <br>
                                <br>
            
                                <input type="text" name="surname_signup" id="surname_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("surname_signup") ?>">
                                <label for="surname_signup" style="margin-left: 40px;">Surname</label>
                                <?php                         
                                    if (!empty($errors['surname_signup'])) {
                                        echo "<br>";
                                        echo "This field is required.";
                                    }
                                ?>
                                <br>
                                <br>
            
                                <input type="date" name="dateBirth_signup" id="dateBirth_signup" class="input rounded-lg" style="margin-left: 40px;"
                                       value = "<?= set_value("dateBirth_signup") ?>">
                                <label for="dateBirth_signup" style="margin-left: 40px;">Date of birth</label>
            
                                <br>
                            </div>
                            <div class="col offset-3" style="margin-top: 500px;">
                                <?php 
                                  
                                    if (isset($error)) {
                                        echo $error;
                                    }
                                
                                ?>
                                <button class="btn btn-signup rounded-lg">Register</button>
                            </div>
                        </div>
                    </div>

                       
                </div>
                
            </div>
        </div>
        </form>

    </div>
</body>
</html>
