<?php
    // echo 'I love PHP';

    // < Data Type >
    // 1. Integer (Numbers)
    // 2, Float (1.25f)
    // 3. Double (can set more bites ex. 4.4)   // int < float < double
    // 4. Boolean (true or false)
    // 5. Chars (one single character, letter sth, single quotation mark'')
    // 6. String (set of chars, double quotation mark "")   // char < string

    // T && T = T     // T || T = T     // T ^ T = F
    // T && F = F     // T || F = T     // T ^ F = T
    // F && T = F     // F || T = T     // F ^ T = T
    // F && F = F     // F || F = F     // F ^ F = F

    // echo 35.28 . "is the price of food"; // 35.28is the price of food
    // echo 3 * 3; 
    // echo 3 + 3; 
    // echo 3 - 3; 
    // echo 3 / 3; // 9601

    // echo 3 * 3 . '<br>'; // 9 
    // echo 3 + 3 . '<br>'; // 6
    // echo 3 - 3 . '<br>'; // 0
    // echo 3 / 3 . '<br>'; // 1

    // echo 10 % 2; // 0

    $studentName = "Monika"; // assigning
    $courseWork_1 = 50; // you can use underscore wherever _courseWork course_work courseWork_
    $courseWork_2 = 49.9; // double
    $attendance = 70;
    $total = ($courseWork_1 + $courseWork_2) / 2; // Integer + Double = Double

    echo $studentName . " has total coursework : " . $total . "<br>"; // Monika has total coursework : 99.9
    echo gettype($total) . "<br>"; // Double

    if (($total > 25) && ($attendance > 69)){ // Both has to be true.
        echo "$studentName has a nice coursework score. <br>Good!<br>";
    } else {
        echo "$studentName has a lower coursework score. It needs more studies.";
    }

    // < Make an array >
    // 1. $studentArr = [];
    // 2. $studentArr = array();

    $fruits = [
        "Strawberry",
        "Blueberry",
        "Blackberry",
        "Apple",
        "Peach",
        "Kiwi",
        "Watermelon",
        "Grape",
        "Orange",
        "Grapefruit"
    ];

    // echo $fruits; // Cant get data
    // echo $fruits[0] . "<br>"; // Strawberry

    // var_dump : better way to debug your variable > show every single detail
    var_dump($fruits); // Strawberryarray(10) { [0]=> string(10) "Strawberry" [1]=> string(9) "Blueberry" [2]=> string(10) "Blackberry" [3]=> string(5) "Apple" [4]=> string(5) "Peach" [5]=> string(4) "Kiwi" [6]=> string(10) "Watermelon" [7]=> string(5) "Grape" [8]=> string(6) "Orange" [9]=> string(10) "Grapefruit" } 

    echo count($fruits); // 10

    // Push new element at the bottom of the array
    $fruits[] = "Banana";
    echo $fruits[10] . "<br>"; // Banana

    // < Loops >
    for ($i=0; $i<count($fruits); $i++){
        echo $fruits[$i] . "<br>";
    };

