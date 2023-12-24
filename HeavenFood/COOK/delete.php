<?php

	include("Config.php");

		$no=$_REQUEST['delid'];

		$sql="delete from SPECIAL where SID=$no";
	
		mysqli_query($lk,$sql);

		header("Location: chkspl.php");

?>