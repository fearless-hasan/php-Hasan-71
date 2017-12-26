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


if(isset($_POST['btn'])) {
    require_once 'FullName.php';

    $fullName = new FullName();
    $result = $fullName -> makeFullName($_POST['first_name'], $_POST['last_name']);
//    echo $_result;
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
                                <label class="col-form-label col-sm-3">Starting Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="starting_number" class="form-control">
                                    <span id="firstNameError"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3">Ending Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ending_number" class="form-control">
                                    <span id="lastNameError"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-form-label col-sm-3">Result</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $result; ?>" name="full_name" class="form-control">
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



    <script src="../../js/jquery-3.2.1.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>