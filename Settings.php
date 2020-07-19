<!DOCTYPE html>
<html>

<head>
    <title>
        Settings page
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
        
        .containerstyle {
            margin-top: 100px;
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
                        
                        <?php
                            session_start();
                            if(isset($_SESSION['name']))
                            {
                        ?><li><a><span>
                             <?php
                                  echo "Welcome ".$_SESSION['name']." ";
                             ?></span></a></li>
                                 <li><a href=Cart.php><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                 <li><a href=Settings.php><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                 <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <?php
                            }
                            else
                            {
                                ?>
                                <li><a href=SignUp.php><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                                <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <?php
                            } 
                        ?>
                       
        

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row row_style">
            <div class="col-xs-6">
                <form method="post" action="passwordchange.php">
                    <div class="form-heading" >
                        <h2>Change password</h2>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Old password" required="true" onKeyup="check();" id="oldpassword" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="New password" required="true" onKeyup="check();" id="newpassword" name="np"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                    <span id='mesg'></span>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Re-type Password" required="true" onKeyup="check();" id="re-password" name="rp"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"  >
                    </div>
                    <span id='message'></span>
                    <button type="submit" class="btn btn-primary">Change</button>
            </div>

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
        if(document.getElementById('oldpassword').value==document.getElementById('newpassword').value)
        {
            document.getElementById('mesg').style.color = 'red';
            document.getElementById('mesg').innerHTML='Old password matches with new password. please change';
        }
        else{
            document.getElementById('mesg').innerHTML='';
        }


        if (document.getElementById('newpassword').value == document.getElementById('re-password').value && document.getElementById('newpassword').value!='') {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'matching';
            
        } 
        else if(document.getElementById('newpassword').value!= document.getElementById('re-password').value && document.getElementById('newpassword').value!='')
        {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'password not matching';
        }
        else
        {
            document.getElementById('message').innerHTML = 'password empty';
        }
}
</script>
</html>