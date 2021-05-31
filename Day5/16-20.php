<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16 to 20 Array Function</title>
</head>
<body>
    <h2>
        <?php
            // ⏯ 16. shuffle()
            // $my_array = array("PHP","HTML","CSS","JavaScript","Ruby");

            // shuffle($my_array);
            // print_r($my_array);

            // ⏯ 17. array_key_exists()
            // $a=array("Red"=>"Apple","Mango"=>"Green");
            //     if (array_key_exists("Mango",$a)){
            //         echo "Fruits exists!";
            //     }
            //     else{
            //         echo "Fruits does not exist!";
            //     }

            // ⏯ 18. array_change_key_case()
            // $age=array("Yatra"=>"10","Hari"=>"4","Prachi"=>"7");
            // print_r(array_change_key_case($age,CASE_UPPER));

            // ⏯ 19. array_combine()
            // $fname=array("Princy","Dharmik","Krinal");
            // $lname=array("Patel","Kapatel","Kapatel");
            // $c=array_combine($fname,$lname);
            // print_r($c);

            // ⏯ 20. end()
            $people = array("Princy", "Dharmik", "Krinal", "Yatra");
            echo end($people);
        ?>
    </h2>
</body>
</html>