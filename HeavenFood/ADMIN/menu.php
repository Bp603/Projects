<?php

include('Header.php');
include('editfood.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
  
  <script>
    
    $(document).ready(function() {

      $(document).on('click', '.view_data', function() {
        var employee_id = $(this).attr("id");
        if (employee_id != '') {
          $.ajax({
            url: "viewfood.php",
            method: "POST",
            data: {
              employee_id: employee_id
            },
            success: function(data) {
              $('#employee_detail').html(data);
              $('#ViewModal').modal('show');
            }
          });
        }
      });

      $(document).on('click', '.edit_data', function() {
        var edit_id = $(this).attr("id");
        if (edit_id != '') {
          $.ajax({
            url: "editfood.php",
            method: "POST",
            data: {
              edit_id: edit_id
            },
            success: function(data) {
              $('#edit_detail').html(data);
              $('#EditModal').modal('show');
            }
          });
        }
      });

      $(document).on('click', '#btnedit', function() {


        var edit_id = $("#tmpmid").val();
        var edit_name = $("#tmpmname").val();
        var edit_category = $("#tmpcategory").val();
        var edit_quantity = $("#tmpquantity").val();
        var edit_price = $("#tmpprice").val();

        $.ajax({
          url: "updatefood.php",
          method: "POST",
          data: {
            id: edit_id,
            name: edit_name,
            category: edit_category,
            quantity: edit_quantity,
            price: edit_price
          },
          success: function(data) {
            if (data == 1) {
              location.reload();
              alert("Record Updated Successfully.");
            }
            else
            {
              alert("Something Went Wrong.");
            }
            
          }
        });
      });

    });
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
                    <h3 class="card-title">MENU</h3>
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal"> + ADD ITEAM </button>
                  </div>
                </div>
                
                <?php
                if(isset($_REQUEST['tmp']))
                {
                ?>
                    <div class="alert alert-danger">In Add Food Field Category Contain Only Number.</div>
                <?php
                }
                ?>

                <?php
                if(isset($_REQUEST['addmn']))
                {
                ?>
                    <div class="alert alert-danger">Already Exist Iteam Name !!</div>
                <?php
                }
                ?>

                <?php
                if(isset($_REQUEST['succ']))
                {
                ?>
                  <script>alert("Record Inserted Successfully.");</script>
                <?php
                }
                ?>

                <?php
                if(isset($_REQUEST['err']))
                {
                ?>
                    <script>alert("Someething Went Wrong !!!.");</script>
                <?php
                }
                ?>

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
                            <label for="i_name">Item Name</label>
                            <input type="text" class="form-control" name="i_name" id="i_name" placeholder="Enter Item Name" pattern="[A-Za-z ]\-{0,}" required>
                          </div>
                          <div class="form-group">
                            <label for="i_category">Item Category</label>
                            <select type="combobox" class="form-control" name="ctname" id="ctname" required>
                              <?php
                              $sql1 = "select * from CATEGORY";
                              $res1 = mysqli_query($lk, $sql1);
                              while ($ans = mysqli_fetch_assoc($res1)) 
                              {
                              ?>
                                <option>  <?php echo $ans["CTID"]; ?> </option>
                                <option>  <?php echo $ans["CTNAME"]; ?> </option>

                              <?php
                              }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="i_quantity">Quantity</label>
                            <input type="text" class="form-control" name="i_quantity" id="i_quantity" placeholder="Enter Item Quntity" pattern="[0-9A-Za-z ]{0,}" required>
                          </div>
                          <div class="form-group">
                            <label for="i_price">Price</label>
                            <input type="text" class="form-control" name="i_price" id="i_price" placeholder="Enter Item Price" pattern="[0-9]{0,}"required>
                          </div>
                          <div class="form-group">
                            <label for="i_img">Choose Image</label>
                            <input type="file" class="form-control" name="i_img" id="i_img" placeholder="Select Image" required>
                          </div>
                          <div class="text-center">
                            <input type="submit" name="food_submit" class="btn-block btn btn-primary" value="ADD ITEAM">
                          </div>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="edit_detail">

                        <form name='editFood' action="./updatefood.php" method='post' enctype='multipart/form-data'>

                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Edit End -->

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
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

                      $sql = "select * from MENU";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                          $no = $row['MID'];
                          $sql1 = "select * from MENU where MID=$no";
                          $res1 = mysqli_query($lk, $sql1);
                          $ans = mysqli_fetch_array($res1);

                      ?>

                          <tr>

                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['MNAME'] ?></td>
                            <td>
                              <?php

                                $sql2 = "select CTNAME FROM CATEGORY WHERE CTID = {$row['CTID']}";
                                $res2 = mysqli_query($lk, $sql2);
                                
                                while($ank = mysqli_fetch_array($res2))
                                {
                                    echo $ank['CTNAME'];
                                }

                              ?>
                            </td>
                            <td><?php echo $row['QNTY'] ?></td>
                            <td><?php echo $row['PRICE'] ?></td>
                            <td>
                              <image class="profile-user-img img-circle img-fluid" src="image/<?php echo $row['MIMAGE'] ?>" alt="NO IMAGE" height="70" width="70">
                            </td>

                            <td>
                              <input type="button" name="view" value="VIEW" id="<?php echo $row['MID']; ?>" class="btn btn-primary btn-sm view_data" />

                              <input type="button" name="edit" value="EDIT" id="<?php echo $row['MID']; ?>" class="btn btn-info btn-sm edit_data"/>

                              <a class="btn btn-danger btn-sm" href="deletefood.php?delid=<?php echo $row['MID'];?>" onclick="return Chk();">
                                Delete
                              </a>    
                                                             
                            </td>

                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"8\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
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
                <!-- Modal View -->
                <div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" id="employee_detail">

                        <form name='viewFood' method='post' enctype='multipart/form-data'>

                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                  <!-- Modal View End-->
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