<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 10:22 AM
 */

namespace App\classes;


class BlogDatabase
{
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost","root","","blog_database");
        echo $this->link;
    }

    public function saveBlog($data){
//        echo '<pre>';
//        print_r($data);
        $sql = "INSERT INTO post (blogTitle, authorName, blogDescription, publicationStatus) VALUES ('$data[blogTitle]', '$data[authorName]', '$data[blogDescription]', '$data[publicationStatus]') ";
//        if(mysqli_query(new BlogDatabase(), $sql)) {
//            echo "Done";
//        } else {
//            die('Query Problem'.mysqli_error($this->link));
//        }
//        if(($this->sqlError($sql))==1){
//            $message =  "Post save successfully";
//            return $message;
//        }
    }



    private function sqlError($sql){
        if(mysqli_query($this->link, $sql)) {
            return 1;
        } else {
            die('Query Problem'.mysqli_error($this->link));
        }
    }
}