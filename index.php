<?php
    session_start();
    if(isset($_SESSION["id_user"])) {     
        $mysqli = require __DIR__ . "/php/utils/dbconn.php";
        $sql = "SELECT * FROM users WHERE id_user = {$_SESSION["id_user"]}";
        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
    if($user) {
        header("Location: ./php/home.php");
        exit();
    }

    $is_invalid = isset($_GET['invalid']) && $_GET['invalid'] === 'true';
?>
<!-- Prev HTML -->
<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopy</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container text-center my-5">
            <h1 class="fw-bold mb-2">Welcome to Shopy</h1>
            <p class="mb-4 fs-5">Please authenticate so you can access our amazing products!</p>
            <div class="d-flex flex-column align-items-center">
                <a href="./php/login.php" class="btn btn-primary mb-2">Log In</a>
                <a href="./php/signup.php" class="btn btn-secondary">Sign Up</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html> -->

<!-- This is the Login Page -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center">
                        <h1 class="fw-bold mb-2">Welcome to Shopy</h1>
                        <p class="mb-4 fs-5">Please authenticate so you can access our amazing products!</p>
                        <?php if($is_invalid): ?>
                            <div class="alert alert-danger">Invalid login credentials. Please try again.</div>
                        <?php endif; ?>
                    </div>
                    <form action="./php/utils/login_handler.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </form>
                    <div class="mt-3 text-center">
                        <p>Don't have an account? <a href="./php/signup.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>