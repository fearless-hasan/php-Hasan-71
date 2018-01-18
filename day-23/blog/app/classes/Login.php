<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/7/2018
 * Time: 11:56 AM
 */

namespace App\classes;

use App\classes\Database;


class Login
{
    public function adminLoginCheck($data){
        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            $user = mysqli_fetch_assoc($queryResult);
            if($user){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];

                header('Location: dashboard.php');
            } else {
                $message = "please use valid email address & password";
                return $message;
            }
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function adminLogout(){
    unset($_SESSION['id']);
    unset($_SESSION['name']);
        header('Location: index.php');
    }

    public function addCategory($data){
        $category_name = $data['category_name'];
        $category_description = $data['category_description'];
        $category_publication_status = $data['status'];
        $sql = "INSERT INTO `categories`(`category_name`, `category_description`, `category_publication_status`) VALUES ('$category_name', '$category_description', '$category_publication_status') ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $message = "Category Inserted";
            return $message;
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllCategory(){
        $sql = "SELECT * FROM categories ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteCategoryById($id){
        $sql = "DELETE FROM categories WHERE id = '$id' ";
        if(mysqli_query(Database::dbConnection(), $sql)) {
            $message = "Deleted Successfully";
            return $message;
        } else {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function selectCategoryById($id)
    {
        $sql = "SELECT * FROM categories WHERE id = '$id' ";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResutl = mysqli_query(Database::dbConnection(), $sql);
            return $queryResutl;
        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }
    }


    public function updateCategoryById($id, $data)
    {
        $sql = "UPDATE `categories` SET `category_name` = '$data[category_name]',`category_description`= '$data[category_description]',`category_publication_status`= '$data[category_publication_status]' WHERE id = '$id' ";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $message = "Updated Succefully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }
    }

    public function addPost($data,$files)
    {

        $permitted  		= array('jpg', 'jpeg', 'png');
        $category_id        = Login::validate($data["category_id"]);
        $post_title 		= Login::validate($data["post_title"]);
        $post_title 		= strtoupper($post_title);
        $short_description 	= Login::validate($data["short_description"]);
        $long_description 	= Login::validate($data["long_description"]);
        $status 			= Login::validate($data["status"]);

        $folder 		    = "../uploaded/images/";

        $file_temp 		= $files['image']['tmp_name'];
        $file_name 		= $files['image']['name'];
        $file_type 		= $files['image']['type'];


        $div 			= explode('.', $file_name);
        $file_ext 		= strtolower(end($div)) ;
        foreach ($permitted as $permit) {
            if($permit == $file_ext) {
//                $unique_image = $name . " " . substr(md5(time()), 0, 10) . '.' . $file_ext;
                $unique_image = $post_title. '.' . $file_ext;
                $uploaded_image = $folder . $unique_image;

                $sql = "INSERT INTO `posts`( `category_id`, `post_title`, `post_short_description`, `post_long_description`, `post_image`, `post_publication_status`) VALUES ('$category_id', '$post_title', '$short_description', '$long_description', '$uploaded_image', '$status') ";
                if (mysqli_query(Database::dbConnection(), $sql)) {

                    $newImage = Login::resizeImage($file_temp,500,325);

                    imagejpeg($newImage, $uploaded_image);

//                    move_uploaded_file($file_temp, $uploaded_image);

                    $message = "Post Inserted Successfully";
                    return $message;
                } else {
                    die('Query Problem' . mysqli_error(Database::dbConnection()));
                }
            }
        }
        $message = "Please Upload a valid Image";
        return $message;

    }

     public function validate($data){
        $data 	= trim($data);
        $data 	= stripcslashes($data);
        $data 	= htmlspecialchars($data);
        return $data;
    }

    public function resizeImage($file, $w, $h, $crop=FALSE) {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;
    }

    public function getAllPost(){
        $sql = "SELECT p.*, c.category_name FROM posts as p, categories as c WHERE p.category_id = c.id ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllPublishedPost(){
        $sql = "SELECT p.*, c.category_name FROM posts as p, categories as c WHERE (p.category_id = c.id) AND (p.post_publication_status = 'published') ";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die("query problem".mysqli_error(Database::dbConnection()));
        }
    }


    public function selectPostById($id)
    {
        $sql = "SELECT * FROM posts WHERE id = '$id' ";
        if (mysqli_query(Database::dbConnection(), $sql)) {
            $queryResutl = mysqli_query(Database::dbConnection(), $sql);
            return $queryResutl;
        } else {
            die('Query Problem' . mysqli_error(Database::dbConnection()));
        }
    }

    public function updatePostById($id, $data, $files)
    {

        $permitted  		= array('jpg', 'jpeg', 'png');
        $category_id        = Login::validate($data["category_id"]);
        $post_title 		= Login::validate($data["post_title"]);
        $post_title 		= strtoupper($post_title);
        $short_description 	= Login::validate($data["short_description"]);
        $long_description 	= Login::validate($data["long_description"]);
        $status 			= Login::validate($data["status"]);

        $folder 		    = "../uploaded/images/";

        $file_temp 		= $files['image']['tmp_name'];
        $file_name 		= $files['image']['name'];
        $file_type 		= $files['image']['type'];


        $div 			= explode('.', $file_name);
        $file_ext 		= strtolower(end($div)) ;
        foreach ($permitted as $permit) {
            if($permit == $file_ext) {
//                $unique_image = $name . " " . substr(md5(time()), 0, 10) . '.' . $file_ext;
                $unique_image = $post_title. '.' . $file_ext;
                $uploaded_image = $folder . $unique_image;

                $sql = "UPDATE `posts` SET  `category_id` = '$category_id', `post_title` = '$post_title', `post_short_description` = '$short_description', `post_long_description` = '$long_description', `post_image` = '$uploaded_image', `post_publication_status` = '$status' WHERE `id` = '$id' ";
                if (mysqli_query(Database::dbConnection(), $sql)) {

                    $newImage = Login::resizeImage($file_temp,500,325);

                    imagejpeg($newImage, $uploaded_image);

//                    move_uploaded_file($file_temp, $uploaded_image);

                    $message = "Post Inserted Successfully";
                    return $message;
                } else {
                    die('Query Problem' . mysqli_error(Database::dbConnection()));
                }
            }
        }
        $message = "Please Upload a valid Image";
        return $message;

    }
}