<?php

    include('Config.php');

    session_start();

    if(!isset($_SESSION['EMMail']))
    {
        header("Location: Register.php");
    }

?>
<?php
  include 'Config.php';
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

  <style>
      /*--------------------------------------------------------------
# feedback
--------------------------------------------------------------*/
.feedback .info {
  width: 100%;
}

.feedback .info i {
  font-size: 20px;
  float: left;
  width: 44px;
  height: 44px;
  background: #cda45e;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.feedback .info h4 {
  padding: 0 0 0 60px;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 5px;
  font-family: "Poppins", sans-serif;
}

.feedback .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #bab3a6;
}

.feedback .info .open-hours, .contact .info .email, .contact .info .phone {
  margin-top: 40px;
}

.feedback .php-form {
  width: 100%;
}

.feedback .php-form .form-group {
  padding-bottom: 8px;
}

.feedback .php-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.feedback .php-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.feedback .php-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.feedback .php-form .loading {
  display: none;
  text-align: center;
  padding: 15px;
}

.feedback .php-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #cda45e;
  border-top-color: #1a1814;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.feedback .php-form input, .feedback .php-form textarea{
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
}

.feedback .php-form select
{
  background: #0c0b09;
  border-color: #625b4b;
  box-shadow: none;
  color:#a49b89;
}

.feedback .php-form input::-webkit-input-placeholder, .feedback .php-form textarea::-webkit-input-placeholder {
  color: #a49b89;
}

.feedback .php-form input::-moz-placeholder, .feedback .php-form textarea::-moz-placeholder {
  color: #a49b89;
}

.feedback .php-form input:-ms-input-placeholder, .feedback .php-form textarea:-ms-input-placeholder {
  color: #a49b89;
}

.feedback .php-form input::-ms-input-placeholder, .feedback .php-form textarea::-ms-input-placeholder {
  color: #a49b89;
}

.feedback .php-form input::placeholder, .feedback .php-form textarea::placeholder {
  color: #a49b89;
}

.feedback .php-form input:focus, .feedback .php-form textarea:focus {
  border-color: #cda45e;
}

.feedback .php-form input {
  height: 44px;
}

.feedback .php-form textarea {
  padding: 10px 12px;
}

.feedback .php-form button[type="submit"] {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.feedback .php-form button[type="submit"]:hover {
  background: #d3af71;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
  </style>

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
          <li><a href="menu.php">Menu</a></li>
          <li class="book-a-table text-center"><a href="table.php">BOOK TABLE</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Feedback</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
          </ol>
        </div>

      </div>
    </section>

    <div class="container">

      <section class="inner-page feedback" id="feedback">
          <!-- ======= Contact Section ======= -->
          <!-- <section id="contact" class="contact"> -->

            <div class="container" data-aos="fade-up">

              <form action="ADDFEED.php" method="post" role="form" class="php-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                  <select type="combobox" class="form-control" name="o_id" id="o_id" required>
                              
                              <?php
                              $sql1 = "select * from ORDR";
                              $res1 = mysqli_query($lk, $sql1);
                              while ($ans = mysqli_fetch_assoc($res1)) 
                              {
                              ?>
                                <option>  <?php echo $ans["OID"]; ?> </option>

                              <?php
                              }
                              ?>
                </select>
                    
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Your Name" pattern="[A-Za-z ]{0,}" required/>
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group form-row">
                  <div class="col-md-2">
                    <p class="cols">Rating</p>
                  </div>
                  <div class="col-md-4 star-rating">
                    <input type="radio" id="5-stars" name="rating" value="5" />
                    <label for="5-stars" class="star">&#9733;</label>
                    <input type="radio" id="4-stars" name="rating" value="4" />
                    <label for="4-stars" class="star">&#9733;</label>
                    <input type="radio" id="3-stars" name="rating" value="3" />
                    <label for="3-stars" class="star">&#9733;</label>
                    <input type="radio" id="2-stars" name="rating" value="2" />
                    <label for="2-stars" class="star">&#9733;</label>
                    <input type="radio" id="1-star" name="rating" value="1" />
                    <label for="1-star" class="star">&#9733;</label>
                  </div>
                  <div class="col-md-6"></div>

                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="inputMessage" id="inputMessage" rows="8" placeholder="Message" pattern="[A-Za-z0-9_- ](0,)" required></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" name="btnfeedback">SUBMIT FEEDBACK</button></div>
              </form>

            </div>
          </section><!-- End Contact Section -->
      <!-- </section> -->

    </div>
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