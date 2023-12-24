<?php
        include('Config.php');
        $sql2="Update TABLES set STATUS='NO BOOK' where TID={$_REQUEST['id']}" ;
        echo $sql2;
        $res2 = mysqli_query($lk, $sql2)or die("Query Error");
        header("Location: table.php");
   
  ?>