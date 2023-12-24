<?php

include('Config.php');

session_start();

if (!isset($_SESSION['EMMail'])) {
  header("Location: Register.php");
}

?>
<?php
if(isset($_REQUEST['alt']))
{
?>
<script>alert('Please Unbook the Table If Your All Service Is Done !!');</script>
<?php
}
?>

<?php

  if(isset($_REQUEST['btnbk']))
  {
      $stat = 0;

      $sql2 = "update TABLES set STATUS = {$stat} where TID = {$_SESSION['tid']}";
      echo $sql2;
      $res - mysqli_query($lk,$sql2);
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
  <link href="assets/css/table.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  .book-a-table .php-all select {
    background: #0c0b09;
    border-color: #625b4b;
    box-shadow: none;
    color: #a49b89;
  }

  .book-a-table .php-all input {
    background: #0c0b09;
    border-color: #625b4b;
    box-shadow: none;
    color: #a49b89;
  }

  .book-a-table .php-all button[type="submit"] {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.book-a-table .php-all button[type="submit"]:hover {
  background: #d3af71;
}

.coltbl
{
  padding-bottom: 10px;
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
          <li><a href="menu.php">Menu</a></li>
          <li><a href="order.php">Order</a></li>
          <li><a href="parcel.php">Parcel</a></li>
          <li><a href="payment.php">Payment</a></li>
          <li><a href="feedback.php">Feedback</a></li>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Table</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
          </ol>
        </div>

      </div>
    </section>

    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form name="f1" action="addtable.php" method="post" role="form" class="php-all" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <select type="combobox" class="form-control" name="o_id" id="o_id" required>

                <?php
                $sql1 = "select * from TABLES";
                $res1 = mysqli_query($lk, $sql1);
                while ($ans = mysqli_fetch_assoc($res1)) {
                ?>
                  <option> <?php echo $ans["TABLE_NO"]; ?> </option>

                <?php
                }
                ?>
              </select>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="phone" id="phone" min="1" max="8" placeholder="Enter Person" >
            </div>
            <div class="col-lg-4 col-md-6 form-group">
            </div>
            <div class="text-center"><button type="submit" name="btntable">SUBMIT</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <section class="inner-page">
      <div class="container">
        <!-- <section class="content"> -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="bborder">
                <!-- <div class="card-header"> -->
                <div class="">
                  <h3 class="card-title">LIVE TABLE STATUS</h3>
                </div>
                <!-- </div> -->
              </div>
              <br>
              <!--main content-->
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 1</strong></H3>
                      <?php

                      $ID = 1;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];
                      $tid = $row['TID'];
                      $_SESSION['tid'] = $tid;

                      ?>
                      
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>


                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                                
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 2</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>

                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 3</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];


                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 4</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>

                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  1-->
              <br>
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 5</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 6</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 7</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];


                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 8</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  2-->
              <br>
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 9</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 10</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>

                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 11</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>

                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12 coltbl">
                  <div class="bb">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 12</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;
                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                      $row = mysqli_fetch_assoc($res1);                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                    <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                             <button class="btn btn-danger btn-sm" disabled> NO BOOK</i></button>
                             <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                          <hr noshade size="5" align="center" width="50%"></hr>
                          <button class="btn btn-success btn-sm"><a href="uptbl.php?id=<?php echo $row['TID']; ?>"  style="color: #fff;">BOOK</a></button>
                              <hr noshade size="5" align="center" width="50%"></hr>
                          <?php
                              }
                          ?>
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  3-->
              <br>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      </section>
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