<?php

include('Header.php');
include('editwaiter.php');
include('editcook.php');

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

            $(document).on('click', '.waiter_data', function() {
                var vw_id = $(this).attr("id");
                if (vw_id != '') {
                    $.ajax({
                        url: "viewwaiter.php",
                        method: "POST",
                        data: {
                            vw_id: vw_id
                        },
                        success: function(data) {
                            $('#waiter_detail').html(data);
                            $('#waitermodal').modal('show');
                        }
                    });
                }
            });

            $(document).on('click', '.cook_data', function() {
                var vc_id = $(this).attr("id");
                if (vc_id != '') {
                    $.ajax({
                        url: "viewcook.php",
                        method: "POST",
                        data: {
                            vc_id: vc_id
                        },
                        success: function(data) {
                            $('#cook_detail').html(data);
                            $('#cookmodal').modal('show');
                        }
                    });
                }
            });

            $(document).on('click', '.w_edit_data', function() {
                var edit_id = $(this).attr("id");
                if (edit_id != '') {
                    $.ajax({
                        url: "editwaiter.php",
                        method: "POST",
                        data: {
                            edit_id: edit_id
                        },
                        success: function(data) {
                            $('#waiter_edit_detail').html(data);
                            $('#waitereditmodal').modal('show');
                        }
                    });
                }
            });

            $(document).on('click', '#btnedit', function() {


                var edit_id = $("#ewid").val();
                var edit_fname = $("#ewfname").val();
                var edit_lname = $("#ewlname").val();
                var edit_address = $("#ewadd").val();
                var edit_gender = $("#ewgen").val();
                var edit_age = $("#ewage").val();
                var edit_contact = $("#ephone").val();
                var edit_expiernce = $("#ewexp").val();
                var edit_hiredate = $("#ewhiredate").val();
                var edit_salary = $("#ewsal").val();

                $.ajax({

                    url: "updatewaiter.php",
                    method: "POST",
                    data: {
                        id: edit_id,
                        fname: edit_fname,
                        lname: edit_lname,
                        add: edit_address,
                        gender: edit_gender,
                        age: edit_age,
                        contact: edit_contact,
                        exp: edit_expiernce,
                        hdate: edit_hiredate,
                        sal: edit_salary
                    },
                    success: function(data) {
                        location.reload();
                        alert("Record Updated Successfully.");

                    }
                });

            });

            $(document).on('click', '.c_edit_data', function() {
                var cedit_id = $(this).attr("id");
                if (cedit_id != '') {
                    $.ajax({
                        url: "editcook.php",
                        method: "POST",
                        data: {
                            cedit_id: cedit_id
                        },
                        success: function(data) {
                            $('#cook_edit_detail').html(data);
                            $('#cookeditmodal').modal('show');
                        }
                    });
                }
            });

            $(document).on('click', '#btncedit', function() {


                var edit_id = $("#c_id").val();
                var edit_fname = $("#c_fname").val();
                var edit_lname = $("#c_lname").val();
                var edit_address = $("#c_add").val();
                var edit_gender = $("#cgen").val();
                var edit_age = $("#c_age").val();
                var edit_contact = $("#c_phone").val();
                var edit_expiernce = $("#cexpiernce").val();
                var edit_cooktype = $("#cooktype").val();
                var edit_hiredate = $("#chiredate").val();
                var edit_salary = $("#csalary").val();

                $.ajax({

                    url: "updatecook.php",
                    method: "POST",
                    data: {
                        id: edit_id,
                        fname: edit_fname,
                        lname: edit_lname,
                        add: edit_address,
                        gender: edit_gender,
                        age: edit_age,
                        phone: edit_contact,
                        exp: edit_expiernce,
                        ctype: edit_cooktype,
                        hdate: edit_hiredate,
                        sal: edit_salary
                    },
                    success: function(data) {
                        location.reload();
                        alert("Record Updated Successfully.");
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
                                        <h3 class="card-title">WAITER</h3>
                                        <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#AddWaiterModal"> + ADD WAITER </button>
                                    </div>
                                </div>

                                <?php
                                    if(isset($_REQUEST['staffw']))
                                    {
                                ?>
                                    <script>alert("Record Inserted Successfully.");</script>
                                <?php
                                    }
                                ?>

                                <?php
                                    if(isset($_REQUEST['stafw']))
                                    {
                                ?>
                                    <script>alert("Something Went Wrong.");</script>
                                <?php
                                    }
                                ?>

                                <?php
                                    if(isset($_REQUEST['staffc']))
                                    {
                                ?>
                                    <script>alert("Record Inserted Successfully.");</script>
                                <?php
                                    }
                                ?>

                                <?php
                                    if(isset($_REQUEST['stafc']))
                                    {
                                ?>
                                    <script>alert("Something Went Wrong.");</script>
                                <?php
                                    }
                                ?>

                                <!-- Modal WAiter insert -->
                                <div class="modal fade" id="AddWaiterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Waiter</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form name="AddWaiter" method="post" action="addwaiter.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Waiter First Name</label>
                                                        <input type="text" class="form-control" name="wfname" id="wfname" placeholder="Enter Waiter First Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Waiter Last Name</label>
                                                        <input type="text" class="form-control" name="wlname" id="wlname" placeholder="Enter Waiter Last Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="textarea" class="form-control" name="wadd" id="wadd" placeholder="Enter Address" pattern="[A-Za-z ]\.\,{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label><br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "FEMALE") echo "checked"; ?> value="FEMALE" checked>Female<br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "MALE") echo "checked"; ?> value="MALE">Male<br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "OTHER") echo "checked"; ?> value="OTHER">Other<br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" name="wage" id="wage" placeholder="Enter Age" pattern="[0-9]{0,}"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Contact" pattern="[0-9]{10}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Expiernce</label>
                                                        <input type="text" class="form-control" name="wexp" id="wexpiernce" placeholder="Enter Expiernce" pattern="[A-Za-z0-9 ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hiredate</label>
                                                        <input type="date" class="form-control" name="whdate" id="whiredate" placeholder="Enter Hiredate" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Salary</label>
                                                        <input type="text" class="form-control" name="wsal" id="wsalary" placeholder="Enter Salary" pattern="[0-9]{0,}" required>
                                                    </div>
                                                    <div class="text-center">
                                                        <input type="submit" name="waiter_submit" class="btn-block btn btn-primary" value="ADD WAITER">
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
                                                <th>NAME</th>
                                                <th>GENDER</th>
                                                <th>AGE</th>
                                                <th>CONTACT</th>
                                                <th>EXPIERNCE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php

                                            $sql = "select * from WAITER";
                                            $res = mysqli_query($lk, $sql);
                                            $cnt = mysqli_num_rows($res);

                                            if ($cnt > 0) {

                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $no = $row['WID'];
                                                    $sql1 = "select * from WAITER where WID=$no";
                                                    $res1 = mysqli_query($lk, $sql1);
                                                    $ans = mysqli_fetch_array($res1);

                                            ?>

                                                    <tr>

                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $row['WFNAME'] ?> &nbsp; <?php echo $row['WLNAME'] ?></td>
                                                        <td><?php echo $row['GENDER'] ?></td>
                                                        <td><?php echo $row['AGE'] ?></td>
                                                        <td><?php echo $row['CONTACT'] ?></td>
                                                        <td><?php echo $row['EXPIERNCE'] ?></td>
                                                        <td><?php echo $row['SALARY'] ?></td>
                                                        <td>
                                                            <input type="button" name="view" value="VIEW" id="<?php echo $row['WID']; ?>" class="btn btn-primary btn-sm waiter_data" />

                                                            <!-- Modal View -->
                                                            <div class="modal fade" id="waitermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">View Waiter</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" id="waiter_detail">

                                                                            <form name='viewFood' method='post' enctype='multipart/form-data'>

                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="button" name="edit" value="EDIT" id="<?php echo $row['WID']; ?>" class="btn btn-info btn-sm w_edit_data" />

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="waitereditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Waiter</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" id="waiter_edit_detail">

                                                                            <form name='viewFood' action="./updatewaiter.php" method='post' enctype='multipart/form-data'>

                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-danger btn-sm" href="deletewaiter.php?delwid=<?php echo $row['WID']; ?>" onclick="return Chk();">
                                                                Delete
                                                            </a>
                                                        </td>

                                                    </tr>
                                            <?php

                                                }
                                            } else {
                                                echo "<tr><td colspan=\"12\"> NO ONE RECORD IN TABLE </td></tr>";
                                            }

                                            ?>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>NAME</th>
                                                <th>GENDER</th>
                                                <th>AGE</th>
                                                <th>CONTACT</th>
                                                <th>EXPIERNCE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">COOK</h3>
                                        <button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#AddCookModal"> + ADD COOK </button>
                                    </div>
                                </div>

                                <!-- Modal WAiter insert -->
                                <div class="modal fade" id="AddCookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Waiter</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <form name="AddCook" method="post" action="addcook.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Cook First Name</label>
                                                        <input type="text" class="form-control" name="cfname" id="cfname" placeholder="Enter Waiter First Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cook Last Name</label>
                                                        <input type="text" class="form-control" name="clname" id="clname" placeholder="Enter Waiter Last Name" pattern="[A-Za-z ]{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="textarea" class="form-control" name="cadd" id="cadd" placeholder="Enter Address" pattern="[A-Za-z ]\.\,{0,}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label><br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "FEMALE") echo "checked"; ?> value="FEMALE" checked>Female<br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "MALE") echo "checked"; ?> value="MALE">Male<br>
                                                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "OTHER") echo "checked"; ?> value="OTHER">Other<br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Age</label>
                                                        <input type="text" class="form-control" name="cage" id="cage" placeholder="Enter Age" pattern="[0-9]{0,}"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="tel" class="form-control" id="cphone" name="cphone" placeholder="Enter Contact" pattern="[0-9]{10}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Expiernce</label>
                                                        <input type="text" class="form-control" name="cexp" id="cexp" placeholder="Enter Expiernce" pattern="[A-Za-z0-9 ]{0,}"required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cook Type</label>
                                                        <select type="combobox" class="form-control" name="ctype" id="ctype" required>
                                                            <?php
                                                            $sql1 = "select * from CATEGORY";
                                                            $res1 = mysqli_query($lk, $sql1);
                                                            while ($ans = mysqli_fetch_assoc($res1)) {
                                                            ?>
                                                                <option> <?php echo $ans["CTNAME"]; ?> </option>

                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hiredate</label>
                                                        <input type="date" class="form-control" name="chdate" id="chdate" placeholder="Enter Hiredate" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Salary</label>
                                                        <input type="text" class="form-control" name="csal" id="csal" placeholder="Enter Salary" pattern="[0-9]{0,}"required>
                                                    </div>
                                                    <div class="text-center">
                                                        <input type="submit" name="cook_submit" class="btn-block btn btn-primary" value="ADD cook">
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

                                    <table id="example2" class="table table-bordered table-striped">


                                        <thead>
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>NAME</th>
                                                <th>GENDER</th>
                                                <th>AGE</th>
                                                <th>CONTACT</th>
                                                <th>COOK TYPE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php

                                            $sql = "select * from COOK";
                                            $res = mysqli_query($lk, $sql);
                                            $cnt = mysqli_num_rows($res);

                                            if ($cnt > 0) {

                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $no = $row['CID'];
                                                    $sql1 = "select * from COOK where CID=$no";
                                                    $res1 = mysqli_query($lk, $sql1);
                                                    $ans = mysqli_fetch_array($res1);

                                            ?>

                                                    <tr>

                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $row['CFNAME'] ?> &nbsp; <?php echo $row['CLNAME'] ?></td>
                                                        <td><?php echo $row['GENDER'] ?></td>
                                                        <td><?php echo $row['AGE'] ?></td>
                                                        <td><?php echo $row['CONTACT'] ?></td>
                                                        <td><?php echo $row['CTYPE'] ?></td>
                                                        <td><?php echo $row['SALARY'] ?></td>
                                                        <td>
                                                            <input type="button" name="view" value="VIEW" id="<?php echo $row['CID']; ?>" class="btn btn-primary btn-sm cook_data" />

                                                            <input type="button" name="edit" value="EDIT" id="<?php echo $row['CID']; ?>" class="btn btn-info btn-sm c_edit_data" />

                                                            <!-- Modal Edit -->
                                                            <div class="modal fade" id="cookeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Cook</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" id="cook_edit_detail">

                                                                            <form name='viewFood' action="./updatecook.php" method='post' enctype='multipart/form-data'>

                                                                            </form>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-danger btn-sm" href="deletecook.php?delcid=<?php echo $row['CID']; ?>" onclick="return Chk();">
                                                                Delete
                                                            </a>
                                                        </td>

                                                    </tr>
                                            <?php

                                                }
                                            } else {
                                                echo "<tr><td colspan=\"13\"> NO ONE RECORD IN TABLE </td></tr>";
                                            }

                                            ?>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th>SR. NO</th>
                                                <th>NAME</th>
                                                <th>GENDER</th>
                                                <th>AGE</th>
                                                <th>CONTACT</th>
                                                <th>COOK TYPE</th>
                                                <th>SALARY</th>
                                                <th>OPERATION</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <!-- Modal View -->
                                <div class="modal fade" id="cookmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View Cook</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="cook_detail">

                                                <form name='viewFood' method='post' enctype='multipart/form-data'>

                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Modal View End-->
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
            $("#example2").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["pdf", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>

</html>