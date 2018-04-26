<?php

    $host = '127.0.0.1';

    $username = 'root';

    $password = '';

    $database = 'techCo';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection) {
        
        echo "<h1 style=\"color: green;\">Connection was successful!</h1>";

    } else {
        
        echo "<h1 style=\"color: red;\">Connection was not successful: </h1>" . mysqli_error($e); 
        
        die();
    }
?>
