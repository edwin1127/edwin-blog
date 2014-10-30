<?php
     require_once( __DIR__ ."/../model/database.php");

     $connection = new mysqli($host, $username, $password);

     
     if($connection->connect_error) {
     	
     	die("<p>Error:" . $connection->connect_error . "</p>");
     }

     $exists = $connection->select_db($database);

     if(!$exists) {
     	
     	$query = $connection->query("CREATE DATABASE $database");
     	//sends command to our server
     	//it executes the info and it stores it in the jquery
     	if ($query) {
     		//we want to output a messgae so therefore we need $query
     		echo "<p>Successfully created database:" . $database . "</p>";
     		//the dot is used to congaginate
     	}
     }

     else{
     	echo "<p>Database already exists.</p>";
     	//this is only going to be executed when the database already exist
     }

     $query = $connection->query("CREATE TABLE posts ("
     	. "id int(11) NOT NULL AUTO_INCREMENT," 
     	. "title varchar(255) NOT NULL,"
     	. "post text NOT NULL," 
     	. "PRIMARY KEY (id))");
     //were refrecing our connection variable
     //not null makes the id to not be known
     //were telling the variable on the bottom is the primary key
     //the query is creating the data table there on top

     if ($query) {
     	echo "<p>Successfully created table: posts</p>";
     }
     else{
     	echo "<p>$connection->error</p>";
     	//were telling it that its false
     	//were doing paragraph tags that way the lines wont be together
     }
    
     $connection->close();
     
