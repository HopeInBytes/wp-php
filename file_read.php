<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File read</title>
</head>
<body>
<?php
$file = fopen("data.txt", "r");
echo fread($file, filesize("data.txt"));
fclose($file);
?>  
</body>
</html>