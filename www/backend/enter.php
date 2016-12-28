<?php
require_once "functions/connectDB.php";

global $mysqli;
connectDB();
$type = $_POST["type"];
$login = $_POST["login"];

if($type == "Детский сад"){
    $sad = $mysqli->query("SELECT * FROM `kindergarten` WHERE `kin_login` = '$login'");
    $sad_data = $sad->fetch_assoc();
    closeDB();
    if($sad_data["kin_pass"] == md5($_POST["pass"])) {
        $sad_id = $sad_data["kin_id"];
        echo $sad_id;
    }
    else echo "-1";
} else{
    $parent = $mysqli->query("SELECT * FROM `parent` WHERE `par_login` = '$login'");
    $parent_data = $parent->fetch_assoc();
    closeDB();
    if($parent_data["par_pass"] == md5($_POST["pass"])) {
        $parent_id = $parent_data["par_id"];
        echo $parent_id;
    }
    else echo "-1";
}


?>