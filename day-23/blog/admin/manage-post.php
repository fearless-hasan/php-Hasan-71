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
if(isset($_GET['action'])){

    $message = Login::deletePostById($_GET['id']);
}

if(isset($_POST['update_category'])){

    $message = Login::updatePostById($id, $_POST);
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
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="card">
                <div class="card-title m-auto">
                    <p style="margin-top: 25px;"> <b><i>Manage Post</i></b></p>

                </div>
                <div class="card-body">
                    <table class="table table-sm table-dark">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Category ID</th>
                            <th scope="col">Post Tittle</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Long Description</th>
                            <th scope="col">Image URL</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $queryResult = Login::getAllPost();
                        $i = 1;
                        while($post = mysqli_fetch_assoc($queryResult)) {
                            $status = $post['post_publication_status'];
                            ?>
                            <tr>
                                <th scope="row"><?=$i; ?></th>
                                <td><?=$post['category_name']; ?></td>
                                <td><?=$post['post_title']; ?></td>
                                <td><?=$post['post_short_description']; ?></td>
                                <td><?=$post['post_long_description']; ?></td>
                                <td><?=$post['post_image']; ?></td>
                                <td class="btn <?php if ($status == "published") echo "btn-success"; else echo "btn-danger"; ?>" ><?php echo $post['post_publication_status'] ?></td>
                                <td>
                                    <a href="update-post.php?action=true& id=<?=$post['id']; ?>" class="btn btn-outline-info">Update</a>
                                    <a href="?action=true& id=<?=$post['id']; ?>" class="btn btn-outline-danger" name="delete_category">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
<hr/>
            <div class="container">


                <!-- Page Features -->
                <div class="row text-center">

                    <?php
                    $queryResult = Login::getAllPost();
                    while($post = mysqli_fetch_assoc($queryResult)) {
                        $status = $post['post_publication_status'];
                            ?>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="<?=$post['post_image']; ?>" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title"><?=$post['post_title']; ?></h4>
                                        <p class="card-text"><?=$post['post_short_description']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="btn btn-block <?php if ($status == "published") echo "btn-success"; else echo "btn-danger"; ?>" ><?php echo $post['post_publication_status'] ?></div>
                                        <a href="update-post.php?action=true& id=<?=$post['id']; ?>" class="btn btn-outline-info" style="width: 48%;">Update</a>
                                        <a href="?action=true& id=<?=$post['id']; ?>" class="btn btn-outline-danger" name="delete_category" style="width: 48%;">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>



                </div>
                <!-- /.row -->

            </div>
        </div>
    </div>
    <?php if($message!="") { ?>
        <div class=" btn btn-danger d-block w-50 m-auto">
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