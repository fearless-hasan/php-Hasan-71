<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/7/2018
 * Time: 2:11 AM
 */

namespace App\classes;


class Configure
{
    private $host       = "localhost";
    private $user       = "root";
    private $password   = "";
    private $name       = "crud";

    protected function __construct(){
        $configureDetail = array(
            'host'      => $this->host,
            'user'      => $this->user,
            'password'  => $this->password,
            'name'      => $this->name
        );
        return ($configureDetail);
    }

}