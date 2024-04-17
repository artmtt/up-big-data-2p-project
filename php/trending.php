<?php
    $title = "Trending Products";
    include("def_header.php");

    $mysqli = require __DIR__ . "/utils/dbconn.php";
    $sql = "
        SELECT products.id_prod as prod_id, products.name as prod_name, img_url, price
        FROM products
        JOIN prod_cat ON products.id_prod = prod_cat.id_prod
        JOIN categories ON prod_cat.id_cat = categories.id_cat
        WHERE categories.name = 'popular products'
    ";
    $result = $mysqli->query($sql);

    if(!$result) {
        die("An error ocurred while reaching the products: " . $mysqli->error);
    }

    while($row = $result->fetch_assoc()) {
        $products[] = [
            "id" => $row["prod_id"],
            "name" => $row["prod_name"],
            "image" => $row["img_url"],
            "price" => "$" . number_format($row["price"], 2)
        ];
    }    
    $result->free();
?>

    <section class="container my-5">
        <h2 class="mb-4">Trending Products</h2>
        <h5 class="fw-normal fs-5 mb-5">
            Browse our trending products for the latest must-have items that everyone is talking about.
            From innovative gadgets to stylish essentials, we've got the top picks that combine quality and popularity.
            Stay ahead of the curve with these in-demand products and elevate your lifestyle with what's trending now.
        </h5>
        <div class="row g-4">
            <?php
                foreach($products as $product) {
                    $product_link = "./product.php?id=" . $product['id'];
                    ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100">
                            <img src="<?php echo $product['image']; ?>" class="card-img-top p-card-img" alt="<?php echo $product['name']; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <p class="card-text"><?php echo $product['price']; ?></p>
                                <a href="<?php echo $product_link; ?>" class="btn btn-primary">Buy Product</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>

<?php include("def_footer.php") ?>