<!DOCTYPE html>
<html>

<head>
    <title>
        Login page
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
            position: relative;
            padding-top: 6%;
            padding-bottom: 6%;
            margin-top: 12%;
            margin-bottom: 12%;
            margin-left: 25%;
            width:1000px;
            
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

    <div class="container margin-auto" style="vertical-align: middle;">
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"></p>Login to make a purchase</p>
                        <form  method="post" action="user_login.php">
                            <div class="form-group">

                                <input type="email" class="form-control" placeholder="Enter email" id="email" name="e">

                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" placeholder="Password" id="password" name="p">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <a href="SignUp.php"><strong>Register</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>

</html>