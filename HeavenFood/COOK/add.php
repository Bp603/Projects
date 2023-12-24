<?php

    include('Config.php');

    if(isset($_POST['food_submit'])) 
	{
        
        $sql1="select * from SPECIAL";
        $res1=mysqli_query($lk,$sql1);
        $cnt = mysqli_num_rows($res1);   

        if($cnt <= 6)
        {
            $cid = $_REQUEST['ctid'];
            $mid = $_REQUEST['mid'];
            $mname = $_REQUEST['mname'];
            $disc = $_REQUEST['disc'];
            $desc = $_REQUEST['desc'];

            if (!preg_match("/^[0-9]*$/", $cid)) 
            {
                header("Location: chkspl.php?tmp=fl");
            }   

            if (!preg_match("/^[0-9]*$/", $mid)) 
            {
                header("Location: chkspl.php?pmt=fl");
            }
            else
            {
                $sql="insert into SPECIAL(CID,MID,MNAME,DISCOUNT,DESCRIPTION) values($cid,$mid,'$mname',$disc,'$desc')";
            
                $res=mysqli_query($lk,$sql);

                if($res == 1) 
                {
                    header("Location: chkspl.php?act1=at1"); 
                }
                else
                {
                    header("Location: chkspl.php?act2=at2");
                }            
            }
        
            
        }
        else
        {
            header("Location: chkspl.php?act=scc");
        }       
    }

?>