	<?php
		require_once(__DIR__ . "/../model/config.php");
		//were now connecting the files together

		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		//the sanitize part is incase we dont need anything it gets rid of it
		$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
		//were sanitizng variables that shouldnt be there
        
        echo $password;

        $salt = "$5$" . "rounds=5000$" . uniqid(nt_rand(), true) . "$";
        //salt makes the passwprd more accesible in any way
        // the "$" sign tells it to use 5000 rounds
        echo $salt; 
