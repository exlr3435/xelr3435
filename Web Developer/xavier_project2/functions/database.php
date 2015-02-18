<?php

function connect_db() {
	global $dbhost,$dbuser,$dbpass,$dbname,$dblink;
	
	if ($dblink = mysqli_connect($dbhost,$dbuser,$dbpass)) {
		if (mysqli_select_db($dblink, $dbname)) {
			return true;
		} else {
			die("Couldn't select database");
		}
	} else {
		die("Couldn't connect to server");
	}
}

//Connect to database
connect_db();

function query($sql) {
	global $dblink;
	
	if($result = mysqli_query($dblink ,$sql)) {
		return $result;
	} else {
		return false;
	}
}