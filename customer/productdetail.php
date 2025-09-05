<?php
if (!isset($_SESSION)) {
    session_start();
}
 if(isset($_GET["view_product"])) //submit
    {
        $id=$_GET['view_product'];
    }
    include "../dbo/connection.php";
    $sql = "select * from product WHERE id = $id";
    
  $dataset =  $conn->query($sql);
  $data = $dataset->fetch();
  $img = $data['image'];
  $name=$data['name'];
  $description = $data['description'];
  $price=$data['price'];
  $category=$data['category'];
  $brand=$data['brand'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    
</head>
<style>


    .gobacktoshop
    {
        padding:0.9rem;
        border:none;
        background-color: black;
        color:white;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        text-decoration:none;
       
    }

    .gobacktoshop:hover
       
    {
        background-color: white;
        color: black;
        cursor:pointer;
       
    }

    .big-img img
    {
        width:100px;
        height:200px;
       
       
        
    }

    .productinfo
    {
        width:100px;
        height:20px;
        background:yellow;
    }

    div.flex-box
    {
     
        border:solid;
        background:wheat;
        color:black;
        display:flex;
        width:1000px;
        height:35rem;
        margin:20px auto;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        
    }

    .left
    {
        height:30rem;
        display: flex;
        margin:0 auto;
        flex-direction: column;
        align-items: flex-start;
        align-items:center;
        justify-content:center;
        width:50%;
      
        
       
    }

    .right
    {
        width:50%;
        height:30rem;
        display: flex;
        margin:0 auto;
        flex-direction: column;
        align-items: flex-start;
        align-items:center;
        justify-content:center;
        
       
       
    }

    .name,.description,.price,.category,.brand
   {
    display: flex; 
    
   }

   .attributes
   {
    width:10rem;
  
   }
  
    .pname,.pdescription,.pprice,.pcategory,.pbrand
   {
     
    width:10rem;
  
   }


    .big-img img
    {
        width:250px;
        height:250px;
        border:solid black;
        border-radius:10px;
    }

    .images
    {
        display:flex;
        justify-content:space-between;
        width:50%;
        margin-top:15px;
    }

    



</style>
<body>
    

<div class="header">
<?php
    include 'navbr.php';
?>
</div>
<div class="container">
    <center><h1>"Product Detail"</h1></center>
<div class="flex-box">
    <div class="left">
        <div class="container">
        <div class="big-img">
        <img src="../image/products/<?php echo $img ?>" >
        </div>
        </div>
        <br>
        <br>
        <br>
        <a href="view_product.php" class="gobacktoshop" >Go back to  shop</a>
        <div class="images">
         
            
        </div>
    </div>
    <div class="right">
<br>
<br>
<br>
<br>
    <h1>Product's Information</h1>
       
       <div class="name">
       <p class="pname">Product Name: </p>
       <p class="attributes"> <?php echo $name?>
       </div>
  
        
        <div class="description">
        <p class="pdescription"> Description: </p>
       <p class="attributes"><?php echo $description?> </p>
        </div>
    
       
       <div class="price">
       <p class="pprice"> Price (Dollar): </p>
        <p class="attributes"><?php echo $price?> </p>
       </div>
    
    <div class="category">
       <p class="pcategory"> Category: </p>
        <p class="attributes"><?php echo $category?> </p>
       </div>
    
       <div class="brand">
       <p class="pbrand"> Brand: </p>
        <p class="attributes"><?php echo $brand?> </p>
       </div>

      <br>
      <br>

</div>
</div>

<div class="footer">
<?php
    include 'footer.php';
?>
</div>
</body>
</html>