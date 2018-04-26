<?php


    // Searches database for specified value or returns an error if nothing found

    require 'employee_arrays.php';

    function searchDatabase($val){
        global $employeeDatabase;
        foreach($employeeDatabase as $employee) {
           if (in_array($val, $employee)){
                echo $val . " is in the database.<br>";
            } else {
               echo "No search results found for " . $val . ".<br>";
           }
        }
    }

    searchDatabase('Janice');

?>