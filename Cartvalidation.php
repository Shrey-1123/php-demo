<?php

    session_start();
    if(isset($_SESSION['name']))
    {
        header("Location:Product.php");
    }
    else
    {
        header("Location:Login.php");
    }

?>