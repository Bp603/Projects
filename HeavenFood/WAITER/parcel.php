<?php

include('Config.php');

session_start();
$email = $_SESSION['EMMail'];

if (!isset($_SESSION['EMMail'])) {

?>
<?php
	header("Location: Register.php");
}
?>

<?php
if(isset($_REQUEST['abc']))
{
?>
	<script>alert("Parcel Is Removed.");</script>
<?php
}
?>
<?php
if(isset($_REQUEST['xyz']))
{
?>
	<script>alert("Order Is Removed.");</script>
<?php
}
?>
<script>
	alert(print_r($email));
	alert('hii');
</script>

<?php
if (isset($_REQUEST['tableid'])) {
	$tid = $_REQUEST['tableid'];
} else {
	$tid = 0;
}
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_REQUEST['btnordr'])) {
	foreach ($_SESSION["shopping_cart"] as $keys => $values) {
		$id = $values["item_id"];
		$name = $values["item_name"];
		$qnty = $values["item_quantity"];
		$prc = $values["item_price"];
		$total = $qnty * $prc;
		$oid = $_SESSION['lid'];

		$sql = "insert into ORDRDLT(MID,MNAME,QNTY,PRICE,TOTAL,OID) values($id,'$name',$qnty,$prc,$total,$oid)";
		echo  $sql;

		$res = mysqli_query($connect, $sql);

		if ($res == 1) {
			unset($_SESSION['shopping_cart']);
			header("Location: table.php");
		}
	}
}

if (isset($_REQUEST['btnpar'])) {
	foreach ($_SESSION["shopping_cart"] as $keys => $values) 
	{
		$id = $values["item_id"];
		$name = $values["item_name"];
		$qnty = $values["item_quantity"];
		$prc = $values["item_price"];
		$total = $qnty * $prc;
		$pid = $_SESSION['pid'];

		$sql6 = "insert into PARCELDLT(MID,MNAME,QNTY,PRICE,TOTAL,PID) values($id,'$name',$qnty,$prc,$total,$pid)";
		echo  $sql6;
		

		$res6 = mysqli_query($connect, $sql6);

		if ($res6 == 1) {
			unset($_SESSION['shopping_cart']);
			header("Location: table.php");
		}
	}
}

if (isset($_REQUEST['btnupd'])) {
	foreach ($_SESSION["shopping_cart"] as $keys => $values) {
		$id = $values["item_id"];
		$name = $values["item_name"];
		$qnty = $values["item_quantity"];
		$prc = $values["item_price"];
		$total = $qnty * $prc;
		$oid = $_REQUEST['oid'];

		$sql = "insert into ORDRDLT(MID,MNAME,QNTY,PRICE,TOTAL,OID) values($id,'$name',$qnty,$prc,$total,$oid)";
		echo  $sql;

		$res = mysqli_query($connect, $sql);

		if ($res == 1) {
			unset($_SESSION['shopping_cart']);
			header("Location: table.php");
		}
	}
}


if (isset($_REQUEST['btnmkordr'])) {
	$tid1 = $_REQUEST['t_id'];
	$sta1 = 0;
	$sql2 = "insert into ORDR(TID,STATUS) values($tid1,'$sta1')";
	
	$res2 = mysqli_query($connect, $sql2);

	if ($res2 == 1) {
		header("Location: menu.php");
	}
}

if(isset($_REQUEST['btndelordr']))
{
	$deloid = $_REQUEST['dorid'];

	$sql7 = "delete from ORDR Where OID = $deloid";
	$res7 = mysqli_query($connect,$sql7);

	if ($res7 == 1) {
		header("Location: order.php?xyz=dell");
	}
}

if(isset($_REQUEST['btndelpar']))
{
	$delpid = $_REQUEST['dparid'];

	$sql9 = "delete from PARCEL Where PID = $delpid";
	$res9 = mysqli_query($connect,$sql9);

	if ($res9 == 1) {
		header("Location: parcel.php?abc=del");
	}
}

if (isset($_REQUEST['btnmkpar'])) {
	$con = $_REQUEST['con'];
	$sta1 = 0;
	$sql3 = "insert into PARCEL(CONTACT,STATUS) values($con,'$sta1')";
	echo $sql3;
	
	$res3 = mysqli_query($connect, $sql3);

	if ($res3 == 1) {
		header("Location: menu.php");
	}
}

if (isset($_REQUEST['btncan'])) {
	foreach ($_SESSION["shopping_cart"] as $keys => $values) {
		unset($_SESSION["shopping_cart"]);
		echo '<script>alert("Order Removed")</script>';
		echo '<script>window.location="order.php"</script>';
	}
}

if (isset($_REQUEST['btncanpar'])) {
	foreach ($_SESSION["shopping_cart"] as $keys => $values) {
		unset($_SESSION["shopping_cart"]);
		echo '<script>alert("Parcel Removed")</script>';
		echo '<script>window.location="order.php"</script>';
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("1 Item Removed")</script>';
				echo '<script>window.location="order.php"</script>';
			}
		}
	}
	if ($_GET["action"] == "del") {
		$no = $_REQUEST['id'];

		$sql = "delete from ORDRDLT where KOT=$no";

		mysqli_query($lk, $sql);

	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>RESTAURANT MANAGEMENT</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">


	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style1.css" rel="stylesheet">
	<link href="assets/css/starrat.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
	.order .sll select {
		background: #0c0b09;
		border-color: #625b4b;
		box-shadow: none;
		color: #a49b89;
		width: 100%;
	}

	.order .ip input::-webkit-input-placeholder{
	color: #a49b89;
	}

	.order .ip input::-moz-placeholder{
	color: #a49b89;
	}

	.order .ip input:-ms-input-placeholder{
	color: #a49b89;
	}

	.order .ip input::-ms-input-placeholder{
	color: #a49b89;
	}

	.order .ip input::placeholder{
	color: #a49b89;
	}

	.order .ip input {
	height: 44px;
	}

	.order .btn input[type="submit"] {
		background: #cda45e;
		border: 0;
		padding: 10px 35px;
		color: #fff;
		transition: 0.4s;
		border-radius: 50px;
	}

	.order .btn input[type="submit"]:hover {
		background: #d3af71;
	}

	.order .btnadd button {
		background: #cda45e;
		border: 0;
		padding: 10px 35px;
		color: #fff;
		transition: 0.4s;
		border-radius: 50px;
		padding-bottom: 10px;
	}

	a {
		color: #fff;
	}

	.order .table {
		border: 2px solid #625b4b;
		color: #a49b89;
	}
</style>

<script language="javascript">

	function state() {
		document.frm.submit();
	}

	function delor()
	{
		var p=confirm('ARE YOU SURE TO FINAL DETE THIS ORDER ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function delpar()
	{
		var p=confirm('ARE YOU SURE TO FINAL DELETE THIS PARCEL ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function add()
	{
		var p=confirm('ARE YOU SURE TO FINAL THIS ORDER ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function can()
	{
		var p=confirm('ARE YOU SURE TO CANCEL THIS FULL ORDER ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function addd()
	{
		var p=confirm('ARE YOU SURE TO FINAL THIS PARCEL ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function cann()
	{
		var p=confirm('ARE YOU SURE TO CANCEL THIS FULL PARCEL ? ');
				
		if(p)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function chg()
	{
		var p=confirm('ARE YOU SURE TO ADD MORE FOOD AND FINAL THIS ORDER ? ');
				
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

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-flex align-items-center fixed-top">
		<div class="container d-flex">
			<div class="contact-info mr-auto">
				<i class="icofont-phone"></i> +91 9081939635
				<span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> ALL DAY: 11:00 AM - 11:00 PM</span>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<h2 Class="logo mr-auto"><a href="index.php">Heaven&nbsp;Food</a></h2>
			<!-- <img class="animation__shake" src="./IMAGE/LOGO11-.png" alt="Resrto" height="50" width="55" />&emsp;&emsp;&emsp;&emsp; -->
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="payment.php">Payment</a></li>
					<li><a href="feedback.php">Feedback</a></li>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<main id="main">
		<section class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Parcel</h2>
					<ol>
						<li><a href="index.php">Home</a></li>
					</ol>
				</div>

			</div>
		</section>

		<section class="inner-page">
			<div class="container">
				<div class="container">

					<form class="order" name="frm" method="post" action="order.php">

						<div class="section-title">
							<p>Make Parcel</p>
						</div>
						<div class="row form-inline">
							<div class="col-lg-4 col-md-4 col-12 sll">
								<input type="text" style="background-color: #0c0b09;  border-style: solid;  border-width: 1px;  height: 44px; border-color: #625b4b;  color:blanchedalmond; width: 100%" name="con" id="con" placeholder="Enter Contact For Parcel" pattern="[0-9]{10}"/>
							</div>
							<?PHP
							$sql1 = "select * from PARCEL ORDER BY PID DESC LIMIT 1";
							$res1 = mysqli_query($connect, $sql1);
							$ans3 = mysqli_fetch_assoc($res1);
							
							$lastpid = $ans3['PID'];
							$_SESSION['pid'] = $lastpid;

							?>
							<div class="col-lg-4 col-md-4 col-12 btn">
								<input type="submit" name="btnmkpar" style="margin-top:5px;" class="btn btn-success" value="Make Parcel" />
							</div>
							<div class="col-lg-4 col-md-4 col-12">
							</div>
						</div>
						<hr noshade size="5" align="center" width="100%">
						</hr>
						<div style="clear:both"></div>
						<br />
						<div class="section-title">
							<p>Parcel Detail</p>
						</div>

						<div class="row form-inline">
							<div class="col-lg-3 col-md-3 col-12">

							</div>

							<div class="col-lg-3 col-md-3 col-12">

							</div>
					
							<div class="col-lg-3 col-md-3 col-12">
								
							</div>
							<div class="col-lg-3 col-md-3 col-12 btn btnadd">
							
								<div style='float: right; '>
									<button><a href="menu.php"> Add More Food </a></button>
								</div>
						
							</div>

						</div>
						<br>

						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th width="10%">Order Id</th>
									<th width="40%">Item Name</th>
									<th width="10%">Quantity</th>
									<th width="20%">Price</th>
									<th width="15%">Total</th>
									<th width="5%">Action</th>
								</tr>
								<?php
								if (!empty($_SESSION["shopping_cart"])) {
									$total = 0;
									foreach ($_SESSION["shopping_cart"] as $keys => $values) {
								?>
										<tr>
											<td></td>
											<td><?php echo $values["item_name"]; ?></td>
											<td><?php echo $values["item_quantity"]; ?></td>
											<td>₹ <?php echo $values["item_price"]; ?></td>
											<td>₹ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
											<td><a href="order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
										</tr>
									<?php
										$total = $total + ($values["item_quantity"] * $values["item_price"]);
									}
									?>
									<tr>
										<td colspan="4" align="right">Total</td>
										<td align="right">₹ <?php echo number_format($total, 2); ?></td>
										<td></td>
									</tr>
								<?php
								}
								?>
								<?php

								if (isset($_REQUEST['btnsrc'])) {
									$total = 0;
									$tid1 = $_REQUEST['o_id'];

									$sql3 = "select * from ORDRDLT where OID = {$tid1}";
									$res3 = mysqli_query($lk, $sql3);

									while ($ans2 = mysqli_fetch_assoc($res3)) {


								?>
										<tr>
											<th><?php echo $ans2['OID']; ?></th>
											<th><?php echo $ans2['MNAME']; ?></th>
											<th><?php echo $ans2['QNTY']; ?></th>
											<th><?php echo $ans2['PRICE']; ?></th>
											<th><?php echo $ans2['TOTAL']; ?></th>
											<td><a href="order.php?action=del&id=<?php echo $ans2["KOT"]; ?>"><span class="text-danger">Remove</span></a></td>

										</tr>
									<?php
										$total = $total + ($ans2["QNTY"] * $ans2["PRICE"]);
									}
									?>
									<tr>
										<td colspan="4" align="right">Total</td>
										<td align="right">₹ <?php echo number_format($total, 2); ?></td>
										<td></td>
									</tr>

								<?php

								}
								?>


							</table>
							
						<div class="form-inline">
							<div class="col-lg-3 col-md-3 col-12 btn">
								<input type="submit" name="btnpar" style="margin-top:5px;" class="btn btn-success" value="Add Parcel" onclick="return addd();"/>
							</div>
							<div class="col-lg-3 col-md-3 col-12 btn">
								<input type="submit" name="btncanpar" style="margin-top:5px;" class="btn btn-success" value="Empty Parcel" onclick="return cann();"/>
							</div>
							<div class="col-lg-3 col-md-3 col-12 btn">
							</div>
							<div class="col-lg-3 col-md-3 col-12 btn">
							</div>
						</div>

						<div class="form-inline">
							<div class="col-lg-3 col-md-3 col-12 sll">

								<select class="form-control" name="dparid" id="dparid" required>
									<option> Parcel No</option>

									<?php

									$sql8 = "select * from PARCEL";
									$res8 = mysqli_query($connect, $sql8);

									while ($ans8 = mysqli_fetch_assoc($res8)) {
									?>
										<option value="<?php echo $ans8["PID"]; ?>"> <?php echo $ans8["PID"]; ?> </option>
									<?php
									?>

									<?php

									}
									?>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-12 btn">
							<input type="submit" name="btndelpar" style="margin-top:5px;" class="btn btn-success" value="Delete Parcel" onclick="return delpar();"/>
							</div>
							
							<div class="col-lg-3 col-md-3 col-12 sll">

							</div>
							<div class="col-lg-3 col-md-3 col-12 btn">
							
							</div>
						</div>

						<hr noshade size="5" align="center" width="100%">
						<div class="section-title">
						<p>Done Parcel Detail</p>
					</div>
						<table id="example1" class="table table-bordered table-striped">

                  <thead>
                  
                  <tr>
                    <th>SR. NO</th>
                    <th>STATUS</th>
                    <th>PARCEL NO</th> 
                    <th>CONTACT</th> 
                    
                  </tr>
                  </thead>

                  <tbody>

                    <?php
              
                      $sql="select * from PARCEL ORDER BY PID LIMIT 12";              
                      $res=mysqli_query($lk,$sql);
                      $cnt = mysqli_num_rows($res);
                                      
                      if($cnt > 0)
                      {

                        $i=1;
                        while ($row1 = mysqli_fetch_assoc($res)) 
                        {       
                          
                          $status = $row1['STATUS'];
                          $oid = $row1['PID'];
                          
                      ?>

                      <?php
						if(($status)=='1'){
                    ?>
                        <tr>
						
                          <td><?php echo $i++;?></td>
                          <td>
                          
                              <strong>Parcel Ready</strong>
                       
                          </td>
                          <td>
						  <?php echo $row1['PID'];?>
                          </td>
						  <td>
						  <?php echo $row1['CONTACT'];?>
                          </td>
						  	

                          </tr>
						
                    <?php 
						}
                        } 
                      ?>
                      
                      <?PHP                   
                    
                  ?>
                  <?php
                      }
                      else
                      {
                          echo "<tr><td colspan=\"3\"> NO ONE RECORD IN TABLE </td></tr>";

                      }
                      
                    ?>

                  </tbody>
                  
                </table>

						</div>

					</form>

				</div>
			</div>
			</div>
		</section>

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="footer-info  col-lg-12 col-md-6 col-12">
						<h3>Heaven Food</h3>
						<p>
							KAMREJ NEAR 395326, INDIA <strong>Phone:</strong> +91 990445599
							<strong>Email:</strong> heavenfood007@gmail.com
						</p>
						<div class="social-links mt-3">
							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
						</div>
					</div>

				</div>
			</div>
		</div>

		</div>
		</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Heaven Food</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>