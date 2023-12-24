<?php
session_start();
include('Config.php');
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $oid=$_POST['oid'];
    $email=$_POST['mail'];
    $con=$_POST['con'];
    $typ="parcel";
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($lk,"insert into payment(OID,NAME,TYPE,EMAIL,CONTACT,AMOUNT,STATUS,DATE) values($oid,'$name','$typ','$email',$con,'$amt','$payment_status','$added_on')")or die("Querry error");
    
    $_SESSION['OID']=mysqli_insert_id($lk);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($lk,"update payment set STATUS='complete',PAYID='$payment_id' where PID='".$_SESSION['OID']."'");
}
?>