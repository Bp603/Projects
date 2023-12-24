<?php

include('Header.php');

if(isset($_REQUEST['cmbCountry']))
	{
		$cid=$_REQUEST['cmbCountry'];
	}
	else
	{
		$cid=0;
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

  <style>
    #ft {
      text-align: center;
      margin-bottom: 10px;
      ;
    }
  </style>

  <script language="javascript">
    function Chk() {
      var p = confirm('ARE YOU SURE THEIR IS READY PARCEL ?');

      if (p) {
        return true;
      } else {
        return false;
      }
    }
  </script>

<script language="javascript">
			
			function state()
			{
				document.examplemodel.submit();
			}
			
		</script>

  <script>
    $(document).ready(function() {

      $(document).on('click', '.view_data', function() {
        var employee_id = $(this).attr("id");
        if (employee_id != '') {
          $.ajax({
            url: "view.php",
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
                    <h3 class="card-title">PARCEL</h3>
                    <a class="btn btn-danger btn-sm" href="deleteall.php" onclick="return Chk();">
                      Delete All
                    </a>
                    <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#exampleModal"> + ADD SPECIAL </button>
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

                        <form name="addFood" method="post" action="add.php" enctype="multipart/form-data">
                          
                          <div class="form-group">
                            <label for="i_category">Category</label>
                            <select name="cmbCountry" onchange="state();">
						
						<option>Select Country</option>
                        <?php
				
				$qry="select * from TABLES WHERE STATUS = 'BOOK'";
				
				echo $qry;
				
				$r=mysqli_query($lk,$qry);
				
			?>
						
						<?php
							
							while($ans=mysqli_fetch_array($r))
							{
								
								$country_id=$ans['TID'];

								
								$country_name=$ans['TABLE_NO'];
								
								if($country_id==$cid)
								{
									echo "<option value=\"$country_id\" selected>$country_name</option>";
								}
								else
								{
									echo "<option value=\"$country_id\">$country_name</option>";
								}
							}
						?>
					  </select>
                            <select type="combobox" class="form-control" name="ctid" id="ctid" onchange="state();" required>
                              <?php
                              $sql1 = "select * from CATEGORY";
                              $res1 = mysqli_query($lk, $sql1);
                              while ($ans = mysqli_fetch_assoc($res1)) {
                              ?>
                                <option> <?php echo $ans["CTID"]; ?> </option>
                                <option> <?php echo $ans["CTNAME"]; ?> </option>

                              <?php
                              }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                          <?php 
				
				$qry="select * from ORDR where TID=$cid";
				
				$r=mysqli_query($lk,$qry);
				
			?>
			<br><br>
			
			CITY : <select name="cmbCity">
					
					<option>Select City</option>
					
					<?php
						
						while($ans=mysqli_fetch_array($r))
						{
							$city_id=$ans['OID'];
							
							$city_name=$ans['OID'];
							
							echo "<option value=\"$city_id\" selected>$city_name</option>";	
						}
					?>
				  </select>
                            <label for="i_category">Menu</label>
                            <select type="combobox" class="form-control" name="mid" id="mid" required>
                              <?php
                              $sql1 = "select * from MENU";
                              $res1 = mysqli_query($lk, $sql1);
                              while ($ans = mysqli_fetch_assoc($res1)) {
                              ?>
                                <option> <?php echo $ans["MID"]; ?> </option>
                                <option> <?php echo $ans["MNAME"]; ?> </option>

                              <?php
                              }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="i_quantity">Iteam Name</label>
                            <input type="text" class="form-control" name="mname" id="mname" placeholder="Enter Item Quntity" pattern="[0-9A-Za-z ]{0,}" required>
                          </div>
                          <div class="form-group">
                            <label for="i_price">Description</label>
                            <textarea class="form-control" name="desc" id="desc" placeholder="Enter Description" pattern="[a-zA-Z]{0,}"></textarea>
                          </div>
                          <div class="text-center">
                            <input type="submit" name="food_submit" class="btn-block btn btn-primary" value="ADD SPECIAL">
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
                        <th>CATEGORY</th>
                        <th>ITEAM NAME</th>
                        <th>DESCRIPTION</th>
                        <th>OPERATION</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from SPECIAL";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                          $CID = $row['CID'];
                          $sql1 = "select * from CATEGORY WHERE CTID = $CID";
                          $res1 = mysqli_query($lk, $sql1);
                          $ans = mysqli_fetch_assoc($res1);


                      ?>

                          <tr>

                            <td><?php echo $i++; ?></td>
                            <td><?php echo $ans['CTNAME'] ?></td>
                            <td><?php echo $row['MNAME'] ?></td>
                            <td><?php echo $row['DESCRIPTION'] ?></td>
                            <td>
                              <input type="button" name="view" value="VIEW" id="<?php echo $row['SID']; ?>" class="btn btn-primary btn-sm view_data" />
                              <a class="btn btn-danger btn-sm" href="delete.php?delid=<?php echo $row['SID']; ?>" onclick="return Chk();">
                                Delete
                              </a>
                            </td>
                          </tr>
                      <?php

                        }
                      } else {
                        echo "<tr><td colspan=\"5\"> NO ONE RECORD IN TABLE </td></tr>";
                      }

                      ?>

                    </tbody>

                    <tfoot>
                      <tr>
                        <th>SR. NO</th>
                        <th>CATEGORY</th>
                        <th>ITEAM NAME</th>
                        <th>DESCRIPTION</th>
                        <th>OPERATION</th>
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

  <footer class="main-footer" id="ft">

    <div class="d-none d-sm-inline-block">

      All rights reserved.
      <strong>THE HEAVEN FOOD</strong>

    </div>
  </footer>

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