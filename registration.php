<?php
session_start();
include "connect.php";

$brukernavn = $_POST['username'];
$passord = $_POST['password'];
$name = $_POST['name'];

$sql = "SELECT * FROM users WHERE brukernavn='$brukernavn'"; 

$result = mysqli_query($kobling, $sql);

if(mysqli_num_rows($result) > 0) {
    header ("Location: index.php?error=This username is already taken!");
        exit();
}
else {
    $query = "INSERT INTO users (brukernavn, passord, navn) VALUES ('$brukernavn','$passord', '$name')";
    $result = mysqli_query($kobling, $query);
    //set session id
    echo ("Registration success! Welcome! Press <a href='calendar.php'>here</a> to go to calendar!");
}

?>