<?php
require_once 'vendor/autoload.php';

use App\classes\BlogDatabase;

$message = "";
$message = BlogDatabase::saveBlog();
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
    <a href="add-student.php">Add Post</a> ||
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

                    <h1 class="text-center text-success"><?php echo $message; ?></h1>
                    <hr/>
                    <table class="table w-75 m-auto">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Student Mobile</th>
                            <th>Operation</th>
                        </tr>

                        <?php while($student = mysqli_fetch_assoc($queryResult)){ ?>
                            <tr>
                                <td><?php echo $student['id']; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['mobile']; ?></td>
                                <td>
                                    <a href="update-student.php?id=<?=$student['id']; ?>" class="btn btn-primary">Update</a>
                                    <a href="delete-student.php?id=<?=$student['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
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