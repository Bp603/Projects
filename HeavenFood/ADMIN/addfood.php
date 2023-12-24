<?php

    include('Config.php');
    include('Script.php');

    if(isset($_POST['food_submit'])) 
	{
        
        $name=$_REQUEST['i_name'];
        $category=$_REQUEST['ctname'];
        $quantity=$_REQUEST['i_quantity'];
        $price=$_REQUEST['i_price'];
       // $img_name=$_REQUEST['i_img'];
        $img_name=$_FILES['i_img']['name'];
        $img_loc=$_FILES['i_img']['tmp_name'];
        $img_store=$img_name;
        $uploads_dir = './ADDIMG';

        //move_uploaded_file($img_loc,$img_store);
        move_uploaded_file($img_loc,"$uploads_dir/$img_store");

        if (!preg_match("/^[0-9]*$/", $category)) 
		{
            header("Location: menu.php?tmp=fl");
		}        
        
        $dup = "select * from MENU where MNAME = '$name'";

        $des = mysqli_query($lk,$dup);

        if(mysqli_num_rows($des) > 0)
        {
            header("Location: menu.php?addmn=am");
        }
        else
        {
            $sql="insert into MENU(MNAME,CTID,QNTY,PRICE,MIMAGE) values('$name',$category,'$quantity',$price,'$img_store')";
        
            $res=mysqli_query($lk,$sql);

            if($res == 1) 
            {

                header("Location: menu.php?succ=sc"); 
            }
            else
            {
                header("Location: menu.php?err=er");
            }
        
        }

        
    }

?>