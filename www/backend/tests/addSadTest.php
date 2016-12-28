<?php

/**
 * Created by PhpStorm.
 * User: 0000
 * Date: 27.12.2016
 * Time: 9:39
 */
//require_once('../registr-sad.php');
include ('registr-sad.php');
include "connectDB.php";

class addSadTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){ }
    public function tearDown(){ }

    public function testAddSad()
    {
        $result = addSad("Радуга-тест","Адрес-тест", "111111-тест", "raduga-test", "test");
        $this->assertTrue($result);
    }
}
