<?php
$mysqli = false;

require_once "functions/connectDB.php";

function getCross(){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM `group`");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result){
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}

if($_POST["query"] == 1){
    echo json_encode(getCross());
}
?>


