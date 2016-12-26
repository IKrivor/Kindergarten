<?php

class Kindergarten
{
    var $id;
    var $name;
    var $address;
    var $telephone;
    var $login;
    var $password;
    var $mode;
    var $license_id;

    function Kindergarten($id,$name,$address,$telephone,$login,$password,$license_id){
        $this -> id = $id;
        $this -> name = $name;
        $this -> address = $address;
        $this -> telephone = $telephone;
        $this -> login = $login;
        $this -> password = $password;
        $this -> license_id = $license_id;
    }
}
?>