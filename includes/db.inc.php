
<?php

	$dbhost='localhost';
	$dbusername='root';
	$dbname='vrms';
	$dbpwd='';
	$link=mysqli_connect($dbhost,$dbusername,$dbpwd,$dbname);
	if(mysqli_connect_error())
		die("Connection Failed".mysqli_connect_error());
