<?php
$link = mysqli_connect('localhost', 'root', '', 'image');

if(isset($_POST['btn'])){


//    echo '<pre>';
//    print_r($_POST);
//    print_r($_FILES);
//    echo '</pre>';
    $fileName=$_FILES['image_file']['name'];
    $directory='images/';
    $imageUrl=$directory.$fileName;
//move_uploaded_file($_FILES['image_file']['tmp_name'],$imageUrl);
    $fileType=pathinfo($fileName,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES['image_file']['tmp_name']);
    if ($check){
        if (file_exists($imageUrl)){
            die('this image already exist. please select another one . thanks');

        }else{

            if($_FILES['image_file']['size']>500000){
                die('your image size is too large. please select with in 10kb');
            } else{
                if ($fileType !='jpg' && $fileType != 'png'){
                    die('image type is not supported. please use jpg or png');
                }else{
                    move_uploaded_file($_FILES['image_file']['tmp_name'],$imageUrl);
                    $sql = "INSERT INTO images(image_file) VALUE ('$imageUrl')";
                    mysqli_query($link,$sql);
                    echo 'Image Upload & Save Successfully';
                }
            }
        }

    }else{
        die('please choose image file thanks !.');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.css" rel="stylesheet">


</head>

<!-- Page Content -->
<div class="container">
    <hr/>
    <form action="" method="POST" enctype="multipart/form-data">
    <table class="table">
        <tr>
            <th>Select File</th>
        <td class="form-control">
            <input type="file" name="image_file"></td>
        </tr>
        <tr>
            <th></th>
        <td><input type="submit" name="btn" value="submit" class="btn btn-success"></td>
        </tr>
    </table>
    </form>



    <table>
        <?php
        $sql = "SELECT * FROM images";
        $queryResult = mysqli_query($link, $sql);
//        echo $queryResult;
        ?>

        <tr>

            <td>
                <?php while($image = mysqli_fetch_assoc($queryResult)) { ?>
                <img src="<?=$image['image_file'] ?>" alt="" height="100" width="100"/>
                <?php } ?>
            </td>
        </tr>

    </table>

</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript -->
<!--<script src="assets/js/jquery.min.js"></script>-->
<script src="../../js/bootstrap.js"></script>

</body>

</html>
