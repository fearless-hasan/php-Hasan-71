<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/2/2018
 * Time: 10:55 AM
 */

namespace App\classes;


class Student
{
    public function saveStudentInfo($data){
        $link = mysqli_connect('localhost', 'root', '', 'php_hasan_71');

        $sql = "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
        if(mysqli_query($link, $sql)) {
            $message =  "Student info save successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function getAllStudentInfo() {
        $link = mysqli_connect('localhost', 'root', '', 'php_hasan_71');

        $sql = "SELECT * FROM students";
        if(mysqli_query($link, $sql)) {
            $queryResult =  mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function getStudentById($id){
        $link = mysqli_connect('localhost', 'root', '', 'php_hasan_71');

        $sql = "SELECT * FROM students WHERE id = '$id' ";
        if(mysqli_query($link, $sql)) {
            $queryResult =  mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function updateInfoById($id,$data)
    {
        $link = mysqli_connect('localhost', 'root', '', 'php_hasan_71');

        $sql = "UPDATE students SET name = '$data[name]', email = '$data[email]', mobile = '$data[mobile]' WHERE id = '$id' ";
        if (mysqli_query($link, $sql)) {
            $message = "Updated Succefully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

        public function deleteStudentById($id){
            $link = mysqli_connect('localhost', 'root', '', 'php_hasan_71');

            $sql = "DELETE FROM students WHERE id = '$id' ";
            if(mysqli_query($link, $sql)) {
                $message = "Deleted Successfully";
                return $message;
            } else {
                die('Query Problem'.mysqli_error($link));
            }
    }
}