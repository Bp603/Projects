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
                  <h3 class="card-title">SUB CATEGORY</h3>                
                  
                </div>
              </div> 
              
              <div class="card-body">
                
                   <form class="form-inline" name="frmsubcat" methpd="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                      <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                          <label>ENTER FOOD CATEGORY FOR SEARCING : </label>
                      </div>

                        <div class="col-lg-4 col-md-3 col-sm-6 col-12" style="align-items: center;">

                            
                            <select class="form-select btn btn-outline-secondary dropdown-toggle" name="ctname" id="ctname">
                            <option value="0"> SELECT ONE CATEGORY  </option>
                            
          
                                  <?php
                                      $sql1 = "select * from CATEGORY";
                                      $res1 = mysqli_query($lk, $sql1);
                                      while ($ans = mysqli_fetch_assoc($res1)) 
                                      {
                                        $no = $ans['CTID'];
                                        $name = $ans['CTNAME'];
                                ?>
                                        
                                        <option value="<?php echo $ans["CTID"]; ?>"> <?php echo $ans["CTNAME"]; ?> </option>
                                        

                                <?php
                                      }
                                ?>
                            </optgroup>
                            </select>
      
                        </div>

                        <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                            <button type="submit" name="food_search" class="btn btn-outline-success btn-sm">SEARCH CATEGORY</button>
                        </div>

                      </form>

                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>SR. NO</th>
                    <th>ITEAM NAME</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                  </tr>
                  </thead>

                  <tbody>

                    <?php

                      if(isset($_REQUEST['food_search']))
                      {
                        if($_REQUEST['ctname']!=0)
                        {
              
                      $sql="select * from MENU where CTID = {$_REQUEST['ctname']}";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);

                        $i=1;
                        while ($row = mysqli_fetch_assoc($res)) 
                        {
    
                         
                    ?>
                      
                        <tr>
                          
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row['MNAME'] ?></td>
                          <td><?php echo $row['QNTY'] ?></td>
                          <td><?php echo $row['PRICE'] ?></td>
                          <td>
                              <image src="image/<?php echo $row['MIMAGE'] ?>" class="profile-user-img img-circle img-fluid" alt="NO IMAGE" height="70" width="70">
                            </td>

                        </tr>
                    <?php 

                        }

                        }
                      
                      }
                      else
                      {
                        
                        echo "<tr>";
                        echo "<td> NO </td>";
                        echo "<td> ANY </td>";
                        echo "<td> RECORD </td>";
                        echo "<td> IS </td>";
                        echo "<td> FOUND </td>";
                        echo "</tr>";
                      }
                      
                    ?>

                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th>SR. NO</th>
                    <th>ITEAM NAME</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
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