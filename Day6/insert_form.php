<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship_a");
if ($_POST) {
    $name= $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['adr'];
    $passwd = $_POST['passwd'];
    $area = $_POST['area'];
    $pincode = $_POST['pin'];
    $bloodgrp = $_POST['blgrp'];
    


    $q = mysqli_query ( $connection, "insert into tbl_student(st_id, st_name, st_gender, st_dob, st_email, st_address, st_passwd, st_area, st_pincode, st_bloodgrp) values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$passwd}','{$area}','{$pincode}','{$bloodgrp}')") or die(mysqli_error($connection));
    if($q) {
          echo "<script>alert('Record Added')</script>";
    }
}
?>
<html>
<body>
    <form method="post">
    Name : <input type="text" name="name"><br>
    Gender : <select name="gender">
            <option>Male</option>
            <option>Female</option>
            </select><br>
    Date of Birth : <input type="date" name="dob"><br>
    Email : <input type="email" name="email"><br>
    Mobile : <input type="number" name="mobile"><br>
    Addrees: <input type="text" name="adr"><br>
    Password: <input type="password" name="passwd"><br>
    Area : <input type="text" name="area"><br>
    Pincode : <input type="number" name="pin"><br>
    Bloodgroup : <input type="text" name="blgrp"><br>
            <input type="submit"/>    
    </form>

</body>
</html>
