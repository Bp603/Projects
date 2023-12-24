<?php  

    include 'Config.php';

        $editid = $_POST["id"];
        $editname = $_POST["name"];
        $editcategory = $_POST["category"];
        $editquantity = $_POST["quantity"];
        $editprice = $_POST["price"];
        
        $sql = "UPDATE MENU SET MNAME = '{$editname}',CTID = {$editcategory},QNTY = '{$editquantity}',PRICE = {$editprice} WHERE MID = {$editid}";
    
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
 