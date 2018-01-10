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
        return $this->link;
    }

    public function saveBlog($data){
//        echo '<pre>';
//        print_r($data);
        $link = mysqli_connect("localhost","root","","blog_database");
        $sql = "INSERT INTO post (blogTitle, authorName, blogDescription, publicationStatus) VALUES ('$data[blogTitle]', '$data[authorName]', '$data[blogDescription]', '$data[publicationStatus]') ";
        if(mysqli_query($link, $sql)) {
            return "Inserted Successful.";
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function viewBlog(){
        $sql = "SELECT * FROM post ";

        $link = mysqli_connect("localhost","root","","blog_database");
        if(mysqli_query($link, $sql)) {
            $queryResult =  mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem' . mysqli_error($this->link));
        }
    }

    public function getPostById($id){
        $link = mysqli_connect('localhost', 'root', '', 'blog_database');

        $sql = "SELECT * FROM post WHERE id = '$id' ";
        if(mysqli_query($link, $sql)) {
            $queryResult =  mysqli_query($link, $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function updateInfoById($id,$data)
    {
        $link = mysqli_connect('localhost', 'root', '', 'blog_database');
        $sql = "UPDATE post SET blogTitle = '$data[blogTitle]', authorName = '$data[authorName]', blogDescription = '$data[blogDescription]', publicationStatus = '$data[publicationStatus]' WHERE id = '$id' ";
        if (mysqli_query($link, $sql)) {
            $message = "Updated Succefully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error($link));
        }
    }

    public function deletePostById($id){
        $link = mysqli_connect('localhost', 'root', '', 'blog_database');

        $sql = "DELETE FROM post WHERE id = '$id' ";
        if(mysqli_query($link, $sql)) {
            $message = "Deleted Successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error($link));
        }
    }
}