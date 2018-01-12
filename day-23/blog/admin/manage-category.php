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

    $message = Login::deleteCategoryById($_GET['id']);
}

if(isset($_POST['update_category'])){

    $message = Login::updateCategoryById($id, $_POST);
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
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-title m-auto">
                    <p style="margin-top: 25px;"> <b><i>Manage Category</i></b></p>

                </div>
                <div class="card-body">
                    <table class="table table-sm table-dark">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Status</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $queryResult = Login::getAllCategory();
                        $i = 1;
                        while($category = mysqli_fetch_assoc($queryResult)) {
                            $status = $category['category_publication_status'];
                            ?>
                        <tr>
                            <th scope="row"><?=$i; ?></th>
                            <td><?=$category['category_name']; ?></td>
                            <td><?=$category['category_description']; ?></td>
                            <td class="btn <?php if ($status == "published") echo "btn-success"; else echo "btn-danger"; ?>" ><?php echo $category['category_publication_status'] ?></td>
                            <td>
                                <a href="update-category.php?action=true& id=<?=$category['id']; ?>" class="btn btn-outline-info">Update</a>
                                <a href="?action=true& id=<?=$category['id']; ?>" class="btn btn-outline-danger" name="delete_category">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
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