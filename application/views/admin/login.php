<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rikkes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/bootstrap/css/bootstrap.min.css"); ?>"> 
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"); ?>"> 
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/animate/animate.css"); ?>"> 
<!--===============================================================================================-->  
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/css-hamburgers/hamburgers.min.css"); ?>"> 
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/select2/select2.min.css"); ?>"> 
<!--===============================================================================================-->
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/css/util.css"); ?>"> 
    <link rel="stylesheet" href="<?php echo base_url($this->config->item("theme_admin")."/login/css/main.css"); ?>">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/LOGO BARU TNI.png"); ?>" alt="IMG">
                </div>
                <form class="login100-form validate-form" method="post" action="#">
                    <span class="login100-form-title">
                        Urikkes Werving TNI

                        <div class="login100-picTNI js-tilt" data-tilt>
                     <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/Pmi.png"); ?>" alt="IMG">
                      </div>
    
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Masukan Username">
                        <input class="input100" type="text" name="user_name" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Masukan Password">
                        <input class="input100" type="password" name="user_password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>


                    <div class="text-center p-t-90">
                        <a class="txt2" href="#">
                           
                    <div class="login100-picMATRA js-tilt" data-tilt>
                    <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/sc.png"); ?>" alt="IMG"> 
                    <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/laut.png"); ?>" alt="IMG">  
                    <img src="<?php echo base_url($this->config->item("theme_admin")."/login/images/1200px-Insignia_of_the_Indonesian_Air_Force.svg.png"); ?>" alt="IMG">
                      </div>
                            <div class="text-center p-t-3">
                        <a class="txt2" href="#">
                            Tentara Nasional Indonesia
                        </a>
                    </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/jquery/jquery-3.2.1.min.js"); ?>"></script>
<!--===============================================================================================-->  
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/bootstrap/js/popper.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/select2/select2.min.js"); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/vendor/tilt/tilt.jquery.min.js"); ?>"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/login/js/main.js"); ?>"></script>
</body>
</html>