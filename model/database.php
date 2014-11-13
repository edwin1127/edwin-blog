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
	    	//this uses to give you access to all the global variables

	    }
	    //public means we can use it any file
	}
	