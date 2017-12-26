<?php

/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/26/2017
 * Time: 10:32 AM
 */
class MyCalculator
{
    function calculate ($post){
        $firstNumber = $post['first_number'];
        $secondNumber = $post['second_number'];
        $operator = $post['operator'];

        if($operator == '+'){
            return $firstNumber + $secondNumber;
        } else if($operator == '-'){
            return $firstNumber - $secondNumber;
        } else if($operator == '*'){
            return $firstNumber * $secondNumber;
        } else if($operator == '/'){
            return $firstNumber / $secondNumber;
        } else if($operator == '%'){
            return $firstNumber % $secondNumber;
        } else if($operator == '.'){
            return $firstNumber . $secondNumber;
        }

//        switch ($operator){
//            case '+':
//                return $firstNumber + $secondNumber;
//                break;
//            case '-':
//                return $firstNumber - $secondNumber;
//                break;
//            case '*':
//                return $firstNumber * $secondNumber;
//                break;
//            case '/':
//                return $firstNumber / $secondNumber;
//                break;
//            case '%':
//                return $firstNumber % $secondNumber;
//                break;
//            case '.':
//                return $firstNumber . $secondNumber;
//                break;
//            default:
//                break;
//        }
    }
}