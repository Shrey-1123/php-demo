<?php

  
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $name=$_POST['n'];    
    $email=$_POST['e'];
    $password=$_POST['p'];
    $contact=$_POST['ph'];
    $city=$_POST['c'];
    $address=$_POST['a']; 

    $sql = "SELECT email FROM user WHERE email='$email'";
    $user_registration_result = mysqli_query($con,$sql) or die(mysqli_error());
    $num_row = mysqli_num_rows($user_registration_result);
      

      if($num_row==1)
      {
          
          $message1="email already exist!";
          $_SESSION['message']=$message1;
          header("Location:SignUp.php");
          exit();
          
      }
      else
      {
        $user_registration_query="insert into user(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        $user_registration_submit=mysqli_query($con,$user_registration_query) 
                                    or
                                    die(mysqli_error($con));
                                 
        if($user_registration_submit>0)
        {
            echo "sucessfully inserted";
            $_SESSION['email']=$email;
            $_SESSION['id']=mysqli_insert_id($con);
            $_SESSION['name']=$name;
            header("Location:index.php");

        }
      }
}  

    

?>