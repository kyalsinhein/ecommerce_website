<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload product</title>
</head>
<style>
  .header
  {
    margin: 0 auto;
    max-width: 17rem;
    font-size: 2.3rem;
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
       margin: 2rem auto;
  }

  .gotodashboard 
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

        .gotodashboard:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
</style>
<body>
  <div class="header"><center>Upload Products</center></div>
<form action="productcontroller.php" method="post" enctype="multipart/form-data">
      <label for="name">Product Name: </label>
      <input type="text" name="name"class="input"></input>
      <br>
      <br>
      <label for="description">Description: </label>
      <input type="text" name="description" class="input"></input>
      <br>
      <br>
      <label for="price">Price: </label>
      <input type="text" name="price" class="input"></input>
      <br>
      <br>
      <label for="quantity">Quantity: </label>
      <input type="text" name="quantity" class="input"></input>
      <br>
      <br>
      <label for="image">Image: </label>
      <input type="file" name="image" class="input"></input>
      <br>
      <br>
      <label for="brand">Brand: </label>
      <input type="text" name="brand" class="input"></input>
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
      <button name="submit" value="submit" class="submitbtn">Submit</button>
      <button name="cancel" value="cancel" class="cancelbtn">Cancel</button>
    </form>
    <br>
    <br>
    <br>
    <a href="admindashboard.php" class="gotodashboard">Go back to dashboard</a>
</body>
</html>