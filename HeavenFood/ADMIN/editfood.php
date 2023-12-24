<?php  

    include 'Config.php';

    if(isset($_POST["edit_id"]))  
    {  
        $output = '';  

        $query = "SELECT * FROM MENU WHERE MID = '".$_POST["edit_id"]."'";  
        $result = mysqli_query($lk, $query);  

        $output .= '  
        ';  
        while($row = mysqli_fetch_array($result))  
        {  
    ?>
<?php
           $output .=  "  
               
                
               <div class='form-group'>  
               <input type='hidden' class='form-control' name='i_id' id='tmpmid' value='{$row["MID"]}'>                              
               </div>
          
               <div class='form-group'>               
                    <label for='i_name'>Item Name</label>               
                    <input type='text' class='form-control' name='i_name' id='tmpmname' value='{$row["MNAME"]}'>                        
               </div>
               
               <div class='form-group'>               
                    <label for='i_category'>Item Category</label>  
                    <select type='combobox' class='form-control' name='i_category' id='tmpcategory'>
                    <option> {$row["CTID"]} </option>";

                    $sql1="SELECT * FROM CATEGORY";
                    $res1=mysqli_query($lk, $sql1);
                   while($ans = mysqli_fetch_assoc($res1))
                    {
                        $output .=  "<option> {$ans["CTID"]} </option><option> {$ans["CTNAME"]} </option>"; 
                    }
            
                    $output .=  "
   
                </select>                                    
               </div>
                          
               <div class='form-group'>               
                    <label for='i_quantity'>Quantity</label>                    
                    <input type='text' class='form-control' name='i_quantity' id='tmpquantity' value='{$row["QNTY"]}'>                    
               </div>
               
               <div class='form-group'>               
                    <label for='i_price'>Price</label>                    
                    <input type='text' class='form-control' name='i_price' id='tmpprice' value='{$row["PRICE"]}'>                    
               </div>
               
               <div class='text-center'>
                    <input type='submit' name='food_submit' id='btnedit' class='btn-block btn btn-primary' value='UPDATE ITEAM'>
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
 