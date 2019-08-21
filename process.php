<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$Afirstname = array();
$Alastname = array();
$Aemail = array();
$Apassword = array();

array_push($Afirstname,$firstname);
array_push($Alastname,$lastname);
array_push($Aemail,$email);
array_push($Apassword,$password);
implode("|",$Afirstname);
print_r($Afirstname);

?>