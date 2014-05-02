<?php

include("../init.php");

$return = array();
$return["number"] = augmentNumber();

echo json_encode($return);

?>