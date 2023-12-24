<?php

    include('Config.php');

    if(isset($_POST['cook_submit'])) 
	{

        $cfname = $_REQUEST['cfname'];
        $clname = $_REQUEST['clname'];
        $addr = $_REQUEST['cadd'];
        $gen = $_REQUEST['gender'];
        $age = $_REQUEST['cage'];
        $contact = $_REQUEST['cphone'];
        $exp = $_REQUEST['cexp'];
        $ctype=$_REQUEST['ctype'];
        $hiredate = $_REQUEST['chdate'];
        $salary = $_REQUEST['csal'];

        $sql="insert into COOK(CFNAME,CLNAME,ADDRSS,GENDER,AGE,CONTACT,EXPIERNCE,CTYPE,HIREDATE,SALARY) values('$cfname','$clname','$addr','$gen',$age,$contact,'$exp','$ctype','$hiredate',$salary)";
       
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: staff.php?staffc=stt"); 
        }
        else
        {
            header("Location: staff.php?stafc=st");
        }
    }

?>