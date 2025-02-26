<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session in PHP</title>
</head>
<body>
    <!-- Sessions allow us to store user data across multiple pages. 
    Example: Creating a Session (session_start() is required)-->
    <?php
    session_start();
    $_SESSION['name'] = "Pratiksha Sable";
    echo "session set! <a href='session_get.php'>read</a>";

    ?>
    
</body>
</html>