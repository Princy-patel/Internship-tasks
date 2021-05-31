<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <h2>
        <?php
            $fruits = array(
                'Orange' => 'Orange',
                'Yellow' => 'Banana',
                'Green' => 'Mango',
                'Red' => 'Apple'
            );
            
            // 🔴 As a Value
            // foreach($fruits as $value){
            //     echo "<br>"."The value is ".$value;
            // }

            //🔴 As a key
            // foreach($fruits as $key => $value){
            //     echo "<br>"."The value is ".$key;
            // }

            // 🔴 As a Key and value
             foreach ($fruits as $key => $value) {
                 echo "<br>The key is <i>$key</i> and the value is <i>$value.</i>";
             }

        ?>
    </h2>
</body>
</html>