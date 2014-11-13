<?php
	require_once(__DIR__ ."/../model/config.php");
	//were repeating th steps that we did before
	//we use the .. to get out of the view
?>

<h1>CREATE BLOG POST </h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">

<!--the form is to send information and recieve information-->
<!-- this is to help reach certain files-->
    <div>
        <label for="title"> Title: </label>
        <input type="text" name="title" />
    <!--the input is a box where you can type in the box-->
	<!--this div is mainly going to be for title-->
    </div>

    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    <!-- this is going to be mainly for post-->
    </div>

    <div>
    	<button type="submit">Submit</button>
    	<!--here were accesing a button-->
    </div>
	<!--this form file is goign to use some data and will send it to another server-->
</form>