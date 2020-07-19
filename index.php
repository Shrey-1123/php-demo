<!--Bootstrap-->
<! Doctype html>
<html>

<head>
    <title>
        Index page
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #banner_image {
            padding-top: 75px;
            padding-bottom: 70px;
            text-align: center;
            color: #f8f8f8;
            background: url(intro-bg_1.jpg) no-repeat center center;
            background-size: cover;
        }
        
        #banner_content {
            position: relative;
            padding-top: 6%;
            padding-bottom: 6%;
            margin-top: 12%;
            margin-bottom: 12%;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(0, 0, 0, 0.7);
            max-width: 660px;
            max-height: fit-content;
        }
        
        button {
            color: rgba(255, 255, 255, 0.466);
            background-color: #c9302c;
            border-color: #ac2925;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            padding: 10px 16px;
            font-size: 18px;
            border-radius: 6px;
            text-decoration-color: black;
        }
        
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
        
        .container {
            position: relative;
        }
    </style>
</head>

<body>
    `
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
    
    <div id="banner_image">
        <div class="container">
            <div id="banner_content">

               <h1>We sell lifestyle</h1>
               <p>Flat 40% OFF on premium brands</p>
            </button><a href="Product.php"><button class="btn btn-danger  btn-lg active">Shop Now</button></a>
            <?php
            if(isset($_SESSION['message']))
            {?>
            <p><span><?php echo $_SESSION['message'];?></span></p>
               
            <?php
            unset($_SESSION['message']); 
            }

       
    ?>     
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