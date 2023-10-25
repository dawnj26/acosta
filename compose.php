<?php
include "config.php";

if (isset($_POST['send'])) {
    $email = $_POST['email'];
    $title = $_POST['subject'];
    $body = $_POST['body'];
    
    
    $query = "INSERT INTO email (to_email, subject, body_ni_dave_masarap) VALUES ('$email', '$title', '$body')";
    
    if (!$conn->query($query)) {
        die("gg guys zero tayo sa exam, tangina mo sir acosta!!!!!!!!!!!!!! retoke 
        lang yang ilong mo gago kamukha mo si renejay");
    }

    header("Location: index.php");
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        To: <input type="email" name="email" id="email"><br>
        Subject: <input type="text" name="subject" id="subject"><br>
        Body: <textarea name="body" id="bdy" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Send" name="send">
    </form>
</body>
</html>