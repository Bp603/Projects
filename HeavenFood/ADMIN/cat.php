<?php                                
       
    include 'Config.php';

    $sql1="select * from CATEGORY";
    $res1=mysqli_query($lk, $sql1);

    while($ans = mysqli_fetch_assoc($res1))
    {
        <option> value='{$ans['CTNAME']}' </option>
    }

?>
