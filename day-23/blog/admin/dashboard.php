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

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>