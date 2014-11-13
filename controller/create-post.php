<?php 
    require_once(__DIR__ . "/../model/database.php");
    //we use .. to get out of the folder

    $connection = new mysqli($host, $username, $password, $database);
    //were connecting all the files together

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post  = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this is a post where we send in an information
    //this post is unique to php
    //this is so we can filter the input
    $query = $connection->query("INSERT INTO posts SET title = '$title', post='$post'");
    //were using single quoytes to make sure it sends
    //we use insert into posts to set the title & post
    //were inserting the posts
    //setting certain values

    if ($query) {
    	echo "<p>Successfully interested post : $title</p>";
    } else {
    	echo "<p>$connection->errror</p>";
    }
    //were using this to make it either true or false and make it succesfull
    //if its true your succesfull
    //if its false we have a problem


    $connection->close();


	//this folder is to create a post and push it to our data base 