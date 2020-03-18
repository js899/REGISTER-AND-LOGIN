<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "full stack test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
}

$email = "";
$pass = "";

if (isset($_POST['register-btn'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO people (email, password) VALUES ('$email','$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully.";
    } else {
        echo "Sorry, you may already have an account.";
    }
}

$conn->close();

?>