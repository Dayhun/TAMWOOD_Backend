<?php

class Course {
    // attribute
    private int $courseId;
    private string $shortName;
    private string $longName;

    // method
    public function getCourseId(): int {
        return $this->courseId;
    }

    public function setCourseId(int $scourseId) {
        $this->courseId = $courseId;
    }

    public function getShortName(): string {
        return $this->shortName;
    }

    public function setShortName(string $shortName) {
        $this->shortName = $shortName;
    }

    public function getLongName(): string {
        return $this->longName;
    }

    public function setLongName(string $longName) {
        $this->longName = $longName;
    }
}