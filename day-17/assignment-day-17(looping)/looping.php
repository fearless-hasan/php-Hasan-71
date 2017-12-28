<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Day-14 (Validation) With Assignment</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

</head>
<body>


<?php

//    echo '<pre>';
//        print_r($_POST);
//    echo '</pre>';

//    echo $_POST['first_name'];


//if(isset($_POST['btn'])) {
//    $firstName = $_POST['first_name'];
//    $lastName = $_POST['last_name'];
//    $fullName = $firstName . ' ' . $lastName;
//    echo $fullName;
//}

$result = '';
$starting_number = '';
$ending_number = '';
$start = '';
$end = '';
$result_odd_even = '';


    require_once 'Functionalities.php';

    $functionalities = new Functionalities;
    if(isset($_POST['btn'])){
        $starting_number = $_POST['starting_number'];
        $ending_number = $_POST['ending_number'];
        $result = $functionalities -> loop($starting_number, $ending_number);
    } else if(isset($_POST['odd_even'])){
        $start = $_POST['start'];
        $end = $_POST['end'];
        $result_odd_even = $functionalities -> oddEven($start, $end);
    }

//    echo $_result;

?>


<hr/>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 m-auto">
				<div class="card">
					<div class="card-body">
						<form method="post" action="">
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3">Starting Number</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $starting_number; ?>" name="starting_number" class="form-control">
                                    <span id="firstNameError"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3">Ending Number</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $ending_number; ?>" name="ending_number" class="form-control">
                                    <span id="lastNameError"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3">Result</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $result; ?>" name="result" class="form-control">
                                    <span id="lastNameError"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="submit" name="btn" value="SubmiT" class="btn btn-success">
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr/>

<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Starting Number</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $start; ?>" name="start" class="form-control">
                                <span id="firstNameError"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Ending Number</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $end; ?>" name="end" class="form-control">
                                <span id="lastNameError"></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Result</label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $result_odd_even; ?>" name="result_odd_even" class="form-control">
                                  
                            </div>
                        </div>

                        <div class="row form-group">
                            <label class="col-form-label col-sm-3">Gender</label>
                            <div class="col-sm-9">
                                <input type="radio" name="check" value="odd"> Odd  ||
                                <input type="radio" name="check" value="even"> Even
                            </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-form-label col-sm-3"></label>
                            <div class="col-sm-9">
                                <input type="submit" name="odd_even" value="SubmiT" class="btn btn-success">
                            </div>
                        </div>
                    </form>
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