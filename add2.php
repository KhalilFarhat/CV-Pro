<?php
require("connection.php");
// Set parameters
$email_signup = $_POST["email_signup"];
$fname_signup = $_POST["fname_signup"];
$last_name_signup = $_POST["last_name_signup"];
$password_signup = $_POST["password_signup"];

$query  = "INSERT INTO `user_credentials` (`firstname`, `lastname`, `email`,`psw`) VALUES ( '$fname_signup','$last_name_signup','$email_signup','$password_signup')";

    $stmt = $conn->prepare($query);

$stmt->execute();
header("Location:login_signup_portal.html");
?>