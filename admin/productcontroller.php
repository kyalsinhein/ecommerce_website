<?php
include "../dbo/connection.php";
if(isset($_POST['submit'])) //submit_button_name
{
    
    $error = array(); //initialize array

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['items'];
    $brand=$_POST['brand'];

    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_temp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];

    $target_dir = "../image/products/";
    $target_file = $target_dir.basename($file_name);
    $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
    $ext = array ("png","jpg");

    if(!in_array($file_ext,$ext)) //not_allow_extension
    {
        echo "NOT ALLOW EXTEND";
        $error[]="Not allow extension";
    }
    else if ($file_size>6097152) //not_allow_size
    {
        echo "NOT ALLOW SIZE";
        $error[]= "file size is too long";
    }
    else if (empty($error)==TRUE)
    {
               echo "HERE";
        if (move_uploaded_file($file_temp,$target_file))
        {
            $sql = "insert into product(name,description,price,quantity,image,category,brand)
            values('$name','$description',$price,$quantity,'$file_name','$category','$brand')";
            $conn->exec($sql);
            header ("location:product.php");
        }
    }
}

if (isset($_POST['update-product']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['items'];
    $brand=$_POST['brand'];

    $id = $_POST['id'];
    $old_file_name=$_FILES["oldimage"];
    $new_file_name=$_FILES["newimage"]["name"];

    if($new_file_name!="")
    {
        $updateimage = $new_file_name;
        move_uploaded_file($_FILES["newimage"]["tmp_name"],"../image/products/".$new_file_name);
    }
    else
    {
        $updateimage=$old_file_name;
    }

    $sql = "update product set id=$id,
                    name='$name',
                    description='$description',
                    price=$price,
                    quantity=$quantity,
                    image='$updateimage',
                    category='$category',
                    brand='$brand' where id=$id";
                    $conn->exec($sql);
                    header("location:product.php");

}

//Delete product

if (isset($_REQUEST['product_delete_id']))
{
    $id= $_REQUEST['product_delete_id'];
    $sql = "delete from product where id=$id";

    $conn->exec($sql);
    header("location:product.php");
}
?>


