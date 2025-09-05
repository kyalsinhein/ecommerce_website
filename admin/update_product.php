<?php
include "../dbo/connection.php";
$id = $_REQUEST['id'];
$sql = "select * from product where id=$id";
$stmt = $conn->query($sql); 
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>
</head>
<style>
  .header
  {
    margin-left: 530px;
    
  }
  .submitbtn
  {
      margin-left:100px ;
      border-radius: 20px;
      border-style: none;
      width: 80px;
      height: 40px;
  }
  
  .cancelbtn
  {
      border-radius: 20px;
      border-style: none;
      width: 80px;
      height: 40px;
  }
  button:hover 
  {  
        color: white;
        background-color: black;
        opacity: 0.8; 
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        
  } 
  body
  {
      background-image: url('../image/background/background.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:100% 100%;
  }
  form label 
  {
  display: inline-block;
  width: 100px;
  }

  form{
       background: linear-gradient(to right,#ff7e5f,#feb47b);
       width: 360px;
       height: 340px;
       padding: 20px;
       box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
       border-radius: 10px;
       margin: auto;
  }

       .gotoproduct
        {
            text-decoration:none;
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        .gotoproduct:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
</style>
<body>
  <div class="header"><h1>Update Products</h1></div>
<form action="productcontroller.php" method="post" enctype="multipart/form-data">
      <label for="name">Product Name: </label>
      <input type="text" name="name"class="input" value="<?php echo $row['name']?>"></input>
      <br>
      <br>
      <label for="description">Description: </label>
      <input type="text" name="description" class="input" value="<?php echo $row['description']?>"></input>
      <br>
      <br>
      <label for="price">Price: </label>
      <input type="text" name="price" class="input" value="<?php echo $row['price']?>"></input>
      <br>
      <br>
      <label for="quantity">Quantity: </label>
      <input type="text" name="quantity" class="input" value="<?php echo $row['quantity']?>"></input>
      <br>
      <br>
      <label for="image">Image: </label>
      <input type="file" name="newimage" class="input" value="<?php echo $row['image']?>"></input>
      <br>
      <br>
      <label for="brand">Brand: </label>
      <input type="text" name="brand" class="input" value="<?php echo $row['brand']?>"></input>
      <br>
      <br>
      <label for="category">Category: </label>
      <select name="items" id="items" class="category">
       <option value="backpack">Backpack</option>
        <option value="hat">Hat</option>
        <option value="sunglasses">Sunglasses</option>
        <option value="watch">Watch</option>
        <option value="scarf">Scarf</option>
      </select>
      <br>
      <br>
      <br>
      <input type="hidden" name="id" value="<?php echo $row ['id']?>">
      <input type="hidden" name="oldimage" value="<?php echo $row['image'];?>">
      <button type="submit" name="update-product" value="submit" class="submitbtn">Update</button>
      <button type="reset" name="cancel" value="cancel" class="cancelbtn">Cancel</button>
      
    </form>
    <br>
    <br>
    <br>
    <a href="product.php" class="gotoproduct">Go back to Product</a>
</body>
</html>