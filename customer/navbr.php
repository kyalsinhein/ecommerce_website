 <style>

     .nav-links {
         font-family: 'Popins', sans-serif;
         display: flex;
         width: 70rem;
         background: black;
         padding: 10px;
         border-radius: 50px;
         box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
         margin: 0 auto;
     }

     .nav-links li {
         list-style: none;
         margin: 0 auto;


     }

     .nav-links li a {
         position: relative;
         color: white;
         font-size: 20px;
         font-weight: 500;
         text-decoration: none;

     }

     .nav-links li a:before {
         content: '';
         position: absolute;
         left: 0;
         height: 0.25rem;
         bottom: -0.5rem;
         width: 0%;
         background: white;
         transition: all 0.4s ease;

     }

     .search {
        display:flex;
        align-items:center;
        justify-content:center;
     }


     .nav-links li a:hover:before {
         width: 100%;

     }

     .nav-links :hover {
        color:orange;
     }

     .textbox {
         width: 190px;
         height: 30px;
         margin-left: 80px;
         border-radius: 50px;
         border: none;
         outline: none;
         color:black;

     }

     .textbox:hover
     {
        color:black;
     }

     .searchbtn
     {
        margin-left:5px;
        margin-right:8px;
        border-radius:100%;
        border:none;
        width: 32px;
        height: 32px;
        cursor: pointer;
     }

     .searchimg
     {
        width: 20px;
        height: 19px;
        
     }

     .searchbtn:hover
     {
        background:orange;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
     }




 </style>
 <div class="menu">
     <ul class="nav-links">
         <li><a href="homepage.php">Home</a></li>
         <li><a href="aboutus.php">About us</a></li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="view_product.php">Shop</a></li>
         <li><a href="view_cart.php">Shopping cart</a></li>
         <?php
            if (!isset($_SESSION['cid'])) 
            
            {

            ?>
             <li class="nav-item">
                 <a class="nav-link" href="customerloginform.php">Login</a>
             </li>
         <?php
            } 
            else 
             {
            ?>

             <li class="nav-item">
                 <a class="nav-link" href="logout.php">Log out</a>
                 
             </li>
         <?php
            }
            ?>
<form method="GET" action="view_product.php" class="search">
    <input class="textbox" type="text" placeholder="Search anyting you want ..." name="searchbox"
           value="<?php echo isset($_GET['searchbox']) ? htmlspecialchars($_GET['searchbox']) : '' ?>">
    <button class="searchbtn" name="submit">
        <img src="../image/icon/search.png" alt="#" class="searchimg">
    </button>
</form>


     </ul>


 </div>

