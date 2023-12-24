<?php

    include 'Config.php';

    if(isset($_REQUEST['btntable']))
    {
        $oid=$_REQUEST['o_id'];
        $phone=$_REQUEST['phone'];
        $status="BOOK";

        $sql="UPDATE TABLES SET NO_SEAT = {$phone}, STATUS = '{$status}' WHERE TABLE_NO = {$oid}";
        
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: order.php"); 
        }
    }

?>