<?php
    include('Header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>RESTORANT MANAGEMENT</title>

   <!-- DataTables -->
   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                  <h3 class="card-title">MENU</h3>                  
                  <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal"> + ADD ITEAM </button>
                </div>
              </div> 
              
                  <!-- Modal insert -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                        <form name="addFood" method="post" action="addfood.php" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="i_id">Item ID</label>
                            <input type="text" class="form-control" name="i_id" id="i_id" placeholder="Enter Item Id" required>
                          </div>
                          <div class="form-group">
                            <label for="i_name">Item Name</label>
                            <input type="text" class="form-control" name="i_name" id="i_name" placeholder="Enter Item Name" required>
                          </div>
                          <div class="form-group">
                            <label for="i_category">Item Category</label>
                            <input type="text" class="form-control" name="i_category" id="i_category" placeholder="Enter Item Category" required>
                          </div>
                          <div class="form-group">
                            <label for="i_quantity">Quantity</label>
                            <input type="text" class="form-control" name="i_quantity" id="i_quantity" placeholder="Enter Item Quntity" required>
                          </div>
                          <div class="form-group">
                            <label for="i_price">Price</label>
                            <input type="text" class="form-control" name="i_price" id="i_price" placeholder="Enter Item Price" required>
                          </div>
                          <div class="form-group">
                            <label for="i_image">Choose Image</label>
                            <input type="file" class="form-control" name="i_image" id="i_image" placeholder="Select Image" required>
                          </div>
                          <div class="text-center">
                            <input type="submit" name="food_submit" class="btn-block btn btn-primary" value="Add Item" required>
                          </div>
                      </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>                  
                           
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>
                    <th>SR. NO</th>
                    <th>ITEAM ID</th>
                    <th>ITEAM NAME</th>
                    <th>ITEAM CATEGORY</th>
                    <th>ITEAM QUANTITY</th>
                    <th>ITEAM PRICE</th>
                    <th>IMAGES</th>
                    <th>Operation</th>
                  </tr>
                  </thead>

                  <tbody>

                    <?php
              
                      $sql="select * from MENU";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);
                                      
                      if($cnt > 0)
                      {

                        $i=1;
                        while ($row = mysqli_fetch_assoc($res)) 
                        {
                          $no=$row['MID'];
                          $sql1="select * from MENU where MID=$no";
                          $res1=mysqli_query($lk,$sql1);              
                          $ans=mysqli_fetch_array($res1);
                        
                          $iid=$ans['MID'];
                          $iname=$ans['MNAME'];
                          $icategory=$ans['CATEGORY'];
                          $iquantity=$ans['QNTY'];
                          $iprice=$ans['PRICE'];
                          $iimage=$ans['IMAGE'];                          
                          
                    ?>
                      
                        <tr>
                          
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row['MID'] ?></td>
                          <td><?php echo $row['MNAME'] ?></td>
                          <td><?php echo $row['CATEGORY'] ?></td>
                          <td><?php echo $row['QNTY'] ?></td>
                          <td><?php echo $row['PRICE'] ?></td>
                          <td><image src="image/<?php	echo $row['IMAGE']?>" alt="NO IMAGE" height="110" width="110"></td>                                                
                          
                          <td>   
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ViewModal<?php echo $row['MID'] ?>">                                
                                <i class="fas fa-folder"></i> VIEW </button>

                                <a class="btn btn-info btn-sm" href="view.php">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <a class="btn btn-info btn-sm" href="#">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="deletefood.php?delid=<?php echo $row['MID'];?>" onclick="return Chk();">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>                  
                          </td>

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
                    <th>ITEAM ID</th>
                    <th>ITEAM NAME</th>
                    <th>ITEAM CATEGORY</th>
                    <th>ITEAM QUANTITY</th>
                    <th>ITEAM PRICE</th>
                    <th>IMAGES</th>   
                    <th>Operation</th>
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
   
    <?php
		include "footer.php";		
	  ?>

  </div>
  <!-- ./wrapper -->

</body>

</html>