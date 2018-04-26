
<?php

    require 'employee_arrays.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $jobTitle = $_POST['jobtitle'];
    $salary = $_POST['salary'];
    $email = $_POST['email'];

//    function grabValue(){
//        if(isset($_POST['jobtitle'])) {
//            $jobTitle = $_POST['jobTitle'];
//            echo $jobTitle;
//        }         
//    }
//
//    grabValue();

    echo $firstName . "<br>";
    echo $lastName . "<br>";
    echo $jobTitle . "<br>";
    echo $salary . "<br>";
    echo $email . "<br>";

?>