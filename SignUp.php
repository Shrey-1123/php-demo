<?php
  
 echo $error;

?>
<!DOCTYPE html>
<html>

<head>
    <title>
        SignUp page
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        
        .row_style {
            margin-top: 100px;
            margin-left: 350px;
        }
    </style>
    
</head>

<body>
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class=navbar-brand href="#">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=SignUp.php><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row row_style">
            <div class="col-xs-6">
                <form method="post" action="user_registration.php" >
                    <div class="form-heading">
                        <h2>SIGN UP</h2>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" required="true" id="user_name" name="n">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required="true" id="user_email" name="e">
                        <span id="warning"><?php 
                                session_start();
                               if(isset($_SESSION['message']))
                               {
                                   echo $_SESSION['message'];
                               }    
                               session_destroy();                    
                        ?></span>
                       
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required="true" onKeyup="check();" id="password" name="p"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" placeholder="Retype-Password" required="true" onKeyup="check();" id="re-password" name="rp"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  >
  <span id='message'></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact" required="true" id="contact" name="ph" onKeyup="isValid();">
                        <span id='msg'></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" required="true" id="city" name="c">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" required="true" id="address" name="a">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>
<script>
    var check = function() {
        if (document.getElementById('password').value == document.getElementById('re-password').value && document.getElementById('password').value!='') {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
            
        } 
        else if(document.getElementById('password').value!= document.getElementById('re-password').value && document.getElementById('password').value!='')
        {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'password not matching';
        }
        else
        {
            document.getElementById('message').innerHTML = 'password empty';
        }
}

var isValid=function(){
    
    var phoneno = /^[7-9][0-9]{9}$/;
        if((document.getElementById('contact').value.match(phoneno)))
        {
           document.getElementById('msg').style.color = 'green';
           document.getElementById('msg').innerHTML='Number is Valid';
        }
        else
        {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML='Number is Valid, please type 10 digit valid number';
        }
}
</script>

</html>