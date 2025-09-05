<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
.username,.password
    {  
        margin: 8px 0; 
        margin-left: 10px; 
        border: none;
        padding: 12px 20px;   
        display: inline-block;   
        box-sizing: border-box;
        border-radius: 20px; 

    }
    .loginform {
      
       align-items:center;
       border:solid;
       background: wheat;
       width: 390px;
       height: 400px;
       margin: 7rem auto;
       border-radius: 20px;
       box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
       
    }

    .loginbtn
    {   
        background-color:black;   
        width: 15rem;  
        color: white;   
        padding:0.5rem;  
        border: none;   
        border-radius: 20px;  
        margin-left:5rem;
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

    .uname,.pass
    {
        margin-left:2rem;

    }

    .password,.username
    {
        width:15rem;
    }

    .buttons
    {
        
        display:flex;
        align-items:center;
        justify-content:center;

        
    }

    .createnewacc
    {
        margin-left:7.5rem;
    }


 
    
    </style>
</head>
<body>
<div class="header">
</div>
<div class="conatiner1">
<form action="logincontroller.php" method="post" class="loginform">  
    <div class="login"><center> <h1> Admin Login Form </h1> </center></div>
    <br>
    <br>  
            <div class="container2">
            <label class="uname">Username : </label> 
         
            <input type="text" placeholder="Enter Username" name="username" class="username" required>  
          <br>
            <label class="pass">Password : </label>  
         
            
            <input type="password" placeholder="Enter Password" name="password" class="password" required>  
            
            </div>
            <br>
            <div class="buttons">
            <button type="submit" class="loginbtn" name="login">Login</button>   
          
            </div>   
            <br>
            <a href="adminsignupform.php" class="createnewacc"> Create New Account? </a>
    </form>     
</div>

</div>
</body>
</html>