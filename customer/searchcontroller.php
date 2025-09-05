<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbo/connection.php";

$results = [];

if (isset($_GET['submit'])) {
    $search = trim($_GET['searchbox']);
    if (!empty($search)) {
        $stmt = $conn->prepare("SELECT * FROM product WHERE category LIKE :search");
        $stmt->execute([':search' => "%$search%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Results</title>
<style>
body {
    background-image: url('../image/background/background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

.container {
    width: 65rem;
    margin: 0 auto;
}
.row {
    margin: 0 auto;
}
.row .col {
    width: 210px;
    height: 380px;
    margin-left: 1rem;
    margin-top: 1rem;
    display: inline-block;
    align-items: center;
    justify-content: center;
    background: #f7e5c2;
    padding-left: 1rem;
    padding-top: 2rem;
    padding-right: 0.5rem;
    border-radius: 25px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    border: solid 1px #e2c79b;
}
.img-thumbnail {
    border: solid black;
    border-radius: 10px;
}
.info {
    height: 80px;
}
#addtocart {
    width: 100px;
    height: 33px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 50px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
#addtocart:hover {
    background-color: white;
    color: black;
    cursor: pointer;
}
.viewdetail {
    width: 100px;
    height: 33px;
    padding: 0.2rem 0.5rem;
    border: none;
    background-color: black;
    color: white;
    border-radius: 50px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    text-decoration: none;
    display: inline-block;
    text-align: center;
}
.viewdetail:hover {
    background-color: white;
    color: black;
    cursor: pointer;
}
.btn-div {
    margin-top: 10px;
}
</style>
</head>
<body>
<?php include 'navbr.php'; ?>

<div class="container">
    <div class="row">
        <?php if (!empty($results)) : ?>
            <?php foreach ($results as $row) : ?>
                <div class="col">
                    <form action="cartcontroller.php" method="post">
                        <div>
                            <img src="../image/products/<?php echo $row['image']; ?>" width="200px" height="200px" class="img-thumbnail">
                        </div>
                        <br>
                        <div class="info">
                            <span>Name: <?php echo $row['name']; ?></span><br>
                            <span>Price (Dollar): <?php echo $row['price']; ?></span><br>
                            <span>Brand: <?php echo $row['brand']; ?></span><br>
                            <span>Category: <?php echo $row['category']; ?></span>
                        </div>
                        <br>
                        <div class="btn-div">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                            <input type="submit" name="addtocart" value="Add to Cart" id="addtocart">
                            <a href="productdetail.php?view_product=<?php echo $row['id']; ?>" class="viewdetail">View Detail</a>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="color:white; text-align:center;">No products found for this category.</p>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
