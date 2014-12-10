	<?php
	require_once(__DIR__ ."/../model/config.php");
	//were repeating th steps that we did before
	//we use the .. to get out of the view
    ?>

	<h1>Register</h1>
	<!--a form to indicate its a register-->

	<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<!--were using method to send information to a certain file-->
	    <div>
			<label for="email">Email:</label>
			<input type="text" name="email /">
			<!--this labels just for email-->
		</div>

		<div>
			<label for="username">Username: </label>
			<input type="text" name="username" />
			<!--this is just for a username-->
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" />
			<!--were inputting the type password because we dont want to show the users the passowrd-->
        </div>
		
		<div>
			<button type="submit">Submit</button>
			<!--this is a button submit-->                                                            
		</div>
		
	
	</form>