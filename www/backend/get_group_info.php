<?php
require_once "functions/connectDB.php";

//Возвращает информацию о саде
function getGroupInfo($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `gr_id` = ".$id;
    $result = $mysqli->query("SELECT * FROM `group` $where");
    closeDB();
    return $result->fetch_assoc();
}

$response = getGroupInfo($_POST["id"]);

echo json_encode($response);
exit;
?>