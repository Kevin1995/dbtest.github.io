<?php

$servername="db1.ciugw44h6c90.eu-west-1.rds.amazonaws.com";
$username="admin";
$password="password1234";
$database="logins";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Error!".mysqli_connect_error());
}

?>