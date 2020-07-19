<?php
    session_start(); 
    include("controller.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Cart page
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
<?php 
   
   if(isset($_SESSION['name']))
   {
?>
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
                        
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="shopping-cart">
        <div class="txt-heading">Shopping Cart</div>

        <a class="btnEmpty" href="Cart.php?action=empty">Empty Cart</a>
        <?php
        if(isset($_SESSION["cart_item"])){
            $total_quantity = 0;
            $total_price = 0;
        ?>	
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
        <tr class="table-head" style="background-color:ligthgrey;">
        <th style="text-align:left;">Name</th>
        <th style="text-align:left;">Code</th>
        <th style="text-align:right;" width="5%">Quantity</th>
        <th style="text-align:right;" width="10%">Unit Price</th>
        <th style="text-align:center;" width="10%">Price</th>
        <th style="text-align:right;" width="7%">Remove</th>
        </tr>	
        <?php		
            foreach ($_SESSION["cart_item"] as $item){
                $item_price = $item["quantity"]*$item["price"];
                ?>
                        <tr>
                        <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                        <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
                        <td style="text-align:right;"><a href="Cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                        </tr>
                        <tr></tr>
                        <?php
                        $total_quantity += $item["quantity"];
                        $total_price += ($item["price"]*$item["quantity"]);
                }
                ?>

        <tr>
        <td colspan="2" align="right">Total:</td>
        <td align="right"><?php echo $total_quantity; ?></td>
        <td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
        <td></td>
        </tr>
        </tbody>
        </table>
        <a href="Success.php"><button>Confirm</button></a>   
        <?php
        } else {
        ?>
        <div class="no-records">Your Cart is Empty</div>
        <?php 
        }
        ?>
    </div>
    

    <footer>
        <div class="container">
            <p>Copyright © Lifestyle Store. All Rights  Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </div>
    </footer>
    <?php } 
         else{ ?>
        
        <h1>Access denied! login first</h1>

    <?php 
    header("Location:Login.php");
} ?> 
</body>

</html>