<?php

DEFINE ('DB_USER', 'root');

DEFINE ('DB_PASSWORD', 'mysql');

DEFINE ('DB_HOST', '127.0.0.1');

DEFINE ('DB_NAME', 'quickData');


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

OR die('Could not connect to MySQL: ' .
	mysqli_connect_error());

?>
