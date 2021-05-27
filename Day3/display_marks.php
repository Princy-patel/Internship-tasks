<?php

    // PHP program to enter the marks of five subjects and calculate total, average, and percentage

        $p = 95;
        $c = 85;
        $m = 74;
        $e = 64;
        $h = 53;
        $total = NULL;
        $average = NULL;
        $percentage = NULL;

    // p, c, m, e, and h are the five subjects
    // p = physics
    // c = chemistry
    // m = math
    // e = english
    // h = history

    // Calculate total, average and percentage
        $total = $p + $c + $m + $e + $h;
        $average = $total / 5.0;
        $percentage = ($total / 500.0) * 100;

    // Output
        echo "The Total marks   = " . $total . "/500\n"."<br>";
        echo "The Average marks = " . $average . "\n"."<br>";
        echo "The Percentage    = " . $percentage . "%"."<br>";

    //  If-else Codition to display Grade

        if($total >= 450 && $total <= 500)
        {
            echo "You have grade A";
        }elseif($total >= 435 && $total <= 449){
            echo "You have grade B+";
        }
        elseif($total >= 400 && $total <= 434){
            echo "You have grade B";
        }
        elseif($total >= 300 && $total <= 385){
            echo "You have grade C+";
        }
        elseif($total >= 350 && $total <= 384){
            echo "You have grade C";
        }
        else if($total >= 300 && $total <= 349){
            echo "You have grade D";
        }
        else{ 
            echo "You have grade F";
        }

?>