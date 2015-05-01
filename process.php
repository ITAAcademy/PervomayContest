<?php

/**
 * @author Ita Akademy
 * @copyright 2015
 */


    $username = $_GET['username'];
	if(!empty($username))
	{
		echo "Hello $username";
	}
    else
	{
		echo "You don't input name";
	}
		

	echo "</br><a href='index.php'>Beck</a>"

?>