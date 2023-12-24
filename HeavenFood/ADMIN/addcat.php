<?php

    include('Config.php');

    if(isset($_POST['food_submit'])) 
	{

        $name=$_REQUEST['cname'];


        $dup = "select * from CATEGORY where CTNAME = '$name' ";

        $des = mysqli_query($lk, $dup);

        if(mysqli_num_rows($des) > 0)
        {
            header("Location: category.php?cat=ct");
        }
        else
        {
            $sql="insert into CATEGORY(CTNAME) values('$name')";
        
            $res=mysqli_query($lk,$sql);

            if($res == 1) 
            {
                header("Location: category.php?ctt=ctt"); 
            }
            else
            {
                header("Location: category.php?ctp=cp"); 
            }
            
        }
        
    }

?>