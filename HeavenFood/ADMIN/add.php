<?php

    include('Config.php');

    if(isset($_POST['food_submit'])) 
	{
        
        $cid = $_REQUEST['ctid'];
        $mid = $_REQUEST['mid'];
        $mname = $_REQUEST['mname'];
        $desc = $_REQUEST['desc'];
    
        $sql="insert into SPECIAL(CID,MID,MNAME,DESCRIPTION) values($cid,$mid,'$mname','$desc')";
        echo $sql;
        return;
        
        $res=mysqli_query($lk,$sql);

        if($res == 1) 
        {

            header("Location: chkspl.php"); 
        }
           
        
    }

?>