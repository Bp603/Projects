<?php  

    include 'Config.php';

 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM WAITER WHERE WID = '".$_POST["employee_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  
?>
<?php
           $output .=  "  

           <div class='form-group'>
           <label>Waiter ID</label>
           <input type='text' class='form-control' name='wid' id='wid' value='{$row["WID"]}'>
         </div>
         <div class='form-group'>
           <label>Waiter First Name</label>
           <input type='text' class='form-control' name='wfname' id='wfname' value='{$row["WFNAME"]}'>
         </div>
         <div class='form-group'>
           <label>Waiter Last Name</label>
           <input type='text' class='form-control' name='wlname' id='wlname' value='{$row["WLNAME"]}'>
         </div>
         <div class='form-group'>
           <label>Address</label>
           <input type='textarea' class='form-control' name='wadd' id='wadd' value='{$row["ADDRSS"]}'>
         </div>
         <div class='form-group'>
           <label>Gender</label><br>                                                
           <input type='text' class='form-control' name='gender' value='{$row["GENDER"]}'>                        
         </div>
         <div class='form-group'>
           <label>Age</label>
           <input type='text' class='form-control' name='wage' id='wage' value='{$row["AGE"]}'>
         </div>
         <div class='form-group'>
           <label>Contact</label>
           <input type='tel' class='form-control' id='phone' name='phone' value='{$row["CONTACT"]}'>
         </div>
         <div class='form-group'>
           <label>Expiernce</label>
           <input type='text' class='form-control' name='wexp' id='wexpiernce' value='{$row["EXPIERNCE"]}'>
         </div>
         <div class='form-group'>
           <label>Hiredate</label>
           <input type='date' class='form-control' name='whdate' id='whiredate' value='{$row["HIREDATE"]}'>
         </div>
         <div class='form-group'>
           <label>Salary</label>
           <input type='text' class='form-control' name='wsal' id='wsalary' value='{$row["SALARY"]}'>
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
 