<?php
$servername = "remotemysql.com";
$username = "qTFfXC5hAo";
$password = getenv("password");
var_dump($password);
try {
    $handle = new PDO("mysql:host=$servername;dbname=qTFfXC5hAo", $username, $password);
    // set the PDO error mode to exception
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
