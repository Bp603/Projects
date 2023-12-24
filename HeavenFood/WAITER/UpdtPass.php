<?php
    // include file errors
    //include('server.php');
    include('Config.php');
    if(isset($_REQUEST['reg_user']))
    {
        $id=$_REQUEST['email'];
        $pass=md5($_REQUEST['password_1']);
        $pass1=md5($_REQUEST['password_2']);
        if($pass==$pass1)
        {
          $qury = "UPDATE WAITERREG SET PASSWD = '{$pass}' WHERE EMAIL = '{$id}'";
          $res=mysqli_query($lk,$qury);
          header("Location:Login.php?success=ok");
        }
        else
        {
          header("Location:UpdtPass.php?tmp=fail");
        }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHANGE PASSWORD</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="./REGISTER/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./REGISTER/css/style.css">
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
                        <h2 class="text-center">Reset Password</h2>
                        <br>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="register-form" id="register-form">
                        <?php
                        // include file errors
                       //include('errors.php');
                        ?>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-lock"></i></label>
                                <input type="email" name="email" id="email" placeholder="Enter Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_1" id="password_1" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_2" id="password_2" placeholder="Repeat your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="reg_user" id="reg_user" class="form-submit" value="Update"/>
                            </div>
                            <?php
                              if(isset($_REQUEST['tmp']))
                              {
                              ?>
                                <div class="alert alert-danger"><strong>Password Are Not Match</strong></div>
                              <?php
                              }
                            ?>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./REGISTER/images/updtpass.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="./REGISTER/vendor/jquery/jquery.min.js"></script>
    <script src="./REGISTER/js/main.js"></script>
</body>
</html>
