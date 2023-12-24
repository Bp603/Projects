<?php

    include('Header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>RESTORANT MANAGEMENT</title>

  <script language="javascript">
			
			function Chk()
			{
				var p=confirm('ARE YOU SURE TO DELETE THIS RECORD?');
				
				if(p)
				{
					return true;
				}
				else
				{
					return false;
				}
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
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="card-title">PARCEL</h3>                  
                </div>
              </div> 
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  
                  <tr>
                    <th>SR. NO</th>
                    <th>STATUS</th>
                    <th>ORDERS</th>
                  </tr>
                  </thead>

                  <tbody>

                    <?php
              
                      $sql="select * from PARCEL";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);
                                      
                      if($cnt > 0)
                      {

                        $i=1;
                        while ($row = mysqli_fetch_assoc($res)) 
                        {       
                          
                          $status = $row['STATUS'];
                          $oid = $row['PID'];
                          
                      ?>

                      <?php

                    ?>
                        <tr>
                          <td><?php echo $i++;?></td>
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
                          <td>
                              <form action="index.php" method="POST" name="frm">
                                
                                <input  class="btn btn-success btn-sm" type='button' name="btn" onclick="location.href='parcel.php?id=<?php echo $row['PID']; ?>'" value="VIEW PARCEL"/>
                              </form>
                              
                            </td>
                          </tr>
                    <?php 

                        } 
                      ?>
                      
                      <?PHP                   
                    
                  ?>
                  <?php
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
                    
                    <th>STATUS</th>
                    <th>ORDERS</th> 

                  </tr>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>ITEAM NAME</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                      </tr>
                    </thead>

                    <tbody >

                      <?php
                      
                      if (isset($_REQUEST['id'])) 
                      { 
                        $sql1 = "select * from PARCELDLT WHERE PID = {$_REQUEST['id']}";
                        $res = mysqli_query($lk,$sql1);
                        $i = 1;
                        $total = 0;
                      ?>
                        <tr align="center">                             
                            <th colspan="4"> <?php echo "Parcel No :&nbsp;" .  $_REQUEST['id']; ?> </th>
                        </tr>
                      <?php
                        while($ans = mysqli_fetch_assoc($res))
                        {                          
                      ?>
                          
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $ans['MNAME']; ?></td>
                            <td><?php echo $ans['QNTY']; ?></td>
                            <td><?php echo $ans['TOTAL']; ?></td>
                          </tr>                          
                      <?php
                          $total = $total + $ans['TOTAL'];
                        }
                      ?>
                          <tr style="background-color:#e6ffe6; font-weight: 900;">                          
                            <td colspan="3" align="right">Total</td>
                            <td>₹ <?php echo number_format($total, 2); ?></td>                          
                          </tr>
                      <?php
                      }  
                      else {
                        echo "<tr><td colspan=\"4\"> NO ONE RECORD IN TABLE </td></tr>";
                      }                      
                      ?>


                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>ITEAM NAME</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
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