<?php

if (!isset($_SESSION)) {
    session_start();
}
include '../dbo/connection.php';

$sql1 = "insert into orders (order_date,totalprice,customer_id,shipping_address,status) values(?,?,?,?,'pending')";
$stmt1 = $conn->prepare($sql1);
$sql2 = "insert into order_product (order_id,product_id,num_ordered,quoted_price) values (?,?,?,?)";
$stmt2 = $conn->prepare($sql2);


if (isset($_POST["ordernow"])) {
    if (!isset($_SESSION["id"])) {
        echo "<script>
        alert('Please login before you order!');
        location.href='customerloginform.php';
        </script>";
        
    } else {

        $address = $_POST["address"];
        

        if (isset($_SESSION["cart"])) {
            $order_date = date('y-m-d');
            $customer_id = $_SESSION["cid"];
            $shipping_address = $address;

            foreach ($_SESSION["cart"] as $key => $value) {
                $totalprice = $value["price"] * $value["Quantity"];
            }
            $stmt1->execute(array($order_date,$totalprice, $customer_id, $shipping_address));

            $last_inserted_id = $conn->lastInsertId();

            foreach ($_SESSION["cart"] as $key => $value) {
                $quoted_price = $value["price"] * $value["Quantity"];

                $stmt2->execute(array($last_inserted_id, $value["id"], $value["Quantity"], $quoted_price));
            }
            unset($_SESSION["cart"]);
            header("location: invoice.php");
        } else {
            echo "<script>alert('Session Expire');
                    </script>";
            echo "<script>location.href = 'view_cart.php'
                    </script>";
        }
    }
}
