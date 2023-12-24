<?php

	include("Config.php");

	$no=$_REQUEST['delpid'];

	$sql="delete from PARCEL where PID=$no";
   
	mysqli_query($lk,$sql);

	header("Location: parcel.php");

?>
