<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbo/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
a
{
    text-decoration:none;
}
body
    {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
    body
    {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
    .header{
        display:flex;
        align-items:center;
        justify-content: center;
        /* background:purple;      */

    }

    <?php
    if(isset($_SESSION["cusername"]))
    {
        echo"
        .header
        {
            margin-left:20rem;
        }";
    }
    ?>

    .container
    {
        /* background:orange; */
    }

    .footer
    {
        height:10rem;
    }

    .uname{
        color:white;
    }

    .input
    {
        color:red;
    }

    .username
    {
        padding:0 1rem;
        height:3rem;
        background:black;
        margin-left:13em;
        border-radius:10px;
        cursor:pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .logo
    {
        width:5rem;
        height:5rem;
        /* background:purple; */
        
    }

    .shopname
    {
       
        font-size:2rem;
        width:12rem;
        text-align:center;
        
    }
   

    .bigtext
    {
        font-size:3rem;
        /* background:blue; */
      
    }

    .smalltext
    {
        font-size:1.5rem;
        /* background:yellow; */
    }

    .shopnow
    {
        color:white;
        height:20rem;
        background: rgba(0,0,0,0.7)url('../image/background/ecommercebg.jpg');
        background-size:cover;
        background-blend-mode:darken;
        background-repeat:no-repeat;
        background-size:100% 100%;
    }

    .intro
    {
        text-align:center;
        margin:0 auto;
        width:50%;
    }

    .btnshopnow
    {
        height:1rem;
        padding:0.6rem;
        border: none;
        background:black;
        color:white;
        border-radius:50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }


    .btnshopnow:hover
    {
        background-color: white;
        color: black;
        cursor: pointer;
    }

.div1
{
    width:65rem;
    height:20rem;
    background:orange;
    border:solid black;
    border-radius:50px;
}

.imageandintro1
{
  display:flex;
}
.image1div
{
    width:50%;
    height:50%;
    
}
.intro1div
{
    width:50%;
    height:50%;
    margin-top:1rem;
    margin-right:3rem;
    text-align:center;

}



.backpackbtn
{
    width:5rem;
    height:2.5rem;
    border-radius:50px;
    border:none;
    color:white;
    background:black;
}

.backpackbtn:hover
{
    color:black;
    background:white;
    cursor:pointer;
    box-shadow:1.5px solid black;;
}


.div2
{
    width:65rem;
    height:20rem;
    background:wheat;
    border:solid black;
    border-radius:50px;
}

.imageandintro2
{
  display:flex;
}

.intro2div
{
    width:50%;
    height:10%;
    margin-top:1rem;
    margin-right:3rem;
    margin-left:2rem;
    text-align:center;
}
.image2div
{
    margin-top:2rem;
    width:50%;
    height:50%;
    
}


.sunglasseskbtn
{
    width:5rem;
    height:2.5rem;
    border-radius:50px;
    border:none;
    color:white;
    background:black;
}

.sunglasseskbtn:hover
{
    color:black;
    background:white;
    cursor:pointer;
    box-shadow:1.5px solid black;;
}


.div3
{
    width:65rem;
    height:20rem;
    background:pink;
    border:solid black;
    border-radius:50px;
}

.imageandintro3
{
  display:flex;
}
.image3div
{
    width:50%;
    height:50%;
    
}
.intro3div
{
    width:50%;
    height:50%;
    margin-top:1rem;
    margin-right:3rem;
    text-align:center;

}



.hatbtn
{
    width:5rem;
    height:2.5rem;
    border-radius:50px;
    border:none;
    color:white;
    background:black;
}

.hatbtn:hover
{
    color:black;
    background:white;
    cursor:pointer;
    box-shadow:1.5px solid black;;
}


.div4
{
    width:65rem;
    height:20rem;
    background:gray;
    border:solid black;
    border-radius:50px;
}

.imageandintro4
{
  display:flex;
}
.image4div
{
    width:50%;
    height:50%;
    
}
.intro4div
{
    width:50%;
    height:50%;
    margin-top:1rem;
    margin-left:3rem;
    text-align:center;

}



.scarfbtn
{
    width:5rem;
    height:2.5rem;
    border-radius:50px;
    border:none;
    color:white;
    background:black;
}

.scarfbtn:hover
{
    color:black;
    background:white;
    cursor:pointer;
    box-shadow:1.5px solid black;;
}


.div5
{
    width:65rem;
    height:20rem;
    background:brown;
    border:solid black;
    border-radius:50px;
}

.imageandintro5
{
  display:flex;
}
.image5div
{
    width:50%;
    height:50%;
    
}
.intro5div
{
    width:50%;
    height:50%;
    margin-top:1rem;
    margin-right:3rem;
    text-align:center;

}

.watchbtn
{
    width:5rem;
    height:2.5rem;
    border-radius:50px;
    border:none;
    color:white;
    background:black;
}

.watchbtn:hover
{
    color:black;
    background:white;
    cursor:pointer;
    box-shadow:1.5px solid black;;
}


    </style>
</head>
<body>
<div class="header">
      
      <img src="../image/logo/mlogo.png" alt="" class="logo">
       <p class="shopname">
          <span class="bigtext"> Martium</span>  
           <br>
        <span class="smalltext"> (Online Store)</span>
       </p>
       <?php if(isset($_SESSION["cusername"]))
       {
       ?>
       <div class="username">
       <?php
       
          echo"<p>";
          echo"<span class='uname'>username:</span> ";
          $username = $_SESSION["cusername"];
          echo "<span class='input'>$username</span>";
          echo"</p>";
       ?>
      </div>
      <?php 
      }
      ?>
   </div>
   <?php
    include 'navbr.php';
   ?>
    <br>
    <div class="shopnow">
        <br>
        <br>
        <center>
        <h1>
        "Style and Vision, Redefined."
        </h1>
</center>
<p class="intro">Our motto, "Style and Vision, Redefined," encapsulates the essence of Martium Co Ltd. as a premier provider of eyeglasses, watches, hats, and scarves. We strive to revolutionize the way people perceive fashion and eyewear, blending impeccable style with unrivaled visual clarity. Our products not only enhance your personal style but also redefine your perspective by offering high-quality eyewear and accessories that elevate your look and amplify your vision. With Martium, discover a new world where fashion meets exceptional visual experiences.</p>
<br>
<br>
        <center><a class="btnshopnow" href="view_product.php">Shop now</a></center>
    </div>
    </center>
    <center><h1>"The Things We Offer On Our Website"</h1></center>
<div class="container">
   <center>
   <div class="div1">
     <div class="imageandintro1">
      
       <div class="image1div">
        <br>
        <br>
       <img src="../image/logo/product1.png" style="width:250px;height:250px;"class="product1">
       </div>

          <div class="intro1div">
          <p class="intro1">
            <span class="ptitle"><h2><strong>"Backpack"</strong></h2></span>
            <span>At our eCommerce website, we offer an impressive collection of high-quality branded backpacks. Each backpack is carefully curated, ensuring durability, functionality, and style. Whether you're a seasoned traveler, a student on the go, or an outdoor enthusiast, our backpacks are designed to meet your needs. From renowned brands renowned for their craftsmanship and reliability, we guarantee that you'll find the ideal backpack to accompany you on all your journeys. Explore our selection now and experience the ultimate blend of quality and style! </span>
          </p>
           <form action="backpackcontroller.php" method="post">
            <button class="backpackbtn" name="backpack">Shop Now</button>
           </form>
         </div>
    </div>
   </div>  
   </center>
   <br>
   <br>
   <center>
   <div class="div2">
     <div class="imageandintro2">
          <div class="intro2div">
          <p class="intro2">
            <span class="ptitle"><h2><strong>"Sunglasses"</strong></h2></span>
            <span>Discover a stunning range of high-quality branded sunglasses now available on our ecommerce website. Elevate your style and protect your eyes with top-notch designs from renowned brands. Experience exceptional craftsmanship, cutting-edge technology, and superior UV protection. Whether you're lounging on the beach or strolling through the city, our sunglasses will add a touch of elegance to any outfit. Browse our collection today and find the perfect pair that matches your personality. Don't miss out on these exceptional shades from top-quality brands!</span>
          </p>
            <form action="sunglassescontroller.php" method="post">
            <button class="sunglasseskbtn" name="sunglasses">Shop Now</button>
            </form>
          </div>
        <div class="image2div">
        <br>
        <br>
       <img src="../image/logo/product2.png" style="width:350px;height:170px;"class="product2">
       </div>
   </div>  
   </center>
   <br>
   <br>
   <center>
   <div class="div3">
     <div class="imageandintro3">
      
       <div class="image1div">
        <br>
        <br>
       <img src="../image/logo/product3.png" style="width:260px;height:210px;"class="product3">
       </div>

          <div class="intro3div">
          <p class="intro3">
            <span class="ptitle"><h2><strong>"Hat"</strong></h2></span>
            <span> At our esteemed ecommerce website, we're excited to offer you a captivating assortment of high-quality hats from renowned brands. Each hat exudes excellence and style, crafted by top industry experts. From classic designs to trendy statements, our collection caters to all fashion preferences. Experience unparalleled comfort and durability, ensuring your hat stands the test of time. Elevate your wardrobe with our exceptional range of hats today. Explore our ecommerce platform and indulge in the finest selection of top-tier brands. Don't miss out on this opportunity to own a hat that perfectly complements your unique style!</span>
          </p>
           <form action="hatcontroller.php" method="post">
            <button class="hatbtn" name="hat">Shop Now</button>
           </form>
         </div>
    </div>
   </div>  
   </center>
   <br>
   <br>
   <center>
   <div class="div4">
     <div class="imageandintro4">
          <div class="intro4div">
          <p class="intro4">
            <span class="ptitle"><h2><strong>"Scarf"</strong></h2></span>
            <span>At our ecommerce website, we curate only the finest scarves from renowned fashion houses to offer you a touch of luxury. Wrap yourself in elegance with our diverse selection, crafted with impeccable attention to detail and superior materials. Experience the allure of top-tier brands without the exorbitant price tag. Elevate your style and indulge in the finest scarves that effortlessly combine comfort, sophistication, and timeless appeal. Shop now and discover the epitome of fashion excellence at our ecommerce store.</span>
          </p>
            <form action="scarfcontroller.php" method="post">
            <button class="scarfbtn" name="scarf">Shop Now</button>
            </form>
          </div>
        <div class="image4div">
        <br>
        <br>
       <img src="../image/logo/product4.png" style="width:300px;height:230px;"class="product4">
       </div>
   </div>  
   </center>
   <br>
   <br>
   <center>
   <div class="div5">
     <div class="imageandintro5">
      
       <div class="image5div">
        <br>
        <br>
       <img src="../image/logo/product5.png" style="width:350px;height:250px;"class="product5">
       </div>

          <div class="intro5div">
          <p class="intro5">
            <span class="ptitle"><h2><strong>"Watch"</strong></h2></span>
            <span>Discover a stunning range of high-quality branded watches now available on our e-commerce website. Elevate your style with our curated selection, showcasing renowned brands renowned for their exceptional craftsmanship and timeless designs. Each watch exudes elegance and sophistication, ensuring you make a statement wherever you go. Explore our collection today and find the perfect timepiece to complement your unique personality. Experience luxury without compromise with our premium range of watches.</span>
          </p>
           <form action="watchcontroller.php" method="post">
            <button class="watchbtn" name="watch">Shop Now</button>
           </form>
         </div>
    </div>
   </div>  
   </center>
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
<div class="footer">
<?php
    include 'footer.php';
?>
</div>
</body>
</html>