<?php
    $title = "Groceries";
    include("def_header.php");

    $products = [
        [
            "id" => 1,
            "name" => "Product Name 1",
            "image" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fget.pxhere.com%2Fphoto%2Fbook-read-word-grungy-wood-leather-vintage-antique-old-reading-box-page-material-weathered-education-pages-worn-literature-study-library-books-text-stacked-manuscript-words-school-age-history-learning-classic-document-information-cover-used-wisdom-knowledge-plywood-distressed-hardcover-publication-1341439.jpg&f=1&nofb=1&ipt=53155165cb20a3c88a23285751d2a945a4e3fd38d31cdbc3a6f6fb905156748e&ipo=images",
            "price" => "$19.99",
        ],
        [
            "id" => 2,
            "name" => "Product Name 2",
            "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ftesseraguild.com%2Fwp-content%2Fuploads%2F2018%2F06%2FHobbit.jpg&f=1&nofb=1&ipt=dc112a6599741ccd91305c6a0ed4bbd4c2dcaaa04721848775ff86e2fd9a9350&ipo=images",
            "price" => "$19.99",
        ],
        [
            "id" => 3,
            "name" => "Product Name 3",
            "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ftesseraguild.com%2Fwp-content%2Fuploads%2F2018%2F06%2FHobbit.jpg&f=1&nofb=1&ipt=dc112a6599741ccd91305c6a0ed4bbd4c2dcaaa04721848775ff86e2fd9a9350&ipo=images",
            "price" => "$19.99",
        ],
        [
            "id" => 4,
            "name" => "Product Name 4",
            "image" => "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Ftesseraguild.com%2Fwp-content%2Fuploads%2F2018%2F06%2FHobbit.jpg&f=1&nofb=1&ipt=dc112a6599741ccd91305c6a0ed4bbd4c2dcaaa04721848775ff86e2fd9a9350&ipo=images",
            "price" => "$19.99",
        ],
    ];
?>

    <section class="container my-5">
        <h2 class="mb-4">Groceries</h2>
        <h5 class="fw-normal fs-5 mb-5">
            Discover a world of fresh and delicious groceries at your fingertips.
            Stock your kitchen with quality ingredients and enjoy the convenience of one-stop shopping for all your culinary needs.
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