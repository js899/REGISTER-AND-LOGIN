<?php

session_start();

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

if (isset($_POST['signin-btn'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
       //email validation
    /*$email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        echo $emailErr;
    }*/

    $sql = "SELECT email FROM people WHERE(email = '$email' AND password = '$pass')";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
        echo "Your email or password is invalid.";    
    } else {
        $_SESSION['login_user']= $email;
        echo "Login successful.";
    }
}

$conn->close();

?>