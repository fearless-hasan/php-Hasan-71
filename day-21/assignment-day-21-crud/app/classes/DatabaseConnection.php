<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/7/2018
 * Time: 2:37 AM
 */

namespace App\classes;

require_once 'Configure.php';

class DatabaseConnection extends Configure
{
    private $configure;
    private static $instance;
    private $dbConn;


    /**
     * DatabaseConnection constructor.
     */
    protected function __construct ()
    {
        $configure = parent::__construct();
//        echo '<pre>';
//        print_r($configure);
    }


    /**
     * Singleton pattern.
     */
    private static function getInstance(){
        if (self::$instance == null){
            $className = __CLASS__;
            self::$instance = new $className;       //generate class full path.
        }
        return self::$instance;
    }

    private static function initializeConnection(){
        $db = self::getInstance();
        $configureDetail = new Configure();
        echo '<pre>';
        print_r($configureDetail);
//        foreach ($configureDetail as $key => $value) {
//            echo $key;
//        }

        $db->dbConn = mysqli_connect("host", "root", "","crud");
//        $db->dbConn = mysqli_connect($configureDetail['host'], $configureDetail['user'], $configureDetail['password'],$configureDetail['name']);
        $db->dbConn->set_charset('utf8');
        return $db;
    }

    /**
     * @return mysqli
     */
    public static function getDbConn() {
        try {
            $db = self::initializeConnection();
            return $db->dbConn;
        } catch (\Exception $exception) {
            echo "I was unable to open a connection to the database. " . $exception->getMessage();
            return null;
        }
    }
}