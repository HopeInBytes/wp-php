<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <?php
$file = fopen("data.txt", "w");
fwrite($file, "Hello, this is a test file!");
fclose($file);
echo "File written successfully!";
?> -->

<?php 
$file = fopen("data.txt", "a");
fwrite($file, "\nappending new content");
fclose($file);
echo "Data Appended!";
?>

</body>
</html>