<?php
class Passport
{
    var $id;
    var $series;
    var $number;
    var $issue_date;
    var $issue_name;
    var $file_way;

    function License($id,$number,$issue_date,$issue_name,$file_way){
        $this -> id = $id;
        $this -> number = $number;
        $this -> issue_date = $issue_date;
        $this -> issue_name = $issue_name;
        $this -> file_way = $file_way;
    }
}
?>