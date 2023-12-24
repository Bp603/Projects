<?php

include('Config.php');

session_start();

if (!isset($_SESSION['EMMail'])) {
    header("Location: Register.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RESTAURANT MANAGEMENT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/starrat.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <STYLE>

      .table {
		border: 2px solid #625b4b;
        background-color:floralwhite;
        font-weight: 900;
		color: #a49b89;
	}

</STYLE>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-phone"></i> +91 9081939635
                <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> ALL DAY: 11:00 AM - 11:00 PM</span>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h2 Class="logo mr-auto"><a href="index.php">Heaven&nbsp;Food</a></h2>
            <!-- <img class="animation__shake" src="./IMAGE/LOGO11-.png" alt="Resrto" height="50" width="55" />&emsp;&emsp;&emsp;&emsp; -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="book-a-table text-center"><a href="logout.php">LOG OUT</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Profile</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                    </ol>
                </div>

            </div>
        </section>

        <section class="inner-page">
            <div class="container">

                <table id="example1" class="table table-bordered table-striped" style="text-align: center; ">

                    <thead style="background-color:#FAEBD7;">
                        <strong>
                        <tr>
                            <th WIDTH="30%">LABEL</th>
                            <th WIDTH="50%">VALUE</th>
                        </tr>
                        </strong>

                    </thead>

                    <tbody>

                        <?php

                        $mail = $_SESSION['EMMail'];
                        $sql = "select * from WAITERREG where EMAIL = '$mail'";
                        $res = mysqli_query($lk, $sql);
                        $ans = mysqli_fetch_assoc($res);
                        
                        $sql1 = "select * from waiter where WFNAME = '{$ans['USERNAME']}'";
                        $res1 = mysqli_query($lk, $sql1);
                        $cnt = mysqli_num_rows($res1);

                        if ($cnt > 0) {
                            while ($ans1 = mysqli_fetch_assoc($res1)) {

                        ?>
                                <tr>
                                    <td><label>Image</label></td>
                                    <td>
                                        <?php   

                                            if($ans1['GENDER'] == "MALE")
                                            {
                                        ?>

                                            <image class="profile-user-img img-circle img-fluid" src="REGISTER/images/MALE (1).jpg" alt="NO IMAGE" height="70" width="70">       
                                        <?PHP
                                            }
                                            else
                                            {
                                        ?>
                                            <image class="profile-user-img img-circle img-fluid" src="REGISTER/images/FEMALE.jpg" alt="NO IMAGE" height="70" width="70">       
                                        <?PHP
                                            }

                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Waiter Name</label></td>
                                    <td><?php echo $ans1['WFNAME']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Waiter Last Name</label></td>
                                    <td><?php echo $ans1['WLNAME']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>ADDRESS</label></td>
                                    <td><?php echo $ans1['ADDRSS']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>GENDER</label></td>
                                    <td><?php echo $ans1['GENDER']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>AGE</label></td>
                                    <td><?php echo $ans1['AGE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>CONTACT</label></td>
                                    <td><?php echo $ans1['CONTACT']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>EXPIERNCE</label></td>
                                    <td><?php echo $ans1['EXPIERNCE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>waiter Name</label></td>
                                    <td><?php echo $ans1['HIREDATE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>SALARY</label></td>
                                    <td><?php echo $ans1['SALARY']; ?></td>
                                </tr>

                        <?php
                                
                            }
                        }

                        ?>

                    </tbody>

                </table>

                <?php



                ?>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="footer-info  col-lg-12 col-md-6 col-12">
                        <h3>Heaven Food</h3>
                        <p>
                            KAMREJ NEAR 395326, INDIA <strong>Phone:</strong> +91 990445599
                            <strong>Email:</strong> heavenfood007@gmail.com
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
        </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Heaven Food</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>p