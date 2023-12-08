<?php
session_start();
include "connect.php";

if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$brukernavn = validate($_POST['brukernavn']);
$passord = validate($_POST['passord']);

if(empty($brukernavn)) {
    header ("Location: index.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: index.php?error=Password is required!");
    exit();
}

$sql = "SELECT * FROM users WHERE brukernavn='$brukernavn' AND passord='$passord'"; 

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $brukernavn && $row['password'] === $passord) {
        echo "Innlogget";
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Ugyldig brukernavn eller passord!");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}

?>