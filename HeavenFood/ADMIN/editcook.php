<?php  

    include 'Config.php';

 if(isset($_POST["cedit_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM COOK WHERE CID = '".$_POST["cedit_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  

    ?>  
<?php
           $output .=  " 

           <div class='form-group'>               
                <input type='hidden' class='form-control' name='id' id='c_id' value='{$row["CID"]}'>
            </div>
            
            <div class='form-group'>                                                        
                <label>Cook First Name</label>                                                        
                <input type='text' class='form-control' name='fname' id='c_fname' value='{$row["CFNAME"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Cook Last Name</label>                                                        
                <input type='text' class='form-control' name='lname' id='c_lname' value='{$row["CLNAME"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Address</label>                                                        
                <input type='textarea' class='form-control' name='add' id='c_add' value='{$row["ADDRSS"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Gender</label>                                                        
                <select type='combobox' class='form-control' name='gender' id='cgen'>
                    <option> {$row["GENDER"]} </option>
                    <option>FEMALE </option>
                    <option>MALE</option>
                    <option>OTHER</option>
                </select>                                                   
            </div>    
                                                    
            <div class='form-group'>                                                                      
                <label>Age</label>                                        
                <input type='text' class='form-control' name='age' id='c_age' value='{$row["AGE"]}'>                                     
            </div>
                                                    
            <div class='form-group'>
                <label>Contact</label>                                                        
                <input type='tel' class='form-control' id='c_phone' name='c_phone'value='{$row["CONTACT"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Expiernce</label>                                                        
                <input type='text' class='form-control' name='exp' id='cexpiernce' value='{$row["EXPIERNCE"]}'>                                                    
            </div>

            <div class='form-group'>                                                        
                <label>Cook Type</label>                                                       
                <select type='combobox' class='form-control' name='type' id='cooktype'>
                    <option> {$row["CTYPE"]} </option>";

                    $sql1="SELECT * FROM CATEGORY";
                    $res1=mysqli_query($lk, $sql1);
                   while($ans = mysqli_fetch_assoc($res1))
                    {
                        $output .=  "<option> {$ans["CTNAME"]} </option>"; 
                    }
            
                    $output .=  "
   
                </select>
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Hiredate</label>                                                        
                <input type='date' class='form-control' name='hdate' id='chiredate' value='{$row["HIREDATE"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Salary</label>                                                        
                <input type='text' class='form-control' name='sal' id='csalary' value='{$row["SALARY"]}'>                                                    
            </div>

            <div class='text-center'>
                <input type='submit' name='waiter_submit' id='btncedit' class='btn-block btn btn-primary' value='UPDATE COOK'>
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