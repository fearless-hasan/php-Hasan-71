<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 11:55 AM
 */
class Detail
{
    public $name = 'Mosiur Rahman';
    protected $city = 'Dhaka';
    private $country = 'Bangladesh';
    private $value;
//
//    public function __construct($name) {
////        echo "in construct";
////        echo $name;
//        $this -> value = $name;
//    }


    public function addition(){
//        echo 'in addition';
//        echo $this -> country;
        echo $this -> value;
    }

    protected function subtraction(){
        echo 'in subtraction';
    }

    private function division(){
        echo 'in division';
    }
}