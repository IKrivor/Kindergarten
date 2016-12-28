<?php
require_once "functions/connectDB.php";

//Возвращает информацию о саде
function getSadInfo($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `kin_id` = ".$id;
    $result = $mysqli->query("SELECT * FROM `kindergarten` $where");
    closeDB();
    return $result->fetch_assoc();
}

$response = getSadInfo($_POST["id"]);

echo json_encode($response);
exit;
?>