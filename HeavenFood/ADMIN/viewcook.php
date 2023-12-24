<?php  

    include 'Config.php';

 if(isset($_POST["vc_id"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM COOK WHERE CID = '".$_POST["vc_id"]."'";  

      $result = mysqli_query($lk, $query);  
      $output .= '  
      ';  
      while($row = mysqli_fetch_array($result))  
      {  
?>
<?php
           $output .=  "  

           <div class='form-group'>
                <label>Cook ID</label>
                <input type='text' class='form-control' name='id' id='id' value='{$row["CID"]}'>
            </div>
            
            <div class='form-group'>                                                        
                <label>Cook First Name</label>                                                        
                <input type='text' class='form-control' name='fname' id='fname' value='{$row["CFNAME"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Cook Last Name</label>                                                        
                <input type='text' class='form-control' name='lname' id='lname' value='{$row["CLNAME"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Address</label>                                                        
                <input type='textarea' class='form-control' name='add' id='add' value='{$row["ADDRSS"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Gender</label>                                                        
                <input type='text' class='form-control' name='gender' value='{$row["GENDER"]}'>                                                    
            </div>    
                                                    
            <div class='form-group'>                                                                      
                <label>Age</label>                                        
                <input type='text' class='form-control' name='wage' id='wage' value='{$row["AGE"]}'>                                     
            </div>
                                                    
            <div class='form-group'>
                <label>Contact</label>                                                        
                <input type='tel' class='form-control' id='phone' name='phone'value='{$row["CONTACT"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Expiernce</label>                                                        
                <input type='text' class='form-control' name='exp' id='expiernce' value='{$row["EXPIERNCE"]}'>                                                    
            </div>

            <div class='form-group'>                                                        
                <label>Cook Type</label>                                                        
                <input type='text' class='form-control' name='ctype' id='ctype' value='{$row["CTYPE"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Hiredate</label>                                                        
                <input type='date' class='form-control' name='hdate' id='hiredate' value='{$row["HIREDATE"]}'>                                                    
            </div>
                                                    
            <div class='form-group'>                                                        
                <label>Salary</label>                                                        
                <input type='text' class='form-control' name='sal' id='salary' value='{$row["SALARY"]}'>                                                    
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