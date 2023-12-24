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
</head>
<style>
  .btnsub {
    padding-bottom: 10px;
  }

  .contact .php-all input {
    background: #0c0b09;
    border-color: #625b4b;
    box-shadow: none;
    color: #a49b89;
  }

  .contact .php-all textarea {
    background: #0c0b09;
    border-color: #625b4b;
    box-shadow: none;
    color: #a49b89;
  }

  .contact .php-all button[type="submit"] {
    background: #cda45e;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;
  }

  .contact .php-all button[type="submit"]:hover {
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

          <li><a href="#specials">Specials</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="parcel.php">Parcel</a></li>
          <li><a href="payment.php">Payment</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li class="book-a-table text-center"><a href="table.php">BOOK TABLE</a></li>
          <li class="book-a-table text-center"><a href="logout.php">LOG OUT</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Heaven Food</span></h1>
          <h2>Delivering great food for your satisfaction !!</h2>

          <div class="btns">
            <a href="menu.php" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="table.php" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Servicees We Offer</h2>
          <p>Our Best Services</p>
        </div>
      </div>

      <!--? Our Services Start -->
      <div class="our-services section-padding30">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class=" col-lg-4 col-md-6 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-restaurant"></span>
                </div>
                <div class="services-cap">
                  <img src="assets/img/1.png" width="85" height="85">
                  <h5><a href="#">Best Chef</a></h5>
                  <p>Oversees a restaurant's kitchen by managing other members of the food preparation team, deciding what dishes to serve and adjusting orders to meet guests' requests. May assist in prep work, such as chopping vegetables, but more often will be involved in cooking specialty dishes.</p>
                </div>
              </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
              <div class="single-services active text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-tools-and-utensils-1"></span>
                </div>
                <div class="services-cap">
                  <img src="assets/img/2.png" width="85" height="85">
                  <h5><a href="#">Quality Food</a></h5>
                  <p>Food quality or Meal quality is the quality characteristics of food that is acceptable to consumers. This includes external factors as appearance (size, shape, color, gloss, and consistency), texture, and flavor; factors such as federal grade standards.</p>
                </div>
              </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-ion">
                  <span class="flaticon-restaurant"></span>
                </div>
                <div class="services-cap">
                  <img src="assets/img/3.png" width="85" height="85">

                  <h5><a href="#">Perfect Cook</a></h5>
                  <p>Cleans food preparation areas as determined by law and company policy. ... Seasons food according to recipes or company needs. Orders ingredients and spices as needed. Operates various kitchen appliance such as a blender, oven, grill, or stand mixer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Our Services End -->
    </section><!-- End Testimonials Section -->
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <?php
                $sql2 = "select * from SPECIAL";
                $res2 = mysqli_query($lk, $sql2);



                while ($answ = mysqli_fetch_assoc($res2)) {
                ?>
                  <a class="nav-link show" onclick="window.location.href='index.php?clicked=<?PHP echo $answ['SID']; ?>'" data-toggle="tab" href="#tab-1?"><?php echo $answ['MNAME']; ?></a>
                <?php
                }
                ?>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <?php
                    if (isset($_REQUEST['clicked'])) {
                    ?>
                      <?php
                      $sql3 = "select * from SPECIAL WHERE SID = {$_REQUEST['clicked']}";
                      $res3 = mysqli_query($lk, $sql3);
                      $ans = mysqli_fetch_assoc($res3);
                      $MID = $ans['MID'];
                      $_SESSION['mid'] = $MID;
                      $mid = $_SESSION['mid'];
                      $CID = $ans['CID'];
                      $_SESSION['cid'] = $CID;
                      $cid = $_SESSION['cid'];
                      $sql6 = "select * from CATEGORY WHERE CTID = {$cid}";
                      $res6 = mysqli_query($lk, $sql6);
                      $ans3 = mysqli_fetch_assoc($res6);

                      $sql4 = "select * from MENU WHERE MID = {$mid}";
                      $res4 = mysqli_query($lk, $sql4);
                      while ($ans1 = mysqli_fetch_assoc($res4)) {
                      ?>
                        <h3><?php echo $ans3['CTNAME'] ?></h3>
                        <hr noshade size="5"></hr>
                        <h3 style="color: #cda45e;"><?php echo $ans1['MNAME'] ?></h3>
                        <hr noshade size="5"></hr>
                        <?php 
                          $tax = 0;
                          $tax = ($ans1['PRICE'] * $ans['DISCOUNT'] )/100;
                          $amt = $ans1['PRICE'] - $tax;
                        ?>
                        <p style="color: #cda45e;">Discount :<?php echo $ans['DISCOUNT']; ?>%&emsp;&emsp;&emsp;Only In ₹<?php echo $amt; ?></p>
                        <hr noshade size="5"></hr>
                        <p class="font-italic"><?php echo $ans['DESCRIPTION'] ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="../IMAGE/<?php echo $ans1["MIMAGE"];  ?>" alt="" class="img-fluid" style="border-radius: 30%;">
                  </div>
                <?php
                      }
                ?>
              <?php
                    } else {
              ?>
                <?PHP
                  $sql5 = "select * from SPECIAL ORDER BY SID ASC LIMIT 1";
                  $res5 = mysqli_query($lk, $sql5);
                  $ans2 = mysqli_fetch_assoc($res5);

                  $fstid = $ans2['SID'];
                  $_SESSION['fid'] = $fstid;
                  $fid = $_SESSION['fid'];

							  ?>
                <?php

                      $sql3 = "select * from SPECIAL WHERE SID = {$fid}";
                      $res3 = mysqli_query($lk, $sql3);
                      $ans = mysqli_fetch_assoc($res3);
                      $MID = $ans['MID'];
                      $_SESSION['mid'] = $MID;
                      $mid = $_SESSION['mid'];
                      $CID = $ans['CID'];
                      $_SESSION['cid'] = $CID;
                      $cid = $_SESSION['cid'];
                      $sql6 = "select * from CATEGORY WHERE CTID = {$cid}";
                      $res6 = mysqli_query($lk, $sql6);
                      $ans3 = mysqli_fetch_assoc($res6);

                      $sql4 = "select * from MENU WHERE MID = {$mid}";
                      $res4 = mysqli_query($lk, $sql4);
                      while ($ans1 = mysqli_fetch_assoc($res4)) {
                ?>
                  <h3><?php echo $ans3['CTNAME'] ?></h3>
                  <hr noshade size="5"></hr>
                  <h4 style="color: #cda45e;"><?php echo $ans1['MNAME'] ?></h4>
                  <hr noshade size="5"></hr>
                  <?php 
                          $tax = 0;
                          $tax = ($ans1['PRICE'] * $ans['DISCOUNT'] )/100;
                          $amt = $ans1['PRICE'] - $tax;
                        ?>
                        <p style="color: #cda45e;">Discount :<?php echo $ans['DISCOUNT']; ?>%&emsp;&emsp;&emsp;Only In ₹<?php echo $amt; ?></p>
                        <hr noshade size="5"></hr>
                  <p class="font-italic"><?php echo $ans['DESCRIPTION'] ?></p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="../IMAGE/<?php echo $ans1["MIMAGE"];  ?>" alt="" class="img-fluid" style="border-radius: 30%;">
                </div>
              <?php
                      }
              ?>
            <?php
                    }
            ?>

              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <!--FRUIT VAGITABLES MEAT SEA FOOD Section-->
        <div id="fh5co-type" style="background-image: url(assets/img/slide_3.jpg);" data-stellar-background-ratio="0.5">
          <div class="fh5co-overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-3 to-animate">
                <div class="fh5co-type">
                  <h3 class="with-icon icon-1">Fruits</h3>
                </div>
              </div>
              <div class="col-md-3 to-animate">
                <div class="fh5co-type">
                  <h3 class="with-icon icon-2">Sea food</h3>
                </div>
              </div>
              <div class="col-md-3 to-animate">
                <div class="fh5co-type">
                  <h3 class="with-icon icon-3">Vegetables</h3>
                </div>
              </div>
              <div class="col-md-3 to-animate">
                <div class="fh5co-type">
                  <h3 class="with-icon icon-4">Meat</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>15000</span></p>
              </div>
              <p class="font-italic">
                Birthday Is Celebration That Come In Only One Time In Year And
                Our Restaurant Make Memorable And Great Your Born Day.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> CAKE ACCORDING TO YOUR CHOICE.</li>
                <li><i class="icofont-check-circled"></i> GREAT DISCOUNT ON BIG CELEBRATION.</li>
                <li><i class="icofont-check-circled"></i> SEPARATE AREA AND PHOTOGRAPHY ZONE.</li>
              </ul>
              <p>
                Hope your birthday celebration is going to put a big smile on your face and that it will be a day to remember for years to come.
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/wed-event.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Wedding Ceremonies</h3>
              <div class="price">
                <p><span>25000</span></p>
              </div>
              <p class="font-italic">
                Wedding Is Celebration That Come In Only One Moment For Long Life And Long Term Reletion And
                Our Restaurant Make Memorable And Great Your Born Day.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> WEDDING ARRENGMENT ACCORDING TO YOUR CHOICE.</li>
                <li><i class="icofont-check-circled"></i> GREAT DISCOUNT ON BIG CELEBRATION.</li>
                <li><i class="icofont-check-circled"></i> SEPARATE AREA AND PHOTOGRAPHY ZONE.</li>
              </ul>
              <p>
                A marriage in our society is perceived as a mere ritual to bring two families together. I don’t see it as a tradition that need to be followed just for the sake of it.
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>35000</span></p>
              </div>
              <p class="font-italic">
                Private Parties Are Celebration That Come At Any One Time In Year And
                Our Restaurant Make It Enjoyable And Greatfull With Lot's Of Memory On Your Holiday Day.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Comfortable Seating And Gossip Area.</li>
                <li><i class="icofont-check-circled"></i> According To Your Choice Food And Fast Food.</li>
                <li><i class="icofont-check-circled"></i> SEparate Musical Zone With Dancing Area And Play Zone.</li>
              </ul>
              <p>
                Live for today, plan for tomorrow, party tonight, party tonight.
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>45000</span></p>
              </div>
              <p class="font-italic">
                As Your Choice Area And All Tools
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Delicious And Tasty Food As According To Tradition.</li>
                <li><i class="icofont-check-circled"></i> As Your Time Schedule.</li>
                <li><i class="icofont-check-circled"></i> With Great Discount.</li>
              </ul>
              <p>
                We Make Your PArty More Enjoyable.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Events Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Gallery Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>A restaurant is a place where people visit to eat and drink the food being prepared on the premises and pays for the same.</h3>
            <p></p>
            <ul>
              <li><i class="icofont-check-circled"></i> Restaurants provide you with different cuisines of food to satisfy your hunger..</li>
              <li><i class="icofont-check-circled"></i> The food preparation and presentation gives you a happy feel during your dull.</li>
              <li><i class="icofont-check-circled"></i> The ambiance that a restaurant provides you with gives one all the more reason to visit to cherish their time.</li>
              <li><i class="icofont-check-circled"></i> The restaurant is a life savior when one doesn’t feel like cooking or wants to eat something else..</li>
              <li><i class="icofont-check-circled"></i> You get to explore places when you plan to visit a restaurant..</li>
              <li><i class="icofont-check-circled"></i> The fast-food restaurant provides your meals on the go to save your time at affordable prices..</li>
            </ul>
            <p>
              The food is served at the table to have a comfortable visit for your meals. The restaurant offers a menu with various options for your meal, to choose from.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p> KAMREJ NEAR 395326, INDIA</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-SUNDAY:<br>
                  11:00 AM - 11:00 PM
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>heavenfood007@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 990445599</p>
              </div>

            </div>

          </div>

          <div class="col-lg-4 mt-5 mt-lg-0">

            <form action="addcontact.php" method="post" name="formCont" class="php-all">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button name="ConBtnSubmit" type="submit">Send Message</button></div>
            </form>

          </div>

          <div class="col-lg-4" style="border-radius: 25px;">
            <div data-aos="fade-up">
              <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Shree shambhubhai v patel college &amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Heaven Food</h3>
              <p>
                KAMREJ <br>
                NEAR 395326, INDIA<br><br>
                <strong>Phone:</strong> +91 990445599<br>
                <strong>Email:</strong> heavenfood007@gmail.com<br>
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

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">


          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our News Update</h4>
            <p>Type Your EMail and Press Subscribe To Stay Update</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
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