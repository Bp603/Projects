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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
</head>

<style>
  .section-head p {
    margin: 0;
    margin: 0;
    font-size: 28px;
    font-weight: 300;
    font-family: "Playfair Display", serif;
    color: #cda45e;
    padding-bottom: 10px;
  }

  .menu .menu-cntn
  {
  margin-left: 85px;
  position: relative;
  }

  .menu .ip
  {
    border-radius: 0;
    box-shadow: none;
    background-color: black;
    color: #cda45e;
    border:1px solid #cda45e;
    text-align: center;
  }

  .menu .ip:focus 
  {
    border:1px solid #cda45e;
  }

</style>

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
          <li><a href="order.php">Order</a></li>
          <li><a href="parcel.php">Parcel</a></li>
          <li><a href="payment.php">Payment</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li class="book-a-table text-center"><a href="table.php">BOOK TABLE</a></li>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Menu</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page menu" id="menu">
      <div class="container">
        <!-- ======= Menu Section ======= -->
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <p>Check Our Tasty Menu</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <form name="f1" method="post" action="#">
                <ul id="menu-flters" id="ctname" name="ctname">
                  <li onclick="window.location.href='menu.php?clicked=0'" data-filter="*" class="filter">ALL FOOD</li>
                  <?php
                  $sql2 = "select * from CATEGORY";
                  $res2 = mysqli_query($lk, $sql2);

                  while ($answ = mysqli_fetch_assoc($res2)) {
                  ?>
                    <li onclick="window.location.href='menu.php?clicked=<?PHP echo $answ['CTID']; ?>'" data-filter=".filter-starters" value="<?PHP echo $answ['CTID']; ?>"><?php echo $answ['CTNAME']; ?></li>
                  <?php
                  }

                  ?>
                </ul>
              </form>
            </div>
          </div>
        </div>

        <!-- <div class="row menu-container" data-aos="fade-up" data-aos-delay="200"> -->

        <?php

        if (isset($_REQUEST['clicked'])) {

          if ($_REQUEST['clicked'] == 0) {


        ?>
            <br>
            <div class="section-head" style="text-align:center" data-aos="fade-up" data-aos-delay="100">
              <p>All Food</p>
            </div>
            <br>

            <div class="container">
              <?php
              $query = "SELECT * FROM MENU ORDER BY MID ASC";
              $result = mysqli_query($lk, $query);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
              ?>
                  <div class="col-md-4">
                    <form method="post" name="frm" >
                      <div class="menu" style="border:1px solid #333; background-color:#0e0b0b; border-radius:10px; padding:16px;" align="center" data-aos="fade-up" data-aos-delay="100">
                        <img src="../IMAGE/<?php echo $row["MIMAGE"];  ?>" height="70" width="70" class="menu-img" /><br />

                        <h4 class="menu-cntn"><?php echo $row["MNAME"]; ?></h4>

                        <h4 style="color:#cda45e;">₹ <?php echo $row["PRICE"]; ?></h4>

                        <div class="">

                        <input class="ip" type="text" name="quantity" value="1" class="form-control"/>&emsp;

                        <input type="hidden" name="hidden_name" value="<?php echo $row["MNAME"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>" />
                        <BR>
                        <span>
                        <input type="submit" name="add_to_cart" formaction="order.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Order" />&nbsp;&nbsp;
                        <input type="submit" name="add_to_cart" formaction="parcel.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Parcel" />
                        </span>
                        </div>

                      </div>
                      <hr color="#cda45e">
                    </form>
                  </div>
              <?php
                }
              }
              ?>
            </div>

          <?php
          }
        } else {
          ?>

          <div class="container">
            <?php
            $query = "SELECT * FROM MENU ORDER BY MID ASC";
            $result = mysqli_query($lk, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4">
               
                  <form method="post" name="frm">
              
                    <div class="menu" style="border:1px solid #333; background-color:#0e0b0b; border-radius:10px; padding:16px;" align="center" data-aos="fade-up" data-aos-delay="100">
                      <img src="../IMAGE/<?php echo $row["MIMAGE"];  ?>" height="70" width="70" class="menu-img" /><br />

                      <h4 class="text-info"><?php echo $row["MNAME"]; ?></h4>

                      <h4 class="text-danger">₹ <?php echo $row["PRICE"]; ?></h4>

                      <div class="">

                      <input class="ip" type="text" name="quantity" value="1" class="form-control" />&emsp;

                      <input type="hidden" name="hidden_name" value="<?php echo $row["MNAME"]; ?>" />

                      <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>" />
                      <br>
                      <span>
                      <input type="submit" id="ordr" name="add_to_cart" formaction="order.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Order" />&nbsp;&nbsp;
                      <input type="submit" id="parcel" name="add_to_cart" formaction="parcel.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Parcel" />
                      </span>
                      </div>

                    </div>
                    <hr>
                  </form>
                </div>
            <?php
              }
            }
            ?>
          </div>

        <?php
        }

        ?>
        <?php

        if (isset($_REQUEST["clicked"])) {

          $sql5 = "select * from CATEGORY WHERE CTID={$_REQUEST['clicked']}";
          $res4 = mysqli_query($lk, $sql5);
          $otp = mysqli_fetch_assoc($res4);

        ?>

          <br>
          <div class="section-head" style="text-align:center" data-aos="fade-up" data-aos-delay="100">
            <p><?php echo $otp['CTNAME']; ?></p>
          </div>
          <br>
          <div class="container">
            <?php
            // $query = "SELECT * FROM MENU ORDER BY MID ASC";
            $query = "SELECT * FROM MENU WHERE CTID={$_REQUEST['clicked']} ORDER BY MID ASC";
            $result = mysqli_query($lk, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4">
                  <form method="post" name="frm">
                    <div class="menu" style="border:1px solid #333; background-color:#0e0b0b; border-radius:10px; padding:16px;" align="center" data-aos="fade-up" data-aos-delay="100">
                      <img src="../IMAGE/<?php echo $row["MIMAGE"];  ?>" height="70" width="70" class="menu-img" /><br />

                      <h4 class="text-info"><?php echo $row["MNAME"]; ?></h4>

                      <h4 class="text-danger">$ <?php echo $row["PRICE"]; ?></h4>

                      <div class="">

                      <input class="ip" type="text" name="quantity" value="1" class="form-control" />&emsp;

                      <input type="hidden" name="hidden_name" value="<?php echo $row["MNAME"]; ?>" />

                      <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>" />
                      <br>
                      <span>
                      <input type="submit" name="add_to_cart" formaction="order.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Order" />&nbsp;&nbsp;
                      <input type="submit" name="add_to_cart" formaction="parcel.php?action=add&id=<?php echo $row["MID"]; ?>" style="margin-top:5px;" class="btn btn-success" value="Parcel" />
                      </span>

                      </div>

                    </div>
                    <hr>
                  </form>
                </div>
            <?php
              }
            }
            ?>
          </div>
        <?php
        }

        ?>

        <!-- </div> -->

      </div>
    </section><!-- End Menu Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="footer-info">
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

</html>