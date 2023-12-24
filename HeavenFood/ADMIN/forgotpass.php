<?php
  session_start();
  include_once 'Config.php';
  if(isset($_POST['reg_user']))
  {
    $user_id = $_POST['email'];
    $result = mysqli_query($lk,"SELECT * FROM ADMIN where EMAIL='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result) or die (header("Location:forgotpass.php?tmp=fail"));
    $fetch_user_id=$row['EMAIL'];
    $email_id=$row['EMAIL'];
    $password=$row['PASSWD'];
    $msg="http://localhost/PROJECT/ADMIN/UpdtPass.php";

    if($user_id==$fetch_user_id) {
            $to = $email_id;
              $subject = "Forgot Password";
              $txt = "Forgot Your Password :$password , Click Here : $msg";
              $headers = "From: heavenfood2021@gmail.com" . "\r\n" .
              "CC: bipinpatel49259@gmail.com";
              mail($to,$subject,$txt,$headers);
              header("Location:forgotpass.php?tmp1=succ");
    }
      // else{
      //   echo 'invalid userid';
      // }
  }
?>

<!DOCTYPE HTML>
<html>
<head>


<title>RESET PASSWORD</title>
<link rel="stylesheet" href="./REGISTER/fonts/material-icon/css/material-design-iconic-font.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="./REGISTER/css/style.css">
</head>
<Style>   
        .main {
            background: #17A2B8;
            
        }
        .alert-danger {
            color:red;
        }
    </Style>
<body>
<div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="text-center">FORGOT PASSWORD</h2>
                        <?php
                            if(isset($_REQUEST['tmp']))
                            {
                            ?>
                              <div class="alert alert-danger"><strong>USER NOT FOUND</strong></div>
                            <?php
                            }
                            if(isset($_REQUEST['tmp1']))
                            {
                            ?>
                              <div class="alert alert-success"><strong>CHECK YOUR MAIL-BOX</strong></div>
                            <?php
                            }
                        ?>
                        <br>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="register-form" id="register-form">
                        <?php
                        // include file errors
                        //include('errors.php');
                        ?>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>


                            <div class="form-group form-button">
                                <input type="submit" name="reg_user" id="reg_user" class="form-submit" value="Submit"/>
                            </div>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./REGISTER/images/forgotpass.jpg" alt="sing up image"></figure>

                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
</html>