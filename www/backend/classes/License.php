<?php

class License
{
    var $id;
    var $number;
    var $file_way;

    function License($id,$number,$file_way){
        $this -> id = $id;
        $this -> number = $number;
        $this -> file_way = $file_way;
    }
}
?>