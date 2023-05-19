<!-- Read file -->
<?php
    function readCustomFile($filePath){
        // customize error message
        try { // Try it open a file read only
            $fileHandle = fopen($filePath,'r'); // Open the file. (r : read only)
            if (!$fileHandle){ // file is not exist?
                throw new Exception("Error while reading the file: $filePath"); // throw error message
            } // file is exist?
            $fileContent = fread($fileHandle, filesize($filePath)); // read the file
            fclose($fileHandle); // you need to close the file!!
        } catch(Exception $error) { // exception type error
            echo $error -> getMessage(); // get the message that we set.
        }
        return $fileContent;
    }

    function convertToArray($contentString){
        try {
            if(!is_string($contentString)){
                throw new Exception("Sorry! Wrong Content. Cannot convert");
            }
            $employeeList = [];
            // make array of row
            // Turn $fileRow in one array of strings. WHere every row will be a unique string
            $fileRow = explode("\n", $contentString); // find \n in the $contentString file and remove it. return array.
            // From the second slot of the array, look
            for($i=1; $i < count($fileRow); $i++){ // $i=1 is the row title. we dont need it. // last line of csv is empty(count($fileRow)-1)
                // Explode the row
                $employeeData = explode(",", $fileRow[$i]); // every data in a row > split by ,
                if(count($employeeData)===8){
                    // throw new Exception("This employee has not data enough. Line: $i");
                    // Include the new content inside of the list, position employee name
                    // Way 1.
                    $employeeList[$employeeData[1]] = $employeeData;
                    // Way 2.
                    // $employeeList[$employeeData[1]] = [
                    //     $employeeData[0],
                    //     $employeeData[1],
                    //     $employeeData[2],
                    //     $employeeData[3],
                    //     $employeeData[4],
                    //     $employeeData[5],
                    //     $employeeData[6],
                    //     $employeeData[7],
                    // ]; // make a key with $employeeData[1], and get other data.
                }
            }
            
        } catch(Exception $error){
            echo $error -> getMessage();
        }
        return $employeeList;
    }