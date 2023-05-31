<?php
class EnrollmentDAO {
    private static $db;
    public static function startDb(){
        self::db = new PDOService("Enrollments"); 
    }

    public static function getAllEnrollments(){
        $sql = "SELECT * FROM enrollment";
        self::$db->query($sql);
        self::$db->execute();

        return self::db->resultSet();
    }

    public static function getEnrollmentById(int $enrollmentId){
        $sql = "SELECT * FROM enrollment WHERE enrollmentId =:id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);
        self::$db->execute();

        return self::db->singleResult();
    }
    
    public static function insertEnrollment(Enrollment $enrollment){
        $sql = "INSERT INTO enrollment (studentId, sectionId, outcome) VALUES (:studentId, :sectionId, :outcome)";
        self::$db->query($sql);
        self::$db->bind(':studentId', $enrollment->getStudentId());
        self::$db->bind(':sectionId', $enrollment->getSectionId());
        self::$db->bind(':outcome', $enrollment->getOutcome());
        self::$db->execute();

        return self::db->lastInsertId();
    }

    public static function updateEnrollment(Enrollment $enrollment){
        $sql = "UPDATE enrollment SET  studentId = :studentId, sectionId = :sectionId, outcome = :outcome WHERE studentId = :studentId AND sectionId = :sectionId";
        // $sql_2 = "UPDATE enrollment SET  studentId = :studentId, sectionId = :sectionId, outcome = :outcome WHERE enrollmentId = :id";
        self::$db->query($sql);
        // self::$db->bind(":id", $enrollment->getEnrollmentId());
        self::$db->bind(':studentId', $enrollment->getStudentId());
        self::$db->bind(':sectionId', $enrollment->getSectionId());
        self::$db->bind(':outcome', $enrollment->getOutcome());
        self::$db->execute();

        return self::db->lastInsertedId();
    }

    public static function deleteEnrollment(int $id){
        $sql = "DELETE FROM enrollment WHERE enrollmentId = :id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);
        self::$db->execute();

        return self::db->rowCount();
    }
}