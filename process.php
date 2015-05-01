<?php

/**
 * @author Ita Akademy
 * @copyright 2015
 */
	if(!empty($_GET['username']))
	{
		$username = $_GET['username'];
		echo "Hello $username";
	}
    else
	{
		echo "You don't input name";
	}
		

	echo "</br><a href='index.php'>Beck</a>"

?>