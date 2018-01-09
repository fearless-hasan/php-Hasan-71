<?php

session_start();

if($_SESSION['id'] == null){
    header('Location: index.php');
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();

if(isset($_GET['logout'])){
    $login->adminLogout();
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
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title m-auto">
                    <p> <b><i>Add Category</i></b></p>

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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <a href="" class="btn btn-outline-info">Edit</a>
                                <a href="" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <a href="" class="btn btn-outline-info">Edit</a>
                                <a href="" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th scope="row">3</th>
                            <th scope="row">3</th>
                            <td>@twitter</td>
                            <td>
                                <a href="" class="btn btn-outline-info">Edit</a>
                                <a href="" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>