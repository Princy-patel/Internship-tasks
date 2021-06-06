<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title> Insert Data </title>
</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <h2> Insert Data </h2>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <lable for=""> First Name : </lable>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <lable for=""> Last Name : </lable>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <lable for=""> Contact : </lable>
                    <input type="text" name="contact" class="form-control" placeholder="Enter Contact" required>
                </div>

                <button type="submit" name="insert" class="btn btn-primary">INSERT</button>

                <a href="display_data.php" class="btn btn-danger"> CANCLE </a>
            </form>
        </div>
    </div>

</body>

</html>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'curd_op');
if (!$connection) {
    die('connection failed');
}
if (isset($_POST['insert'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO student (fname,lname,contact) VALUES ('$fname','$lname','$contact')";
    $insert = mysqli_query($connection, $query);

    if ($insert) {
        echo '<script type="text/javascript"> alert("data insertd sucessfully") </script>';
        header("location:display_data.php");
    } else {
        echo '<script type="text/javascript"> alert("data not insertd sucessfully") </script>';
    }
}


?>