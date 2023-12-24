<?php
include('Header.php');
include 'Config.php';
?>

<?php

if (isset($_REQUEST['parcelid'])) {
  $cid = $_REQUEST['parcelid'];
} else {
  $cid = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>RESTORANT MANAGEMENT</title>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    function pay_now() {
      var name = jQuery('#name').val();
      var amt = jQuery('#amt').val();
      var oid = jQuery('#parcelid').val();
      var mail = jQuery('#email').val();
      var con = jQuery('#mobile').val();

      jQuery.ajax({
        type: 'post',
        url: 'payins.php',
        data: "amt=" + amt + "&name=" + name + "&oid=" + oid + "&mail=" + mail + "&con=" + con,
        success: function(result) {
          var options = {
            "key": "rzp_test_8ipASSUhcvNVMH",
            "amount": amt * 100,
            "currency": "INR",
            "name": "Heaven Food",
            "description": "Test Transaction",
            "image": "dist/img/LOGO11-.png",
            "handler": function(response) {
              jQuery.ajax({
                type: 'post',
                url: 'payins.php',
                data: "payment_id=" + response.razorpay_payment_id,
                success: function(result) {
                  window.location.href = "payment.php";
                }
              });
            }
          };
          var rzp1 = new Razorpay(options);
          rzp1.open();
        }
      });


    }
  </script>

  <script language="javascript">
    function parcel() {
      document.f1.submit();
    }
  </script>
  <style>
    /* body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
} */

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type=email] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn1 {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn1:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<?php

$apiKey = "rzp_test_8ipASSUhcvNVMH";

?>

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
                    <h3 class="card-title">PAYMENT DETAILS</h3>

                  </div>
                </div>

                <!--main content-->
                <div class="row" style="padding:100px 300px;">
                  <div class="col-50">
                    <div class="container">
                      <form class="php-form" name="f1" method="post" style="padding: 25px;">

                        <input class="btn" type="hidden" custom="Hidden Element" name="hidden">

                        <div class="row" style="border-style: 5px; ">
                          <div class="col-25">

                            <div class="section-title">
                              <p>Enter Payment Details</p>
                            </div>
                            <br>
                            <div class="form-row ">
                              <label class="form-group" for="parcelid"><i class="fa fa-shopping-cart"></i> Parcel</label>
                              <?php
                              $sql4 = "select * from PARCEL WHERE STATUS = 1";
                              $res4 = mysqli_query($lk, $sql4);
                              ?>
                              <select class="form-control" name="parcelid" id="parcelid" onchange="parcel();">

                                <option> Select Parcel Id : </option>

                                <?php

                                while ($ans = mysqli_fetch_assoc($res4)) {

                                  $t_id = $ans['PID'];

                                  $t_name = $ans['PID'];

                                  if ($t_id == $cid) {
                                ?>
                                    <option value="<?php echo $t_id; ?>" selected><?php echo $t_name; ?></option>
                                  <?php
                                    // echo "<option value=\"$t_id\" selected>$t_name</option>";
                                  } else {
                                    echo "<option value=\"$t_id\">$t_name</option>";
                                  }
                                  ?>

                                <?php
                                }

                                ?>
                              </select>
                            </div>
                            <br>

                            <div class="form-row ">
                              <label class="form-group" for="amot"><i class="fa fa-money"></i> Amount</label>

                              <?php

                              $qry = "select * from PARCELDLT where PID=$cid";
                              $r = mysqli_query($lk, $qry);
                              $total = 0;

                              while ($an = mysqli_fetch_array($r)) {
                                $city_id = $an['TOTAL'];

                                $city_name = $an['TOTAL'];
                                $total = $total + $an['TOTAL'];

                                // echo "<option value=\"$city_id\" selected>$city_name</option>";	
                              }

                              echo "<input class=\"form-control\" type=\"text\" value=\"$total\" id=\"amt\" name=\"amt\">";

                              ?>


                            </div>
                            <br>
                            <div class="form-row ">
                              <label class="form-group" for="name"><i class="fa fa-user"></i> Full Name</label>
                              <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name" required>
                            </div>
                            <br>
                            <div class="form-row ">
                              <label class="form-group" for="email"><i class="fa fa-envelope"></i> Email</label>
                              <input class="form-control" type="email" id="email" name="email" placeholder="Enter E-Mail" required>
                            </div>
                            <br>
                            <div class="form-row ">
                              <label class="form-group" for="city"><i class="fa fa-mobile"></i> Mobile</label>
                              <?php

                              $qry1 = "select * from PARCEL where PID=$cid";
                              $r1 = mysqli_query($lk, $qry1);

                              while ($an1 = mysqli_fetch_array($r1)) {
                                $city_id = $an1['CONTACT'];

                                $city_name = $an1['CONTACT'];

                                echo "<input class=\"form-control\" type=\"text\" value=\"$city_name\" id=\"mobile\" name=\"mobile\">";
                              }

                              ?>

                            </div>
                            <br>
                            <div class="form-row ">
                              <label class="form-group" for="adr"><i class="fa fa-home"></i> Address</label>
                              <input class="form-control" type="text" id="address" name="address" placeholder="Enter Address" required>
                            </div>
                            <br>
                          </div>

                        </div>

                        <div><input type="button" name="btn" value="Pay Now" onclick="pay_now()" class="btn btn-success btn-block"></div>
                      </form>

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

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Payment</h3>
                  </div>
                </div>

                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>SR. NO</th>
                        <th>ORDER ID</th>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>CONTACT</th>
                        <th>AMOUNT</th>
                        <th>STATUS</th>
                        <th>PRINT</th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php

                      $sql = "select * from PAYMENT ORDER BY PID DESC";
                      $res = mysqli_query($lk, $sql);
                      $cnt = mysqli_num_rows($res);

                      if ($cnt > 0) {

                        $i = 1;
                        while ($row = mysqli_fetch_assoc($res)) {
                          $status = $row['STATUS'];

                      ?>

                          <tr>

                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['OID'] ?></td>
                            <td><?php echo $row['NAME'] ?></td>
                            <td><?php echo $row['TYPE'] ?></td>
                            <td><?php echo $row['CONTACT'] ?></td>
                            <td><?php echo $row['AMOUNT'] ?></td>
                            <td>
                              <?php
                              if (($status) == 'pending') {
                              ?>
                                <button class="btn btn-danger btn-sm"><i class="far fa-eye-slash"></i></button>
                              <?php
                              }
                              if (($status) == 'complete') {
                              ?>
                                <button class="btn btn-success btn-sm"><i class="far fa-eye"></i></button>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" target="_blank" href="pay.php?pid=<?php echo $row['PID'];?>">
                                    PRINT
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
                        <th>ORDER ID</th>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>CONTACT</th>
                        <th>AMOUNT</th>
                        <th>STATUS</th>
                        <th>PRINT</th>
                      </tr>
                    </tfoot>
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

</body>

</html>