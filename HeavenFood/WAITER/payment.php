<?php

include('Config.php');

session_start();

if (!isset($_SESSION['EMMail'])) {
  header("Location: Register.php");
}

?>
<?php

if (isset($_REQUEST['orderid'])) {
  $cid = $_REQUEST['orderid'];
} else {
  $cid = 0;
}

?>
<?php

$apiKey = "rzp_test_8ipASSUhcvNVMH";

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

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
    function pay_now() {
      var name = jQuery('#name').val();
      var amt = jQuery('#amt').val();
      var oid = jQuery('#orderid').val();
      var mail = jQuery('#email').val();
      var con = jQuery('#mobile').val();

      jQuery.ajax({
        type: 'post',
        url: 'payins.php',
        data: "amt=" + amt + "&name=" + name + "&oid=" + oid + "&mail=" + mail + "&con=" + con,
        success: function(result) {
          var options = {
            "key": "rzp_test_8ipASSUhcvNVMH",
            "amount": amt * 100,
            "currency": "INR",
            "name": "Heaven Food",
            "description": "Test Transaction",
            "image": "LOGO11-.png",
            "handler": function(response) {
              jQuery.ajax({
                type: 'post',
                url: 'payins.php',
                data: "payment_id=" + response.razorpay_payment_id,
                success: function(result) {
                  window.location.href = "feedback.php";
                }
              });
            }
          };
          var rzp1 = new Razorpay(options);
          rzp1.open();
        }
      });


    }
  </script>

  <script language="javascript">
    function order() {
      document.f1.submit();
    }

    function parcel() {
      document.f1.submit();
    }
  </script>

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  label {

    color: #cda45e;
  }

  .cnn {
    background-color: black;
    padding: 5px 20px 15px 20px;
    border-radius: 3px;
  }

  .center {
    margin: auto;
    width: 30%;
  }

  .book-a-table .php-form select {
    background: #0c0b09;
    border-color: #625b4b;
    box-shadow: none;
    color: #a49b89;
    width: 100%;
  }

  .book-a-table .php-form {
    width: 100%;
  }

  .book-a-table .php-form .form-group {
    padding-bottom: 8px;
  }

  .book-a-table .php-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
  }

  .book-a-table .php-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
  }

  .book-a-table .php-form .error-message br+br {
    margin-top: 25px;
  }

  .book-a-table .php-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
  }

  .book-a-table .php-form .loading {
    display: none;
    text-align: center;
    padding: 15px;
  }

  .book-a-table .php-form .loading:before {
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

  .book-a-table .php-form input,
  .book-a-table .php-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    background: #0c0b09;
    border-color: #625b4b;
    color: #fff;
  }

  .book-a-table .php-form input::-webkit-input-placeholder,
  .book-a-table .php-form textarea::-webkit-input-placeholder {
    color: #a49b89;
  }

  .book-a-table .php-form input::-moz-placeholder,
  .book-a-table .php-form textarea::-moz-placeholder {
    color: #a49b89;
  }

  .book-a-table .php-form input:-ms-input-placeholder,
  .book-a-table .php-form textarea:-ms-input-placeholder {
    color: #a49b89;
  }

  .book-a-table .php-form input::-ms-input-placeholder,
  .book-a-table .php-form textarea::-ms-input-placeholder {
    color: #a49b89;
  }

  .book-a-table .php-form input::placeholder,
  .book-a-table .php-form textarea::placeholder {
    color: #a49b89;
  }

  .book-a-table .php-form input:focus,
  .book-a-table .php-form textarea:focus {
    border-color: #cda45e;
  }

  .book-a-table .php-form input {
    height: 44px;
  }

  .book-a-table .php-form textarea {
    padding: 10px 12px;
  }

  .book-a-table .php-form button[type="submit"] {
    background: #cda45e;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }

  .book-a-table .php-form button[type="submit"]:hover {
    background: #d3af71;
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
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Payment</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container book-a-table cnn">

        <form class="php-form" name="f1" method="post" style="padding: 25px;">

          <input class="btn" type="hidden" custom="Hidden Element" name="hidden">

          <div class="row" style="border-style: 5px; ">
            <div class="col-25">

              <div class="section-title">
                <p>Enter Payment Details</p>
              </div>
              <br>
              <div class="form-row ">
                <label class="form-group" for="orderid"><i class="fa fa-shopping-cart"></i> Order</label>
                <?php
                $sql4 = "select * from ORDR WHERE STATUS = 1";
                $res4 = mysqli_query($lk, $sql4);
                ?>
                <select class="form-control" name="orderid" id="orderid" onchange="order();" >

                  <option> Select Order Id : </option>

                  <?php

                  while ($ans = mysqli_fetch_assoc($res4)) {

                    $t_id = $ans['OID'];

                    $t_name = $ans['OID'];

                    if ($t_id == $cid) {
                  ?>
                      <option value="<?php echo $t_id; ?>" selected><?php echo $t_name; ?></option>
                    <?php
                      // echo "<option value=\"$t_id\" selected>$t_name</option>";
                    } else {
                      echo "<option value=\"$t_id\">$t_name</option>";
                    }
                    ?>

                  <?php
                  }

                  ?>
                </select>
              </div>
              <br>
              
              <div class="form-row ">
                <label class="form-group" for="amot"><i class="fa fa-money"></i> Amount</label>

                <?php

                  $qry = "select * from ORDRDLT where OID=$cid";
                  $r = mysqli_query($lk, $qry);
                  $total = 0;

                  while ($an = mysqli_fetch_array($r)) {
                    $city_id = $an['TOTAL'];

                    $city_name = $an['TOTAL'];
                    $total = $total + $an['TOTAL'];

                    // echo "<option value=\"$city_id\" selected>$city_name</option>";	
                  }

                  echo "<input class=\"form-control\" type=\"text\" value=\"$total\" id=\"amt\" name=\"amt\">";

                ?>
                

              </div>
              <br>
              <div class="form-row ">
                <label class="form-group" for="name"><i class="fa fa-user"></i> Full Name</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required>
              </div>
              <br>
              <div class="form-row ">
                <label class="form-group" for="email"><i class="fa fa-envelope"></i> Email</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter E-Mail" required>
              </div>
              <br>
              <div class="form-row ">
                <label class="form-group" for="city"><i class="fa fa-mobile"></i> Mobile</label>
                <input class="form-control" type="text" id="mobile" name="mobile" placeholder="Mobile Number" required>
              </div>
              <br>
              <div class="form-row ">
                <label class="form-group" for="adr"><i class="fa fa-home"></i> Address</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address" required>
              </div>
              <br>
            </div>

          </div>

          <div><input style="background: #cda45e; border: 0; padding: 10px 35px; color: #fff; transition: 0.4s; border-radius: 50px;" type="button" name="btn" value="Pay Now" onclick="pay_now()" class="btn"></div>
        </form>
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

</html>