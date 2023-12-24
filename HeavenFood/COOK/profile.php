<?php

    include('Header.php');

    if(isset($_REQUEST['tmp']))
    {

?>
      <script> alert('You Have Alredy Done the Parcel !!!'); </script>
<?php
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>RESTORANT MANAGEMENT</title>

  <style>

          #ft
          {
            text-align: center;
            margin-bottom: 10px;;
          }
        
      </style>

  <script language="javascript">
			
			function Chk()
			{
				var p=confirm('ARE YOU SURE THEIR IS READY PARCEL ?');
				
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
                <table class="table table-bordered table-striped" style="text-align: center; ">

                  <thead>
                  
                  <tr>
                    <th>LABEL</th>
                    <th>VALUE</th>
                  </tr>
                  </thead>

                  <tbody>

                        <?php

                        $mail = $_SESSION['EMail'];
                        $sql = "select * from COOKREG where EMAIL = '$mail'";
                        $res = mysqli_query($lk, $sql);
                        $ans = mysqli_fetch_assoc($res);
                        
                        $sql1 = "select * from COOK where CFNAME = '{$ans['USERNAME']}'";
                        $res1 = mysqli_query($lk, $sql1);
                        $cnt = mysqli_num_rows($res1);

                        if ($cnt > 0) {
                            while ($ans1 = mysqli_fetch_assoc($res1)) {

                        ?>
                                <tr>
                                    <td><label>Image</label></td>
                                    <td>
                                        <?php   

                                            if($ans1['GENDER'] == "MALE")
                                            {
                                        ?>

                                            <image class="profile-user-img img-circle img-fluid" src="REGISTER/images/MALE (1).jpg" alt="NO IMAGE" height="70" width="70">       
                                        <?PHP
                                            }
                                            else
                                            {
                                        ?>
                                            <image class="profile-user-img img-circle img-fluid" src="REGISTER/images/FEMALE.jpg" alt="NO IMAGE" height="70" width="70">       
                                        <?PHP
                                            }

                                        ?>    
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Waiter Name</label></td>
                                    <td><?php echo $ans1['CFNAME']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>Waiter Last Name</label></td>
                                    <td><?php echo $ans1['CLNAME']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>ADDRESS</label></td>
                                    <td><?php echo $ans1['ADDRSS']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>GENDER</label></td>
                                    <td><?php echo $ans1['GENDER']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>AGE</label></td>
                                    <td><?php echo $ans1['AGE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>CONTACT</label></td>
                                    <td><?php echo $ans1['CONTACT']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>EXPIERNCE</label></td>
                                    <td><?php echo $ans1['EXPIERNCE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>HIREDATE</label></td>
                                    <td><?php echo $ans1['HIREDATE']; ?></td>
                                </tr>
                                <tr>
                                    <td><label>SALARY</label></td>
                                    <td><?php echo $ans1['SALARY']; ?></td>
                                </tr>

                        <?php
                                
                            }
                        }

                        ?>

                    </tbody>
                  
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

  <footer class="main-footer" id="ft">

    <div class="d-none d-sm-inline-block">

      All rights reserved.
      <strong>THE HEAVEN FOOD</strong>
       
      </div>
      
    </footer>

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