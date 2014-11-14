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
	   		if (isset($this->connection)) {
	   			$this->connection->();

	   		//is set is used for knowing the variable is working or not
	   		//this if statement is used for if they were to open the connection
	   	    //this is a function to close a connection

	   		}

	    }
	
       public function query($string) {
       		$this->openConnection();

       		$query = $this->connection->query($string);
        //this is going to execute our database
       	//what the line openconnection does is that it opens all the lines that are stored in the open functionS
       	//the string could be located in a variable
       		$this->closeConnection();

       		return $query;
       		//we want to return our answer true or false
        }
  
	}


	