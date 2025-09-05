<?php
if(!isset($_SESSION))session_start();
if(isset($_SESSION["cart"]))
{
    foreach($_SESSION["cart"] as $key=>$value)
    {
        if($_REQUEST["id"]==$value["id"])
        {
            unset($_SESSION["cart"][$key]);
        }
        if(empty($_SESSION["cart"]))
        {
            unset($_SESSION["cart"]);
        }
        header("location: view_cart.php");
    }
}
?>