<?php
require_once "functions/connectDB.php";

//Добавление ребенка
function addChild($ch_lastName, $ch_firstName, $ch_patronymic, $ch_birthDate, $ch_par_id){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("INSERT INTO `child` (`ch_lastName`, `ch_firstName`, `ch_patronymic`, `ch_birthDate`, `ch_par_id`) VALUES
    ('".$ch_lastName."', '".$ch_firstName."', '".$ch_patronymic."', '".$ch_birthDate."', '".$ch_par_id."')");
    closeDB();
    return $result;
}

$success = addChild($_POST["ch_fam"], $_POST["ch_name"], $_POST["ch_otch"], $_POST["date_b"], $_POST["cl_par_id"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>