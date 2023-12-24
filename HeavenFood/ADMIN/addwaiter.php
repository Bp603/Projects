<?php

    include('Config.php');

    if(isset($_POST['waiter_submit'])) 
	{

        $wfname = $_REQUEST['wfname'];
        $wlname = $_REQUEST['wlname'];
        $addr = $_REQUEST['wadd'];
        $gen = $_REQUEST['gender'];
        $age = $_REQUEST['wage'];
        $contact = $_REQUEST['phone'];
        $exp = $_REQUEST['wexp'];
        $hiredate = $_REQUEST['whdate'];
        $salary = $_REQUEST['wsal'];

        $sql="insert into WAITER(WFNAME,WLNAME,ADDRSS,GENDER,AGE,CONTACT,EXPIERNCE,HIREDATE,SALARY) values('$wfname','$wlname','$addr','$gen',$age,'$contact','$exp','$hiredate',$salary)";

        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: staff.php?staffw=stt"); 
        }
        else
        {
            header("Location: staff.php?stafw=st"); 
        }
    }

?>