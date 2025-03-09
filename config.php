<?php
$host = "sql301.infinityfree.com";
$user = "if0_38476748";  // Change if needed
$pass = "r9SRR8uVJRplkDw";       // Set your password if applicable
$dbname = "if0_38476748_user_data";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
