<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

include 'Config.php';

    if(isset($_REQUEST['dpid']))
    {
        if(isset($_REQUEST['status']))
        {
            $st = $_REQUEST['status'];
            if($st == 0)
            {
                $no = $_REQUEST['dpid'];
                $stat = 1;

                $sql = "update PARCEL SET STATUS = {$stat} WHERE PID = {$no}";
                
                $res = mysqli_query($lk, $sql);

                if($res)
                {
                    header("Location: parcel.php"); 
                }
                
            }
            else
                {
                    header("Location: parcel.php?tmp=alrd");
                }
        }

      
    }

?>