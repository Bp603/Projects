<?php  

    include 'Config.php';

    $cid = $_POST["id"];
    $cfname = $_POST["fname"];
    $clname = $_POST["lname"];
    $cadd = $_POST["add"];
    $cgen = $_POST["gender"];
    $cage = $_POST["age"];
    $cphone = $_POST["phone"];
    $cexp = $_POST["exp"];
    $ctype = $_POST["ctype"];
    $chd = $_POST["hdate"];
    $csal = $_POST["sal"];

    $sql = "UPDATE COOK SET CFNAME = '{$cfname}',CLNAME = '{$clname}',ADDRSS ='{$cadd}',GENDER = '{$cgen}',AGE = {$cage},CONTACT = {$cphone},EXPIERNCE = '{$cexp}',CTYPE = '{$ctype}',SALARY = {$csal} WHERE CID = {$cid}";

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
 