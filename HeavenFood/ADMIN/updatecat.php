<?php  

    include 'Config.php';

    $id = $_POST["id"];
    $name = $_POST["name"];
    
    $sql = "UPDATE CATEGORY SET CTNAME = '{$name}' WHERE CTID = {$id}";
    
    $res = mysqli_query($lk, $sql);

    if($res)
    {
       echo 1;
    }
    else
    {
        echo 0;
    }    

 ?>
 