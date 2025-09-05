<?php 
if(!isset($_SESSION))
{
    session_start();
}

  if(isset($_POST["addtocart"]))
  {
    if(!isset($_SESSION["cart"])) //new_session
    {
        $_SESSION["cart"][0]= array('id'=>$_POST["id"],
                                    'name'=>$_POST["name"],
                                    'price'=>$_POST["price"],
                                    'Quantity'=>1);

       echo "<script>
             alert ('Your product is added to cart!');
            </script>";
        
       echo "<script>
             location.href='view_product.php';
            </script>";

    }
    else //old_session
    {
      // echo "<script>
      //        alert ('old Session');
      //       </script>";
           $ids = array_column($_SESSION["cart"],"id");
           if(!in_array($_POST["id"],$ids))//new_product
           {
           $count=count($_SESSION["cart"]);

           $_SESSION["cart"][$count]= array('id'=>$_POST["id"],
                                            'name'=>$_POST["name"],
                                            'price'=>$_POST["price"],
                                            'Quantity'=>1);
            echo "<script>
            alert ('Your product is added to cart!');
            </script>";                  
            echo "<script>
            location.href='view_product.php';
            </script>";
           }
           else //old_product
           {
            echo "<script>
            alert ('Your product is added to cart!');
            </script>";   
            echo "<script>
            location.href='view_product.php';
            </script>";
             foreach($_SESSION["cart"]as$key=>$value)
             {
                if($_POST["id"]==$value["id"])
                {
                    $_SESSION["cart"][$key]["Quantity"]++;
                }
             }
           }
    }
   
  }

  if(isset($_POST['quantity']))
  {
    echo $_POST['quantity'];
    foreach($_SESSION["cart"] as $key=>$value)
    {
       if($_POST["id"]==$value["id"])
       {
           $_SESSION["cart"][$key]["Quantity"]=$_POST['quantity'];
           echo "<script>
           location.href='view_cart.php';
           </script>";

       }
    }
  }

?>



