<?php

session_start();

if($_SESSION['id'] == null){
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
use App\classes\Login;

if(isset($_GET['logout'])){
    Login::adminLogout();
}

$message = "";
if(isset($_POST['add_post'])){
    $message = Login::addPost($_POST, $_FILES);


}





//    echo '<pre>';
//    print_r($_SESSION);
//    unset($_SESSION['name']);
//    print_r($_SESSION);
//    echo '</pre>';

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include_once 'includes/menu.php'; ?>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title m-auto" style="padding-top: 25px;">
                    <p> <b><i>Add Post</i></b></p>

                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Blog Name</label>
                            <div class="col-sm-9">
                                <select name="category_id" class="form-control">
                                    <option>---Select Category Name---</option>
                                    <?php
                                    $queryResult = Login::getAllCategory();
                                    while($category = mysqli_fetch_assoc($queryResult)) {
                                    $status = $category['category_publication_status'];
                                    if($status == "published") {
                                    ?>
                                    <option value="<?=$category['id']; ?>"> <?=$category['category_name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="post_title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <input type="text" name="short_description" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="long_description">

                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="status" value="published"> Published
                                <input type="radio" name="status" value="unpublished"> Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 m-auto">
                                <button type="submit" class="btn btn-outline-primary btn-block" name="add_post">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if($message!="") { ?>
        <div class=" btn btn-success d-block w-50 m-auto">
            <h4 align="center">
                <?=$message; ?>
            </h4>
        </div>
    <?php } ?>
</div>

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>