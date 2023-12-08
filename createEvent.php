<?php 

session_start();
include "connect.php";

$day = $_POST['day'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$notes = $_POST['notes'];

$query = "INSERT INTO event (title, day, start, end, notes) VALUES ('$title', '$day', '$start', '$end', '$notes')";

$result = mysqli_query($kobling, $sql);

$query = "SELECT * FROM "

?>