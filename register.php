 <?php
//require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\htdocs\config.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\db\config.php');
//require "config.php";
    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title> Registration Page</title>
<link rel="stylesheet" href="snistyle.css">
</head>
<body style="background-color: #7f8fa6">

   <div  id="main-wraper ">
      <center>
         <h2> Registration Form</h2>
       </center>
      <form class="myform" action="register.php" method="post">
        <label><b> Username:</label><br>
        <input name ="username" type ="text" class="inputvalues" placehoder="" required/><br>
        <label><b> Password:</label><br>
        <input name="password" type ="Password" class="inputvalues" placehoder="" required/><br>
        <label><b> Confirm Password:</label><br>
        <input name ="cpassword" type ="password" class="inputvalues" placehoder="" required/><br>
        <input name="submit_btn" type ="submit" id="signup_btn" value="Sign Up"/><br>
         <a href="loginpage.php"><input type ="button" id="back_btn" value="Back"/></a>
    </form>
      
   <!-- <form class="myform" action="sniindex.php" method="post">
        <label><b> Username:</label><br>
        <input type ="text" class="inputvalues" placehoder="" required/><br>
        <label><b> Password:</label><br>
        <input type ="Password" class="inputvalues" placehoder="" required/><br>
        <label><b> Confirm Password:</label><br>
        <input type ="cpassword" class="inputvalues" placehoder="" required/><br>
        <input type ="Submit" id="sign_btn" value="Sign Up"/><br>
        <input type ="button" id="back_btn" value="Back"/> 
    </form> -->

    <?php
         if(isset($_POST['submit_btn']))
      {  
          //echo '<script type="text/javascript"> console.log  ("sign up button clicked") </script>';
          $username=$_POST['username'];
          $password=$_POST['password'];
           $cpassword=$_POST['cpassword'];   

           if($password==$cpassword)
       {
          $query ="SELECT * FROM user WHERE username='$username' "; 
          /* $query="SELECT * from user WHERE username='$username'"; 
             $query = mysql_query("SELECT * FROM user WHERE username='$username"); */

           $query_run=mysqli_query($con,$query);

           if(mysqli_num_rows($query_run)>0) 
           {
            echo '<script type="text/javascript"> console.log ("try another user name") </script>';
           }
           else
           { 
            $query ="insert into user values('$username', '$password')"; 
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
               echo '<script type="text/javascript"> console.log  ("user registered") </script>';

            }
            
            else{
               echo '<script type="text/javascript"> console.log  ("error") </script>';

            }
            
           }
         }
         else {
            echo '<script type="text/javascript"> console.log  ("password and confirm password is not matching") </script>';

         }
      }
      ?> 
    </div>
    
</body>
</html> 