<?php  

    include 'Config.php';

    if(isset($_POST["edit_id"]))  
    {  
        $output = '';  

        $query = "SELECT * FROM CATEGORY WHERE CTID = '".$_POST["edit_id"]."'";  
        $result = mysqli_query($lk, $query);  

        $output .= '  
        ';  
        while($row = mysqli_fetch_array($result))  
        {  
    ?>
<?php
           $output .=  "  
               
                
               <div class='form-group'>  
               <input type='hidden' class='form-control' name='c_id' id='cid' value='{$row["CTID"]}'>                              
               </div>
          
               <div class='form-group'>               
                    <label>Category Name</label>               
                    <input type='text' class='form-control' name='c_name' id='ctname' value='{$row["CTNAME"]}'>                        
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
 