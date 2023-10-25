<?php


if (!isset($_GET['id'])) {
    header("Location: index.php");
    die();
}
$id = $_GET['id'];
require "config.php";

$query = "SELECT * FROM email WHERE id=$id";
$result = $conn->query($query)->fetch_assoc();
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
        To: <input type="email" name="email" id="email" value="<?php echo $result['to_email'] ?>"><br>
        Subject: <input type="text" name="subject" id="subject" value="<?php echo $result['subject'] ?>"><br>
        Body: <textarea name="body" id="bdy" cols="30" rows="10"><?php echo $result['body_ni_dave_masarap'] ?></textarea><br>
        <a href="index.php">Ok.</a>
    </form>
</body>

</html>