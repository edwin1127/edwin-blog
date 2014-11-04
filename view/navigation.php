  <?php 
      require_once(__DIR__ . "/../model/config.php");
      //we use "/../ to get out the view folder"
  ?>
 <nav>
   <ul>
 		<li>
 			<a href="<?php echo $path . "post.php"?>">Blog Post Form</a>
 			<!-- we use ".."" to get out of the folder-->
 			<!-- now were telling to look at the web server-->
 		</li>
 	</ul>
 </nav>