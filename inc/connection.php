<?php

    try {
    
        $connection = new PDO('mysql:host=localhost;dbname=company_db;charset=utf8', 'gabby', 'Botan555');
        
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
    
        echo "Failed to connect to database: " . $e->getMessage();
        
    }

?>