<?php
/**
 * Created by PhpStorm.
 * User: fearless-hasan
 * email: hasan.bubt.40@gmail.com
 * Date: 1/19/2018
 * Time: 12:20 AM
 */

session_start();
require_once '../vendor/autoload.php';
use App\classes\Login;

if(isset($_GET['logout'])){
    Login::adminLogout();
    header('Location: about.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <title>About</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.php">Blog Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="post.php">All Post
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="live-message.php">Live Message</a>
                </li>
                <?php if(isset($_SESSION['id'])){
                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle bg-danger text-light font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=$_SESSION['name']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-primary" href="../admin">Admin Panel</a>
                                <a class="dropdown-item bg-success" href="?logout=true">Logout</a>
                            </div>
                        </li>
                    </ul>
                    <?php
                } ?>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-8 m-auto text-center">
            <h1 style="padding-top: 150px;">
                About
            </h1>
            <p>
                All about this site is so easy. A proper functional blog site it is. I developed it for learning purpose. But anyone can use it.
            </p>
        </div>
    </div>

</div>
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>
