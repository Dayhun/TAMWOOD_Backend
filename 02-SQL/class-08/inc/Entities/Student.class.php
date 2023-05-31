<?php

class Student {
    private int $studentId;
    private string $name;
    private string $email;
    private int $age;
    private string $dateOfBirth;

    public int getStudentId() : int {
        return $this->studentId;
    }

    public function setStudentId(int $studentId) {
        $this->studentId = $studentId;
    }

    public string getName() : string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public string getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public int getAge() : int {
        return $this->age;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }

    public string getDateOfBirth() : string {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }
}