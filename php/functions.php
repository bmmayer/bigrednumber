<?php

function getNumber(){

    global $mysqli;

    $result = $mysqli->query("SELECT `numberfield` FROM `number` WHERE 1");
    $arr = $result->fetch_array(MYSQLI_ASSOC);

    return $arr['numberfield'];

}

function augmentNumber(){

    global $mysqli;

    $result = $mysqli->query("UPDATE `number` SET `numberfield` = `numberfield`+1 WHERE 1");

    return getNumber();

}



?>