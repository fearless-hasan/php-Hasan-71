<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 1:08 PM
 */
class Functionalities
{
    public function loop($a, $b){
        $result = 0 ;
        if($a<$b){
            for($i=$a ;$i<=$b; $i++) {
                $result+=$i;
            }
        } else {
            for($i=$b ;$i<=$a; $i++) {
                $result+=$i;
            }
        }
        return $result;
    }

    public function oddEven($a, $b){
        $result = "" ;
        $choice = $_POST['check'];
        if($a<$b){
            for($i=$a ;$i<=$b; $i++) {
                if($choice == "odd" && $i%2==1)
                    $result.=$i." ";
                else if($choice == "even" && $i%2==0)
                    $result.=$i." ";
            }
        } else {
            for($i=$a ;$i>=$b; $i--) {
                if($choice == "odd" && $i%2==1)
                    $result .= $i." ";
                else if($choice == "even" && $i%2==0)
                    $result .= $i." ";
            }
        }
        return $result;
    }
}