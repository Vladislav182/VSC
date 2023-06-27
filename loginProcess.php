<?php
session_start();
$registerErrors = array();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    array_push($registerErrors, "Invalid request method!");
    unset($_SESSION["registerErrors"]);
    $_SESSION["registerErrors"] = $registerErrors;
    header("Location: login.php");
    die();
} else {

    $email = $_POST["email"];
    $pass = $_POST["psw"];

    if (count($registerErrors) != 0) {
        unset($_SESSION["registerErrors"]);
        $_SESSION["registerErrors"] = $registerErrors;
        header("Location: login.php");
        die();
    } else {
        $servername = "localhost";
        $dbusername = "root";
        $dbPassword = "serverRootPass359741";
        try {
            $conn = new mysqli($servername, $dbusername, $dbPassword, "vag");
            // set the PDO error mode to exceptions
            $sql = "Select * from users where password = '" . $pass . "' and email = '" . $email . "';";

            $result = $conn->query($sql);

            if (mysqli_num_rows($result) == 0) {
                array_push($registerErrors, "Invalid email or password! ");
                unset($_SESSION["registerErrors"]);
                $_SESSION["registerErrors"] = $registerErrors;
                header("Location: login.php");
                die();
            } else {
                header("Location: index.html");
            }
            die();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}