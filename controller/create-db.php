<?php
     require_once( __DIR__ ."/../model/config.php");

     $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
     	. "id int(11) NOT NULL AUTO_INCREMENT," 
     	. "title varchar(255) NOT NULL,"
     	. "post text NOT NULL,"
          . "DateTime datetime NOT NULL ," 
     	. "PRIMARY KEY (id))");
     //were refrecing our connection variable
     //not null makes the id to not be known
     //were telling the variable on the bottom is the primary key
     //the query is creating the data table there on top

     if ($query) {
     	echo "<p>Successfully created table: posts</p>";
     }
     else{
     	echo "<p>" . $_SESSION["connection"]->error . "</p>";
     	//were telling it that its false
     	//were doing paragraph tags that way the lines wont be together
     }

     $query = $_SESSION["connection"]->query("CREATE TABLE users ("
          . "id int(11) NOT NULL AUTO_INCREMENT,"
          . "username varchar(30) NOT NULL,"
          . "email varchar(50) NOT NUll,"
          . "password char(128) NOT NULL,"
          . "salt char(128) NOT NULL,"
          . "PRIMARY KEY(id))");
     //were using not null because the spaces cant be blank
     //were storing the files in this query
     //were storing the user
     if($query) {
          echo "<p>Successfully created table: users</p>";
          //were checkignf the query is working
     }
     else{
          echo"<p>" . $_SESSION["connection"]->error . "</p>";
     }
     
      
    
     
