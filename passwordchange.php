<?php
    include("config.php");
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
          
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $newpassword=$_POST['np'];
    
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        
        
        $user_registration_result = mysqli_query($con,$sql)or die(mysqli_error());
      
        $num_row = mysqli_num_rows($user_registration_result);
        $row=mysqli_fetch_array($user_registration_result);
       
          if($num_row==1)
          {
              
              $update_sql="UPDATE user SET password='$newpassword' WHERE email='$email'";
              $run_update=mysqli_query($con,$update_sql)or die(mysqli_error());
              $_SESSION['message']="Password changed successfully for ".$email."";

              header("Location:index.php");
              exit;
              
          }
          else
          {
                $msg="Invalid Credentials. Please try again!";
                header("Location:Settings.php? msg = $msg");
          }
    }  
    

?>