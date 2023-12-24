<?php

	include("Config.php");

	$sql="delete from SPECIAL";
	
	mysqli_query($lk,$sql);

	header("Location: chkspl.php");

?>