<?php
require_once 'vendor/autoload.php';

use App\classes\Student;

$message="";

$queryResult = Student::getAllStudentInfo();

//while($student = mysqli_fetch_assoc($queryResult)){
//    echo "<pre>";
//    print_r($student);
//    $message = "Shown";
//}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Day-20 (DB)</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>


<hr/>
<nav class=" w-25 container">
    <a href="add-student.php">Add Student</a> ||
    <a href="view-student.php">View Student</a>
</nav>

<hr/>

<h1 class="text-center text-success"><?php echo $message; ?></h1>
<hr/>
<table class="table w-75 m-auto">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
    </tr>

    <?php while($student = mysqli_fetch_assoc($queryResult)){ ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobile']; ?></td>
    </tr>
    <?php } ?>
</table>
<hr/>


<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>