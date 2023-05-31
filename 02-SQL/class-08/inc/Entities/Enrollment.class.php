<?php

class Enrollment {
    private int $enrollmentId;
    private int $studentId;
    private int $sectionId;
    private string $outcome;

    public function getEnrollmentId(): int {
        return $this->enrollmentId;
    }

    public function setEnrollmentId(int $enrollmentId) {
        $this->enrollmentId = $enrollmentId;
    }

    public function getStudentId(): int {
        return $this->studentId;
    }

    public function setStudentId(int $studentId) {
        $this->studentId = $studentId;
    }

    public function getSectionId(): int {
        return $this->sectionId;
    }

    public function setSectionId(int $sectionId) {
        $this->sectionId = $sectionId;
    }
    
    public function getOutcome(): string {
        return $this->outcome;
    }

    public function setOutcome(string $outcome) {
        $this->outcome = $outcome;
    }
}