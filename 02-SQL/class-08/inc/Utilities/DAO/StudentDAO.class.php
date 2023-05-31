<?php

class StudentDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService("Student");
    }

    public static function getAllStudents(){
        $sql = "SELECT * FROM Student";
        self::$db->query($sql);
        self::$db->execute();
        return self::db->resultSet();
    }

    public static function getStudentById( int $studentId){
        $sql = "SELECT * FROM Student WHERE studentId=:id";
        self::$db->query($sql);
        self::$db->bind(':id', $studentId);
        self::$db->execute();

        return self::db->singleResult();
    }

    public static function deleteStudentById(int $studentId){
        $sql = "DELETE FROM Student WHERE StudentId = :id";
        self::$db->query($sql);
        self::$db->bind(":id", $studentId);
        self::$db->execute();

        return self::$db->rowCount();
    }

    public static function updateStudentById(Student $student){
        try {
            if (get_class($studnet) !== "Student"){
                throw new Exception("This is an invalid data. Try a student type!");
            }
            $sql = "UPDATE Student SET name=:name, email=:email, age=:age dateOfBirth=:dateOfBirth WHERE StudentId = :id";
            self::$db->query($sql);
            self::$db->bind(":id", $student->getStudentId());
            self::$db->bind(":name", $student->getName());
            self::$db->bind(":email", $student->getEmail());
            self::$db->bind(":age", $student->getAge());
            self::$db->bind(":dateOfBirth", $student->getDateOfBirth());
            self::$db->execute();

            return self::$db->lastInsertedId();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function insertStudent(Student $student){ 
        $sql = "INSERT INTO Student (name, email, age, dateOfBirth) VALUES (:name, :email, :age, :dateOfBirth)";
        self::$db->query($sql);
        self::$db->bind(":name", $student->getName());
        self::$db->bind(":email", $student->getEmail());
        self::$db->bind(":age", $student->getAge());
        self::$db->bind(":dateOfBirth", $student->getDateOfBirth());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }
}