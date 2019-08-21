<?php
include_once("config.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pswd = md5($pass);

$sql = "INSERT INTO user (firstname, lastname, email, pass)
VALUES ('$firstname', '$lastname', '$email','$pswd')";

if (mysqli_query($conn, $sql)) {
    include("login.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>