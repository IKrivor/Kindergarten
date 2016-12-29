<?php
require_once "functions/connectDB.php";

//Возвращает информацию о родителе
function getParInfo($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `par_id` = ".$id;
    $result = $mysqli->query("SELECT * FROM `parent` $where");
    closeDB();
    return $result->fetch_assoc();
}

$response = getParInfo($_POST["id"]);

echo json_encode($response);
exit;
?>