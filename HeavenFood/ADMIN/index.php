<?php

    include('Config.php');
    include('Header.php');

?>

<?php 
     $csql="SELECT COUNT(RATING) FROM Feedback WHERE RATING = 5";
     $cres=mysqli_query($lk,$csql);
     $val=mysqli_fetch_assoc($cres);

     $csql2="SELECT COUNT(RATING) FROM Feedback WHERE RATING = 4";
     $cres2=mysqli_query($lk,$csql2);
     $val2=mysqli_fetch_assoc($cres2);

     $csql3="SELECT COUNT(RATING) FROM Feedback WHERE RATING = 3";
     $cres3=mysqli_query($lk,$csql3);
     $val3=mysqli_fetch_assoc($cres3);

     $csql4="SELECT COUNT(RATING) FROM Feedback WHERE RATING = 2";
     $cres4=mysqli_query($lk,$csql4);
     $val4=mysqli_fetch_assoc($cres4);

     $csql5="SELECT COUNT(RATING) FROM Feedback WHERE RATING = 1";
     $cres5=mysqli_query($lk,$csql5);
     $val5=mysqli_fetch_assoc($cres5);

     $d=date("Y-m-d h:i:sa");
     $psql="SELECT * FROM PAYMENT";
    // echo $psql;
     $pres=mysqli_query($lk,$psql);
     $pval=mysqli_fetch_assoc($pres);
                        
       
    
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Rating 5',    <?php echo $val['COUNT(RATING)'];?>],
          ['Rating 4',      <?php echo $val2['COUNT(RATING)'];?>],
          ['Rating 3',  <?php echo $val3['COUNT(RATING)'];?>],
          ['Rating 2',  <?php echo $val4['COUNT(RATING)'];?>],
          ['Rating 1',  <?php echo $val5['COUNT(RATING)'];?>],
          
        ]);

        var options = {
          title: 'All Over Feedback Ratting'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ODER ID', 'PAYMENT' ],
          <?php
            while($pval=mysqli_fetch_assoc($pres)){
          ?>
         
          ['<?php echo $pval['PID'];?>',  <?php echo $pval['AMOUNT'];?>],
          <?php
          }
          ?>
          
        ]);

        var options = {
          title: 'Payment Graph',
          hAxis: {title: 'ODER ID',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

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
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                 <h4>Total Orders</h4>
                  <?php
                    
                    $sql="SELECT OID FROM ORDR ORDER BY OID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="./order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                <h4>Total Parcel</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT PID FROM PARCEL ORDER BY PID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="./parcel.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>          
            <!-- ./col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                <h4>Total Food Item</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT MID FROM MENU ORDER BY MID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">      
                <i class="fas fa-utensils"></i>
                </div>
                <a href="./menu.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                <h4>Total Staff</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT CID FROM COOK ORDER BY CID";
                    $result=mysqli_query($lk,$sql);
                    $cnt2 = mysqli_num_rows($result);
                    $sql="SELECT WID FROM WAITER ORDER BY WID";
                    $result=mysqli_query($lk,$sql);
                    $cnt1 = mysqli_num_rows($result);
                    $cnt=$cnt1+$cnt2;
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="./staff.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                 <h4>Total Tables</h4>
                  <?php

                    include('Config.php');
                    $sql="SELECT TID FROM TABLES ORDER BY TID";
                    $result=mysqli_query($lk,$sql);
                    $cnt = mysqli_num_rows($result);
                    echo '<h2>'.$cnt.'<h2>';

                  ?>
                </div>
                <div class="icon">
                  <i class="fas fa-table"></i>
                </div>
                <a href="./table.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col --> 
            <?php

                if(isset($_REQUEST['tmp']))
                {
            ?>
                  <script>alert('PARCEL IS DONE.');</script>
                  
            <?PHP
                }

            ?>
            <?php

                if(isset($_REQUEST['id']))
                {
                  $no = $_REQUEST['id'];
                ?>
                  <div class="alert alert-danger"><?php echo $no; ?></div>
                <?php
                }

            ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <div class="row">
          <div class="col-md-6">
            <div Class="card">
                    <div class="card-header">
                      <h3>All Over Feedback</h3>
                    </div>
                    <div class="card-body" >
                      <div id="piechart" ></div> 
                    </div>
                    <div class="card-footer" >
                    <a href="./feedback.php" class="small-box-footer">GO TO Feedback <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
            </div>
          </div>
          <div class="col-md-6">
            <div Class="card">
                    <div class="card-header">
                      <h3>Daily Paiment</h3>
                    </div>
                    <div class="card-body" >
                      <div id="chart_div"></div>
                      
                    </div>
                    
                    <div class="card-footer" >
                    <a href="./payment.php" class="small-box-footer">GO TO Payment <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->

</body>

</html>