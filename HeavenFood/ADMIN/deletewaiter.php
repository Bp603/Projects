<?php

	include("Config.php");

	$no=$_REQUEST['delwid'];

	$sql="delete from WAITER where WID=$no";
   
	mysqli_query($lk,$sql);

	header("Location: staff.php");

?>
