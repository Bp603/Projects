<?php
    // include file errors
    include('server.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRATION</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="./REGISTER/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./REGISTER/css/style.css">
    <link rel="stylesheet" href="./REGISTER/css/CMB.scss">
</head>
<body>

    <Style>
        .container, .form-submit{
            border-radius: 1px;
            padding: 7px 23px;
        }
        .main {
            background: #f8f8f8;
            padding: 50px 0;
        }
        .alert-danger {
            color:red;
        }

        
    </Style>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="text-center">Register</h2>
                        <p>Create your account.</p>
                        <br>
                        <form action="Register.php" method="POST" class="register-form" id="register-form">
                        <?php
                        // include file errors
                        include('errors.php'); 
                        ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>                                
                                <input type="text" name="username" id="username" placeholder="Your Username " pattern="[a-zA-Z ]{0,}"/>                               
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="tel"><i class="zmdi zmdi-smartphone-iphone"></i></label>
                                <input type="tel" name="phone_number" id="phone_number" placeholder="Your Phone number" pattern="[0-9]{10}"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_1" id="password_1" placeholder="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_2" id="password_2" placeholder="Repeat your password" ppattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="reg_user" id="reg_user" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./REGISTER/images/BHABHO.png" alt="sing up image"></figure>
                        <p>Already have an account?</p>
                        <a href="Login.php" class="signup-image-link">Login</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="./REGISTER/vendor/jquery/jquery.min.js"></script>
    <script src="./REGISTER/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>