<?php

include 'Config.php';

if (isset($_POST["employee_id"])) {
    $output = '';
    $query = "SELECT * FROM ORDRDLT WHERE OID = '" . $_POST["employee_id"] . "'";

    $result = mysqli_query($lk, $query);
    $output .= '  
      ';
    while ($row = mysqli_fetch_array($result)) {
?>
<?php
        $output .=  "  

               <div class='form-group'>  
                    <label for='i_id'>Special Id</label>
                    <input type='text' class='form-control' name='i_id' id='i_id' value='{$row["OID"]}'>                          
               </div>
          
               <div class='form-group'>               
               <label for='i_category'>Category</label>";

                    $sql1 = "SELECT * FROM CATEGORY WHERE CTID = {$row['CID']}";
                    $res1 = mysqli_query($lk, $sql1);
                    while ($ans = mysqli_fetch_assoc($res1)) {
                        $output .=  "<input type='text' class='form-control' name='i_category' id='i_category' value='{$ans["CTNAME"]}'> ";
                    }

                    $output .= "
                          
          </div>

               <div class='form-group'>               
                    <label for='i_name'>Item Name</label>               
                    <input type='text' class='form-control' name='i_name' id='i_name' value='{$row["MNAME"]}'>                    
               </div>
               
                  
               <div class='form-group'>               
                    <label for='i_price'>Description</label>       
                    <textarea class='form-control' name='i_price' id='i_price' value='{$row["DESCRIPTION"]}'>{$row["DESCRIPTION"]}</textarea>          
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
 