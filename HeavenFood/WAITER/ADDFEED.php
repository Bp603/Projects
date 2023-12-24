<?php

    include('Config.php');

    if(isset($_POST['btnfeedback'])) 
	{

        $oid=$_REQUEST['o_id'];
        $fname=$_REQUEST['f_name'];
        $rating1=$_REQUEST['rating'];
        $messag=$_REQUEST['inputMessage'];

        $sql="insert into FEEDBACK(OID,NAME,RATING,MESSAGE) values($oid,'$fname',$rating1,'$messag')";
        
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: table.php?alt=alt"); 
        }
    }

?>