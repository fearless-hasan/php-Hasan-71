<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Day-19</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>


<?php
//    require_once 'app/classes/Functions.php';
//    require_once 'app/classes/Student.php';

    require_once 'vendor/autoload.php';

    use App\classes\Student;

//    if(isset($_POST['btn'])) {
//        $functions = new App\classes\Functions();
//    }

    use App\classes\Functions;
    Student::addition();

    if(isset($_POST['btn'])) {
        $result = Functions::wordCharacterCount($_POST);
    }
?>

<hr/>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <form id="btn" method="post" action="">
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Given String</label>
                            <div class="col-sm-9">
                                <input type="text" name="given_string" value="<?php if(isset($_POST['given_string'])) echo $_POST['given_string']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">String Length</label>
                            <div class="col-sm-9">
                                <input type="text" name="string_length" value="<?php if(isset($result['string_length'])) echo $result['string_length']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Word Count</label>
                            <div class="col-sm-9">
                                <input type="text" name="word_count" value="<?php if(isset($result['word_count'])) echo $result['word_count']; ?>" class="form-control">
                            </div>
                        </div>



                        <div class="row form-group">
                            <label class="col-form-label col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" name="btn" id="byt" class="btn btn-success" value="Submit">
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