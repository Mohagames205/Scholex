<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $handle = new PDO("mysql:host=$servername;dbname=schoolpanel", $username, $password);
    // set the PDO error mode to exception
    $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>