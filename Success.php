<!DOCTYPE html>
<html>

<head>
    <title>
        Cart page
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
                        <li><a href=Cart.php><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href=Settings.php><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container containerstyle">
        <p> Your order is confirmed. Thank you for shopping  with us. <a href="Product.php">Click here</a>​​ to purchase any other item.</p>
    </div>

    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
</body>

</html>