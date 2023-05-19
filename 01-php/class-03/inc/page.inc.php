<!-- CREATE TABLE -->
<?php
function htmlHeader(){
    $htmlHeader = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Read File</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    ';
    echo $htmlHeader;
}

function employeeTable(array $employeeList){ // use CamelCase
    $row = "";
    $table = "
    <table>
        <caption>
            Employees table
        </caption>
        <thead>
            <tr>
                <th># ID</th>
                <th>Employee</th>
                <th>Salary</th>
                <th>Email</th>
                <th>Job Title</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>";
        foreach($employeeList as $employee){
            // += == .=
            $row .= " 
                <tr>
                    <td>$employee[0]</td>
                    <td>$employee[1]</td>
                    <td>$employee[2]</td>
                    <td>$employee[3]</td>
                    <td>$employee[4]</td>
                    <td>$employee[6]</td>
                </tr>
            ";
        }
        $table .= $row;
    $table .= "
        </tbody>
    </table>";
    echo $table;
}

function htmlFooter(){
    $htmlFooter = '
        </body>
    </html>
    ';

    echo $htmlFooter;
}