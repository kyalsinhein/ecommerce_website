<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout Form</title>
  <style>

    body
    {
      background-image: url('../image/background/background.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:100% 100%;
    }

    .checkoutform {
      width:20rem;
      height:30rem;
      display: flex;
      margin:0 auto;
      flex-direction: column;
      align-items: flex-start;
      align-items:center;
      justify-content:center;
      color:black;
      background:wheat;
      border-radius:50px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btnorder
    {
      padding:0.8rem;
      color:white;
      background:black;
      border:none;
      border-radius:25px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btnorder:hover
    {
      color:black;
      background:white;
      cursor:pointer;
    }

    label {
      margin-bottom: 5px;
    }

    .address,.city,.state,.zip {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
<?php
    include 'navbr.php';
    ?>
  <center><h1>Checkout Form</h1></center>
  <form action="checkout_controller.php" method="post" class="checkoutform">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" class="address" required>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" class="city" required>

    <label for="state">State:</label>
    <input type="text" id="state" name="state" class="state" required>

    <label for="zip">ZIP Code:</label>
    <input type="text" id="zip" name="zip" class="zip" required>
    <br>
    <input type="submit" name="ordernow" value="Place Order" class="btnorder">
  </form>
  <br>
  <br>
  <?php
    include 'footer.php';
    ?>
</body>
</html>
