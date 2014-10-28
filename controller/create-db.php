<?php
     require_once( __DIR__ ."/../model/database.php");

     $connection = new mysqli($host, $username, $password);

     
     if($connection->connect_error) {
     	
     	die("Error:" . $connection->connect_error);
     }

     $exists = $connection->select_db($database);

     if(!$exists) {
     	
     	$query = $connection->query("CREATE DATABASE $database");
     	//sends command to our server
     	//it executes the info and it stores it in the jquery
     	if ($query) {
     		//we want to output a messgae so therefore we need $query
     		echo "Successfully created database: " . $database;
     		//the dot is used to congaginate
     	}

     }
    
     $connection->close();
