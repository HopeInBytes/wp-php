<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File handeling | GET Form Example</title>
</head>

<body>
    <form action="" method="get">
        name:
        <input type="text" name="fname">
        <inpute type="submit" value="submit">
    </form>
    <?php
    if (isset($GET['name'])) {
        echo "Hello," . htmlspecialchars($_GET['name']);// htmlspecialchars() prevents XSS attacks by escaping HTML characters.
    }
    ?>

    <!-- post method -->
     <form method="POST" action="">
        Name: <input type="text" name="fname"><br>
        
        Email: <input type="text" name="email"><br>
        age: <input type="number" name="age"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = htmlspecialchars($_POST['fname']);
        $email = ($_POST['email']);
        $age = ($_POST['age']);
        echo "Hello, " . $fname. " your email is " .$email. " and age are " .$age;
    }
    ?>

    <!-- Always validate and sanitize user input to prevent XSS & SQL Injection. -->
    <!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    if (empty($name)) {
        echo "Name is required!";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        echo "Only letters and spaces allowed!";
    } else {
        echo "Valid Name: " . htmlspecialchars($name);
    }
}
?> -->

</body>

</html>