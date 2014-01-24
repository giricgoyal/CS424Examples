<!-- ######################################################
	Author : Giric Goyal 

	Illustration of:
		- working with mysql database, php and javascript
		- plotting on maps
	
###########################################################-->

<?php
	// this is just the back end (server side).
	// First the php script executes at server side.
	// After completion, php calls the html at client side.
	
	// Note: The page is named as "index.php"
	// "index" allows you to ommit the page name in the URL.
	// "http://localhost/webTest" is same as "http://localhost/webTest/index.php"
	// ".php" specifies the type of page. Should be ".php" and not ".html"

	// Container class (datastructure to hold data from the database)
	class Container {
		// public data members
		public $name = "";
		public $lat = 0.0;
		public $lon = 0.0;

		// constructor
		function __construct($name, $lat, $lon) {
			$this->name = $name;
			$this->lat = $lat;
			$this->lon = $lon;
		}
	}

	// define connection parameters

	$host = "localhost";
	$userName = "root";
	$pass = "";
	$dbName = "mapTest";

	// create connecton
	$conn = mysqli_connect($host, $userName, $pass);

	// check connection
	if (mysqli_connect_errno()) {
		echo "\nFailed to connect " . mysqli_connect_errno();
	}

	// create database if not exists
	$sql = "CREATE DATABASE IF NOT EXISTS " . $dbName;

	if (mysqli_query($conn, $sql)) {
		//echo "\ndatabase created";
	}
	else {
		echo "\nError : " . mysqli_error($conn);
	}

	// connect to database
	// create connecton
	$conn = mysqli_connect($host, $userName, $pass, $dbName);

	// check connection
	if (mysqli_connect_errno()) {
		echo "\nFailed to connect " . mysqli_connect_errno();
	}

	// create table
	$sql = "CREATE TABLE IF NOT EXISTS locations (name CHAR(30), lat FLOAT, lon FLOAT)";

	if (mysqli_query($conn, $sql)) {
		//echo "\ntable cretaed";
	}
	else {
		echo "\nError : " . mysqli_error($conn);
	}
	
	// delete all data from the table
	$sql = "DELETE FROM locations";
	if (mysqli_query($conn, $sql)) {
		//echo "\ntable cretaed";
	}
	else {
		echo "\nError : " . mysqli_error($conn);
	}

	// insert some hard coded values for illustration purposes.
	$sql = "INSERT INTO locations VALUES ";
	// hard coded data
	$lat = [28.6100,41.8500300,40.6700, -33.8600, 48.8567];
	$lon = [77.2300,-87.6500500,-73.9400, 151.2111, 2.3508];
	$name = ["New Delhi", "Chicago", "New York", "Sydney", "Paris"];
	$i = 0;	// counter
	// iterate over each index
	while($i < 5) {
		$sqlQ = $sql . "(\"" . $name[$i] . "\"," . $lat[$i] . "," . $lon[$i] . ")";
		if (mysqli_query($conn, $sqlQ)) {
			//echo "\ntable cretaed";
		}
		else {
			echo "\nError : " . mysqli_error($conn);
		}
		$i++;
	}	
	

	// INSERT INTO LOCATIONS VALUES ("NEW DELHI", 28.61, 77.23)

	// read from database
	// create Container class array to hold data
	$cArray = [];	// Use this cArray to access the lat lon; Accessed in HTML file (mapTest.html)
	$counter = 0; //counter
	$sql = "SELECT * FROM locations"; 
	// fetch the result 
	$result = mysqli_query($conn, $sql);
	// fetch arrayb from the result one by one
	while($row = mysqli_fetch_array($result)) {
		// populate the datastructure
		$cArray[$counter++] = new Container($row[0], $row[1], $row[2]);
	}

	// include the html page to display the front end (client side).
	include "mapTest.html";

?>

