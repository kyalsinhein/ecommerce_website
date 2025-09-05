<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
body
{
    background-image: url('../image/background/background.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
}

  .paragraph
  {
    background: black;
    margin : 0 auto;
    color: white;  
    width: 40rem;
    height: 80rem;

    border-radius: 1rem;
  }

  p
  {
    width: 80%;
    text-align: center;  
    margin: 0 auto;
  }

  .coname
  {
    color:orange;
  }
 
</style>
<body>
<br>

   <div class="header">
   <?php
    include 'navbr.php';
   ?>
   </div>
   <br>
   <br>
   <div class="container">
   <div class="paragraph">
    <br>
  <center>
  <h1>
        "About Us"
    </h1>
  </center>
    <br>
<p>
Welcome to <span class="coname">"Martium"</span> online store! We are a premier e-commerce platform dedicated to bringing you the finest selection of backpacks, eye glasses, hats, scarves, and watches. Our mission is to provide you with high-quality products that not only enhance your style but also serve as reliable companions in your daily adventures. With a focus on exceptional customer service and a commitment to delivering products that meet your needs, we strive to make your shopping experience seamless and enjoyable.
</p>
<br>
<br>
<center><h2>Our Mission</h2></center>
<br>
<p>Our mission is to empower individuals to express their unique style and personality through our carefully curated collection of accessories. We believe that fashion is a powerful form of self-expression, and we aim to offer a diverse range of products that cater to every individual's taste. We are committed to sourcing products from trusted suppliers, ensuring that each item we offer meets the highest standards of quality and craftsmanship. By combining style, functionality, and affordability, we strive to make our products accessible to all, allowing everyone to embrace their individuality with confidence.</p>
<br>
<br>
<center><h2>Our Vision</h2></center>
<br>
<p>At our core, we envision a world where personal style knows no boundaries. We strive to be a leading provider of fashionable accessories, constantly staying ahead of trends and offering an extensive range of products that cater to diverse preferences. Through our e-commerce platform, we aim to create a seamless and convenient shopping experience for our customers, providing them with a wide selection, exceptional service, and secure transactions. We aspire to become the go-to destination for individuals seeking quality accessories that enhance their lifestyle and reflect their unique identities.</p>
<br>
<br>
<center><h2>Our Services</h2></center>
<br>
<p>With a strong focus on customer satisfaction, we are dedicated to providing exceptional services that go beyond just selling products. Our team of knowledgeable and friendly experts is always ready to assist you with any inquiries or concerns you may have. We offer hassle-free online ordering, secure payment options, and swift shipping to ensure that your purchases reach you promptly. Furthermore, we strive to keep our prices competitive without compromising on quality. Whether you need assistance with product selection, tracking an order, or exploring the latest trends, our commitment to excellent service ensures a pleasant and enjoyable shopping experience.

Shop with us today and discover the perfect accessory to elevate your style and enhance your everyday adventures. We are excited to embark on this journey with you, and we look forward to serving you as your trusted partner in fashion and accessories.</p>
  
   </div>
   <br><br>
   </div>
   

   <?php
    include 'footer.php';
    ?>
</body>
</html>