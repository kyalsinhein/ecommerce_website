<?php
include "../dbo/connection.php";

echo "pre here";

if(isset($_POST['update-status'])) //submit_button_name
{
    $status = $_POST['items'];
    $id=$_POST['id'];
            $sql = "update orders
            set status = '$status'
            WHERE id=$id";
            $conn->exec($sql);
           
            header ("location:order.php");
      
}
?>