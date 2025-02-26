<?php
session_start();
echo "Welcome " . $_SESSION['name'];
setcookie("user", "JohnDoe", time() + 3600, "/"); // 1-hour expiration
echo "Cookie set!";

if (isset($_COOKIE["user"])) {
    echo "Welcome back, " . $_COOKIE["user"];
} else {
    echo "No cookie found.";
}
setcookie("user", "", time() - 3600, "/"); // Expired cookie
echo "Cookie deleted!";
?>