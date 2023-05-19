<?php
// require_once("inc/config.inc.php");
require_once("inc/fileManager.php"); // import fileManager.php
require_once("inc/page.inc.php"); // import fileManager.php
require_once('inc/Entities/Employee.class.php');

$employee_1 = new Employee( // Employee() : class name
    1, 
    "Brad Smith", 
    6000.99, 
    "mail@mail.com", 
    "CEO", 
    "https://robohash.org/maximemodiaut.png", 
    "bsmith", 
    "12345"
); 
// var_dump($employee_1->getSalary());

$employee_2 = new Employee( // Employee() : class name
    2, 
    "Ryan Goodayle", 
    5345.78, 
    "mail_2@mail.com", 
    "Manager", 
    "https://robohash.org/delenitiundeeum.png", 
    "rgoodayle", 
    "12345"
); 

$employeeList = [
    $employee_1,
    $employee_2
];

// var_dump($employeeList);
htmlHeader();
// $result = readCustomFile("data/employees.csv");
//var_dump($result); // check the file
// $list = convertToArray($result);
// var_dump($list);
// employeeTable($list);

htmlFooter();
