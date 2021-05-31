<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6 to 10 Array Function</title>
</head>
<body>
    <h2>
        <?php
            // 6.⏯ in_array()
            // $developer = array("PHP", "HTML", "CSS", "JavaScript");
            // if(in_array("laravel ", $developer)){
            //     echo "This is language";
            // }
            // else{
            //     echo "This is not language";
            // }

            // 7.⏯  array_rand()
            // $a=array("Chocolate","Ice-Cream","Dairy-Milk","KitKat","brownie");
            // $random_keys=array_rand($a,3);
            // echo $a[$random_keys[0]]."<br>";
            // echo $a[$random_keys[1]]."<br>";
            // echo $a[$random_keys[2]];

            // 8.⏯ array_unique()
            // $a=array("a"=>"Princy","b"=>"Patel","c"=>"Patel");
            // print_r(array_unique($a));
            
            // 9.⏯array_search()
            // $a=array("a"=>"cars","b"=>"buses","c"=>"trains");
            // echo array_search("buses",$a);
            
            // 10.⏯ array_merge()
            $a1=array("Princy","Patel");
            $a2=array("Web","Developer");
            print_r(array_merge($a1,$a2));

        ?>
    </h2>
</body>
</html>