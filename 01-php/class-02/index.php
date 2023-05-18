<?php
$dessert = [
    "Cheesecake",
    "Pudim",
    "Ice cream",
    "Petot Gateau",
    "Brownies",
    "Donuts",
    "Ice cream cake",
    "Cup cake",
    "Cookie",
    "Chocolate",
    "Apple Pie",
    "Cotton Candy",
    "Tiramisu",
    "Macarroni",
    "Alfajor",
    "Bingsu",
    "Candy",
    "Dorayaki",
    "Baklava"
];

// Way 1.
// for ( $i = 0; $i < count($dessert); $i++){
//     echo "$dessert[$i] <br>";
// }

// Way 2.
// foreach($dessert as $item){
//     echo "$item <br>";
// }

// Way 3.
// $count = 0;
// while($count < count($dessert)){
//     echo $dessert[$count] . "<br>";
//     $count++;
// }

// Way 4.
// $count = 0;
// do {
//     echo $dessert[$count] . "<br>";
//     $count++;
// } while ($count < count($dessert));

// Associative Array
$student = [
    "Guilherme" => [
        "season" => "Summer",
        "dessert" => "Ice Cream",
        "location" => "Italy",
        "number" => 7
    ],
    "Monika" => [
        "season" => "Spring",
        "dessert" => "Cheesecake",
        "location" => "Japan",
        "number" => 1
    ],
    "John" => [
        "season" => "Summer",
        "dessert" => "Pudim",
        "location" => "Germany",
        "number" => 10
    ],
    "Natt" => [
        "season" => "Winter",
        "dessert" => "Mango Sticky Rice",
        "location" => "Switzerland",
        "number" => 8
    ],
    "Day" => [
        "season" => "Spring",
        "dessert" => "Jelly",
        "location" => "Australia",
        "number" => 5
    ],
    "Santiago" => [
        "season" => "Spring",
        "dessert" => "Ice Cream",
        "location" => "Germany",
        "number" => 22
    ],
    "Pedro" => [
        "season" => "Spring",
        "dessert" => "Acai",
        "location" => "Switzerland",
        "number" => 8
    ],
    "Duygu" => [
        "season" => "Spring",
        "dessert" => "Ice Cream",
        "location" => "Australia",
        "number" => 19
    ],
    "Hyerim" => [
        "season" => "Spring",
        "dessert" => "Chocolate",
        "location" => "UK",
        "number" => 9
    ],
    "Miguel" => [
        "season" => "Winter",
        "dessert" => "Opera Cake",
        "location" => "France",
        "number" => 99
    ],
    "Gabriel" => [
        "season" => "Summer",
        "dessert" => "Ice Cream",
        "location" => "Russia",
        "number" => 6
    ],
    "Riki" => [
        "season" => "Fall",
        "dessert" => "Cheese Cake",
        "location" => "Paris",
        "number" => 3
    ]
];

// var_dump($student["Monika"]); 
// array(4) { ["season"]=> string(6) "Spring" ["dessert"]=> string(10) "Cheesecake" ["location"]=> string(5) "Japan" ["number"]=> int(1) }

// var_dump($student["Monika"]["dessert"]); 
// string(10) "Cheesecake"

// var_dump(
//     array_keys($student) // inside {} need ; inside () we dont need ;
// );
// array(12) { [0]=> string(9) "Guilherme" [1]=> string(6) "Monika" [2]=> string(4) "John" [3]=> string(4) "Natt" [4]=> string(3) "Day" [5]=> string(8) "Santiago" [6]=> string(5) "Pedro" [7]=> string(5) "Duygu" [8]=> string(6) "Hyerim" [9]=> string(6) "Miguel" [10]=> string(7) "Gabriel" [11]=> string(4) "Riki" }

// < Array Push >
// Way 1. array 안에 키가 aya인 새로운 array가 들어감
// array_push($student,array(
//     "Aya" => [
//         "season" => "Summer",
//         "dessert" => "Donuts",
//         "location" => "Slovakia",
//         "number" => 24
//     ]
// ));

// Way 2. 키가 aya인 array가 들어감
$student["Aya"] = [
    "season" => "Summer",
    "dessert" => "Donuts",
    "location" => "Slovakia",
    "number" => 24
];

// < Randomly pick (returns key) >
// var_dump(
//     array_rand($student, 2) 
// );
// array(2) { [0]=> string(5) "Duygu" [1]=> string(7) "Gabriel" }

// $key = array_rand($student, 1);
// var_dump(
//     $key,
//     $student[$key]
// );

$students = [
    "Monika" => [
        "attendance" => 100
    ],
    "Guilherme" => [
        "attendance" => 100
    ],
    "Aya" => [
        "attendance" => 100
    ],
    "Miguel" => [
        "attendance" => 70
    ],
    "Gustavo" => [
        "attendance" => 50
    ]
    ];


// function checkAttendance($studentData){
//     if($studentData['attendance'] < 70){
//         return "Did not pass"; 
//     } else {
//         return "Pass";
//     };
// };
// echo checkAttendance($students['Gustavo']); // Did not pass


// /**
//  * @param array $studentData
//  * @param string $key = ""
//  * @return string
//  */
// function checkAttendance(array $studentData, string $key="") : string {
//     if($studentData['attendance'] < 70){
//         return "$key Did not pass"; 
//     } else {
//         return "$key Pass";
//     };
// };
// echo checkAttendance($students['Gustavo'], "Gustavo"); // Gustavo Did not pass

/**
 * @param array $studentData
 * @param string $key = ""
 * @return string
 */
function checkAttendance($studentData, string $key="") : string {
    if (is_array($studentData)){
        if (array_key_exists("attendance", $studentData)){
            if ( $studentData["attendance"] < 70 ){
                return "$key Did not pass."; 
            } else {
                return "$key Pass.";
            }
        } else {
            return "Attendance key doesn't exist.";
        }
    } else {
        return "That is not an array.";
    }
}

// $position = 0;

// echo checkAttendance($position); // That is not an array.
// echo checkAttendance($students); // Attendance key doesn't exist.
// echo checkAttendance($students["Gustavo"], "Gustavo"); // Gustavo Did not pass.

// var_dump(
//     json_encode($students) 
// );
// // string(140) "{"Monika":{"attendance":100},"Guilherme":{"attendance":100},"Aya":{"attendance":100},"Miguel":{"attendance":70},"Gustavo":{"attendance":50}}"

// < JSON >
// json_encode : change the array to json string
// json_decode : make stdClass from json string

$studentObj = json_decode(json_encode($student)); 
var_dump(
    $studentObj->Day->dessert // string(5) "Jelly"
);

$studentObj2 = json_decode(json_encode($students)); // To make Object
var_dump(
    $studentObj2
);
// object(stdClass)#2 (5) { ["Monika"]=> object(stdClass)#1 (1) { ["attendance"]=> int(100) } ["Guilherme"]=> object(stdClass)#3 (1) { ["attendance"]=> int(100) } ["Aya"]=> object(stdClass)#4 (1) { ["attendance"]=> int(100) } ["Miguel"]=> object(stdClass)#5 (1) { ["attendance"]=> int(70) } ["Gustavo"]=> object(stdClass)#6 (1) { ["attendance"]=> int(50) } }
