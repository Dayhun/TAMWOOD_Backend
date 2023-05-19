<!-- Create our own Object -->
<!-- 3 kinds of object : public, private, protected -->
<!-- public : everybody can accese to it
private : everybody can't accese to it
protected :  -->
<?php
    // 8 attributes
    class Employee {
        private int $id;
        private string $name;
        private float $salary;
        private string $email;
        private string $position;
        private string $picture;
        private string $username;
        private string $password;

        // document
        /**
         * @param int id
         * @param string name
         * @param float salary
         * @param string email
         * @param string position
         * @param string picture
         * @param string username
         * @param string password 
         */
        // everytime create the object, set the rule how to create the object
        function __construct( // order is important
            int $id,
            string $name,
            float $salary,
            string $email,
            string $position,
            string $picture,
            string $username,
            string $password
        ){  
            $this->id = $id; //id from this class will get constructor $id
            $this->name = $name;
            $this->salary = $salary;
            $this->email = $email;
            $this->position = $position;
            $this->picture = $picture;
            $this->username = $username;
            $this->password = $password;
        }

        // get method : return the data in your attribute
        // document
        /**
         * @return string name
         */
        public function getName() : string { // which data type will be returned
            return $this->name;
        }

        // set method : change the data, give another value to it
        /**
         * @param string name
         */
        // when we call the method and if its blank, newName's default value will be show that we wrote
        public function setName(string $newName="unknown") : void { // if its not return anything: void
            $this->name = $newName;
        }

        /**
         * @return float salary
         */
        public function getSalary() : float {
            return $this->salary;
        }

        /**
         * @param float salary
         */
        public function setSalary(float $newSalary) : void {
            $this->salray = $newSalary;
        }
    }