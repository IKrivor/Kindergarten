<?php
require_once "functions/connectDB.php";

//Добавление новой группы
function addGroup($number, $ageLimit, $seatsNum, $seatsFreeNum, $price, $sadId){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("INSERT INTO `group` (`gr_number`, `gr_ageLimit`, `gr_seatsNumber`, `gr_freeSeatsNumber`, `gr_yearPrice`, `gr_kin_id`) VALUES
    ('".$number."', '".$ageLimit."', '".$seatsNum."', '".$seatsFreeNum."', '".$price."', '".$sadId."')");
    closeDB();
    return $result;
}

$success = addGroup($_POST["gr_number"], $_POST["gr_age_limit"], $_POST["gr_kolvo_mest"], $_POST["gr_kolvo_free_mest"], $_POST["gr_price"], $_POST["gr_sad_id"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>