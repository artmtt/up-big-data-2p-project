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
        <title>
            <?php echo $title?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="./home.php">Shopy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <a href="./utils/logout_helper.php" class="btn btn-danger">Log Out</a>
                </div>
            </div>
        </nav>