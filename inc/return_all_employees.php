<?php

    // Returns all employees and their attributes


    function returnAllEmployees(){
        
        $connection = mysqli_connect("localhost", "gabby", "Botan555", "company_db");

        if (mysqli_connect_errno()){
            
              echo "Failed to connect to MySQL: " . mysqli_connect_error();

              }

                $sql="SELECT * FROM employees";
                $result=mysqli_query($connection, $sql);
            // Associative array
                $max = count($result);
        
               foreach($result as $r){
                    printf ("<h4 style=\"font-family: Helvetica; color: dimgray;\"><br>%s %s<br> %s<br> %s<br> %s<br> %s<br><br></h4>", "Name: " . $r["firstName"], $r["lastName"], "Job Title: " . $r["jobTitle"], "Email Address: " . $r["co_email"], "Salary: " . $r["salary"], "Dept.: " . $r["department"]);
               }
                //exit;

                // Free result set
        
                mysqli_free_result($result);
        
                mysqli_close($connection); 
                
          }
                
            
    returnAllEmployees();

?>