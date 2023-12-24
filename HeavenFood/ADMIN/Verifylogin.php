<html>

  <head>
      <title> LOGIN </title>
  </head>

  <body>

      <?php

        include "Config.php";

        if(isset($_POST['btnlogin']))
        {

            $sql = "select * from ADMIN where UNAME='{$_POST['uname']}' and PASSWD='{$_POST['pwd']}'";
            
            $res = mysqli_query($lk,$sql) or die("Query Error ...");

            if(mysqli_num_rows($res) > 0) 
					  {
						
              session_start();
              
              while($val = mysqli_fetch_assoc($res)) 
              {
                
                $_SESSION['Uname'] = $val['UNAME'];
                $_SESSION['Pass'] = $val['PASSWD'];
              }
              
              header("Location: index.php");
              
					  } 
					  else 
					  {
                // header("Location: login.php?tmp=fail");
            }
				}
    
      ?>

  </body>

</html>