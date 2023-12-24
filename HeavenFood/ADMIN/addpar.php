<?php

    include('Config.php');

    if(isset($_POST['parcel_submit'])) 
	{

        $mid=$_REQUEST['M_id'];
        $qnty=$_REQUEST['qty'];
        $price=$_REQUEST['price'];
        $cont=$_REQUEST['phone'];
        $stat = 0;
       
        if (!preg_match("/^[0-9]*$/", $mid)) 
		{
            header("Location: parcel.php?tmp=fl");
		}     

        $sql="insert into PARCEL(MID,QNTY,PRICE,CONTACT,STATUS) values($mid,'$qnty',$price,$cont,$stat)";
        
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: parcel.php"); 
        }
    }

?>