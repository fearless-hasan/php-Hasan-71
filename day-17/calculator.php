<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Day-14 (Validation) With Assignment</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

</head>
<body>


<?php


$result = 0;
$first_number = '';
$second_number = '';

if(isset($_POST['operator'])) {
//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
    require_once 'MyCalculator.php';
    $myCalculator = new MyCalculator;
    $result = $myCalculator -> calculate($_POST);
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];
}

?>


<hr/>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="row form-group">
                            <label class="col-form-label col-sm-6">First Number</label>
                            <div class="col-sm-6">
                                <input type="number" value="<?php echo $first_number; ?>" name="first_number" class="form-control">
                                <span id="firstNameError"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-6">Second Number</label>
                            <div class="col-sm-6">
                                <input type="number" value="<?php echo $second_number; ?>" name="second_number" class="form-control">
                                <span id="lastNameError"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-6">Result</label>
                            <div class="col-sm-6">
                                <input type="number" value="<?php echo $result; ?>" name="result" class="form-control">
                                <span id="lastNameError"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Opeartion</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="+" class="btn btn-success">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="-" class="btn btn-success">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="*" class="btn btn-success">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="/" class="btn btn-success">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="%" class="btn btn-success">
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="submit" name="operator" value="." class="btn btn-success">
                                    </div>
                                </div>
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