<?php
require_once "functions/connectDB.php";

//Возвращает информацию о саде
function removeChild($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `ch_id` = ".$id;
    $result = $mysqli->query("DELETE FROM `child` $where");
    closeDB();
    return $result;
}

$response = removeChild($_POST["ch_id"]);

if($response) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>