<?php
require_once "functions/connectDB.php";

//Добавление новой группы
function updatePar($id,$par_lastName, $par_firstName, $par_patronymic, $par_tel, $par_email){
    global $mysqli;
    connectDB();
    $where = "WHERE `par_id` = ".$id;
    $result = $mysqli->query("UPDATE `parent` SET `par_lastName` = '".$par_lastName."', `par_firstName` = '".$par_firstName."', `par_patronymic` = '".$par_patronymic."', `par_tel` = '".$par_tel."', `par_email` = '".$par_email."' $where");
    closeDB();
    return $result;
}

$success = updatePar($_POST["par_id"], $_POST["parents_fam"], $_POST["parents_name"], $_POST["parents_otch"], $_POST["parents_tel"], $_POST["parents_mail"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>