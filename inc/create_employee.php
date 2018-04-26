
<?php

    require 'employee_arrays.php';

    $raw_firstName = $_POST['firstname'];
    $raw_lastName = $_POST['lastname'];
    $raw_jobTitle = $_POST['jobtitle'];
    $raw_salary = $_POST['salary'];
    $raw_email = $_POST['email'];

    require 'clean_data.php';

    require 'assign_department';

    function processEmployee() {
        // Takes the input variables and combines them into an associative array.
        // Names the array as `first intial+last name` of employee. ????
        // Sends the array to the `employee_arrays.php` file to be pushed to $employeeDatabase.
        // From there, the new array gets passed through the `addToDatabase()` function.  
    }

    

?>