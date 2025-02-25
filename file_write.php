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

<!-- <?php 
$file = fopen("data.txt", "a");
fwrite($file, "\nappending new content");
fclose($file);
echo "Data Appended!";
?> -->


<form method="post">
        <textarea name="user_text" rows="5" cols="40" placeholder="Enter text here..."></textarea> <br><br>
        <button type="submit" name="submit">Save to File</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $user_text = $_POST['user_text'];

        if (!empty($user_text)) {
            $file = fopen("data.txt", "a"); // Open file in append mode
            fwrite($file, "\n" . $user_text); // Write user input
            fclose($file); // Close file
            echo "<p style='color:green;'>Data Appended Successfully!</p>";
        } else {
            echo "<p style='color:red;'>Please enter some text!</p>";
        }
    }
    ?>

</body>
</html>