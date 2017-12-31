<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 1:08 PM
 */
class Functionalities
{
<<<<<<< HEAD
	public function increasing(var a,var b){
		var result = "";
		for(var i = a;i<=b;i++) {
			result += i;
		}
	}
	public function decreasing(var a,var b){
		var result = "";
		for(var i = a;i>=b;i--) {
			result += i;
		}
	}
=======
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
>>>>>>> 0a97008e0ae3ab8a05ee8545b08118b1146b0e99
}