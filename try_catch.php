<?php
try {
    //code...
    echo 10/0;
} catch (Exception $e) {
    //throw $th;
    echo "Error: " . $e->getMessage();
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>