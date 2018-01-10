<?php
require_once 'vendor/autoload.php';

use App\classes\BlogDatabase;

$message = "";
$queryResult = BlogDatabase::viewBlog();
$queryResult2 = BlogDatabase::viewBlog();

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
        <div class="col-sm-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <hr/>
                    <table class="table w-100 m-auto">
                        <tr>
                            <th>ID</th>
                            <th>Blog Title</th>
                            <th>Author Name</th>
                            <th>Blog Description</th>
                            <th>Publication Status</th>
                        </tr>

                        <?php while($post = mysqli_fetch_assoc($queryResult2)){ ?>
                            <tr>
                                <td><?php echo $post['id']; ?></td>
                                <td><?php echo $post['blogTitle']; ?></td>
                                <td><?php echo $post['authorName']; ?></td>
                                <td><?php echo $post['blogDescription']; ?></td>
                                <td><?php echo $post['publicationStatus']; ?></td>
                                <td>
                                    <a href="update-post.php?id=<?=$post['id']; ?>" class="btn btn-primary">Update</a>
                                    <a href="delete-post.php?id=<?=$post['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <hr/>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <hr/>
                    <table class="table w-100 m-auto">
                        <tr>
                            <th>ID</th>
                            <th>Blog Title</th>
                            <th>Author Name</th>
                            <th>Blog Description</th>
                            <th>Publication Status</th>
                        </tr>

                        <?php while($post = mysqli_fetch_assoc($queryResult)){
                            if($post['publicationStatus']=="published") { ?>
                                <tr>
                                    <td><?php echo $post['id']; ?></td>
                                    <td><?php echo $post['blogTitle']; ?></td>
                                    <td><?php echo $post['authorName']; ?></td>
                                    <td><?php echo $post['blogDescription']; ?></td>
                                    <td><?php echo $post['publicationStatus']; ?></td>
                                    <td>
                                        <a href="update-post.php?id=<?=$post['id']; ?>" class="btn btn-primary">Update</a>
                                        <a href="delete-post.php?id=<?=$post['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } } ?>
                    </table>
                    <hr/>
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