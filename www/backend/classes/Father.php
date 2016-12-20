<?php
class Father
{
    var $id;
    var $last_name;
    var $first_name;
    var $patronymic;
    var $telephone;
    var $email;
    var $login;
    var $password;
    var $passport_id;

    function Kindergarten($id,$last_name,$first_name,$patronymic,$telephone,$login,$password,$passport_id){
        $this -> id = $id;
        $this -> last_name = $last_name;
        $this -> first_name = $first_name;
        $this -> patronymic = $patronymic;
        $this -> telephone = $telephone;
        $this -> login = $login;
        $this -> password = $password;
        $this -> passport_id = $passport_id;
    }
}
?>