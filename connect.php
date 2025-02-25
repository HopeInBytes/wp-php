<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


// Create product table with utf8mb4 charset and utf8mb4_unicode_ci collation
$productTable = "CREATE TABLE IF NOT EXISTS product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

// if ($conn->query($productTable) === TRUE) {
//     echo "Product table created successfully<br>";
// } else {
//     echo "Error creating product table: " . $conn->error . "<br>";
// }

// Create sales table with utf8mb4 charset and utf8mb4_unicode_ci collation
$salesTable = "CREATE TABLE IF NOT EXISTS sales (
    sale_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    sale_date DATE NOT NULL,
    quantity INT NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product(product_id)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

// if ($conn->query($salesTable) === TRUE) {
//     echo "Sales table created successfully<br>";
// } else {
//     echo "Error creating sales table: " . $conn->error . "<br>";
// }


// Set the charset to utf8mb4
$conn->set_charset("utf8mb4");
?>
