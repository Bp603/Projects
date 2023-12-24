<?php  

    include 'Config.php';

 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM MENU WHERE MID = '".$_POST["employee_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  
?>
<?php
           $output .=  "  

               <div class='form-group'>  
                    <label for='i_id'>Item ID</label>
                    <input type='text' class='form-control' name='i_id' id='i_id' value='{$row["MID"]}'>                          
               </div>
          
               <div class='form-group'>               
                    <label for='i_name'>Item Name</label>               
                    <input type='text' class='form-control' name='i_name' id='i_name' value='{$row["MNAME"]}'>                    
               </div>
               
               <div class='form-group'>               
                    <label for='i_category'>Item Category</label>";

                    $sql1="SELECT * FROM CATEGORY WHERE CTID = {$row['CTID']}";
                    $res1=mysqli_query($lk, $sql1);
                   while($ans = mysqli_fetch_assoc($res1))
                    {
                        $output .=  "<input type='text' class='form-control' name='i_category' id='i_category' value='{$ans["CTNAME"]}'> "; 
                    }

               $output .= "
                               
               </div>
                          
               <div class='form-group'>               
                    <label for='i_quantity'>Quantity</label>                    
                    <input type='text' class='form-control' name='i_quantity' id='i_quantity' value='{$row["QNTY"]}'>                    
               </div>
               
               <div class='form-group'>               
                    <label for='i_price'>Price</label>                    
                    <input type='text' class='form-control' name='i_price' id='i_price' value='{$row["PRICE"]}'>                    
               </div>
               
               <div class='form-group'>               
                    <label for='i_image'>Image</label><BR>
                    <image src='image/{$row["MIMAGE"]}' class='profile-user-img img-circle img-fluid' alt='NO IMAGE' height='110' width='110'>
               </div>               
                    
           ";  

      }  
      $output .= '  
           </table>  
      </div>  
      ';  
?>
<?php
      echo $output; 
 
 }  
 ?>
 