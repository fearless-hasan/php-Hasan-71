<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 10:06 AM
 */
class FullName
{
    function makeFullName($firstName, $lastName){
        $fullName = $firstName . ' ' . $lastName;
        return $fullName;
    }
}