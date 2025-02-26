<?php
$conn = new mysqli("localhost", "root", "", "emp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
