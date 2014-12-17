	<?php

	require_once(__DIR__ . "/../model/comfig.php");

	function aunthicateUser () {
		if (!isset($_SESSION["aunthicated"])) {
			return false;
	}
	else{
		
		if ($_SESSION["aunthicated"] !=true) {
			return false;
		}
			else{
				return true;
			}
	    }
	}