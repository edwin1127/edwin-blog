	<?php
	class Database {
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;
		public $error;
		//consistent object
	    //it creates a memeber or instant variables that are accesing
	    //the variables can only be access with the class
		//we want to store variables here
	    //using private is to only store the files in database and cant access the files any where else
	    //we also created global variables
	    public function __construct($host, $username, $password, $database) {
	    	$this->host = $host;
	    	$this->username = $username;
	    	$this->password = $password;
	    	$this->database = $database;
	    	//this uses to give you access to all the global variable
            //public means we can use it any file
            //it allows us to build objects of type database
            //we want to store the information within our object that way we have access to it through out our object.
		    //we need to assign the information to our global variables.
		     $this->connection = new mysqli($host, $username, $password);

     
    		 if($this->connection->connect_error) {
     	
     			die("<p>Error:" . $this->connection->connect_error . "</p>");
    		 }

     		$exists = $this->connection->select_db($database);

    		if(!$exists) {
     	
     			$query = $this->connection->query("CREATE DATABASE $database");
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
}
	   
	   public function openConnection() {
	   		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
	   		//this is a connection to link all the files
	    	//this function is to open a connection
	    	//A function is just a name we give to a block of code that can be executed whenever we need it
	    	 if($this->connection->connect_error) {
     			 die("<p>Error:" . $this->connection->connect_error . "</p>");
     			//were linking the connection
       		 }

	    }

	   public function closeConnection() {
	   		if (isset($this->connection)) {
	   			$this->connection->close();

	   		//is set is used for knowing the variable is working or not
	   		//this if statement is used for if they were to open the connection
	   	    //this is a function to close a connection

	   		}

	    }
	
       public function query($string) {
       		$this->openConnection();
        //this is going to execute our database
       	//what the line openconnection does is that it opens all the lines that are stored in the open functionS
       	//the string could be located in a variable
       		$query =$this->connection->query($string);
            if (!$query) {
            	$error = $this->connection->error;
            }
            //if stkatements only run when there true
            $query = $this->connection->query($string); //simplify the post

       		$this->closeConnection();

       		return $query;
       		//we want to return our answer true or false
        }
  
	}


	