<?php
    $lk=mysqli_connect("127.0.0.1:3000","root","");
    if($lk)
    {
        // echo "Connected Successful....";
    }
    else 
    {
        // echo "Not Connected Successful....";
    }
    $db=mysqli_select_db($lk,"dinein");
    if($db)
    {
        // echo "Database Selected...";
    }
    else
    {
        // echo "Database Not Selected...";
    }
?>  
