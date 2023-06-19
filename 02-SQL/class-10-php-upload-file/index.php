<?php

require_once("./inc/Page.class.php");

date_default_timezone_set("America/Vancouver");
$imgFolder = "img/";
echo Page::pageHeader();

if (!empty($_FILES)) {
    try {
        if ($_FILES["uploadPic"]["size"] === 0) {
            throw new Exception("Sorry! No file was uploaded");
        }
        $tempFileName = explode(".",$_FILES["uploadPic"]["name"]);
    
        $currentDate = date("Ymd");
        $currentTime = date("H-i-s");
        $milliseconds = floor(microtime(true) * 1000);
        $fileName = $currentDate."-".$currentTime.$milliseconds;

        $newFileName = $fileName.".".$tempFileName[count($tempFileName)-1];

        $fileFolder = $imgFolder . $newFileName;

        move_uploaded_file($_FILES["uploadPic"]["tmp_name"],$fileFolder);

        echo Page::successMessage();
        
    } catch(Exception $error) {
        echo Page::warningMessage($error->getMessage());
    }
    

}

/**
 * y = Year (2 numbers)
 * Y = Year (4 numbers)
 * m = Month (number)
 * M = Month (name)
 * d = day (number)
 * D = day (of the week)
 * H = Hour (24)
 * h = Hour (am pm)
 * i = minute
 * s = seconds
 * sa = seconds (am pm)
 */


echo Page::uploadForm();
//Function to read all the files from the folder

function readImgFolder() {
    //Get all the file list from Img folder
    $files = scandir("img/");
    //Removes the first element '.'
    array_shift($files);
    //Removes the second element '..'
    array_shift($files);

    //Returns an array with files names from the folder
    return $files;
}

//Build the gallery
echo Page::buildGallery(readImgFolder());

echo Page::pageFooter();