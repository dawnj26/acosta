<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "davemabuhay";

$conn = new mysqli($host, $user,$password,$db);

if (!$conn) {
    die("hindi ako maka connect");
}

?>