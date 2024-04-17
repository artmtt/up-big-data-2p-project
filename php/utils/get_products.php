<?php
    function getProductsByCategory($categoryName) {
        $mysqli = require __DIR__ . "/dbconn.php";
        $sql = "
            SELECT products.id_prod as prod_id, products.name as prod_name, img_url, price
            FROM products
            JOIN prod_cat ON products.id_prod = prod_cat.id_prod
            JOIN categories ON prod_cat.id_cat = categories.id_cat
            WHERE categories.name = ?
        ";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $categoryName);
        $stmt->execute();

        $result = $stmt->get_result();
        if(!$result) {
            die("An error occurred while reaching the products: " . $mysqli->error);
        }

        $products = [];
        while($row = $result->fetch_assoc()) {
            array_push($products, [
                "id" => $row["prod_id"],
                "name" => $row["prod_name"],
                "image" => $row["img_url"],
                "price" => "$" . number_format($row["price"], 2)
            ]);
        }
        $result->free();
        $stmt->close();

        return $products;
    }
?>