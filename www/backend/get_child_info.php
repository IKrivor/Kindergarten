<?php
require_once "functions/connectDB.php";

//Возвращает информацию о ребенке
function getChildInfo($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `ch_id` = ".$id;
    $result = $mysqli->query("SELECT * FROM `child` $where");
    closeDB();
    return $result->fetch_assoc();
}

$response = getChildInfo($_POST["id"]);

echo json_encode($response);
exit;
?>