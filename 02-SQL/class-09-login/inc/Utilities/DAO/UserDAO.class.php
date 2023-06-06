<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

    public static function insertUser(User $newUser) {
        $sql = "INSERT INTO users(fName,lName,username,email,password,age,gender) VALUES (:fName,:lName,:user,:email,:pass,:age,:gender)";

        self::$db->query($sql);

        self::$db->bind(":fName",$newUser->getFName());
        self::$db->bind(":lName",$newUser->getLName());
        self::$db->bind(":user",$newUser->getUsername());
        self::$db->bind(":email",$newUser->getEmail());
        self::$db->bind(":pass",$newUser->getPassword());
        self::$db->bind(":age",$newUser->getAge());
        self::$db->bind(":gender",$newUser->getGender());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function getAllUsers(){
        $sql = "SELECT * FROM users";

        self::$db->query($sql);
        self::$db->execute();

        return self::$db->resultSet();
    }

    public static function getUserByUsername( string $username ) {
        $sql = "SELECT * FROM users WHERE username=:user";

        self::$db->query($sql);

        self::$db->bind(":user",$username);
        self::$db->execute();

        return self::$db->singleResult();
    }
}