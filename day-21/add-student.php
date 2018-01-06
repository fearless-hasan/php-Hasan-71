<?php
require_once 'vendor/autoload.php';

    use App\classes\Student;

    $message="";

    if(isset($_POST['btn'])){
        $message = Student::saveStudentInfo($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Day-21 (CRUD)</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>


<hr/>
<nav class="navbar w-25 container">
    <a href="add-student.php">Add Student</a> ||
    <a href="view-student.php">View Student</a>
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
                            <label class="col-form-label col-sm-3">Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">mobile</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile"  class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-form-label col-sm-3"></label>
                            <div class="col-sm-9">
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


<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>