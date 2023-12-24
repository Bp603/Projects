<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> LOGIN
    </title>

    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <style>
        .error {
            color: #FF0001;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini p-3 mb-2 bg-gradient-info text-white">

<?php

include "Config.php";
include_once 'server.php';

?>
    <!-- Site wrapper -->
    <div class="container-fluid col-sm-7">
        <!-- Content Wrapper. Contains page content -->
        <div class="text-center">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid ">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <!-- <i class="fas fa-user-circle"></i> -->
                            <div>
                                <h2><strong>The Heaven Food</strong></h2>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <h1 class="text-dark border-bottom"><b>Login</b></h1>
                    <div class="card-body row">
                        <div class="col-5 text-center d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="./dist/img/admin_login.jpg" alt="LOGIN LOGO" height="" width="">
                        </div>
                        <div class="col-7 text-left">
                        <?php include('errors.php'); ?>
                            </br>
                            <form name="f1" Action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="txt_field">
                                    <input type="text" name="uname">
                                    
                                    <label>Username</label>
                                </div></br>
                                <div class="txt_field">
                                    <input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                                    
                                    <label>password</label>
                                </div></br>
                                <div class="pass"> <a href="forgotpass.php">Forgot Password?</a></div>
                                <input type="Submit" name="btnlogin" Value="Login">
                                
                            </form>
                        </div>
                    </div>
                  
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>