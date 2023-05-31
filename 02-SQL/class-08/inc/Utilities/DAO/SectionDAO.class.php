<?php
class SectionDAO {
    private static $db;

    public static function startDb(){
        self::$db = new PDOService("Section");
    }

    public static function getAllSections(){
        $sql = "SELECT * FROM Section";
        self::$db->query($sql);
        self::$db->execute();

        return self::db->resultSet();
    }

    public static function getSingleSection(int $sectionId){
        $sql = "SELECT * FROM course WHERE sectionId =:id";
        self::$db->query($sql);
        self::$db->bind(':id', $sectionId);
        self::$db->execute();

        return self::db->singleResult();
    }

    public static function insertSection(Section $section){
        $sql = "INSERT INTO Section (semester, instructorName, courseId) VALUES (:semester, :instructorName, :courseId)";
        self::$db->query($sql);
        self::$db->bind(':semester', $section->getSemester());
        self::$db->bind(':instructorName', $section->getInstructorName());
        self::$db->bind(':courseId', $section->getCourseId());
        self::$db->execute();

        return self::db->lastInsertId();
    }

    public static function updateSection(Section $section){
        $sql = "UPDATE Section SET semester = :semester, instructorName = :instructorName, courseId = :courseId WHERE sectionId = :id";
        self::$db->query($sql);
        self::$db->bind(':semester', $section->getSemester());
        self::$db->bind(':instructorName', $section->getInstructorName());
        self::$db->bind(':courseId', $section->getCourseId());
        self::$db->execute();

        return self::db->lastInsertedId();
    }

    public static function deleteSection(int $id){
        $sql = "DELETE FROM Section WHERE sectionId =:id";
        self::$db->query($sql);
        self::$db->bind(':id', $id);
        self::$db->execute();

        return self::db->rowCount();
    }
}