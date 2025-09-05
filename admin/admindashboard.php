<?php
if (!isset($_SESSION)) {
    session_start();
}

include "../dbo/connection.php";
if (!isset($_SESSION["id"])) {
  echo "<script>
  location.href='adminloginform.php';
  </script>";
  
} else {
?>
<!Doctype HTML>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
  body{
      background-image: url('../image/background/background.jpg');
      background-repeat:no-repeat;
      background-attachment:fixed;
      background-size:100% 100%;
}
.clearfix{
	clear: both;
}
.logo{
	margin: 0px;
	margin-left: 20px;
  font-weight: bold;
  color:orange;
  margin-bottom: 30px;
  font-size:30px;
}

.sidenav {
  height:105%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:black;
  overflow: hidden;
  transition: 0.5s;
  padding-top: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.sidenav a {
  padding: 15px 8px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color:white;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color:black;
  background-color:white;
  border-radius: 0 50px 50px 0;
}
.sidenav{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 300px;
}
.head{
	padding:20px;
}
.col-div-6{
	width: 50%;
	float: left;
}
.profile{
	display: inline-block;
	float: right;
	width: 150px;
  background:black;
  border-radius:10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.pro-img{
	float: left;
	width: 40px;
	margin-top: 5px;
}
.profile p{
	color: white;
	font-weight: 500;
	margin-left: 30px;
	margin-top: 10px;
	font-size: 15px;
}
.profile p span{
	font-weight: 400;
    font-size: 15px;
    display: block;
    color: red;
}
.col-div-3{
	width: 25%;
	float: left;
}
.box{
	width: 85%;
	height: 100px;
	background-color: black;
	margin-left: 10px;
	padding:10px;
  border-radius:40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.box p{
	 font-size: 35px;
    color: white;
    font-weight: bold;
    line-height: 30px;
    padding-left: 10px;
    margin-top: 20px;
    display: inline-block;
}
.box p span{
	font-size: 20px;
	font-weight: 400;
	color: #818181;
}
.box-icon{
	font-size: 50px!important;
    float: right;
    margin-top: 35px!important;
    color:white;
    padding-right: 10px;
}
.col-div-8{
	width: 70%;
	float: left;
}
.col-div-4{
	width: 30%;
	float: left;
}
.content-box{
	padding: 20px
  
}
.content-box p{
	margin: 0px;
    font-size: 20px;
    color: #f7403b;
}
.content-box p span{
	float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
}
.box-8, .box-4{
  border-radius:40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	width: 95%;
	background-color: black;
	
	
}

.box-4
{
  height: 350px;
}

.box-8
{
  height: 350px;
}
.nav2{
	display: none;
}

.box-8{
	margin-left: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:13px;
  
}
td, th {
  text-align: left;
  padding:15px;
  color: #ddd;
  border-bottom: 1px solid #81818140;
}
.circle-wrap {
  margin: 50px auto;
  width: 150px;
  height: 150px;
  background: #e6e2e7;
  border-radius: 50%;
}
.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}
.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px);
}

.circle-wrap .circle .mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #f7403b;
}
.circle-wrap .circle .mask.full,
.circle-wrap .circle .fill {
  animation: fill ease-in-out 3s;
  transform: rotate(126deg);
}

@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}
.circle-wrap .inside-circle {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background: #fff;
  line-height: 130px;
  text-align: center;
  margin-top: 10px;
  margin-left: 10px;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}

.username
    {
        padding:0 1rem;
        height:3rem;
        color:black;
        cursor:pointer;
    }

 

    <?php
    if(isset($_SESSION["username"]))
    {
        echo"
        .header
        {
            margin-left:20rem;
        }
        }";
    }
    ?>
</style>

<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span><img src="../image/logo/mlogo.png" alt="" style="width:50px;height:50px;"></span><span>Martium</span></p>
  <a href="admindashboard.php" class="icon-a"><i class="fa-solid fa-chart-line"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="product.php" class="icon-a"><i class="fa-solid fa-cart-shopping"></i> &nbsp;&nbsp;Products</a>
  <a href="customer.php"class="icon-a"><i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;Customers</a>
  <a href="order.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="productsupload.php"class="icon-a"><i class="fa-solid fa-cloud-arrow-up"></i>&nbsp;&nbsp;Upload Products</a>
  
  <?php
            if (!isset($_SESSION['id'])) 
            
            {

            ?>
             <a href="adminloginform.php"class="icon-a"><i class="fa-solid fa-right-to-bracket"></i> &nbsp;&nbsp;Login</a>
         <?php
            } 
            else 
             {
            ?>

    
             <a href="adminlogout.php"class="icon-a"> <i class="fa-solid fa-right-to-bracket"></i> &nbsp;&nbsp;Logout</a>
                 
      
         <?php
            }
            ?>
</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
  <h1>Admin Dashboard</h1>

</div>
	
	<div class="col-div-6">
	<div class="profile">

		<?php if(isset($_SESSION["username"]))
        {
        ?>
        <div class="username">
        <?php
        
           echo"<p>";
           echo"username:";
           $username = $_SESSION["username"];
           echo "<span>$username</span>";
           echo"</p>";
        ?>
       </div>
       <?php 
       }
       ?>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	

  <div class="col-div-3">
		<div class="box">
      <?php
      $sql="SELECT count(*) as total_order from orders";
      $strnt = $conn->query($sql);
      $fetch = $strnt->fetch();
      ?>
			<p><?php echo $fetch['total_order']?><br/><span>Orders</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
  
	<div class="col-div-3">
		<div class="box">
    <?php
      $sql2="SELECT count(*) as total_customer from customer";
      $strnt2 = $conn->query($sql2);
      $fetch2 = $strnt2->fetch();
    ?>
			<p><?php echo $fetch2['total_customer']?><br/><span>Customers</span></p>
		  <i class="fa-solid fa-user-group box-icon"></i>
		</div>
	</div>

	<div class="col-div-3">
		<div class="box">
    <?php
      $sql3="SELECT count(*) as total_product from product";
      $strnt3 = $conn->query($sql3);
      $fetch3 = $strnt3->fetch();
    ?>
			<p><?php echo $fetch3['total_product']?><br/><span>Products</span></p>
			<i class="fa-solid fa-cart-shopping box-icon"></i>
		</div>
	</div>

	<div class="col-div-3">
		<div class="box">
    <?php
      $sql4="SELECT count(*) as total_admin from admin";
      $strnt4 = $conn->query($sql4);
      $fetch4 = $strnt4->fetch();
    ?>
			<p><?php echo $fetch4['total_admin']?><br/><span>Administrators</span></p>
			<i class="fa-solid fa-screwdriver-wrench box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Top Selling Products 
			<br/>
		<table>
  <tr>
    <th>Product Name</th>
    <th>Brand</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total Amount</th>
  </tr>
  <?php


   $sql = "SELECT p.*, op.num_ordered, SUM(op.quoted_price) AS total, SUM(num_ordered) AS total_quantity
   FROM order_product op
   JOIN product p ON op.product_id = p.id
   GROUP BY op.product_id
   ORDER BY total DESC
   LIMIT 5";

  foreach ($conn->query($sql) as $row)
  {
    $name = $row["name"];
    $brand = $row["brand"];
    $num_quantity = $row["total_quantity"];
    $price = $row["price"];
    $total_amount = $num_quantity*$price;

    // $row = $row["name"];
?>
 <tr>
    <td><?php echo $name?></td>
    <td><?php echo $brand?></td>
    <td><?php echo $num_quantity?></td>
    <td><?php echo $price?></td>
    <td><?php echo $total_amount?>
  </tr>

<?php
  }
  ?>


  
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Sale</p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>




</body>


</html>

<?php
}
?>