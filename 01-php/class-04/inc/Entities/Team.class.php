<?php
class Team {
    private array $team;
    /**
     * @return integer
     */
    public function getTotalPlayers() : int {
        return count($this->team);
    }
    public function setTeam($team) {
        $this->team = $team;
    }
    public function getTeam() : array {
        return $this->team;
    }
    // 이부분 다시 
    // public function insertPlayer(){

    //}
    public static function compareId($player1, $player2){
        return $player1->getId() <=> $player2->getId(); // compare and return smaller values
    }
    public static function compareNames($player1, $player2){
        return $player1->getName() <=> $player2->getName();
    }
    public function comparePosition($player1, $player2){
        return $player1->getPosition() <=> $player2->getPosition();
    }
    public function compareBat($player1, $player2){
        return $player1->getBat() <=> $player2->getBat();
    }
    public function compareThrow($player1, $player2){
        return $player1->getThrow() <=> $player2->getThrow();
    }
    public function compareHeight($player1, $player2){
        return $player1->getHeight() <=> $player2->getHeight();
    }
    public function compareWeight($player1, $player2){
        return $player1->getWeight() <=> $player2->getWeight();
    }
    public static function compareAge($player1, $player2){
        return $player1->getAge() <=> $player2->getAge();
    }
    public static function compareBPlace($player1, $player2){
        return $player1->getBirthPlace() <=> $player2->getBirthPlace();
    }
    public function sortPlayers($sortBy){
        switch ($sortBy) {
            case 'id':
                usort($this->team, 'self::compareId');
                break;
            case 'name':
                usort($this->team, 'self::compareNames');
                break;
            case 'pos':
                usort($this->team, 'self::comparePosition');
                break;
            case 'bat':
                usort($this->team, 'self::compareBat');
                break;
            case 'throw':
                usort($this->team, 'self::compareThrow');
                break;
            case 'height':
                usort($this->team,'self::compareHeight');
                break;
            case 'weight':
                usort($this->team,'self::compareWeight');
                break;
            case 'age':
                usort($this->team,'self::compareAge');
                break;
            case 'bPlace':
                usort($this->team,'self::compareBPlace');
                break;
        }
    }
}