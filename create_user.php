<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <form action="registration.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" placeholder="username" name="username"><br/>
        <label for="password">Password:</label>
        <input type="password" placeholder="password" name="password"><br/>
        <label for="name">Name:</label>
        <input type="text" placeholder="optional" name="name">
        <button type="submit">Create user</button><br/>
    </form>
</body>
</html>