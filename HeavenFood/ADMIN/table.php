<?php
include('Header.php');
include 'Config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">LIVE TABLE STATUS</h3>
                  </div>
                </div>

              </div>

              <!--main content-->
              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 101</strong></H3>
                      <?php

                      $ID = 1;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>

                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                     
                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> &nbsp; BOOK</button>
                          <?php
                              }
                          ?>

                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 102</strong></H3>
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
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;"> NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>

                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 103</strong></H3>
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
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;"> NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 104</strong></H3>
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
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;"> NO BOOK </button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK </button>
                          <?php
                              }
                          ?>
                   
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  1-->

              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 105</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;"> NO BOOK </button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK </button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 106</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;"> NO BOOK </button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK </button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 107</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 108</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  2-->

              <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 109</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">
                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 110</strong></H3>
                      <?php

                      $ID++;
                      $sql = "SELECT NO_SEAT FROM TABLES WHERE TID=$ID ORDER BY TID";
                      $result = mysqli_query($lk, $sql);
                      $cnt = mysqli_fetch_object($result)->NO_SEAT;

                      $sql1="select * from TABLES  WHERE TID=$ID";              
                      $res1=mysqli_query($lk,$sql1);
                                      
                      $row = mysqli_fetch_assoc($res1);
                      
                      $status = $row['STATUS'];

                      ?>
                      <span class="info-box-number"><?PHP echo $cnt . " PERSION"; ?></span>
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>

                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 111</strong></H3>
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
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;"> BOOK</button>
                          <?php
                              }
                          ?>

                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-chair"></i></span>

                    <div class="info-box-content">
                      <H3 class="info-box-text"><strong>Table 112</strong></H3>
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
                      <hr width="40%">

                      <?php
                            if(($status)=='NO BOOK')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm" style="width: 50%;">NO BOOK</button>
                          <?php
                            }
                              if(($status)=='BOOK')
                              {
                          ?>
                              <button class="btn btn-success btn-sm" style="width: 40%;">BOOK</button>
                          <?php
                              }
                          ?>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row  3-->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  </div>
  <!-- ./wrapper -->

</body>

</html>