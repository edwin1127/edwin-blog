 <?php
 	 require_once(__DIR__ . "/database.php");

 	 session_start();
    
     $path ="/edwin-blog/";
     //this is going to link all the pages
     $host = "localhost";
     $username = "root";
     $password = "root";
     $database = "blog_db";
     //these are connecting to the other files 
     //these files our to store our variables
     if (!isset($_SESSION ["connection"])) {
     	$connection = new Database($host, $username, $password, $database);
     	$_SESSION["connection"] = $connection;
     }
     //this connects the other files to session

     