<?php
function connectDB(){
global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "kindergarten");
$mysqli->query("SET NAMES 'utf-8'");
}

function closeDB(){
global $mysqli;
$mysqli->close();
}


?>