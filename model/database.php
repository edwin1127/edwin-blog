	<?php
	class Database {
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database
		//we want to store variables here
	    //using private is to only store the files in database and cant access the files any where else
	    //we also created global variables
	    public function__construct($host, $username, $password, $database) {
	    	$this->host = $host
	    	$this->username = $username
	    	$this->password = $password
	    	$this->database = $database
	    	//this uses to give you access to all the global variable
            //public means we can use it any file
	    }
	   
	   public function openConnection() {
	   		this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
	   		//this is a connection to link all the files
	    	//this function is to open a connection
	    	 if($this->connection->connect_error) {
     			 die("<p>Error:" . $this->connection->connect_error . "</p>");
     			//were linking the connection
       		 }

	    }

	   public function closeConnection() {
	   	//this is a function to close a connection

	    }
	
       public function query($string) {
       	//the string could be located in a variable
        }
  
	}


	