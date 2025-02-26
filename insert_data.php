<?php
// include 'db_connect.php';

// $sql = "INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com')";
// if ($conn->query($sql) === TRUE) {
//     echo "User added successfully!";
// }

$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "emp"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
    $sql = "UPDATE users SET name='emma' WHERE id=1";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User details inserted successfully!'); window.location.href='contact_form.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();

?>