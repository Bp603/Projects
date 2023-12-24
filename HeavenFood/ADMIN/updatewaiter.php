<?php  

    include 'Config.php';

    $ewid = $_POST["id"];
    $ewfname = $_POST["fname"];
    $ewlname = $_POST["lname"];
    
    $ewadd = $_POST["add"];
    $ewgen = $_POST["gender"];
    $ewage = $_POST["age"];
    $ewphone = $_POST["contact"];
    $ewexp = $_POST["exp"];
    $ewhd = $_POST["hdate"];
    $ewsal = $_POST["sal"];

    $sql = "UPDATE STAFF SET FNAME = '{$ewfname}',LNAME = '{$ewlname}',ADDRSS ='{$ewadd}',GENDER = '{$ewgen}',AGE = {$ewage},CONTACT = {$ewphone},EXPIERNCE = '{$ewexp}',SALARY = {$ewsal} WHERE WID = {$ewid}";
    

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
 