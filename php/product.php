<?php
    // Get product id from the URL parameter
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

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

    // Find the product by id
    $product = null;
    foreach($products as $p) {
        if ($p['id'] == $product_id) {
            $product = $p;
            break;
        }
    }

    $title = $product ? $product['name'] : "Product Not Found";
    include("def_header.php");

    if($product) {
        ?>
            <div class="container my-5 text-center">
                <h2><?php echo $product['name']; ?></h2>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="my-4" style="max-width: 90%; max-height: 400px;">
                <h5>Price: <?php echo $product['price']; ?></h5>
                <button class="btn btn-primary my-3">Buy Product</button>
                <!-- Log btn click -->
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