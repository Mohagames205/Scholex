

<?php

require("connection.php");

$date = date("D");
//dit is voor debugging 
#$date = "Tue";

switch($date){
    case "Mon":
        $db = "tweede";
        break;

    case "Tue":
        $db = "derde";
        break;

    case "Wed":
        $db = "vierde";
        break;

    case "Thu":
        $db = "vijfde";
        break;

    case "Fri":
        $db = "eerste";
        break;
    default: 
        $db = "eerste";
        break;
}


$query = $handle->prepare("SELECT * FROM $db");
$query->execute();

require_once("views/index.view.php");
?>
