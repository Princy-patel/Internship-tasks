<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while Loop</title>
</head>
<body>
    <h2>
        <?php
            $num1 = 1;
            $num2 = 7;

            do {
                echo $num1. "*" .$num2. "=" . ($num1*$num2)."<br>";
                $num1++;
            } while ($num1 <= 10);
        ?>
    </h2>
</body>
</html>