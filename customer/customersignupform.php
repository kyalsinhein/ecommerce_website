<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Sign Up Form</title>  
<style>   
body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image:url('../image/background/background.jpg');
}  

a
{
    text-decoration:none;
}
 .signupform {
       
       margin: 3rem auto;
       border:solid;
       background: wheat;
       width: 350px;
       height: 650px;
       border-radius: 20px;
       box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }   
.username,.email,.address,.password,.cpassword,.phnumber {   
        width: 300px;   
        margin: 8px 0; 
        border: none;
        padding: 12px 20px;   
        display: inline-block;   
        box-sizing: border-box;
        border-radius: 20px;   
    }  

    input:focus{
        outline: none;
    }

    .buttons
    {
        width: 18.1rem;
        display:flex;
        align-items:center;
        justify-content:center;
        
    }

    .signupbtn
    {   
        background-color:black;   
        width: 20rem;  
        color: white;   
        padding:0.5rem;  
        border: none;  
        margin-left:0.5rem; 
        border-radius: 20px;  
    }

    .signupbtn:hover
    {   
        color: black; 
        background:white;
        cursor: pointer; 
        border-radius: 20px;  
        border-radius: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    
    .loginbtn
   {
        background-color:black;   
        width: 20rem;  
        color: white;   
        padding:0.5rem;  
        border: none;  
        margin-left:0.5rem; 
        border-radius: 20px;  
   }

   .loginbtn:hover
    {   
        color: black; 
        background:white;
        cursor: pointer; 
        border-radius: 20px;  
        border-radius: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    
   
  
        
     
 .container2 {   
        
        padding-top: 5px; 
        padding-left: 25px;   
        width: 500px;
        height: 480px;
         
    }  

.formname
{
    padding-top: 5px;
}

label
{
    float: auto;
}

input
{
    float: auto;
}
</style>   
</head>    
<body>    

<div class="header">
<?php
    include 'navbr.php';
?>
</div>
       
    <div class="container">
    <form action="customersignupcontroller.php" method="post" class="signupform">  
    <div class="signup">
        <center> <h1> Sign Up Form </h1> </center></div>
        <div class="container2">   
            <label> Enter Username: </label>
            <br>
            <input type="text" placeholder="Enter Username" name="username" class="username"required>
            <br>
            <label>Enter Email: </label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" class="email"required>
            <br>
            <label>Enter Address : </label>  
            <br> 
            <input type="text" placeholder="Enter Address" name="address" class="address"required>  
            <br>
            <label>Enter Phone Number : </label>  
            <br> 
            <input type="text" placeholder="Enter Phone Number" name="phnumber" class="phnumber"required>  
            <br>
            <label>Enter Password : </label>  
            <br> 
            <input type="password" placeholder="Enter Password" name="password" class="password" required>  
            <br>
            <label>Enter Confirm Password : </label> 
            <br>  
            <input type="password" placeholder="Enter Password" name="cpassword" class="cpassword"required>  
            <br>
            <br>
            <div class="buttons">
            <button type="submit" class="signupbtn" name="signup">Sign Up</button>   
            </div>
        </div>   
    </form>   
    <a href="customersignupform.php" class="loginbtn">Go Back To Login Form</a>
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