<?php

  
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
      
    $email=$_POST['e'];
    $password=$_POST['p'];
    

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    
    
    $user_registration_result = mysqli_query($con,$sql)or die(mysqli_error());
  
    $num_row = mysqli_num_rows($user_registration_result);
    $row=mysqli_fetch_array($user_registration_result);
   
      if($num_row==1)
      {
          
          $_SESSION['name']=$row[0];
          
          header("Location:Product.php");
          echo 'hi there';
          exit;
          
      }
      else
      {
            $msg="Invalid Credentials. Please try again!";
            header("Location:Login.php? msg = $msg");
      }
}  

    

?>