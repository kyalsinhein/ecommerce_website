<?php
include '../dbo/connection.php';
$sql = "select *from orders";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Order</title>
    <style>
        body {
            background-image: url('../image/background/background.jpg');
        }

        #order-tbl {
            width: 100%;
            text-align: center;

        }

        a {
            text-decoration: none;
            color: crimson;
        }

        .submitbtn {
            background-color: black;
            color:white;
            border: solid;
        }

        .submitbtn:hover {
            background-color:white;
            color:black;  
            cursor: pointer;
            border:solid;
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 2px solid black;
        }

        a
        {
            text-decoration:none;
        }

        .gotodashboard 
        {
            padding-top:0.5rem;
            padding-bottom:0.5rem;
            padding-left:1rem;
            padding-right:1rem;
            background-color: black;
            color:white;
            border: none;
            border-radius: 50px;
        }

        .gotodashboard:hover {
            background-color: white;
            color:black;
            border: none;
            border-radius: 50px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

 

    </style>
</head>

<body>

    <div class="page-header text-center h3 m-3">

            <h1>Order Information</h1>

    </div>
<div>
<table class="table table-striped m-3" id="order-tbl">
        <tr>
            <th>No.</th>
            <th>Order No.</th>
            <th>Customer Name</th>
            <th>Order Date</th>
            <th>Shipping Address</th>
            <th>Total Price (Dollar)</th>
            <th>Status</th>
        </tr>
        <?php
        foreach ($conn->query($sql) as $key => $row) {
            $id = $row['customer_id'];
            $sql1 = "select *from customer where id=$id";
            $stmt1 = $conn->query($sql1);
            $fetch = $stmt1->fetch();

        ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $fetch["username"]; ?></td>
                <td><?php echo $row["order_date"] ?></td>
                <td><?php echo $row["shipping_address"] ?></td>
                <td><?php echo $row["totalprice"]; ?></td>
                <td>
                    <br>
    <form action="ordercontroller.php" method="post" enctype="multipart/form-data">
      <?php
        echo" <select name='items' id='items' class='status'>";
        if ($row['status'] == 'pending') 
        {
           echo '<option value="pending" selected>Pending</option>
                 <option value="intransit">In Transit</option>
                 <option value="delivered">Delivered</option>'; 
                
        }
        else if ($row['status'] == 'intransit') 
        {echo '<option value="intransit" selected>In Transit</option>
               <option value="pending">Pending</option>
               <option value="delivered">Delivered</option>'; 
               
        }
        else if ($row['status'] == 'delivered') 
        {echo '<option value="delivered" selected>Delivered</option>
               <option value="pending">Pending</option>
               <option value="intransit">In Transit</option>'; 
        }

       
      echo " </select>";
      ?>
      <input type="hidden" name="id" value="<?php echo $row ['id']?>">
      <button type="submit" name="update-status" value="submit" class="submitbtn">Submit</button>   
      <br>
      <br>
     </form>
                </td>
                

            </tr>
        <?php
        }
        ?>

    </table>
    <br>
    <br>
    <br>
    <a href="admindashboard.php" class="gotodashboard">Go back to dashboard</a>
    
</div>
</body>

</html>