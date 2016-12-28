<?php
require_once "functions/connectDB.php";

//Добавление нового сада в БД
function addSad($name, $address, $tel, $login, $pass){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("INSERT INTO `kindergarten` (`kin_name`, `kin_address`, `kin_tel`, `kin_login`, `kin_pass`) VALUES
    ('".$name."', '".$address."', '".$tel."', '".$login."', '".md5($pass)."')");
    closeDB();
    return $result;
}

if($_POST["sad_pass"] == $_POST["sad_repass"]){
    $success = addSad($_POST["sad_name"], $_POST["sad_address"], $_POST["sad_tel"], $_POST["sad_login"], $_POST["sad_pass"]);
    if($success) {
        echo "1";//успешно
    }
    else echo "0";//логин уже существует
}  else{
    echo "-1";//пароли не совпадают
}
?>