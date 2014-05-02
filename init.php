<?php

//Configuration

define('DB_NAME','brn');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_HOST','localhost');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($mysqli->connect_errno){
  die("Error establishing database connection.");
}

include("php/functions.php");


?>