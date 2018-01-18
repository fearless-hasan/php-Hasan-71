<?php
require_once 'vendor/autoload.php';

use App\classes\BlogDatabase;

$message = "";
$queryResult = BlogDatabase::getPostById($_GET['id'], $_POST);
$post = mysqli_fetch_assoc($queryResult);
if(isset($_POST['btn'])) {
    $message = BlogDatabase::updateInfoById($_GET['id'], $_POST);
    header('Location: view-post.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Test Day-22</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

</head>
<body>


<hr/>
<nav class="navbar w-25 container">
    <a href="new-post.php">Add Post</a> ||
    <a href="view-post.php">View Posts</a>
</nav>
<hr/>

<h1 class="text-center text-success"><?php echo $message; ?></h1>
<hr/>
<div class="container">

    <div class="row">
        <div class="col-sm-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <form id="btn" method="post" action="">
                        <div class="row form-group">
                            <label class="col-form-label col-sm-5">Blog Title</label>
                            <div class="col-sm-7">
                                <input type="text" name="blogTitle" class="form-control" value="<?=$post['blogTitle']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-5">Author Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="authorName" class="form-control" value="<?=$post['authorName']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-5">Blog Description</label>
                            <div class="col-sm-7">
                                <input type="text" name="blogDescription"  class="form-control" value="<?=$post['blogDescription']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-form-label col-sm-5"> Publication Status </label>
                            <label> <input type="radio" name="publicationStatus" value="published" <?php if($post['publicationStatus']=="published") echo"checked"; ?> > Published </label>
                            <label> <input type="radio" name="publicationStatus" value="unpublished" <?php if($post['publicationStatus']=="unpublished") echo"checked"; ?> > Unpublished </label>
                        </div>

                        <div class="row form-group">
                            <label class="col-form-label col-sm-5"></label>
                            <div class="col-sm-7">
                                <input type="submit" name="btn" id="btn" class="btn btn-success" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<hr/>


<script src="../../js/jquery-3.2.1.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.js"></script>
</body>
</html>