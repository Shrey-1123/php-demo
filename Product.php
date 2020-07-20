<!DOCTYPE html>
<html>

<head>
    <title>
        Product page
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="style.css" type="text/css" rel="stylesheet" />
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
            margin-top: 6%;
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            width: 100%;
            text-align: center;
        }
        
        .containerstyle {
            margin-top: 100px;
            margin-bottom: 40px;
        }
        
        .row {
            margin-bottom: 70px;
            margin-left: 5px;
            margin-right: 10px;
        }
        
        .thumbnail {
            position: relative;
            padding: 0px;
            margin-bottom: 20px;
        }
        
        .thumbnail img {
            width: 100%;
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
                            // session
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
    <div class="container containerstyle">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
    </div>

    <!--cameras-->
    <?php
      include("controller.php");
     ?>
    <div class="product-grid">
        <div class="txt-heading"></div>
        <?php
        $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
        if (!empty($product_array)) { 
            foreach($product_array as $key=>$value){
        ?>
            <div class="product-item">
                <form method="post" action="Cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                <div class="product-tile-footer">
                <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                <div class="cart-action"><label placeholder="Type product quantity here."><input type="text" class="product-quantity" name="quantity"  value="1" size="2" /></label><input type="submit" value="Add to Cart" onClick="validate();" class="btnAddAction" /></div>
                </div>
                </form>
        
            </div>
        <?php
            }
        }
        ?>
    </div>
    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
    <?php
     
     if (!isset($_SESSION['name'])) {
         ?>
     <script language="Javascript">
      var validate=function(clicked_id)
      {
          alert('Login first');
         
      }
     </script>  
     <?php
        
         }  
            
     ?>
</body>
</html>
