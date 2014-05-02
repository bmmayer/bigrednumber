<?php

include("config.php");

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($mysqli->connect_errno){
  die("Error establishing database connection.");
}

include("php/functions.php");


?>