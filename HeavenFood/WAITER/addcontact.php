<?php

    include('Config.php');

    if(isset($_POST['ConBtnSubmit'])) 
	{

        $nm=$_REQUEST['name'];
        $mail=$_REQUEST['email'];
        $sub=$_REQUEST['subject'];
        $messag=$_REQUEST['message'];

        $sql="insert into CONTACT(CNAME,CEMAIL,CSUBJECT,CMESSAGE) values('$nm','$mail','$sub','$messag')";
        echo $sql;
 
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: index.php"); 
        }
    }

?>