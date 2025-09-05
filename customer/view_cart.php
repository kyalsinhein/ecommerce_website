<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<style>
     body {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
    


    .gotoshop{
        padding:5px;
        background-color: black;
        color:white;
        border-radius: 50px;
        border: none;
        text-decoration: none;
        
    }

    .gotoshop:hover
    {
        background-color: white;
        cursor:pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        color:black;
        
    }

    .viewproductbtn {
        background-color: black;
        width: 150px;
        height: 50px;
        border-radius: 50px;
        border: none;
        cursor: pointer;
    }

    .viewproductbtn:hover {
        background-color: white;
        width: 150px;
        height: 50px;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .checkout{
        width: 150px;
        padding:7px;
        border: none;
        height: 50px;
        background-color: black;
        color:white;
        border-radius: 50px;
        text-decoration:none;
        
    }

    .checkout:hover {
        width: 150px;
        background-color: white;
        color:black;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

    }

    #remove {
        padding-left:1rem;
        padding-right:1rem;
        padding-top:0.1rem;
        padding-bottom:0.1rem;
        border: none;
        height: 50px;
        background-color: black;
        color:white;
        border-radius: 50px;
        text-decoration:none;
        
    }

    #remove:hover 
    {
        width: 150px;
        background-color: white;
        color:black;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);

    }

    #cart-tbl {
        width: 100%;
        text-align: center;
    }

    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 2px solid black;
    }

    .alltotal
    {
        margin-left:54.9rem;
    }

    
</style>

<body>
  <div class="hedaer">
  <?php
    include 'navbr.php';
    ?>
  </div>
   <div class="container">
   <?php
    if (isset($_SESSION['cart'])) {
    ?>
        <h1>Shopping Cart</h1>
        <table class="table table-striped" id="cart-tbl" style="margin-top: 50px;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Price (Dollar)</th>
                    <th>Quantity</th>
                    <th>Total (Dollar)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $all_total = 0;
                foreach ($_SESSION["cart"] as $key => $value) {
                    $total = $value["price"] * $value["Quantity"];
                    $all_total += $total;
                ?>
                    <tr>
                        <td><?php echo ++$key; ?></td>
                        <td><?php echo $value["name"] ?></td>
                        <td><?php echo $value["price"] ?></td>
                        <td>
                            <form action="cartcontroller.php" method="post">
                                <input type="number" name="quantity" value="<?php echo $value["Quantity"] ?>" min="1" onchange="this.form.submit()">
                                <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                            </form>
                        </td>
                        <td><?php echo $total; ?></td>
                        <td>
                        <a href="remove_cart.php?id=<?php echo $value['id'] ?>" class="btn btn-warning" id="remove" onclick="return confirm('Are you sure to delete?')" class="liremove">Remove</a>

                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
       <div class="alltotal">
        <br>
       <?php
        echo "Total cost:  $all_total";
        ?>
       </div>
        <br>
        <br>
        <br>

        <center><a href="checkout.php" name="checkout" class="checkout">Make Check Out</a></center>
    <?php
    } else {
        echo "<br>";
        echo "<center>Sorry! Your cart is empty!</center>";
        echo"<br>";
        echo"<center>Please choose the products first.</center>";
        echo "
        <br>
        <br>
        <center>
        <a href='view_product.php' class='gotoshop' style='width:100px;height:100px;'>
        Go to shop
        </a>
        </center>";
    }
    ?>
   </div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 
<div class="footer">
<?php
    include 'footer.php';
?>
</div>
</body>

</html>