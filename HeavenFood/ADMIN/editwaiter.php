<?php  

    include 'Config.php';

 if(isset($_POST["edit_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM STAFF WHERE SID = '".$_POST["edit_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  
?>
<?php
           $output .=  "  

           <div class='form-group'>
           <input type='hidden' class='form-control' name='wid' id='ewid' value='{$row["WID"]}'>
         </div>
         <div class='form-group'>
           <label>Waiter First Name</label>
           <input type='text' class='form-control' name='wfname' id='ewfname' value='{$row["WFNAME"]}'>
         </div>
         <div class='form-group'>
           <label>Waiter Last Name</label>
           <input type='text' class='form-control' name='wlname' id='ewlname' value='{$row["WLNAME"]}'>
         </div>
         <div class='form-group'>
           <label>Address</label>
           <input type='textarea' class='form-control' name='wadd' id='ewadd' value='{$row["ADDRSS"]}'>
         </div>
         <div class='form-group'>
           <label>Gender</label><br>  
           <select type='combobox' class='form-control' name='gender' id='ewgen'>
              <option> {$row["GENDER"]} </option>
              <option>FEMALE </option>
              <option>MALE</option>
              <option>OTHER</option>
           </select>
         </div>
         <div class='form-group'>
           <label>Age</label>
           <input type='text' class='form-control' name='wage' id='ewage' value='{$row["AGE"]}'>
         </div>
         <div class='form-group'>
           <label>Contact</label>
           <input type='tel' class='form-control' id='ephone' name='phone' value='{$row["CONTACT"]}'>
         </div>
         <div class='form-group'>
           <label>Expiernce</label>
           <input type='text' class='form-control' name='wexp' id='ewexp' value='{$row["EXPIERNCE"]}'>
         </div>
         <div class='form-group'>
           <label>Hiredate</label>
           <input type='date' class='form-control' name='whdate' id='ewhiredate' value='{$row["HIREDATE"]}'>
         </div>
         <div class='form-group'>
           <label>Salary</label>
           <input type='text' class='form-control' name='wsal' id='ewsal' value='{$row["SALARY"]}'>
         </div>   
         <div class='text-center'>
         <input type='submit' name='waiter_submit' id='btnedit' class='btn-block btn btn-primary' value='UPDATE WAITER'>
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
 