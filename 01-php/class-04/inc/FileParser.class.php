<?php
class FileParser {
    public static function convertToObject(string $fileContent) : array {
        $playerList = [];
        try {
            if(!is_string($fileContent)) {
                throw new Exception("The current file is not a string. Please try another.");
            }
            $fileRow = explode("\n", $fileContent);
            for ($i = 1; $i < count($fileRow); $i++) {
                $playerData = explode(",", $fileRow[$i]);
                if(count($playerData) === 9) {
                    $playerList[] = new Player(
                        $playerData[0], 
                        $playerData[1], 
                        $playerData[2], 
                        $playerData[3], 
                        $playerData[4], 
                        $playerData[5], 
                        $playerData[6], 
                        $playerData[7], 
                        $playerData[8]
                    );
                }
            }
        } catch (Exception $error) {
            echo $error->getMessage();
        }
        return $playerList;
    }
}