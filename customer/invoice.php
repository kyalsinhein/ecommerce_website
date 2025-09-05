<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../dbo/connection.php';

if (!isset($_SESSION["cid"])) {
    echo "<script>alert('Please login first!'); location.href='customerloginform.php';</script>";
    exit;
}

$customer_id = $_SESSION["cid"];

// Get last order for this customer
$sql_order = "SELECT * FROM orders WHERE customer_id = ? ORDER BY id DESC LIMIT 1";
$stmt_order = $conn->prepare($sql_order);
$stmt_order->execute([$customer_id]);
$order = $stmt_order->fetch(PDO::FETCH_ASSOC);

if (!$order) {
    echo "<script>alert('No order found!'); location.href='view_cart.php';</script>";
    exit;
}

// Get products in this order
$sql_products = "SELECT op.*, p.name 
                 FROM order_product op
                 JOIN product p ON op.product_id = p.id
                 WHERE op.order_id = ?";
$stmt_products = $conn->prepare($sql_products);
$stmt_products->execute([$order['id']]);
$products = $stmt_products->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            background: #f9f9f9;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .invoice-container {
            width: 80%;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h1, h2, h3 {
            text-align: center;
            margin: 10px 0;
        }
        .order-info, .customer-info {
            margin: 20px 0;
            text-align: center;
        }
        .order-info strong, .customer-info strong {
            display: inline-block;
            width: 120px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
        tr:nth-child(even) {
            background: #fafafa;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .gotohome {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background: black;
            color: white;
            border-radius: 50px;
            text-decoration: none;
        }
        .gotohome:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>Invoice</h1>
        <h3>Thank you for your purchase!</h3>

        <div class="order-info">
            <p><strong>Order ID:</strong> <?php echo $order['id']; ?></p>
            <p><strong>Order Date:</strong> <?php echo $order['order_date']; ?></p>
            <p><strong>Status:</strong> <?php echo ucfirst($order['status']); ?></p>
            <p><strong>Total:</strong> $<?php echo number_format($order['totalprice'], 2); ?></p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>Price ($)</th>
                    <th>Quantity</th>
                    <th>Subtotal ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                foreach ($products as $p) {
                    $unit_price = $p['quoted_price'] / $p['num_ordered'];
                    $subtotal = $p['quoted_price'];
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlspecialchars($p['name']); ?></td>
                    <td><?php echo number_format($unit_price, 2); ?></td>
                    <td><?php echo $p['num_ordered']; ?></td>
                    <td><?php echo number_format($subtotal, 2); ?></td>
                </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>

        <p class="total">Grand Total: $<?php echo number_format($order['totalprice'], 2); ?></p>

        <div style="text-align:center;">
            <a href="homepage.php" class="gotohome">Go to Home</a>
        </div>
    </div>
</body>
</html>
