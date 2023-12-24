<?php
include('Header.php');
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
                    <h3 class="card-title">REPORT OF ORDERS</h3>
                  </div>
                </div>

                <div class="card-body">

                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>No OF Order</th>
                        <th>DATE</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      include('Config.php');
                      $sql = "SELECT COUNT(*) AS ORDERS, ODATE FROM ORDR GROUP BY EXTRACT(DAY FROM ODATE)";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {



                      ?>

                          <tr>

                            <td>
                              <?php echo $i++; ?>
                            </td>
                            <td>
                              <?php echo $row['ORDERS'] ?>
                            </td>
                            <td>
                              <?php
                              $date = date_create($row['ODATE']);
                              echo date_format($date, "d-M-Y H:i:s");
                              ?>
                            </td>

                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"3\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>No Of Orders</th>
                        <th>date</th>

                      </tr>
                    </tfoot>
                  </table>

                </div>
              </div>
              <!-- /.card -->

              <!--REPORT OF PARCEL-->
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">REPORT OF PARCEL</h3>
                  </div>
                </div>

                <div class="card-body">

                  <table id="example2" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>No OF Parcels</th>
                        <th>DATE</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      include('Config.php');
                      $sql = "SELECT COUNT(*) AS PARCELS, PDATE FROM PARCEL GROUP BY EXTRACT(DAY FROM PDATE)";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {



                      ?>

                          <tr>

                            <td>
                              <?php echo $i++; ?>
                            </td>
                            <td>
                              <?php echo $row['PARCELS'] ?>
                            </td>
                            <td>
                              <?php
                              $date = date_create($row['PDATE']);
                              echo date_format($date, "d-M-Y H:i:s");
                              ?>
                            </td>

                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"3\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>No Of Orders</th>
                        <th>date</th>

                      </tr>
                    </tfoot>
                  </table>

                </div>
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

  <script>

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    
  });

</script>

</body>

</html>