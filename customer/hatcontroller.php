<?php
if(!isset($_SESSION))
{
    session_start();
}
include "../dbo/connection.php";
$sql = "select * from product where category='hat'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<style>

body {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
   
    #addtocart{

        width: 100px;
        height: 33px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .viewdetail
    {
        width:1rem;
        height:1rem;
        padding:0.5rem;
        border:none;
        background-color: black;
        color:white;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        text-decoration:none;
    }

    .viewdetail:hover
       
       {
           background-color: white;
           color: black;
           cursor:pointer;
          
       }

    #addtocart:hover
    {
        background-color: white;
        color: black;
        cursor:pointer;
    }


    .row .col{

        width: 210px;
        height:380px;
        margin-left:1rem;
        margin-top:1rem;
        display: inline-block;
        align-items:center;
        justify-content: center;
        background:wheat;
        padding-left:1rem;
        padding-top:2rem;
        padding-right:0.5rem;
        border-radius:50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        border:solid;
    }

    .row
    {
        margin: 0 auto;
    }

    .btn-div input[type="submit"]{
        display: inline-block;
    }

    .img-thumbnail
    
    {
        border:solid black;
        border-radius:10px;
    }


    .container
    {
        width:65rem;
        margin:0 auto;
    }

    .info
    {
        height:80px;
    }
  

   
    

</style>

<body>
    <?php
    include 'navbr.php';
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($conn->query($sql) as $row) {
            ?>
                <div class="col">
                    <form action="cartcontroller.php" method="post" class="view-product-cart-from">
                        <div>
                            <img src="../image/products/<?php echo $row['image'] ?>" width="200px" height="200px" class="img-thumbnail">
                        </div>
                        <br>
                        <div class="info">
                            <span>Name: <?php echo $row['name'] ?></span>
                            <br>
                            <span>Price (Dollar): <?php echo $row['price'] ?></span>
                            <br>
                            <span>Brand: <?php echo $row['brand'] ?></span>
                        </div>
                        <br>
                        <div class="btn-div">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                            <input type="submit" name="addtocart" value="Add to Cart" class="btn btn-primary" id="addtocart"></input>
                            <a href="productdetail.php?view_product=<?php echo $row['id'] ?>" class="viewdetail"> View Detail</a>
                        </div>

                    </form>
                </div>
            <?php

            }
            ?>
        </div>
    </div>
    <br>
    <br>
    <?php
    include 'footer.php';
    ?>
    
</body>

</html>