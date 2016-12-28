<?php
require_once "functions/connectDB.php";

//Добавление нового родителя в БД
function addParent($lname, $fname, $patr, $login, $pass){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("INSERT INTO `parent` (`par_lastName`, `par_firstName`, `par_patronymic`, `par_login`, `par_pass`) VALUES
    ('".$lname."', '".$fname."', '".$patr."', '".$login."', '".md5($pass)."')");
    closeDB();
    return $result;
}

if($_POST["par_pass"] == $_POST["par_repass"]){
    $success = addParent($_POST["par_surname"], $_POST["par_name"], $_POST["par_patr"], $_POST["par_login"], $_POST["par_pass"]);
    if($success) {
        echo "1";//успешно
    }
    else echo "0";//логин уже существует
}  else{
    echo "-1";//пароли не совпадают
}
?>