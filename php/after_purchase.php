<?php
    // To prevent unauthenticated users to browse
    session_start();
    if (!isset($_SESSION["id_user"])) {
        header("Location: ../index.php");
        exit();
    }
    // Get session if there is one
    if (isset($_SESSION["id_user"])) {
        $mysqli = require __DIR__ . "/utils/dbconn.php";
        $sql = "SELECT * FROM users WHERE id_user = {$_SESSION["id_user"]}";
        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Redirect -->
        <meta http-equiv="refresh" content="2;url=./home.php">
        <title>Thank you</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5 text-center">
            <h2 class="my-2">Thank you for your purchase!</h2>
            <h5 class="my-2">We hope you enjoy your new items!</h5>
            <p class="my-2">You will now be redirected to the home page...</p>
        </div>

<?php include("def_footer.php") ?>