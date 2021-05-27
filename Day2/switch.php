<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h2>Switch Statement</h2>
    <?php  
        $favsport = "cricket";
        switch ($favsport) {
        case "hockey":
            echo "Your favorite sport is Hocky!";
            break;
        case "cricket":
            echo "Your favorite sport is Cricket!";
            break;
        case "football":
            echo "Your favorite sport is Football!";
            break;
        case "badminton":
            echo "Your favorite sport is Badminton!";
            break;
        default:
            echo "Your favorite sport is neither Hockey, Tennis, nor Golf!";
        }
    ?>
</body>
</html>