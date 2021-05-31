<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <h2>
        <?php
            // 😀 Program 1
            // Method 1
                // $array[0] = 10;
                // $array[1] = 20;
                // $array[2] = 30;
                // $array[3] = 40;
                // $array[4] = 50;

            // Method 2 //Index Dynamic Array
                // $a[] = 10;
                // $a[] = "PHP";
                // $a[] = 20;
                // $a[] = "Patel";
                // echo $a[1];

            // Mehod 3
                // $array = array(10, 20, 30, 40, 50);

                // for($count = 0; $count<=4; $count++) {
                //     echo $array[$count]."<br>";
                // }
                // // echo $array[2]."<br>";
            
            // 😀 Program 2
            // Associate Arrays:
            // Method 1
        
                // $fruits[Orange] = 'Orange';
                // $fruits[Yellow] = 'Banana';
                // $fruits[Green] = 'Mango';
                // $fruits[Red] = 'Apple';

            // Method 2
                $fruits = array(
                    'Orange' => 'Orange',
                    'Yellow' => 'Banana',
                    'Green' => 'Mango',
                    'Red' => 'Apple',
                );

                echo $fruits['Red'];
        ?>
    </h2>
</body>
</html>