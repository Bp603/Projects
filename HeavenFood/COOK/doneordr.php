<?php

    include 'Config.php';

    if(isset($_REQUEST['doid']))
    {
        if(isset($_REQUEST['status']))
        {
            $st = $_REQUEST['status'];
            if($st == 0)
            {
                $no = $_REQUEST['doid'];
                $stat = 1;

                $sql = "update ORDR SET STATUS = {$stat} WHERE OID = {$no}";

                $res = mysqli_query($lk, $sql);

                if($res)
                {
                    header("Location: index.php"); 
                }
                
            }
            else
                {
                    header("Location: index.php?tmp=alrd");
                }
        }

      
    }

?>