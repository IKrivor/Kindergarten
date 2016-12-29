<?php
require_once "functions/connectDB.php";

//Добавление новой группы
function updateGroup($id,$number, $ageLimit, $seatsNum, $seatsFreeNum, $price){
    global $mysqli;
    connectDB();
    $where = "WHERE `gr_id` = ".$id;
    $result = $mysqli->query("UPDATE `group` SET `gr_number` = '".$number."', `gr_ageLimit` = '".$ageLimit."', `gr_seatsNumber` = '".$seatsNum."', `gr_freeSeatsNumber` = '".$seatsFreeNum."', `gr_yearPrice` = '".$price."' $where");
    closeDB();
    return $result;
}

$success = updateGroup($_POST["gr_id"], $_POST["gr_number"], $_POST["gr_age_limit"], $_POST["gr_kolvo_mest"], $_POST["gr_kolvo_free_mest"], $_POST["gr_price"]);

if($success) {
    echo "1";//успешно
}
else echo "0";//не успешно
exit;
?>