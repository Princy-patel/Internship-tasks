<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Form Tag</h2>
    <form action="GET.php" method="GET" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name :</td>
                <td><input type="text" name ="fname" required /> <br><br></td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td><input type="text" name ="lname" required /><br><br></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required /><br><br></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" required /><br><br></td>
            </tr>
            <tr>
                <td>File :</td>
                <td><input type="file" name="file"/><br><br></tr>
            </tr>
            <tr>
                <td><input type="Submit" name="Submit" value="Submit" /></td>
            </tr>
         </table>
    </form>
       
</body>
</html>