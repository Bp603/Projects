<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>RESTORANT MANAGEMENT</title>

</head>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
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
            <div class="row"  style="padding:100px 300px;">
              <div class="col-50">
                <div class="container" >
                  <form  action="payscript.php" method="post" style="padding: 25px;">
                  
                      <div class="row" >
                        <div class="col-25">
                          <h3 style="text-align: center;margin:20px 10px;font-family: lato;">ENTER PAYMENT DETAILS</h3>
                        
                        <div class="form-group">
                          <label class="form-control" for="fname"><i class="fa fa-user"></i> Full Name</label>
                          <input class="form-control" type="text" id="fname" name="name" placeholder="John M. Doe" required>
                        </div>
                          <label for="email"><i class="fa fa-envelope"></i> Email</label>
                          <input type="email" id="email" name="email" placeholder="john@example.com" required>
                          <label for="email"><i class="fa fa-pen"></i> Order</label>
                          <input type="text" placeholder="Enter Order id" name="orderid">
                          <label for="amount"><i class="fa fa-money"></i> Amount</label>
                          <input type="text" value="<?php echo 1;?>" placeholder="Enter Amount" name="amount" required>
                          <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
                          <input type="text" id="city" name="mobile" placeholder="Mobile Number" required>
                          <label for="adr"><i class="fa fa-home"></i> Address</label>
                          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>


                        
                      </div>
                    
                      <input type="submit"  value="Pay Now" class="btn1">
                    </form>
                  </div>
                </div>
              
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