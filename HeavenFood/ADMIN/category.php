<?php

include('Header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

  <script language="javascript">
    function Chk() {
      var p = confirm('ARE YOU SURE TO DELETE THIS RECORD?');

      if (p) {
        return true;
      } else {
        return false;
      }
    }
  </script>

  <script>
    $(document).ready(function() {

      $(document).on('click', '.view_cat_data', function() {
        var c_id = $(this).attr("id");
        if (c_id != '') {
          $.ajax({
            url: "viewcat.php",
            method: "POST",
            data: {
              c_id: c_id
            },
            success: function(data) {
              $('#category_detail').html(data);
              $('#viewcatmodal').modal('show');
            }
          });
        }
      });

      $(document).on('click', '.edit_data', function() {
        var edit_id = $(this).attr("id");
        if (edit_id != '') {
          $.ajax({
            url: "editcat.php",
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


        var edit_id = $("#cid").val();
        var edit_name = $("#ctname").val();

        $.ajax({
          url: "updatecat.php",
          method: "POST",
          data: {
            id: edit_id,
            name: edit_name
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
                    <h3 class="card-title">CATEGORY</h3>
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal"> + ADD CATEGORY</button>
                  </div>
                </div>

                <?php

                if (isset($_REQUEST['cat'])) {

                ?>
                  <div class="alert alert-danger"> Already Exist Category Name !! </div>
                <?php
                }

                ?>

                <?php

                if (isset($_REQUEST['ctt'])) {

                ?>
                  <script>
                    alert("Record Inserted Successfully.");
                  </script>
                <?php
                }

                ?>

                <?php

                if (isset($_REQUEST['ctp'])) {

                ?>
                  <script>
                    alert("Something Went Wrong.");
                  </script>
                <?php
                }

                ?>

                <!-- Modal insert -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form name="addFood" method="post" action="addcat.php" enctype="multipart/form-data">

                          <div class="form-group">
                            <label for="i_name">Category Name</label>
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter Category Name" pattern="[A-Za-z ]{0,}" required>
                          </div>
                          <div class="text-center">
                            <input type="submit" name="food_submit" class="btn-block btn btn-primary" value="ADD ITEAM">
                          </div>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>Category Name</th>
                        <th>Operation</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from CATEGORY";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                          $no = $row['CTID'];
                          $sql1 = "select * from MENU where MID=$no";
                          $res1 = mysqli_query($lk, $sql1);
                          $ans = mysqli_fetch_array($res1);

                      ?>

                          <tr>

                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['CTNAME'] ?></td>

                            <td>
                              <input type="button" name="view" value="VIEW" id="<?php echo $row['CTID']; ?>" class="btn btn-primary btn-sm view_cat_data" />
                              <!-- Modal View -->
                              <div class="modal fade" id="viewcatmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">View Item</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body" id="category_detail">

                                      <form name='viewFood' method='post' enctype='multipart/form-data'>

                                      </form>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <input type="button" name="edit" value="EDIT" id="<?php echo $row['CTID']; ?>" class="btn btn-info btn-sm edit_data" />

                              <!-- Modal Edit-->
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

                                      <form name='editFood' action="./updatecat.php" method='post' enctype='multipart/form-data'>

                                      </form>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <a class="btn btn-danger btn-sm" href="deletecat.php?delcatid=<?php echo $row['CTID']; ?>" onclick="return Chk();">
                                Delete
                              </a>
                            </td>

                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"4\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>Category Name</th>
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