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
    <h1>Welcome</h1>

    <h2>Har du bruker?</h2>
    <p>Logg inn:</p>
    <form method="post" action="login.php">
        <label for="brukernavn">Brukernavn:</label>
        <input type="text" name="brukernavn" /><br />
        <label for="passord">Passord:</label>
        <input type="password" name="passord" /><br />

        <input type="submit" value="Logg inn" name="submit">
    </form>
    <h2>Har du ikke bruker?</h2>
    <a href="create_user.php"><button>Registrer bruker her</button>
    </a>
</body>
</html>