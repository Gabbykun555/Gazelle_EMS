
<?php

class employees{
    public $id;
    public $firstName;
    public $lastName;
    public $salary;
    public $jobTitle;
   // public $startdate;
    
    public function __construct($id, $firstName, $lastName, $salary, $jobTitle) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
        $this->jobTitle = $jobTitle;
   // $this->startdate = $startdate;
    }
    
    public function getEmployeeFullName($firstName, $lastName){
        echo $this->firstName . ' ' . $this->lastName;
    }
    
    public function getHourlyWage($salary){
        $monthlyWage = round($this->salary / 12);
        $weeklyWage = round($monthlyWage / 4);
        $hourlyWage = round($weeklyWage / 40);
        echo $hourlyWage;
    }
    
    public function getStartDate {
        echo $this->startdate;
    }
}

$Sarah = new employees(1, 'Sarah', 'Johnson', 76000, 'Manager');

echo $Sarah->getEmployeeFullName() . "<br>";

echo $Sarah->getHourlyWage() . "<br>";

var_dump($Sarah); 

?>
