<?php

session_start() ;


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Home Page</title>
<link rel="stylesheet" href="snistyle.css">
</head>
<body style="background-color: #7f8fa6">

   <div  id="main-wraper">
      <center>
         <h2>Home Page</h2>
         <h3>Welcome User
            <?php echo $_SESSION['username ']?>
         </h3>
       </center>
       
    <form class="myform" action="snihome.php" method="post">
        
        <input name="logout" type ="submit" id="logout_btn" value="Log Out"/> 
    </form>
    <?php
      if(isset($_POST['logout']))
      {
        session_destroy();
        header('location:sniindex.php');
      }
      
      
        
      ?>
    </div>
    
</body>
</html> 