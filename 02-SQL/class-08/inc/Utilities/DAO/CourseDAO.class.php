<?php
class CourseDAO {
    private static $db;
    public static function startDb(){
        self::db = new PDOService("Course"); // new instance of the PDOService class
    }

    public static function getAllCourses(){
        $sql = "SELECT * FROM course";
        self::$db->query($sql);
        self::$db->execute();

        return self::db->resultSet();
    }

    public static function getCourseById(int $courseId){
        $sql = "SELECT * FROM course WHERE courseId =:id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);
        self::$db->execute();

        return self::db->singleResult();
    }

    public static function deleteCourse(int $courseId){
        $sql = "DELETE FROM course WHERE courseId =:courseId";
        self::$db->query($sql);
        self::$db->bind(":courseId", $courseId);
        self::$db->execute();

        return self::$db->rowCount();
    }

    public static updateCourse(Course $course){
        $sql = "UPDATE course SET shortName =:shortName, longName =:longName WHERE courseId =:id";
        self::$db->query($sql);
        self::$db->bind(':id', $course->getCourseId());
        self::$db->bind(':shortName', $course->getCourseShortName());
        self::$db->bind(':longName', $course->getCourseLongName());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    public static function insertCourse(Course $course){
        $sql = "INSERT INTO Course (shortName, longName) VALUES (:shortName, :longName)";
        self::$db->query($sql);
        self::$db->bind(':shortName', $course->getCourseShortName());
        self::$db->bind(':longName', $course->getCourseLongName());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }
}