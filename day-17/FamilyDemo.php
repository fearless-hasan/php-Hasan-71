<?php
require_once 'Detail.php';

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 12:41 PM
 */
class FamilyDemo extends Detail
{
    public $age = 22;
    protected $location = 'Farmgate';
    private $mobile = '01924912485';

    public function demoOne(){
        echo 'In demo One';
        $this -> subtraction();
    }

    protected function demoTwo(){
        echo 'In demoTwo';
    }

    private function demoThree(){
        echo 'In demo demoThree';
    }
}