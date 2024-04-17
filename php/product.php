<?php
    // Get product id from the URL parameter
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : -2;
    $mysqli = require __DIR__ . "/utils/dbconn.php";
    $sql = "
        SELECT id_prod as prod_id, name as prod_name, img_url, price
        FROM products
        WHERE id_prod = ?
    ";

    $stmt = $mysqli->prepare($sql);
    if($stmt === false) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("i", $product_id);
    if($stmt->execute() === false) {
        die("SQL Query execution error: " . $stmt->error);
    }

    $result = $stmt->get_result();
    $product = null;
    if($row = $result->fetch_assoc()) {
        $product = [
            "id" => $row["prod_id"],
            "name" => $row["prod_name"],
            "image" => $row["img_url"],
            "price" => "$" . number_format($row["price"], 2)
        ];
    }
    $result->free();
    $stmt->close();

    $title = $product ? $product['name'] : "Product Not Found";
    include("def_header.php");

    if($product) {
        ?>
            <div class="container my-5 text-center">
                <h2><?php echo $product['name']; ?></h2>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="my-4" style="max-width: 90%; max-height: 400px;">
                <h5>Price: <?php echo $product['price']; ?></h5>
                <div class="my-3">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" class="form-control d-inline-block" style="width: 60px;">
                </div>
                <a href="./after_purchase.php" class="btn btn-primary my-3">Buy Product</a>
            </div>
        <?php
    } else {
        ?>
            <div class="container my-5 text-center">
                <h2>Product not found :(</h2>
            </div>
        <?php
    }
?>

<?php include("def_footer.php") ?>