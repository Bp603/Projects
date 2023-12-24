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
                  <h3 class="card-title">FEEDBACK</h3>                  
                </div>
              </div> 
                          
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>SR. NO</th>
                    <th>ORDER ID</th>
                    <th>NAME</th>
                    <th>RATING</th>
                    <th>MESSAGE</th>
                  </tr>
                  </thead>

                  <tbody>

                    <?php
              
                      $sql="select * from FEEDBACK";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0)
                      {

                        $i=1;
                        while ($row = mysqli_fetch_assoc($res)) 
                        {
                          
                    ?>
                      
                        <tr>
                          
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row['OID'] ?></td>
                          <td><?php echo $row['NAME'] ?></td>
                          <td><?php echo $row['RATING'] ?></td>
                          <td><?php echo $row['MESSAGE'] ?></td>
                          
                        </tr>
                    <?php 

                        }     
                      }
                      else
                      {
                          echo "<tr><td colspan=\"5\"> NO ONE RECORD IN TABLE </td></tr>";

                      }
                      
                    ?>

                  </tbody>
                  
                  <tfoot>
                    <tr>
                      <th>SR. NO</th>
                      <th>ORDER ID</th>
                      <th>NAME</th>
                      <th>RATING</th>
                      <th>MESSAGE</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["pdf", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

</body>

</html>