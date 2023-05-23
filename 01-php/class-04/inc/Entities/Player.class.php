<?php
/**
 * Class Player
 */
class Player {
    private int $id;
    private string $name;
    private string $bat;
    private string $position;
    private string $throw;
    private int $age;
    private int $height;
    private int $weight;
    private string $birthPlace;

    /**
     * Player Baseball Constructor
     * @param integer $id
     * @param string $name
     * @param string $bat
     * @param string $position
     * @param string $throw
     * @param int $age
     * @param int $height
     * @param int $weight
     * @param string $birthPlace
     */
    public function __construct(
        int $id,
        string $name,
        string $position,
        string $bat,
        string $throw,
        int $age,
        int $height,
        int $weight,
        string $birthPlace
    ){
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
        $this->bat = $bat;
        $this->throw = $throw;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->birthPlace = $birthPlace;
    }
    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }
    /**
     * @return string
     */
    public function getName(): string{
        return $this->name;
    }
    /**
     * @return string
     */
    public function getPosition(): string{
        return $this->position;
    }
    /** 
     * @return string
     */
    public function getBat(): string{
        return $this->bat;
    }
    /**
     * @return string
     */
    public function getThrow(): string{
        return $this->throw;
    }
    /**
     * @return int
     */
    public function getAge(): int{
        return $this->age;
    }
    /**
     * @return int
     */
    public function getHeight(): int{
        return $this->height;
    }
    /**
     * @return int
     */
    public function getWeight(): int{
        return $this->weight;
    }
    /**
     * @return string
     */
    public function getBirthPlace(): string{
        return $this->birthPlace;
    }
    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name){
        $this->name = $name;
    }
    /**
     * @param string $position
     * @return void
     */
    public function setPosition(string $position){
        $this->position = $position;
    }
    /**
     * @param string $bat
     * @return void
     */
    public function setBat(string $bat){
        $this->bat = $bat;
    }
    /**
     * @param string $throw
     * @return void
     */
    public function setThrow(string $throw){
        $this->throw = $throw;
    }
    /**
     * @param int $age
     * @return void
     */
    public function setAge(int $age){
        $this->age = $age;
    }
    /**
     * @param int $height
     * @return void
     */
    public function setHeight(int $height){
        $this->height = $height;
    }
    /**
     * @param int $weight
     * @return void
     */
    public function setWeight(int $weight){
        $this->weight = $weight;
    }
    /**
     * @param string $birthPlace
     * @return void
     */
    public function setBirthPlace(string $birthPlace){
        $this->birthPlace = $birthPlace;
    }
    
}