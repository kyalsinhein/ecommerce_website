<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../dbo/connection.php"; // ensure this sets $conn (PDO)

// By default show all products
$results = [];

if (isset($_GET['submit']) && isset($_GET['searchbox'])) {
    $search = trim($_GET['searchbox']);
    if ($search !== '') {
        // prepared query
        $stmt = $conn->prepare("SELECT * FROM product WHERE category LIKE :search");
        $stmt->execute([':search' => "%{$search}%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        // empty search -> show all
        $stmt = $conn->query("SELECT * FROM product");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} else {
    // normal page load -> show all products
    $stmt = $conn->query("SELECT * FROM product");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Shop</title>
<style>
/* background and navbar spacing */
body {
    background-image: url('../image/background/background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

/* container + product card style (matches your screenshot) */
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
    vertical-align: top;
    background: #f7e5c2; /* beige-like */
    padding-left: 1rem;
    padding-top: 2rem;
    padding-right: 0.5rem;
    border-radius: 25px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    border: 2px solid #caa973;
}
.img-thumbnail {
    border: solid black 2px;
    border-radius: 10px;
    background: #fff;
}
.info {
    height: 80px;
    color: #000;
    font-family: Arial, sans-serif;
    font-size: 14px;
    line-height: 1.2;
}

.btn-div {
    display: flex;
    justify-content: space-between; /* pushes buttons to opposite ends */
    align-items: center;             /* vertically centers buttons */
    margin-top: 10px;
    gap: 10px;                       /* optional spacing between buttons */
}

.viewdetail {
    width: 110px; /* optional, same as Add to Cart */
    text-align: center;
}


/* buttons */
#addtocart {
    width: 110px;
    height: 36px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 50px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    margin-right: 8px;
}
#addtocart:hover {
    background-color: white;
    color: black;
    cursor: pointer;
}
.viewdetail {
    padding: 8px 12px;
    border: none;
    background-color: black;
    color: white;
    border-radius: 50px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    text-decoration: none;
    display: inline-block;
}
.viewdetail:hover {
    background-color: white;
    color: black;
    cursor: pointer;
}

/* ensure nav search stays horizontally aligned (your existing nav CSS already handled this) */
.search {
    display:flex;
    align-items:center;
    justify-content:center;
}
.textbox {
    width: 190px;
    height: 30px;
    margin-left: 80px;
    border-radius: 50px;
    border: none;
    outline: none;
    color:black;
    padding: 0 12px;
}
.searchbtn {
    margin-left:5px;
    margin-right:8px;
    border-radius:100%;
    border:none;
    width: 32px;
    height: 32px;
    cursor: pointer;
}
.searchimg { width: 20px; height: 19px; }
.searchbtn:hover { background: orange; cursor:pointer; box-shadow: 0 5px 10px rgba(0,0,0,0.2); }

</style>
</head>
<body>
    <?php include 'navbr.php'; ?>

    <div class="container">
        <div class="row">
            <?php if (!empty($results)) : ?>
                <?php foreach ($results as $row) : ?>
                    <div class="col">
                        <form action="cartcontroller.php" method="post" class="view-product-cart-from">
                            <div>
                                <img src="../image/products/<?php echo htmlspecialchars($row['image']); ?>" width="200px" height="200px" class="img-thumbnail" alt="">
                            </div>
                            <br>
                            <div class="info">
                                <span>Name: <?php echo htmlspecialchars($row['name']); ?></span><br>
                                <span>Price (Dollar): <?php echo htmlspecialchars($row['price']); ?></span><br>
                                <span>Brand: <?php echo htmlspecialchars($row['brand']); ?></span><br>
                                <span>Category: <?php echo htmlspecialchars($row['category']); ?></span>
                            </div>
                            <br>
                            <div class="btn-div">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                                <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">
                                <input type="submit" name="addtocart" value="Add to Cart" id="addtocart">
                                <a href="productdetail.php?view_product=<?php echo htmlspecialchars($row['id']); ?>" class="viewdetail">View Detail</a>
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="color:white; text-align:center; width:100%;">No products found for this category.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
