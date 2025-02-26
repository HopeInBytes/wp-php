<?php
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerator = isset($_POST['numerator']) ? floatval($_POST['numerator']) : 0;
    $denominator = isset($_POST['denominator']) ? floatval($_POST['denominator']) : 0;

    if ($denominator == 0) {
        $result = "Error: Division by zero is not allowed.";
    } else {
        $result = "Result: " . ($numerator / $denominator);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Division Form</title>
</head>
<body>
    <h2>Division Form</h2>
    <form method="post">
        <label>Numerator:</label>
        <input type="number" step="any" name="numerator" required>
        <br><br>

        <label>Denominator:</label>
        <input type="number" step="any" name="denominator" required>
        <br><br>

        <button type="submit">Divide</button>
    </form>

    <h3><?php echo $result; ?></h3>
</body>
</html>
