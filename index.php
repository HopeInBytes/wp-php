<?php
// Include the database connection file
include 'connect.php';

// SQL query to join product and sales tables
$sql = "SELECT 
    p.product_name,
    s.sale_date,
    s.quantity,
    p.price,
    s.total_amount
FROM 
    sales s
JOIN 
    product p ON s.product_id = p.product_id";

$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

// Check the number of rows returned
echo "Number of rows: " . $result->num_rows . "<br>";

// Close connection at the end of the script
// (Connection will be closed later after outputting HTML)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Sales</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Product Sales</h2>
        <?php echo "hello World";        ?>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Product Name</th>
                    <th>Sale Date</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . ($row["product_name"]) . "</td>";
                        echo "<td>" . ($row["sale_date"]) . "</td>";
                        echo "<td>" . ($row["quantity"]) . "</td>";
                        echo "<td>" . ($row["price"]) . "</td>";
                        echo "<td>" . ($row["total_amount"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No results found</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
