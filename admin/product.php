<?php
 include '../dbo/connection.php';

 $sql = "select * from product";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
</head>
<style>

.attributes
{
    width:5rem;
}
body {
            background-image: url('../image/background/background.jpg');
    }
#product-tbl {
    width: 100%;
    text-align: center;
    
}

a {
            text-decoration: none;
  }


table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 2px solid black;
        }

        th,td
        {
             width: 5rem;
        }

        td
        {
            height:20rem;
        }

        

        .gotodashboard 
        {
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        .gotodashboard:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        #edit
        {
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        #edit:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        #delete
        {
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        #delete:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
</style>
<body>
    <br>
    <a href="admindashboard.php" class="gotodashboard">Go back to dashboard</a>
    <br>
    <br>
    <div><h1>Product Information</h1></div>
    <table class="table table-stripped" id="product-tbl" >
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Action</th>
        </tr>
<?php
$serial = 1;
 foreach($conn->query($sql)as $key => $row)
 {
?>       
        <div class="table_value">
        <tr>
            <td class="attributes"><?php echo ++$key;?></td>

            <td class="attributes"><img src="../image/products/<?php echo $row['image'];?>" width="70px" hight="70px"></td>
            <td class="attributes"><?php echo $row['name'];?></td>
            <td class="attributes"><?php echo $row['description'];?></td>
            <td class="attributes"><?php echo $row['price'];?></td>
            <td class="attributes"><?php echo $row['quantity'];?></td>
            <td class="attributes"><?php echo $row['category'];?></td>
            <td class="attributes"><?php echo $row['brand'];?></td>
            <td class="attributes">
                <a class="btn btn-primary" href="update_product.php?id=<?php echo $row['id']?>" id="edit">Edit</a>
                <br>
                <br>
              <a class="btn btn-primary" id="delete" href="productcontroller.php?product_delete_id=<?php echo $row['id']?>" onclick="return confirm('Do you want to delete?')">Delete</a>
                
            </td>
        </tr>
        </div>
        <?php
 }
        ?>

    </table>
  
</body>
</html>