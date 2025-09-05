<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<style>

    .gotohome {
        width: 150px;
        padding:10px;
        border: none;
        height: 50px;
        background-color: black;
        border-radius: 50px;
        color:white;
        text-decoration:none;
    }

    .gotohome:hover {
        width: 150px;
        background-color: white;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        color:black;

    }
.btnsend
       
       {
           
           width: 100px;
           height: 33px;
           border:none;
           background-color:black;
           color: white;
           cursor:pointer;
           box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
           border-radius:50px;
          
       }

.btnsend:hover
    {
        background-color: white;
        color: black;
        cursor:pointer;
    }
body
    {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }


    .contactform
    {
       padding:5rem;
       width:24.5rem;
       margin:0 auto;
       background:wheat;
       align-items:center;
       box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
       border-radius:25px;
    }

</style>
<body>

 <div class="header">
 <?php
    include 'navbr.php';
 ?>
 </div>
 <br>
 <div class="container">
 <center><h2>Get in touch</h2></center>
 <form action="mailto:youremail@example.com" method="post" enctype="text/plain" class="contactform">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    
    <button value="Send" class="btnsend">Send</button>
  </form>
  <br>
  <br>
  <a href="homepage.php" class="gotohome">Go back to home</a>
  <br>
  <br>
  <br>
 </div>
 <div class="footer">
 <?php
    include 'footer.php';
?>
 </div>
</body>
</html>
