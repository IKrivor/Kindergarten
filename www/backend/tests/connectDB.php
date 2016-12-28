<?php
function connectDB(){
global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "kindergarten");
$mysqli->query("SET NAMES 'utf-8'");
//    $db = mysql_connect("localhost","roo","");
//    mysql_select_db("kindergarten",$db);
}

function closeDB(){
global $mysqli;
$mysqli->close();
}


?>