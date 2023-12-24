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
                  <h3 class="card-title">ORDER</h3>                 
                </div>
              </div> 
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>SR. NO</th>
                    <th>ITEAM NAME</th>
                    <th>TABLE ID</th>
                    <th>KOT NUMBER</th>
                    <th>QUANTITY</th>
                    <th>STATUS</th>
                    <th>NOTE</th>
                  </tr>
                  </thead>

                  <tbody>

                    <?php
              
                      $sql="select * from ORDERS";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);
                                      
                      if($cnt > 0)
                      {

                        $i=1;
                        while ($row = mysqli_fetch_assoc($res)) 
                        {       
                          
                          $status = $row['STATUS'];
                          
                    ?>
                      
                        <tr>
                          
                          <td><?php echo $i++;?></td>
                          <td><?php $NO = $row['MID']; ?>
                              <?php
                                  $sql1="select MNAME from MENU WHERE MID=$NO"; 
                   
                                  $res1=mysqli_query($lk,$sql1);
                                  
                                  while ($ans = mysqli_fetch_assoc($res1)) 
                                  {  
                                      echo $ans['MNAME'];
                                  }
                                      
                              ?>
                          </td>
                          <td><?php echo $row['TID'] ?></td>
                          <td><?php echo $row['KOT_NO'] ?></td>
                          <td><?php echo $row['QNTY'] ?></td>
                          <td>
                          <?php
                            if(($status)=='0')
                            {
                          ?>
                             <button class="btn btn-danger btn-sm"><i class="far fa-eye-slash"></i></button>
                          <?php
                            }
                              if(($status)=='1')
                              {
                          ?>
                              <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                          <?php
                              }
                          ?>
                          </td>
                          <td><?php echo $row['NOTES'] ?></td>  
                          
                        </tr>
                    <?php 

                        }                    
                      
                      }
                      else
                      {
                          echo "<tr><td colspan=\"8\"> NO ONE RECORD IN TABLE </td></tr>";

                      }
                      
                    ?>

                  </tbody>
                  
                  <tfoot>
                  <tr>
                  <th>SR. NO</th>
                    <th>ITEAM NAME</th>
                    <th>TABLE ID</th>
                    <th>KOT NUMBER</th>
                    <th>QUANTITY</th>
                    <th>STATUS</th>
                    <th>NOTE</th>                   
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
<!-- Page specific script -->
<script>

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
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