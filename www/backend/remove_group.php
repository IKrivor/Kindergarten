<?php
require_once "functions/connectDB.php";

//Возвращает информацию о саде
function removeGroup($id){
    global $mysqli;
    connectDB();
    $where = "WHERE `gr_id` = ".$id;
    $result = $mysqli->query("DELETE FROM `group` $where");
    closeDB();
    return $result;
}

$response = removeGroup($_POST["gr_id"]);

if($response) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>