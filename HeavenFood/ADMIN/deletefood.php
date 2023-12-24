<?php

	include("Config.php");

		$no=$_REQUEST['delid'];

		$sql="delete from MENU where MID=$no";
	
		mysqli_query($lk,$sql);

		header("Location: menu.php");

?>