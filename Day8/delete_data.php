<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete data</title>
    <script>
        function dataDelete(id) {


            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "delete_data.php", true);

            var data = {
                id,
                delete: "delete"

            };
            xhttp.send(JSON.stringify(data));
        }
    </script>



</head>

<body>





    <?php

    $connection = mysqli_connect('localhost', 'root', '', 'curd_op');
    if (!$connection) {
        die('connection failed');
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM student WHERE id = '$id'";
        $delete = mysqli_query($connection, $query);

        if ($delete) {
            echo '<script type="text/javascript"> alert("Data Deleted Sucessfully") </script>';
            header("location:display_data.php");
        } else {
            echo '<script type="text/javascript"> alert("Data Not Deleted Sucessfully") </script>';
        }
    }
    ?>
</body>

</html>