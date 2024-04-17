<?php
    require __DIR__ . "/utils/get_products.php";
    $products = getProductsByCategory("fashion");

    $title = "Fashion Collection";
    include("def_header.php");
?>

    <section class="container my-5">
        <h2 class="mb-4">Fashion Collection</h2>
        <h5 class="fw-normal fs-5 mb-5">
            Elevate your style with our curated selection of fashion products.
            Discover the latest collections from top brands and designers, and find the perfect pieces to express your unique style.
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