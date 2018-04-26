<?php


    //  Pushes new employee array into `employeeDatabase` array and then adds that new employee to database.
    
    require 'employee_arrays.php';

    function addToDatabase($val) {
        include 'connection.php';
        global $employeeDatabase;
        array_push($employeeDatabase, $val);
        
        try {
 
           foreach($employeeDatabase as $employee) {
            $firstName = $employee['firstName'];
            $lastName = $employee['lastName'];
            $jobTitle = $employee['jobTitle'];
            $salary = $employee['salary'];
            $department = $employee['department'];
            $co_email = $employee['co_email'];
               
            $sql_insert = "insert into employees(firstName, lastName, jobTitle, salary, department, co_email) VALUES ('$firstName', '$lastName', '$jobTitle', '$salary', '$department', '$co_email')";
            
            $connection->query($sql_insert);
               
            echo "<h3 style=\"color: green;\">Record for " .  "<i>" . $firstName . " " . $lastName . "</i>" . " added successfully!</h3><br>";
            
           }
            
        } catch (PDOException $e) {
               
            echo "<h3 style=\"color: red;\">Unable to submit request: </h3>" . $e->getMessage() . "<br>";   
               
           }
        }


     //***  ONLY CALL ONCE PER PROGRAM ***//
       
      // addToDatabase($Felix);



?>
