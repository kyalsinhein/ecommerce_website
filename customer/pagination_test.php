<?php
if(!isset($_SESSION))
{
    session_start();
}
include "../dbo/connection.php";
$sql = "select * from product";
?>
<html>   
  <head>   
    <title>Pagination</title>   
    <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            display: inline-block;   
            float: right;   
            margin: 20px 0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
    body {
        background-image: url('../image/background/background.jpg');
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:100% 100%;
    }
   
    #addtocart{

        width: 100px;
        height: 25px;
        margin-bottom:5px;
        background-color: black;
        align-items:center;
        padding-bottom:25px;
        color: white;
        border: none;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .viewdetail
    {
        width:1rem;
        height:1rem;
        padding:0.5rem;
        border:none;
        background-color: black;
        color:white;
        border-radius: 50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        text-decoration:none;
    }

    .viewdetail:hover
       
       {
           background-color: white;
           color: black;
           cursor:pointer;
          
       }

    #addtocart:hover
    {
        background-color: white;
        color: black;
        cursor:pointer;
    }


    .row .col{

        width: 210px;
        height:350px;
        margin-left:1rem;
        margin-top:1rem;
        display: inline-block;
        align-items:center;
        justify-content: center;
        background:wheat;
        padding-left:1rem;
        padding-top:2rem;
        padding-right:0.5rem;
        border-radius:50px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        border:solid;
    }
.imagediv
{
  width:200px;
  height:200px;
}
    .row
    {
        margin: 0 auto;
    }

    .btn-div input[type="submit"]{
        display: inline-block;
    }

    .img-thumbnail
    
    {
        border:solid black;
        border-radius:10px;
    }


    .container
    {
        width:65rem;
        margin:0 auto;
    } 

</style> 
  </head>   
  <body>   
 
        <?php  
          
        // Import the file where we defined the connection to Database.     
            require_once "../dbo/connection.php";   
        
            $per_page_record = 2;  // Number of entries to show in a page.   
            // Look for a GET variable page if not found default is 1.        
            if (isset($_GET["page"]))
            {    
                $page  = $_GET["page"];    
            }    
            else 
            {    
              $page=1;    
            }    
        
            $start_from = ($page-1) * $per_page_record;     
        
            $query = "SELECT * FROM product LIMIT $start_from, $per_page_record";     
            $rs_result = $conn->query($query);
            ?>
      
        <div class="container">   
          <br>   
          <div>     
            <div class="container">
        <div class="row">
            <?php
            foreach ($conn->query($sql) as $row) {
            ?>
                <div class="col">
                    <form action="cartcontroller.php" method="post" class="view-product-cart-from">
                        <div class="imagediv">
                            <img src="../products/<?php echo $row['image'] ?>" width="200px" height="200px" class="img-thumbnail">
                        </div>
                        <br>
                        <div>
                            <span>Name: <?php echo $row['name'] ?></span>
                            <br>
                            <span>Price (Dollar): <?php echo $row['price'] ?></span>
                            <br>
                            <span>Brand: <?php echo $row['brand'] ?></span>
                        </div>
                        <br>
                        <div class="btn-div">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                            <input type="submit" name="addtocart" value="Add to Cart" class="btn btn-primary" id="addtocart"></input>
                            <a href="productdetail.php?view_product=<?php echo $row['id'] ?>" class="viewdetail"> View Detail</a>
                        </div>

                    </form>
                </div>
            <?php

            }
            ?>
        </div>
    </div>
      
         <div class="pagination">    
          <?php  
            $query = "SELECT COUNT(*) FROM product";     
            $rs_result = $conn->query($query);     
           
            $total_records = $rs_result->fetch()[0];
           
            echo "</br>";     
            // Number of pages required.   
            $total_pages = ceil($total_records / $per_page_record);     
            $pagLink = "";       
          
            if($page>=2)
            {   
                echo "<a href='pagination_test.php?page=".($page-1)."'>  Prev </a>";   
            }       
                       
            for ($i=1; $i<=$total_pages; $i++) 
            {   
              if ($i == $page) 
              {   
                  $pagLink .= "<a class = 'active' href='pagination_test.php?page="  
                                                    .$i."'>".$i." </a>";   
              }               
              else  
              {   
                  $pagLink .= "<a href='pagination_test.php?page=".$i."'>   
                                                    ".$i." </a>";     
              }   
            };     
            echo $pagLink;   
      
            if($page<$total_pages)
            {   
                echo "<a href='pagination_test.php?page=".($page+1)."'>  Next </a>";   
            }   
      
          ?>    
          </div>  
      
      
          <div class="inline">   
              <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
              placeholder="<?php echo $page."/".$total_pages; ?>" required>   
              <button onClick="go2Page();">Go</button>   
         </div>    
        </div>   
      </div>  
       
      <script>   
        function go2Page()   
        {   
            var page = document.getElementById("page").value;   
            page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
            window.location.href = 'view_product.php?page='+page;   
        }   
      </script>  
  </body>   
</html>  