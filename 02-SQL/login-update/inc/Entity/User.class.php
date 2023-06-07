<?php

class User {

    private int $id;
    private string $fName;
    private string $lName;
    private string $username;
    private string $password;
    private string $email;
    private int $age;
    private string $gender;

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getFName() {
		return $this->fName;
	}

	public function setFName(string $fName) {
		$this->fName = $fName;
	}

	public function getLName() {
		return $this->lName;
	}

	public function setLName(string $lName) {
		$this->lName = $lName;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername(string $username) {
		$this->username = $username;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge(int $age) {
		$this->age = $age;
	}

	public function getGender() {
		return $this->gender;
	}

	public function setGender(string $gender) {
		$this->gender = $gender;
	}
    

    //Verify the password
    function verifyPassword(string $passwordToVerify) : bool {
        //password comparator
        $equal = false;
        //Return a boolean based on verifying if the password given is correct for the current user
        if(password_verify($passwordToVerify,$this->getPassword())){
            //set password comparator true
            $equal = true;
        } else {
            //set password comparator false
            $equal = false;
        }
        //return the password comparator
        return $equal;
    }
}



?>