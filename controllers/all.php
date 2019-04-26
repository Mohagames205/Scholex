<?php
require("connection.php");


$eerste = $handle->prepare("SELECT * FROM eerste");
$eerste->execute();

$tweede = $handle->prepare("SELECT * FROM tweede");
$tweede->execute();

$derde = $handle->prepare("SELECT * FROM derde");
$derde->execute();

$vierde = $handle->prepare("SELECT * FROM vierde");
$vierde->execute();

$vijfde = $handle->prepare("SELECT * FROM vijfde");
$vijfde->execute();


require_once "views/all.view.php";