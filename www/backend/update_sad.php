<?php
require_once "functions/connectDB.php";

//Добавление новой группы
function updateSad($id,$kin_name, $kin_address, $kin_tel, $description, $mode){
    global $mysqli;
    connectDB();
    $where = "WHERE `kin_id` = ".$id;
    $result = $mysqli->query("UPDATE `kindergarten` SET `kin_name` = '".$kin_name."', `kin_address` = '".$kin_address."', `kin_tel` = '".$kin_tel."', `description` = '".$description."', `mode` = '".$mode."' $where");
    closeDB();
    return $result;
}

$success = updateSad($_POST["sad_id"], $_POST["sad_name"], $_POST["sad_address"], $_POST["sad_tel"], $_POST["sad_description"], $_POST["sad_regim"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>