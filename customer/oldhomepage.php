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
</head>
<style>
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
    if(isset($_SESSION["username"]))
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

    

    .div1
    {
        width: 70rem;
        background:#EE9135;
    }

    .div2
    {
        width: 70rem;
        background:wheat;
    }

    .div3
    {
        width:69.7rem;
        background:pink;
    }

    .div4
    {
        width: 70rem;
        background:#A7A6A5;
    }

    .div5
    {
        width:70rem;
        background:brown;
    }
    
    .div1,.div2,.div3,.div4,.div5
    {
        margin: 0 auto;
        height:25rem;
        display:flex;
        align-items:center;
        justify-content: center;
        border-radius:20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        border:solid;

    }

    .product1
    {
        width:25rem;
        height:20rem;
    }

    .product2
    {
        width:35rem;
        height:15rem;
    }

    .product3
    {
        
        width:25rem;
        height:17rem;
    }

    .product4
    {
        width:25rem;
        height:20rem;
    }

    .product5
    {
        width:25rem;
        height:18rem;
    }


    .intro1,.intro2,.intro3,.intro4,.intro5
    {
        width: 45%;
        text-align:center;
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

    a
    {
        text-decoration:none;
        color:blue;
    }

    .ptitle
    {
        font-size:2rem;
        
    }

    .socialmedia
    {
        width:2rem;
        height:2rem;
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

  
    .small-img
    {
        width:10rem;
        height:10rem;
        margin:1rem; 
        display:inline-block;
        overflow:hidden;
        border-radius:10%;
        border:1.5px solid black;
      

    } 
     
    .small-img img
    {
        width:inherit;
        height:inherit;
        cursor:pointer;
        transition:all 0.3s ease;
        border-radius:10%;
    }

    .small-img:hover img 
    {
        
        transition:all 0.3s ease;
        transform: scale(1.2);        
    }

    .img
    {
        height:15rem;
        padding-top:1rem;
        background:wheat;
        
    }



</style>
<body>
    <div class="header">
      
       <img src="../image/logo/mlogo.png" alt="" class="logo">
        <p class="shopname">
           <span class="bigtext"> Martium</span>  
            <br>
         <span class="smalltext"> (Online Store)</span>
        </p>
        <?php if(isset($_SESSION["username"]))
        {
        ?>
        <div class="username">
        <?php
        
           echo"<p>";
           echo"<span class='uname'>username:</span> ";
           $username = $_SESSION["username"];
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
    <center><h1>Preview Products</h1></center>
    <center>
   <div class="img">
   <div>
        <?php 
          $sql= "select * from product limit 5";
          $dataset =  $conn->query($sql);
     
           while ( $data = $dataset->fetch())
           {

            $img1= $data['image'];

        ?>
 <div class="small-img">
                <img src="../products/<?php echo $img1?>">
            </div>
    
            <?php
           }
        ?> 


        
    </div>
        </center>
    <center><h1>"The Things We Offer On Our Website"</h1></center>
<div class="container">
        <div class="div1">
        <img src="../image/logo/product1.png" alt="" class="product1">
        <p class="intro1">
            <span class="ptitle"><strong>"Backpack"</strong></span>
            <br>
            <br>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
            <br>
            <br>
            <form action="backpackcontroller.php" method="post">
            <button class="backpackbtn" name="hat">Shop Now</button>
           </form>
           </span>
            
            

            
        </p>
        </div>
    <br>
    <div class="div2"> 
        <p class="intro2">
            <span class="ptitle"><strong>"Sun Glasses"</strong></span>
            <br>
            <br>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </span>
            <br>
            <br>
          
            
        </p>
        <img src="../image/logo/product2.png" alt="" class="product2">
    </div>
    <br>
    <div class="div3"> 
    <img src="../image/logo/product3.png" alt="" class="product3">
        <p class="intro3">
            <span class="ptitle"><strong>"Hat"</strong></span>
            <br>
            <br>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </span>
            <br>
            <br>
          
           
        </p>
    
    </div>
    <br>
    <div class="div4"> 
        <p class="intro4">
            <span class="ptitle"><strong>"Scarf"</strong></span>
            <br>
            <br>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </span>
            <br>
            <br>  
        </p>
        <img src="../image/logo/product4.png" alt="" class="product4">
    </div>
    <br>
    <div class="div5">
        <img src="../image/logo/product5.png" alt="" class="product5">
        <p class="intro5">
            <span class="ptitle"><strong>"Watch"</strong></span>
            <br>
            <br>
            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </span>
            <br>
            <br>
            
        </p>
        
    </div>
    
</div>

   </div>
    <br>
    <br>
   <div class="footer">
   <?php
    include 'footer.php';
    ?>
   </div>
</body>
</html>