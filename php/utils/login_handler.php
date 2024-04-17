<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $mysqli = require __DIR__ . "/dbconn.php";
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $_POST["email"]);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        if($user && password_verify($_POST["password"], $user["password"])) {
            session_regenerate_id();
            $_SESSION["id_user"] = $user["id_user"];
            header("Location: ../home.php");
            exit();
        }
    }
    header("Location: ../../index.php?invalid=true");
    exit();
?>
