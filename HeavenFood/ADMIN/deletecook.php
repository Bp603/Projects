<?php

	include("Config.php");

	$no=$_REQUEST['delcid'];

	$sql="delete from COOK where CID=$no";
   
	mysqli_query($lk,$sql);

	header("Location: staff.php");

?>
