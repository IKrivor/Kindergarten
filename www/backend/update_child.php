<?php
require_once "functions/connectDB.php";

//Добавление новой группы
function updateChild($id,$ch_lastName, $ch_firstName, $ch_patronymic, $ch_birthDate){
    global $mysqli;
    connectDB();
    $where = "WHERE `ch_id` = ".$id;
    $result = $mysqli->query("UPDATE `child` SET `ch_lastName` = '".$ch_lastName."', `ch_firstName` = '".$ch_firstName."', `ch_patronymic` = '".$ch_patronymic."', `ch_birthDate` = '".$ch_birthDate."' $where");
    closeDB();
    return $result;
}

$success = updateChild($_POST["ch_id"], $_POST["ch_fam"], $_POST["ch_name"], $_POST["ch_otch"], $_POST["date_b"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>