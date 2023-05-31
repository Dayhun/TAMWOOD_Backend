<?php

class Section {
    private int $sectionId;
    private string $semester;
    private string $instructorName;
    private int $courseId;

    public function getSectionId(): int {
        return $this->sectionId;
    }

    public function setSectionId(int $sectionId) {
        $this->sectionId = $sectionId;
    }

    public function getSemester(): string {
        return $this->semester;
    }

    public function setSemester(string $semester) {
        $this->semester = $semester;
    }

    public function getInstructorName(): string {
        return $this->instructorName;
    }
    
    public function setInstructorName(string $instructorName) {
        $this->instructorName = $instructorName;
    }
}