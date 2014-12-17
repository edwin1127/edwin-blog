  <?php 
      require_once(__DIR__ . "/../model/config.php");
      require_once(__DIR__ . "/../controller/login.verify.php");
      //we use "/../ to get out the view folder"
      if (!authenticateUser()) {
      	   header("Location:" . $path . "index.php");
      	   die();
      }
  ?>
 <nav>
   <ul>
 		<li>
 			<a href="<?php echo $path . "post.php"?>">Blog Post Form</a>
 			<!--were telling it to connect to the same path in the post.php server -->
 			<!-- now were telling to look at the web server-->
 		</li>
 	</ul>
 </nav>