<?php
    $lk=mysqli_connect("localhost","root","");
    if($lk)
    {
        // echo "Connected Successful....";
    }
    else 
    {
        echo "Not Connected Successful....";
    }
    $db=mysqli_select_db($lk,"PROJECT");
    if($db)
    {
        // echo "Database Selected...";
    }
    else
    {
        // echo "Database Not Selected...";
    }
?>  