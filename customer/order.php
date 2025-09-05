<?php
    include '../dbo/connection.php';
$sql="select *from orders";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edg5e">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Order</title>
</head>
<body>
    <div>
       

</div>
<div class="page-header text-center h3 m-3">Order Information </div>
<table class="table table-striped m-3">
    <tr>
        <th>No.</th>
        <th>Order No.</th>
        <th>Customer Name</th>
        <th>Order Date</th>
        <th>Shipping Address</th>
        <th>Total Price</th>
        <th> Action</th>
</tr>
<?php
foreach($conn->query($sql) as $key=>$row)
{
    $id=$row['customer_id'];
    $sql1="select *from customer where id=$id";
    $stmt1=$conn->query($sql1);
    $fetch=$stmt1->fetch();

?>
<tr>
    <td><?php echo ++$key;?></td>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $fetch["username"];?></td>
    <td><?php echo $row["order_date"]?></td>
    <td><?php echo $row["shipping_address"]?></td>
    <td><?php echo $row["totalprice"];?></td>
    <td>
        <a class="btn btn-primary" href="order_detail.php">Detail</a>
</td>


</tr>
<?php
}
?>

</table>
</body>
</html>