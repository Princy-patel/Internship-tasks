<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h2>
        <?php
            $num1 = 1;
            $num2 = 7;

            while($num1 <= 10) {
                echo $num1. "*" .$num2. "=" . ($num1*$num2)."<br>";
                $num1++;
            }
        ?>
    </h2>
</body>
</html>