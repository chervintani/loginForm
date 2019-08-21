<?php
// error_reporting(0);
include_once("config.php");
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
//I STOPPED HERE TRY TO PUT 2 PARAM IN MYSQLI_QUERY
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'"); 
    if(mysqli_num_rows($query) > 0){
        echo "Username already exists";
    }else {
        mysqli_query("INSERT INTO user (email,pass) VALUES ('$user','$pass')");
        echo "SUCCESS!!!";
    }
}

?>