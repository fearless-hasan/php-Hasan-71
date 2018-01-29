<?php
session_start();

require_once '../vendor/autoload.php';
use App\classes\Login;

if(isset($_GET['logout'])){
    Login::adminLogout();
    header('Location: post.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
    $queryResult = Login::getAllPublishedPost();
    $post = mysqli_fetch_assoc($queryResult);
    $id = $post['id'];
}
$posts = array();
$page = 0;
$i = 0;
$message = "";

if(isset($_POST['comment_post'])){
    $message = Login::addComment($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BLOG</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/blog.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.php">Blog Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item  active">
                    <a class="nav-link" href="post.php">All Post
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
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

<!-- Page Content -->
<div >

    <?php
    $queryResult = Login::selectPostById($id);
    $post = mysqli_fetch_assoc($queryResult);
        ?>
    
        <div>
            <img src="<?=$post['post_image']; ?>" height="400" width="100%">
            <div class="container">
                <h2 style="padding-top: 50px; padding-bottom: 30px;"><?=$post['post_title']; ?></h2>
                <p class="container"><?=$post['post_long_description']; ?></p>
            </div>
        </div>
    <hr/>

    <div class="col-sm-8 m-auto">

        <br/>
        <h3>Comments:</h3>
        <hr/>
        <?php
        $queryResult = Login::getAllPublishedComment($id);
        while($comment = mysqli_fetch_assoc($queryResult)) {
            ?>
            <div class="row form-group">
                <div class="col-sm-8 m-auto">
                    <u><h4><?=$comment['commenter_name']; ?></h4></u>
                    <p class="container"><?=$comment['comment']; ?></p>
                    <hr/>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="row">
            <div class="col-sm-8 m-auto">
                <form method="POST" action="" style="padding-bottom: 200px;">
                    <div class="row form-group">
                        <label class="col-form-label col-sm-3">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="commenter_name" class="form-control" placeholder="Name" required/>
                            <input type="hidden" name="post_id" value="<?=$post['id']; ;?>"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-form-label col-sm-3">Comment</label>
                        <div class="col-sm-9">
                            <textarea name="comment" class="form-control" placeholder="Comment" rows="4">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm-4 m-auto">
                        <input type="submit" name="comment_post" class="form-control btn btn-block btn-success" value="Comment"/>
                    </div>
                </form>
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


    <?php
    $queryResult = Login::getAllPublishedPost();
    $i = 0;
    while($post = mysqli_fetch_assoc($queryResult)) {
        if($id == $post['id']) {$page = $i;}
        array_push($posts,$post);
        $i++;
    }
    ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php if($i>1) { ?>
            <li class="page-item <?php echo $page == 0 ? ' disabled' : '' ; ?>">
                <a class="page-link" href="post.php?id=<?=$posts[$page-1]['id']; ?>" tabindex="-1">Previous</a>
            </li>
            <?php } ?>

            <?php for($j=0;$j<$i;$j++) { ?>

            <li class="page-item  <?php echo $j==$page ? 'active' : '' ; ?> "><a class="page-link" href="post.php?id=<?=$posts[$j]['id']; ?>"><?=$j+1; ?></a></li>

            <?php } ?>

            <?php if($i>1) { ?>
            <li class="page-item <?php echo $page == $i-1 ? ' disabled' : '' ; ?>">
                <a class="page-link" href="post.php?id=<?=$posts[$page+1]['id']; ?>">Next</a>
            </li>
            <?php } ?>
        </ul>
    </nav>



    <!-- Page Features -->
    <div class="container">
    <hr/>
    <div class="row text-center">
<!--        post will be sliding-->

        <?php
            foreach ($posts as $post){
            ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?=$post['post_image']; ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?=$post['post_title']; ?></h4>
                        <p class="card-text"><?=$post['post_short_description']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" id="long_description" href="post.php?id=<?=$post['id']; ?>">Find Long Description!</a>
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
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!--Modal Start-->
<div class="modal fade" id="developerModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Md Hasan Ali</p>
                            <hr/>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <p class="form-control">hasan.bubt.40@gmail.com</p>
                                </div>
                                <div class="form-group">
                                    <label>github</label>
                                    <p class="form-control">https://github.com/fearless-hasan</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p>developed by fearless-hasan</p>
            </div>
        </div>
    </div>
</div>
<!--Modal end-->

<!-- Bootstrap core JavaScript -->
<!--<script src="assets/js/jquery.min.js"></script>-->
<script src="../assets/js/jquery-3.2.1.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>
